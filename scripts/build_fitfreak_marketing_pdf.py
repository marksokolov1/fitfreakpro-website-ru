from __future__ import annotations

import math
import textwrap
from pathlib import Path

from PIL import Image, ImageDraw, ImageFilter
from reportlab.lib import colors
from reportlab.lib.pagesizes import landscape
from reportlab.lib.utils import ImageReader
from reportlab.pdfbase import pdfmetrics
from reportlab.pdfbase.ttfonts import TTFont
from reportlab.pdfgen import canvas


ROOT = Path(__file__).resolve().parents[1]
PACKAGE = Path("/Users/marksokolov/Desktop/FitFreak_Pro_Marketing_Presentation_RU_Codex_Package_v3")
SCREENSHOTS = PACKAGE / "assets" / "screenshots"
MEDIA = Path("/Users/marksokolov/Desktop/FitFreak Pro LLC/Media/FitFreak linkedin media")
OUT = ROOT / "output" / "pdf" / "FitFreak_Pro_Marketing_Presentation_RU_enhanced.pdf"
TMP = ROOT / "tmp" / "pdfs" / "fitfreak_enhanced_assets"

W, H = 960, 540
PAGE_SIZE = (W, H)

BG = colors.HexColor("#050706")
BG2 = colors.HexColor("#071109")
PANEL = colors.HexColor("#111A13")
PANEL2 = colors.HexColor("#162117")
LINE = colors.HexColor("#2A3929")
LIME = colors.HexColor("#B9FF2F")
LIME2 = colors.HexColor("#78FF54")
CYAN = colors.HexColor("#7DEAFF")
YELLOW = colors.HexColor("#FFE66D")
WHITE = colors.HexColor("#F4F7EF")
MUTED = colors.HexColor("#A8B1A2")
DIM = colors.HexColor("#6E7A68")
INK = colors.HexColor("#061006")


def register_fonts() -> None:
    regular = "/System/Library/Fonts/Supplemental/Arial Unicode.ttf"
    bold = "/System/Library/Fonts/Supplemental/Arial Bold.ttf"
    fallback = "/System/Library/Fonts/Supplemental/Arial.ttf"
    pdfmetrics.registerFont(TTFont("Fit", regular))
    pdfmetrics.registerFont(TTFont("FitBold", bold if Path(bold).exists() else fallback))


def ytop(y: float, h: float = 0) -> float:
    return H - y - h


def hex_to_rgba(value: str, alpha: int = 255) -> tuple[int, int, int, int]:
    value = value.strip("#")
    return tuple(int(value[i : i + 2], 16) for i in (0, 2, 4)) + (alpha,)


def make_phone_asset(src: Path, name: str, crop: tuple[float, float, float, float] | None = None) -> Path:
    TMP.mkdir(parents=True, exist_ok=True)
    out = TMP / f"{name}.png"
    if out.exists() and out.stat().st_mtime > src.stat().st_mtime:
        return out

    img = Image.open(src).convert("RGB")
    if crop:
        l, t, r, b = crop
        img = img.crop((int(img.width * l), int(img.height * t), int(img.width * r), int(img.height * b)))

    screen_w, screen_h = 390, 780
    scale = max(screen_w / img.width, screen_h / img.height)
    resized = img.resize((math.ceil(img.width * scale), math.ceil(img.height * scale)), Image.Resampling.LANCZOS)
    left = (resized.width - screen_w) // 2
    top = (resized.height - screen_h) // 2
    screen = resized.crop((left, top, left + screen_w, top + screen_h))

    radius = 42
    screen_mask = Image.new("L", (screen_w, screen_h), 0)
    ImageDraw.Draw(screen_mask).rounded_rectangle((0, 0, screen_w, screen_h), radius=radius, fill=255)

    frame_w, frame_h = screen_w + 34, screen_h + 34
    shadow = Image.new("RGBA", (frame_w + 38, frame_h + 42), (0, 0, 0, 0))
    sd = ImageDraw.Draw(shadow)
    sd.rounded_rectangle((20, 18, 20 + frame_w, 18 + frame_h), radius=54, fill=(0, 0, 0, 180))
    shadow = shadow.filter(ImageFilter.GaussianBlur(13))

    phone = Image.new("RGBA", shadow.size, (0, 0, 0, 0))
    phone.alpha_composite(shadow)
    d = ImageDraw.Draw(phone)
    x, y = 12, 8
    d.rounded_rectangle((x, y, x + frame_w, y + frame_h), radius=55, fill=hex_to_rgba("151E17"), outline=hex_to_rgba("354435"), width=3)
    d.rounded_rectangle((x + 15, y + 15, x + 15 + screen_w, y + 15 + screen_h), radius=radius, fill=(0, 0, 0, 255))
    phone.paste(screen, (x + 15, y + 15), screen_mask)
    d.rounded_rectangle((x + 160, y + 22, x + 260, y + 30), radius=5, fill=(8, 10, 8, 180))
    phone.save(out)
    return out


