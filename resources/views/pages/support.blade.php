@php
$page = json_decode(<<<'PAGE'
{
  "title": "Поддержка FitFreak Pro для тренеров и клиентов",
  "description": "Помощь с аккаунтами тренеров, доступом клиентов, оплатой, тренировками, целями питания, прогрессом и входом в FitFreak Pro.",
  "canonical": "https://fitfreakpro.ru/support/",
  "ogTitle": "Поддержка FitFreak Pro для тренеров и клиентов",
  "ogDescription": "Помощь с аккаунтами, приглашениями, оплатой, тренировками, питанием, прогрессом и входом.",
  "ogImage": "https://fitfreakpro.ru/assets/img/fitfreak-logo.png",
  "ogImageWidth": "640",
  "ogImageHeight": "640",
  "ogImageAlt": "Логотип FitFreak Pro",
  "twitterCard": "summary",
  "twitterTitle": "Поддержка FitFreak Pro для тренеров и клиентов",
  "twitterDescription": "Помощь с аккаунтами, приглашениями, оплатой, тренировками, питанием и прогрессом.",
  "twitterImage": "https://fitfreakpro.ru/assets/img/fitfreak-logo.png",
  "twitterImageAlt": "Логотип FitFreak Pro",
  "schema": "[{\"@context\":\"https://schema.org\",\"@type\":\"ContactPage\",\"@id\":\"https://fitfreakpro.ru/support/#webpage\",\"url\":\"https://fitfreakpro.ru/support/\",\"name\":\"Поддержка FitFreak Pro\",\"description\":\"Поддержка тренеров и клиентов FitFreak Pro.\",\"isPartOf\":{\"@id\":\"https://fitfreakpro.ru/#website\"},\"about\":{\"@id\":\"https://fitfreakpro.ru/#software\"},\"inLanguage\":\"ru-RU\"},{\"@context\":\"https://schema.org\",\"@type\":\"FAQPage\",\"@id\":\"https://fitfreakpro.ru/support/#faq\",\"mainEntity\":[{\"@type\":\"Question\",\"name\":\"FitFreak Pro создан для тренеров или клиентов?\",\"acceptedAnswer\":{\"@type\":\"Answer\",\"text\":\"FitFreak Pro создан вокруг работы тренера. Клиенты получают доступ после приглашения от своего тренера.\"}},{\"@type\":\"Question\",\"name\":\"Аккаунт тренера бесплатный?\",\"acceptedAnswer\":{\"@type\":\"Answer\",\"text\":\"Да. Аккаунт тренера — 0 ₽.\"}},{\"@type\":\"Question\",\"name\":\"Сколько платит клиент?\",\"acceptedAnswer\":{\"@type\":\"Answer\",\"text\":\"Доступ клиента стоит 990 ₽ за 30 дней после приглашения от тренера. Оплата через ЮKassa.\"}},{\"@type\":\"Question\",\"name\":\"Можно ли использовать свои видео упражнений?\",\"acceptedAnswer\":{\"@type\":\"Answer\",\"text\":\"Да. Тренер создает свою библиотеку и использует собственные видео.\"}},{\"@type\":\"Question\",\"name\":\"Является ли FitFreak Pro медицинским сервисом?\",\"acceptedAnswer\":{\"@type\":\"Answer\",\"text\":\"Нет. FitFreak Pro не является медицинской организацией, экстренной службой или заменой профессиональной медицинской консультации.\"}}]},{\"@context\":\"https://schema.org\",\"@type\":\"BreadcrumbList\",\"itemListElement\":[{\"@type\":\"ListItem\",\"position\":1,\"name\":\"Главная\",\"item\":\"https://fitfreakpro.ru/\"},{\"@type\":\"ListItem\",\"position\":2,\"name\":\"Поддержка\",\"item\":\"https://fitfreakpro.ru/support/\"}]}]"
}
PAGE, true, 512, JSON_THROW_ON_ERROR);
@endphp

