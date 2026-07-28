@php
$page = json_decode(<<<'PAGE'
{
  "title": "Цены FitFreak Pro для тренеров и клиентов",
  "description": "Аккаунт тренера — 0 ₽. Доступ приглашенного клиента — 990 ₽ за 30 дней для тренировок, питания и прогресса в FitFreak Pro.",
  "canonical": "https://fitfreakpro.ru/pricing/",
  "ogTitle": "Цены FitFreak Pro для тренеров и клиентов",
  "ogDescription": "Тренер начинает бесплатно. Приглашенный клиент оплачивает 990 ₽ за 30 дней доступа к цифровому сопровождению.",
  "ogImage": "https://fitfreakpro.ru/assets/img/app-screen-1.webp",
  "ogImageWidth": "619",
  "ogImageHeight": "1100",
  "ogImageAlt": "Панель тренера FitFreak Pro для управления клиентами",
  "twitterCard": "summary_large_image",
  "twitterTitle": "Цены FitFreak Pro для тренеров и клиентов",
  "twitterDescription": "Аккаунт тренера — 0 ₽. Доступ приглашенного клиента — 990 ₽ за 30 дней.",
  "twitterImage": "https://fitfreakpro.ru/assets/img/app-screen-1.webp",
  "twitterImageAlt": "Панель тренера FitFreak Pro для управления клиентами",
  "schema": "[\n  {\n    \"@context\": \"https://schema.org\",\n    \"@type\": \"WebPage\",\n    \"@id\": \"https://fitfreakpro.ru/pricing/#webpage\",\n    \"url\": \"https://fitfreakpro.ru/pricing/\",\n    \"name\": \"Цены FitFreak Pro для тренеров и клиентов\",\n    \"description\": \"Аккаунт тренера — 0 ₽. Доступ приглашенного клиента — 990 ₽ за 30 дней.\",\n    \"isPartOf\": {\"@id\": \"https://fitfreakpro.ru/#website\"},\n    \"about\": {\"@id\": \"https://fitfreakpro.ru/#software\"},\n    \"mainEntity\": {\n      \"@type\": \"OfferCatalog\",\n      \"name\": \"Цены FitFreak Pro\",\n      \"itemListElement\": [\n        {\"@type\": \"Offer\", \"name\": \"Аккаунт тренера\", \"price\": \"0\", \"priceCurrency\": \"RUB\", \"description\": \"Тренер регистрируется бесплатно.\"},\n        {\"@type\": \"Offer\", \"name\": \"Цифровое сопровождение клиента\", \"price\": \"990\", \"priceCurrency\": \"RUB\", \"description\": \"Клиент оплачивает 990 ₽ за 30 дней после приглашения от тренера.\"}\n      ]\n    },\n    \"inLanguage\": \"ru-RU\"\n  },\n  {\n    \"@context\": \"https://schema.org\",\n    \"@type\": \"BreadcrumbList\",\n    \"itemListElement\": [\n      {\"@type\": \"ListItem\", \"position\": 1, \"name\": \"Главная\", \"item\": \"https://fitfreakpro.ru/\"},\n      {\"@type\": \"ListItem\", \"position\": 2, \"name\": \"Цены\", \"item\": \"https://fitfreakpro.ru/pricing/\"}\n    ]\n  }\n]"
}
PAGE, true, 512, JSON_THROW_ON_ERROR);
@endphp

<x-layouts.public :page="$page">
<main id="main" class="pricing-page">
  <section class="route-hero">
    <div class="container">
      <div class="eyebrow">Цены</div>
      <h1>Тренер работает бесплатно. Клиент оплачивает цифровое сопровождение.</h1>
      <p>Создавайте свой рабочий процесс без ежемесячной платы за аккаунт тренера. Клиент активирует доступ после приглашения от своего тренера.</p>
    </div>
  </section>
  <section class="section pricing-model-section">
    <div class="container">
      <div class="pricing-sequence" aria-label="Как устроена оплата FitFreak Pro">
        <div class="pricing-sequence-step"><span>1</span><strong>Тренер создает бесплатный аккаунт</strong></div>
        <div class="pricing-sequence-step"><span>2</span><strong>Приглашает клиента</strong></div>
        <div class="pricing-sequence-step"><span>3</span><strong>Клиент активирует доступ</strong></div>
      </div>
      <div class="pricing-grid">
        <article class="pricing-card featured"><p class="pricing-label">Аккаунт тренера</p><div class="price"><span>0 ₽</span></div><p>Создавайте и предоставляйте сопровождение в FitFreak Pro без ежемесячной платы за аккаунт тренера.</p><ul><li>Своя библиотека упражнений</li><li>Собственные видео и инструкции</li><li>Приглашение и ведение клиентов</li><li>Персональные программы и цели питания</li><li>Проверка данных прогресса</li><li>Без ежемесячной платы тренера</li></ul></article>
        <article class="pricing-card"><p class="pricing-label">Цифровое сопровождение клиента</p><div class="price"><span>990 ₽</span><small>за 30 дней</small></div><p>Клиент активирует персональное цифровое сопровождение, которое тренер предоставляет через FitFreak Pro. Оплата через ЮKassa.</p><ul><li>Тренировки от своего тренера</li><li>Видео и инструкции упражнений</li><li>Цели питания и воды</li><li>Передача данных прогресса</li><li>Один актуальный план тренера</li></ul></article>
      </div>
      <div class="content-note"><h2>Почему клиент оплачивает доступ отдельно?</h2><p>Профессиональная услуга тренера оплачивает его знания и работу. Доступ FitFreak Pro открывает цифровое сопровождение: тренировки, демонстрации, цели питания и инструменты прогресса. Профессиональная услуга тренера оплачивается отдельно.</p></div>
      <div class="cta-panel pricing-cta-panel">
        <div><h2>Готовы начать как тренер?</h2><p>Скачайте FitFreak Pro и создайте бесплатный аккаунт тренера.</p><div class="cta-actions"><a class="btn btn-primary" href="{{ route('home') }}#download" data-track="pricing_cta_click">Начать бесплатно как тренер</a><a class="btn btn-secondary" href="mailto:support@fitfreakpro.com?subject=Демонстрация%20FitFreak%20Pro" data-track="founder_walkthrough_click">Запросить демонстрацию</a></div></div>
        <div class="store-row"><a class="store-badge" href="https://apps.apple.com/us/app/fit-freak-pro/id6742347988" target="_blank" rel="noopener noreferrer" data-track="app_store_click" aria-label="Скачать FitFreak Pro в App Store"><span>Скачать в<strong>App Store</strong></span></a><a class="store-badge" href="https://play.google.com/store/apps/details?id=com.duseca.fitfreak" target="_blank" rel="noopener noreferrer" data-track="google_play_click" aria-label="Скачать FitFreak Pro в Google Play"><span>Доступно в<strong>Google Play</strong></span></a></div>
      </div>
    </div>
  </section>
</main>
</x-layouts.public>