def wrap_lines(text: str, font: str, size: float, width: float) -> list[str]:
    lines: list[str] = []
    for para in text.split("\n"):
        words = para.split()
        line = ""
        for word in words:
            trial = word if not line else f"{line} {word}"
            if pdfmetrics.stringWidth(trial, font, size) <= width:
                line = trial
            else:
                if line:
                    lines.append(line)
                if pdfmetrics.stringWidth(word, font, size) > width:
                    chunk = ""
                    for ch in word:
                        trial_chunk = chunk + ch
                        if pdfmetrics.stringWidth(trial_chunk, font, size) <= width:
                            chunk = trial_chunk
                        else:
                            if chunk:
                                lines.append(chunk)
                            chunk = ch
                    line = chunk
                else:
                    line = word
        if line:
            lines.append(line)
    return lines


def draw_text(
    c: canvas.Canvas,
    text: str,
    x: float,
    y: float,
    w: float,
    size: float,
    color=WHITE,
    font: str = "Fit",
    leading: float | None = None,
    max_lines: int | None = None,
    align: str = "left",
) -> float:
    leading = leading or size * 1.18
    lines = wrap_lines(text, font, size, w)
    if max_lines and len(lines) > max_lines:
        lines = lines[:max_lines]
        while lines and pdfmetrics.stringWidth(lines[-1] + "...", font, size) > w:
            lines[-1] = lines[-1][:-1]
        lines[-1] = lines[-1].rstrip() + "..."
    c.setFont(font, size)
    c.setFillColor(color)
    for idx, line in enumerate(lines):
        yy = H - y - size - idx * leading
        if align == "center":
            c.drawCentredString(x + w / 2, yy, line)
        elif align == "right":
            c.drawRightString(x + w, yy, line)
        else:
            c.drawString(x, yy, line)
    return len(lines) * leading


def rounded(c: canvas.Canvas, x: float, y: float, w: float, h: float, r: float, fill, stroke=None, sw=1) -> None:
    c.setFillColor(fill)
    if stroke:
        c.setStrokeColor(stroke)
        c.setLineWidth(sw)
        c.roundRect(x, ytop(y, h), w, h, r, fill=1, stroke=1)
    else:
        c.roundRect(x, ytop(y, h), w, h, r, fill=1, stroke=0)


def line(c: canvas.Canvas, x1: float, y1: float, x2: float, y2: float, color=LINE, sw=1) -> None:
    c.setStrokeColor(color)
    c.setLineWidth(sw)
    c.line(x1, H - y1, x2, H - y2)