<x-layouts.public :page="$page">
<main id="main">
  <section class="page-hero"><div class="container"><div class="eyebrow">Поддержка</div><h1>Чем мы можем помочь?</h1><p>Поддержка персональных тренеров и приглашенных клиентов FitFreak Pro.</p><p>Помощь с аккаунтами, доступом клиентов, оплатой, тренировками, целями питания и прогрессом.</p></div></section>
  <section class="section" style="padding-top:0;">
    <div class="container contact-grid">
      <div class="contact-card"><h2>Связаться с поддержкой</h2><p>По вопросам аккаунта, оплаты, технических неполадок, доступа клиента или подписки напишите команде FitFreak Pro.</p><p>Email: <a class="email-link" href="mailto:support@fitfreakpro.com" data-track="support_email_click">support@fitfreakpro.com</a></p><div><a class="btn btn-primary" href="mailto:support@fitfreakpro.com" data-track="support_email_click">Написать в поддержку</a></div></div>
      <div class="contact-card"><h2>Скачать приложение</h2><p>FitFreak Pro доступен в App Store и Google Play.</p><div class="store-row"><a class="store-badge" href="https://apps.apple.com/us/app/fit-freak-pro/id6742347988" target="_blank" rel="noopener noreferrer" data-track="app_store_click" aria-label="Скачать FitFreak Pro в App Store"><span>Скачать в<strong>App Store</strong></span></a><a class="store-badge" href="https://play.google.com/store/apps/details?id=com.duseca.fitfreak" target="_blank" rel="noopener noreferrer" data-track="google_play_click" aria-label="Скачать FitFreak Pro в Google Play"><span>Доступно в<strong>Google Play</strong></span></a></div></div>
    </div>
  </section>
  <section class="section support-categories">
    <div class="container">
      <div class="section-header"><div><div class="section-kicker">Разделы поддержки</div><h2 class="section-title">Найдите помощь по нужной части рабочего процесса.</h2></div></div>
      <div class="support-grid">
        <article class="support-card"><div class="feature-icon">👤</div><h3>Настройка аккаунта тренера</h3><p>Поможем создать аккаунт и разобраться с первыми шагами в FitFreak Pro.</p></article>
        <article class="support-card"><div class="feature-icon">✉</div><h3>Приглашение клиентов</h3><p>После приглашения и активации доступа тренер видит клиента в своей панели.</p></article>
        <article class="support-card"><div class="feature-icon">₽</div><h3>Доступ клиента</h3><p>Доступ стоит 990 ₽ за 30 дней. По вопросам оплаты через ЮKassa напишите в поддержку.</p></article>
        <article class="support-card"><div class="feature-icon">▤</div><h3>Библиотека упражнений</h3><p>Создавайте разделы, упражнения и используйте собственные тренерские материалы.</p></article>
        <article class="support-card"><div class="feature-icon">✓</div><h3>Программы тренировок</h3><p>Назначайте клиентам персональные программы в одном понятном формате.</p></article>
        <article class="support-card"><div class="feature-icon">◎</div><h3>Цели питания</h3><p>Задавайте цели питания, которые клиент видит в приложении.</p></article>
        <article class="support-card"><div class="feature-icon">↗</div><h3>Прогресс клиента</h3><p>Просматривайте данные, которые клиент отправляет через FitFreak Pro.</p></article>
        <article class="support-card"><div class="feature-icon">🔐</div><h3>Проблемы со входом</h3><p>Проверьте email и тип аккаунта. Если проблема сохраняется, обратитесь в поддержку.</p></article>
        <article class="support-card"><div class="feature-icon">?</div><h3>Вопросы по оплате</h3><p>По вопросам оплаты и доступа напишите на support@fitfreakpro.com.</p></article>
        <article class="support-card"><div class="feature-icon">⚙</div><h3>Техническая поддержка</h3><p>Опишите проблему, укажите устройство и приложите скриншот, если он поможет.</p></article>
      </div>
    </div>
  </section>
  <section class="section">
    <div class="container">
      <div class="section-header"><div><div class="section-kicker">Вопросы</div><h2 class="section-title">Частые вопросы</h2></div></div>
      <div class="faq-list">
        <x-ui.faq-item question="FitFreak Pro создан для тренеров или клиентов?">FitFreak Pro создан вокруг работы тренера. Клиенты получают доступ после приглашения от своего тренера.</x-ui.faq-item>
        <x-ui.faq-item question="Аккаунт тренера бесплатный?">Да. Аккаунт тренера — 0 ₽.</x-ui.faq-item>
        <x-ui.faq-item question="Сколько платит клиент?">Доступ клиента стоит 990 ₽ за 30 дней. Оплата через ЮKassa. Профессиональная услуга тренера оплачивается отдельно.</x-ui.faq-item>
        <x-ui.faq-item question="Можно ли использовать свои видео упражнений?">Да. Тренер создает собственную библиотеку и использует свои видео.</x-ui.faq-item>
        <x-ui.faq-item question="Что клиент делает в приложении?">Клиент открывает назначенные тренировки, смотрит инструкции, следует целям питания и отправляет данные прогресса.</x-ui.faq-item>
        <x-ui.faq-item question="Где скачать приложение?">FitFreak Pro доступен в App Store и Google Play.<div class="app-download-inline"><a class="store-badge" href="https://apps.apple.com/us/app/fit-freak-pro/id6742347988" target="_blank" rel="noopener noreferrer" data-track="app_store_click" aria-label="Скачать FitFreak Pro в App Store"><span>Скачать в<strong>App Store</strong></span></a><a class="store-badge" href="https://play.google.com/store/apps/details?id=com.duseca.fitfreak" target="_blank" rel="noopener noreferrer" data-track="google_play_click" aria-label="Скачать FitFreak Pro в Google Play"><span>Доступно в<strong>Google Play</strong></span></a></div></x-ui.faq-item>
        <x-ui.faq-item question="Куда обратиться с вопросом по оплате или входу?">Напишите на <a class="email-link" href="mailto:support@fitfreakpro.com" data-track="support_email_click">support@fitfreakpro.com</a>.</x-ui.faq-item>
        <x-ui.faq-item question="Что указать в обращении?">Укажите имя, email аккаунта FitFreak Pro, роль тренера или клиента, описание проблемы и тип устройства.</x-ui.faq-item>
      </div>
    </div>
  </section>
  <section class="section"><div class="container"><div class="cta-panel"><h2>Нужна дополнительная помощь?</h2><p>Напишите нам, и команда поддержки поможет с аккаунтом FitFreak Pro.</p><div class="cta-actions"><a class="btn btn-primary" href="mailto:support@fitfreakpro.com" data-track="support_email_click">Связаться с поддержкой</a></div></div></div></section>
</main>
</x-layouts.public>
