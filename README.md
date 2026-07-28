# FitFreak Pro на русском языке

Русский сайт FitFreak Pro работает на Laravel 12, Blade, Tailwind CSS 4 и Vite 6. Основной домен: `https://fitfreakpro.ru`.

## Локальный запуск

Требуются PHP 8.2+, Composer, Node.js и npm.

```bash
composer install
cp .env.example .env
php artisan key:generate
npm install
npm run build
php artisan serve
```

Для одновременного запуска Laravel и Vite:

```bash
composer run dev
```

## Проверка

```bash
php artisan test
./vendor/bin/pint --test
npm run build
```

## Размещение

Production-сайт публикуется через GitHub Pages на `https://fitfreakpro.ru`. Laravel остается источником страниц, а команда экспорта записывает готовые HTML-файлы и ассеты в корень репозитория:

```bash
npm run build
php artisan site:export
```

Сгенерированные файлы необходимо коммитить вместе с изменениями Blade. GitHub Actions проверяет, что экспорт актуален, после чего существующий GitHub Pages deployment публикует ветку `main`.

Для размещения Laravel как динамического PHP-приложения веб-сервер должен использовать каталог `public/` как document root.

Сайт не требует базы данных. Доступ клиента указан как `990 ₽ за 30 дней`, аккаунт тренера — `0 ₽`, оплата — через `ЮKassa`. Предварительные тексты политики конфиденциальности и условий закрыты от индексации до юридической проверки.