def background(c: canvas.Canvas, slide_no: int, mode: str = "base") -> None:
    c.setFillColor(BG)
    c.rect(0, 0, W, H, fill=1, stroke=0)

    if mode == "title":
        banner = ImageReader(str(MEDIA / "Banner.png"))
        c.drawImage(banner, 0, 0, W, H, preserveAspectRatio=True, anchor="c", mask="auto")
        c.setFillColor(colors.Color(0, 0, 0, alpha=0.54))
        c.rect(0, 0, W, H, fill=1, stroke=0)
    else:
        c.setFillColor(BG2)
        p = c.beginPath()
        p.moveTo(700, H)
        p.lineTo(W, H)
        p.lineTo(W, 0)
        p.lineTo(760, 0)
        p.close()
        c.drawPath(p, fill=1, stroke=0)
        for i, alpha in enumerate([0.32, 0.22, 0.14]):
            c.setStrokeColor(colors.Color(0.72, 1.0, 0.18, alpha=alpha))
            c.setLineWidth(1.4 - i * 0.25)
            c.line(710 + i * 35, H - 28 - i * 40, W + 30, H - 115 - i * 60)
        c.setStrokeColor(colors.Color(0.72, 1.0, 0.18, alpha=0.11))
        c.setLineWidth(1)
        c.arc(-90, H - 150, 230, H + 170, 292, 132)

    c.setStrokeColor(colors.Color(0.72, 1.0, 0.18, alpha=0.42))
    c.setLineWidth(1.5)
    c.line(56, 506, 185, 506)
    c.setFillColor(DIM)
    c.setFont("Fit", 7.4)
    c.drawRightString(W - 58, 30, f"{slide_no:02d} / 15")


def pill(c: canvas.Canvas, text: str, x: float, y: float, w: float, color=LIME) -> None:
    rounded(c, x, y, w, 27, 7, color)
    draw_text(c, text, x, y + 7.8, w, 8.5, INK, "FitBold", align="center")


def title(c: canvas.Canvas, heading: str, sub: str | None = None, w: float = 650, x: float = 56, y: float = 48) -> None:
    draw_text(c, heading, x, y, w, 27, WHITE, "FitBold", leading=31, max_lines=2)
    if sub:
        draw_text(c, sub, x, y + 78, min(w, 650), 12.4, MUTED, "Fit", leading=17, max_lines=3)


def footer_source(c: canvas.Canvas, text: str) -> None:
    draw_text(c, text, 56, 501, 720, 6.8, DIM, "Fit", max_lines=1)


def draw_phone(c: canvas.Canvas, asset: str, x: float, y: float, h: float) -> None:
    p = ImageReader(str(PHONES[asset]))
    iw, ih = Image.open(PHONES[asset]).size
    w = h * iw / ih
    c.drawImage(p, x, ytop(y, h), w, h, mask="auto")


def feature_row(c: canvas.Canvas, head: str, body: str, x: float, y: float, accent=LIME) -> None:
    c.setFillColor(accent)
    c.circle(x + 5, H - y - 8, 4.5, fill=1, stroke=0)
    draw_text(c, head, x + 24, y, 240, 15.5, WHITE, "FitBold", max_lines=1)
    draw_text(c, body, x + 265, y + 2, 500, 11.2, MUTED, "Fit", max_lines=2)


def stat_block(c: canvas.Canvas, number: str, label: str, x: float, y: float, w: float, color=LIME) -> None:
    draw_text(c, number, x, y, w, 31, color, "FitBold", align="center", max_lines=1)
    draw_text(c, label, x + 4, y + 44, w - 8, 10.1, WHITE, "Fit", leading=13, align="center", max_lines=3)


def bar(c: canvas.Canvas, label: str, value: str, pct: float, x: float, y: float, w: float) -> None:
    draw_text(c, label, x, y - 1, 130, 11.6, MUTED, "Fit", align="right", max_lines=1)
    rounded(c, x + 150, y, w - 230, 18, 4, colors.HexColor("#253025"))
    rounded(c, x + 150, y, (w - 230) * pct, 18, 4, LIME)
    draw_text(c, value, x + w - 68, y - 1, 70, 11.6, WHITE, "FitBold", align="right", max_lines=1)


def small_card(c: canvas.Canvas, x: float, y: float, w: float, h: float, title_text: str, body: str, accent=LIME) -> None:
    rounded(c, x, y, w, h, 9, PANEL, LINE, 1)
    draw_text(c, title_text, x + 18, y + 18, w - 36, 14.5, accent, "FitBold", max_lines=2)
    draw_text(c, body, x + 18, y + 64, w - 36, 10.5, MUTED, "Fit", leading=14, max_lines=4)


def slides(c: canvas.Canvas) -> None:
    # 1
    background(c, 1, "title")
    pill(c, "ПРЕЗЕНТАЦИЯ ДЛЯ ТРЕНЕРОВ", 58, 58, 205)
    draw_text(c, "FitFreak Pro", 58, 119, 430, 31, LIME, "FitBold", max_lines=1)
    draw_text(c, "Больше клиентов.\nМеньше ручного хаоса.", 58, 170, 520, 40, WHITE, "FitBold", leading=45)
    draw_text(c, "Система для тренеров, которые хотят вести онлайн- и гибридных клиентов через понятный app-процесс: программы, видео, питание, прогресс и оплата через ЮKassa.", 62, 286, 500, 15, WHITE, "Fit", leading=20, max_lines=4)
    rounded(c, 64, 398, 252, 43, 8, LIME)
    draw_text(c, "Начать бесплатно как тренер", 64, 412, 252, 12, INK, "FitBold", align="center", max_lines=1)
    draw_phone(c, "library", 620, 66, 405)
    draw_phone(c, "client", 780, 105, 350)
    c.showPage()

    # 2
    background(c, 2)
    title(c, "Рынок уже ждет цифрового коучинга", "Для тренера это не абстрактный тренд, а ожидание клиента: план должен быть понятен, доступен и собран в одном месте.", 690)
    line(c, 56, 158, 895, 158, LIME, 1.1)
    stat_block(c, "+12%", "прогноз роста занятости фитнес-тренеров и инструкторов, 2024-2034", 82, 205, 150, YELLOW)
    stat_block(c, "74,2K", "средних ежегодных вакансий в категории fitness trainers and instructors", 290, 205, 160, LIME)
    stat_block(c, "#4", "mobile exercise apps среди топ-трендов ACSM 2026", 510, 205, 140, CYAN)
    stat_block(c, "58%", "малых бизнесов используют четыре или больше технологические платформы", 720, 205, 165, LIME2)
    rounded(c, 103, 397, 755, 67, 9, PANEL, LINE, 1)
    draw_text(c, "Вывод для тренера: цифровой опыт уже влияет на доверие, удержание и способность вести больше клиентов без расползания процессов.", 132, 416, 700, 15.5, WHITE, "FitBold", align="center", max_lines=2)
    footer_source(c, "Источники: U.S. BLS; ACSM Fitness Trends 2026; U.S. Chamber 2025; Grand View Research.")
    c.showPage()

    # 3
    background(c, 3)
    title(c, "Главный конкурент - текущий ручной процесс", "В российской версии не нужно сравниваться с зарубежными платформами. Настоящая альтернатива для тренера - мессенджеры, таблицы, PDF, заметки и ссылки.", 720)
    center = (480, 286)
    items = [
        ("таблицы", 130, 186), ("видео-ссылки", 690, 184), ("PDF", 105, 340),
        ("чаты", 720, 348), ("питание", 295, 414), ("фото прогресса", 570, 420),
        ("заметки", 405, 180),
    ]
    for idx, (label, x, y) in enumerate(items):
        rounded(c, x, y, 155, 44, 8, PANEL, LIME if idx % 2 == 0 else CYAN, 0.8)
        draw_text(c, label, x, y + 14, 155, 11.5, WHITE, "FitBold", align="center", max_lines=1)
        line(c, x + 77, y + 22, center[0], center[1], DIM, 0.7)
    c.setFillColor(PANEL2)
    c.setStrokeColor(LIME)
    c.setLineWidth(1.5)
    c.circle(center[0], H - center[1], 62, fill=1, stroke=1)
    draw_text(c, "тренер\nмежду\nинструментами", center[0] - 58, center[1] - 31, 116, 14.5, WHITE, "FitBold", leading=17, align="center")
    draw_text(c, "Каждый новый клиент добавляет не только доход, но и повторяющуюся ручную нагрузку.", 135, 471, 690, 17.5, LIME, "FitBold", align="center", max_lines=1)
    footer_source(c, "Источник: FitFreak Pro Marketing & Competitive Strategy.")
    c.showPage()

    # 4
    background(c, 4)
    title(c, "10 минут в неделю быстро становятся днями", "Даже маленькая повторяющаяся задача - переслать ссылку, найти видео, уточнить таблицу - масштабируется вместе с клиентской базой.", 630)
    draw_text(c, "Пример: 10 минут ручной работы на клиента в неделю x 4 недели", 70, 170, 520, 16, WHITE, "FitBold", max_lines=1)
    bar(c, "10 клиентов", "6,7 ч / мес", 0.33, 70, 236, 495)
    bar(c, "20 клиентов", "13,3 ч / мес", 0.67, 70, 303, 495)
    bar(c, "30 клиентов", "20 ч / мес", 1.0, 70, 370, 495)
    rounded(c, 70, 442, 505, 55, 9, PANEL, LINE, 1)
    draw_text(c, "20 часов в месяц - это 2-3 рабочих дня, которые лучше вложить в клиентов, продажи, контент или восстановление.", 92, 458, 460, 13.5, WHITE, "FitBold", align="center", max_lines=2)
    draw_phone(c, "invite", 678, 101, 390)
    footer_source(c, "Расчет FitFreak Pro: 10 минут/клиент/неделя x 4 недели. Пример, не гарантия экономии.")
    c.showPage()

    # 5
    background(c, 5)
    title(c, "Рост для тренера - это больше управляемых клиентов", "FitFreak Pro не заменяет методику тренера. Он помогает повторять сильный процесс без пропорционального роста хаоса.", 690)
    steps = [
        ("1", "Контент создается один раз"),
        ("2", "План назначается быстрее"),
        ("3", "Клиент видит инструкции сам"),
        ("4", "Прогресс проверяется централизованно"),
    ]
    for i, (num, label) in enumerate(steps):
        x = 102 + i * 205
        c.setFillColor(LIME if i == 0 else PANEL)
        c.setStrokeColor(LIME)
        c.setLineWidth(1.5)
        c.circle(x + 38, H - 238, 38, fill=1, stroke=1)
        draw_text(c, num, x, 217, 76, 25, INK if i == 0 else WHITE, "FitBold", align="center", max_lines=1)
        draw_text(c, label, x - 28, 300, 132, 12.5, WHITE, "FitBold", align="center", max_lines=3)
        if i < 3:
            line(c, x + 89, 238, x + 158, 238, LIME, 4)
    rounded(c, 140, 423, 680, 64, 10, PANEL, LINE, 1)
    draw_text(c, "Если система возвращает 10-20 часов в месяц, это может стать временем для 1-3 дополнительных клиентов или более качественного сопровождения текущих.", 170, 439, 620, 14.2, WHITE, "FitBold", align="center", max_lines=2)
    footer_source(c, "Расчет иллюстративный: емкость тренера зависит от ниши, цены, формата и дисциплины процесса.")
    c.showPage()

    # 6
    background(c, 6)
    title(c, "Один дополнительный онлайн-клиент уже меняет экономику", "Смысл не в обещании дохода. Смысл в том, что структурированная услуга легче продается, повторяется и обслуживается.", 650)
    cards = [("5 000 ₽", "60 000 ₽/год"), ("10 000 ₽", "120 000 ₽/год"), ("15 000 ₽", "180 000 ₽/год")]
    for i, (monthly, yearly) in enumerate(cards):
        x = 70 + i * 185
        rounded(c, x, 206, 158, 116, 10, PANEL, LIME if i == 1 else LINE, 1.2)
        draw_text(c, monthly, x + 12, 229, 134, 22, LIME if i == 1 else WHITE, "FitBold", align="center")
        draw_text(c, "1 онлайн-клиент\nв месяц", x + 20, 266, 118, 9.2, MUTED, "Fit", align="center")
        draw_text(c, yearly, x + 16, 300, 126, 11.5, CYAN, "FitBold", align="center")
    draw_text(c, "FitFreak Pro помогает упаковать сопровождение: программа, видео, питание и прогресс живут в одном понятном клиентском процессе.", 76, 379, 540, 16, WHITE, "FitBold", leading=21, max_lines=3)
    draw_phone(c, "program", 707, 83, 410)
    footer_source(c, "Примеры - не обещание дохода. Используйте цену своего онлайн-сопровождения.")
    c.showPage()

    # 7
    background(c, 7)
    title(c, "Что FitFreak Pro собирает в один workflow", "Коучинг остается вашим. FitFreak Pro становится системой доставки этой методики клиенту.", 610)
    rows = [
        ("Библиотека упражнений", "создавайте упражнения, инструкции и видео один раз"),
        ("Персональные программы", "назначайте клиенту план без таблиц и PDF"),
        ("Питание и цели", "калории, БЖУ, вода и дневные ориентиры"),
        ("Прогресс клиента", "параметры и действия находятся в одном процессе"),
        ("ЮKassa", "активация доступа в российской версии"),
    ]
    for i, (h, b) in enumerate(rows):
        feature_row(c, h, b, 70, 170 + i * 52, LIME if i in (0, 4) else CYAN)
    draw_phone(c, "library", 650, 100, 370)
    draw_phone(c, "nutrition", 785, 128, 330)
    footer_source(c, "Источник: FitFreak Pro Marketing & Competitive Strategy.")
    c.showPage()

    # 8
    background(c, 8)
    title(c, "Продуктовый путь тренера выглядит просто", "Библиотека -> приглашение -> программа -> питание. Один маршрут вместо набора разрозненных файлов и чатов.", 690)
    data = [("library", "1. Библиотека"), ("invite", "2. Приглашение"), ("program", "3. Программа"), ("nutrition", "4. Питание")]
    for i, (asset, label) in enumerate(data):
        x = 92 + i * 206
        draw_phone(c, asset, x, 147, 298)
        draw_text(c, label, x - 8, 466, 138, 13, LIME if i == 0 else WHITE, "FitBold", align="center", max_lines=1)
    c.showPage()

    # 9
    background(c, 9)
    title(c, "Клиентский опыт работает на репутацию тренера", "Чем понятнее клиенту, что делать сегодня, тем меньше повторных вопросов и тем профессиональнее выглядит сопровождение.", 640)
    rows = [
        ("План на одном экране", "клиенту не нужно собирать задачу из сообщений"),
        ("Видео и инструкции", "меньше повторных объяснений в чате"),
        ("Питание и дневные цели", "клиент видит ориентиры рядом с программой"),
        ("Прогресс доступнее", "тренеру проще поддерживать контроль качества"),
    ]
    for i, (h, b) in enumerate(rows):
        feature_row(c, h, b, 70, 180 + i * 58, LIME if i == 0 else CYAN)
    rounded(c, 76, 430, 500, 58, 9, PANEL, LINE, 1)
    draw_text(c, "Для клиента FitFreak Pro - это место, где живет план его тренера.", 95, 449, 462, 15, WHITE, "FitBold", align="center", max_lines=2)
    draw_phone(c, "client", 658, 116, 340)
    draw_phone(c, "video", 790, 116, 340)
    footer_source(c, "Источник: FitFreak Pro Marketing & Competitive Strategy.")
    c.showPage()

    # 10
    background(c, 10)
    title(c, "Цена в российской версии простая", "Тренер может начать без ежемесячной платы за платформу. Активный клиент оплачивает доступ через ЮKassa.", 670)
    rounded(c, 102, 203, 318, 155, 12, PANEL, LINE, 1)
    draw_text(c, "0 ₽ / месяц", 130, 239, 262, 34, LIME, "FitBold", align="center")
    draw_text(c, "для тренера", 130, 292, 262, 16, WHITE, "FitBold", align="center")
    draw_text(c, "создавайте библиотеку, приглашайте клиентов и управляйте процессом", 150, 323, 222, 10.4, MUTED, "Fit", align="center", max_lines=2)
    rounded(c, 540, 203, 318, 155, 12, PANEL, LIME, 1.4)
    draw_text(c, "1 490 ₽ / месяц", 565, 239, 268, 30, CYAN, "FitBold", align="center")
    draw_text(c, "за активного клиента", 565, 292, 268, 16, WHITE, "FitBold", align="center")
    draw_text(c, "клиент получает доступ к цифровому опыту, созданному тренером", 583, 323, 232, 10.4, MUTED, "Fit", align="center", max_lines=2)
    rounded(c, 202, 430, 556, 45, 8, colors.HexColor("#10220F"), LIME, 0.8)
    draw_text(c, "Важно: в русской версии используется ЮKassa. Stripe в русской версии не указывается.", 220, 444, 520, 12.3, LIME, "FitBold", align="center", max_lines=1)
    c.showPage()

    # 11
    background(c, 11)
    title(c, "FitFreak Pro заменяет не тренера, а ручную рутину", "Фокус сравнения - на том, что тренер реально использует сегодня.", 660)
    draw_text(c, "Сейчас", 432, 154, 135, 13.5, MUTED, "FitBold", align="center")
    draw_text(c, "С FitFreak Pro", 665, 154, 170, 13.5, LIME, "FitBold", align="center")
    rows = [
        ("Видео упражнений", "разбросаны в телефоне и ссылках", "хранятся в библиотеке тренера"),
        ("Программы", "таблицы, PDF и сообщения", "назначаются клиенту в приложении"),
        ("Питание", "заметки и отдельные инструменты", "цели видны рядом с программой"),
        ("Прогресс", "фото и параметры в чатах", "данные проще проверять"),
        ("Повторные вопросы", "тренер отвечает вручную", "клиент видит инструкции сам"),
    ]
    for i, (a, b, ctext) in enumerate(rows):
        y = 200 + i * 55
        draw_text(c, a, 82, y, 190, 11.5, WHITE, "FitBold", max_lines=1)
        draw_text(c, b, 360, y, 230, 10.3, MUTED, "Fit", align="center", max_lines=2)
        draw_text(c, ctext, 638, y, 245, 10.3, WHITE, "Fit", align="center", max_lines=2)
        line(c, 80, y + 31, 885, y + 31, LINE, 0.7)
    c.showPage()

    # 12
    background(c, 12)
    title(c, "Почему тренеру стоит попробовать", "Не потому что это еще одна программа. Потому что это способ сделать коучинг более управляемым.", 650)
    reasons = [
        ("Больше порядка", "одна логика для программ, видео, питания и прогресса"),
        ("Быстрее повторять процесс", "библиотека создается один раз и используется снова"),
        ("Профессиональнее для клиента", "клиент видит план, а не собирает его из сообщений"),
        ("Легче масштабироваться", "больше клиентов без такой же ручной нагрузки"),
        ("Низкий риск старта", "тренерский аккаунт без ежемесячной платы"),
    ]
    for i, (h, b) in enumerate(reasons):
        feature_row(c, h, b, 70, 166 + i * 58, LIME if i == 0 else CYAN)
    draw_phone(c, "coach_signup", 760, 105, 360)
    footer_source(c, "Источник: FitFreak Pro Marketing & Competitive Strategy.")
    c.showPage()

    # 13
    background(c, 13)
    title(c, "Лучше всего подходит тренерам с реальной клиентской базой", "Идеальная первая аудитория - независимые тренеры, у которых уже есть клиенты и уже болит ручной процесс.", 685)
    segs = [
        ("Персональный тренер", "5-30 активных клиентов и индивидуальные планы"),
        ("Гибридный тренер", "часть клиентов в зале, часть онлайн"),
        ("Онлайн-коуч", "хочет вести клиента через понятный app-процесс"),
        ("Малый фитнес-бизнес", "нужна единая подача программ и питания"),
    ]
    for i, (h, b) in enumerate(segs):
        feature_row(c, h, b, 78, 186 + i * 62, LIME if i == 0 else CYAN)
    rounded(c, 724, 204, 138, 162, 12, PANEL, LIME, 1.1)
    draw_text(c, "Лучший старт", 742, 227, 102, 11.5, MUTED, "FitBold", align="center")
    draw_text(c, "5-30\nклиентов", 740, 264, 106, 28, LIME, "FitBold", leading=31, align="center")
    draw_text(c, "уже есть боль от ручного процесса", 745, 340, 96, 9.2, MUTED, "Fit", align="center", max_lines=3)
    footer_source(c, "Источник: FitFreak Pro Marketing & Competitive Strategy.")
    c.showPage()

    # 14
    background(c, 14)
    title(c, "Стартовый сценарий: один тестовый клиент", "Не нужно сразу переносить весь бизнес. Начните с малого процесса и проверьте, стало ли меньше ручных сообщений.", 650)
    plan = [
        "Зарегистрируйтесь как тренер",
        "Добавьте 5-10 ключевых упражнений",
        "Пригласите одного тестового клиента",
        "Назначьте первую программу",
        "Проверьте, где стало меньше ручной рутины",
    ]
    for i, item in enumerate(plan):
        y = 166 + i * 55
        c.setFillColor(LIME if i == 0 else PANEL)
        c.setStrokeColor(LIME)
        c.circle(92, H - y - 8, 14, fill=1, stroke=1)
        draw_text(c, str(i + 1), 78, y - 2, 28, 11, INK if i == 0 else WHITE, "FitBold", align="center")
        draw_text(c, item, 128, y - 2, 460, 14.5, WHITE, "FitBold", max_lines=1)
    rounded(c, 82, 450, 288, 40, 8, LIME)
    draw_text(c, "Скачать приложение тренера бесплатно", 82, 463, 288, 11.5, INK, "FitBold", align="center", max_lines=1)
    draw_phone(c, "calendar", 704, 70, 420)
    c.showPage()

    # 15
    background(c, 15)
    title(c, "Источники и ограничения", "Статистика используется как рыночный контекст. Экономика времени и дохода - расчетные примеры, а не гарантия результата.", 700)
    sources = [
        ("FitFreak Pro Marketing and Competitive Strategy", "позиционирование, аудитория, workflow, риски и модель"),
        ("U.S. BLS", "+12% employment growth и 74,200 annual openings, 2024-2034"),
        ("ACSM Worldwide Fitness Trends 2026", "mobile exercise apps входят в топ-5 фитнес-трендов"),
        ("U.S. Chamber 2025 Technology Report", "58% small businesses use four or more tech platforms"),
        ("Grand View Research", "global fitness apps market size and CAGR context"),
        ("Расчеты FitFreak Pro", "10 минут/клиент/неделя; сценарии дохода онлайн-клиента"),
    ]
    for i, (h, b) in enumerate(sources):
        feature_row(c, h, b, 70, 164 + i * 47, LIME if i == 0 else CYAN)
    rounded(c, 102, 465, 756, 38, 8, colors.HexColor("#10220F"), LIME, 0.8)
    draw_text(c, "Цена RU: 1 490 ₽/мес за активного клиента. Русская версия использует ЮKassa.", 126, 477, 708, 12.2, LIME, "FitBold", align="center", max_lines=1)
    c.showPage()


def build() -> None:
    register_fonts()
    OUT.parent.mkdir(parents=True, exist_ok=True)
    TMP.mkdir(parents=True, exist_ok=True)
    global PHONES
    PHONES = {
        "library": make_phone_asset(SCREENSHOTS / "02-exercise-library.png", "library", (0, 0.06, 1, 0.82)),
        "client": make_phone_asset(SCREENSHOTS / "04-client-dashboard.png", "client", (0, 0.05, 1, 0.82)),
        "invite": make_phone_asset(SCREENSHOTS / "03-invite-client.png", "invite", (0, 0.06, 1, 0.82)),
        "program": make_phone_asset(SCREENSHOTS / "04-create-program.png", "program", (0, 0.07, 1, 0.82)),
        "nutrition": make_phone_asset(SCREENSHOTS / "05-set-nutrition-targets.png", "nutrition", (0, 0.06, 1, 0.82)),
        "video": make_phone_asset(SCREENSHOTS / "05-exercise-video.png", "video", (0, 0.06, 1, 0.82)),
        "coach_signup": make_phone_asset(SCREENSHOTS / "01-create-coach-account.png", "coach_signup", (0, 0.06, 1, 0.82)),
        "calendar": make_phone_asset(SCREENSHOTS / "06-coach-calendar.png", "calendar", (0, 0.06, 1, 0.82)),
    }
    c = canvas.Canvas(str(OUT), pagesize=landscape(PAGE_SIZE), pageCompression=1)
    c.setTitle("FitFreak Pro - Marketing Presentation RU Enhanced")
    c.setAuthor("FitFreak Pro")
    c.setSubject("Russian coach-facing marketing presentation")
    slides(c)
    c.save()
    print(OUT)


if __name__ == "__main__":
    build()
