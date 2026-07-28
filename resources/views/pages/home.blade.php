@php
$page = json_decode(<<<'PAGE'
{
  "title": "FitFreak Pro — приложение для тренеров и работы с клиентами",
  "description": "Создавайте собственные упражнения и программы, назначайте питание и отслеживайте прогресс клиентов в одном приложении. Аккаунт тренера — 0 ₽.",
  "canonical": "https://fitfreakpro.ru/",
  "ogTitle": "FitFreak Pro — приложение для тренеров и работы с клиентами",
  "ogDescription": "Собственные упражнения, видео, программы, цели питания и прогресс клиентов в одном рабочем процессе. Аккаунт тренера — 0 ₽.",
  "ogImage": "https://fitfreakpro.ru/assets/img/app-screen-1.webp",
  "ogImageWidth": "619",
  "ogImageHeight": "1100",
  "ogImageAlt": "Панель тренера FitFreak Pro для управления клиентами",
  "twitterCard": "summary_large_image",
  "twitterTitle": "FitFreak Pro — приложение для персональных тренеров",
  "twitterDescription": "Организуйте упражнения, программы, питание и прогресс клиентов в одном приложении.",
  "twitterImage": "https://fitfreakpro.ru/assets/img/app-screen-1.webp",
  "twitterImageAlt": "Панель тренера FitFreak Pro для управления клиентами",
  "schema": "{\n  \"@context\": \"https://schema.org\",\n  \"@graph\": [\n    {\n      \"@type\": \"Organization\",\n      \"@id\": \"https://fitfreakpro.ru/#organization\",\n      \"name\": \"FitFreak Pro\",\n      \"url\": \"https://fitfreakpro.ru/\",\n      \"logo\": \"https://fitfreakpro.ru/assets/img/fitfreak-logo.png\",\n      \"sameAs\": [\"https://www.linkedin.com/company/fitfreak-pro/\"],\n      \"contactPoint\": {\"@type\": \"ContactPoint\", \"email\": \"support@fitfreakpro.com\", \"contactType\": \"служба поддержки\"}\n    },\n    {\n      \"@type\": \"WebSite\",\n      \"@id\": \"https://fitfreakpro.ru/#website\",\n      \"name\": \"FitFreak Pro\",\n      \"url\": \"https://fitfreakpro.ru/\",\n      \"publisher\": {\"@id\": \"https://fitfreakpro.ru/#organization\"},\n      \"inLanguage\": \"ru-RU\"\n    },\n    {\n      \"@type\": \"SoftwareApplication\",\n      \"@id\": \"https://fitfreakpro.ru/#software\",\n      \"name\": \"FitFreak Pro\",\n      \"applicationCategory\": \"BusinessApplication\",\n      \"operatingSystem\": \"iOS, Android\",\n      \"description\": \"Приложение для персональных тренеров: собственные упражнения, видео, программы, цели питания и прогресс клиентов в одном рабочем процессе.\",\n      \"url\": \"https://fitfreakpro.ru/\",\n      \"publisher\": {\"@id\": \"https://fitfreakpro.ru/#organization\"},\n      \"downloadUrl\": [\"https://apps.apple.com/us/app/fit-freak-pro/id6742347988\", \"https://play.google.com/store/apps/details?id=com.duseca.fitfreak\"],\n      \"offers\": [\n        {\"@type\": \"Offer\", \"name\": \"Аккаунт тренера\", \"price\": \"0\", \"priceCurrency\": \"RUB\", \"description\": \"Тренер регистрируется бесплатно.\"},\n        {\"@type\": \"Offer\", \"name\": \"Доступ приглашенного клиента\", \"price\": \"990\", \"priceCurrency\": \"RUB\", \"description\": \"Доступ клиента стоит 990 ₽ за 30 дней после приглашения от тренера.\"}\n      ]\n    },\n    {\n      \"@type\": \"FAQPage\",\n      \"@id\": \"https://fitfreakpro.ru/#faq\",\n      \"mainEntity\": [\n        {\"@type\": \"Question\", \"name\": \"Что такое FitFreak Pro?\", \"acceptedAnswer\": {\"@type\": \"Answer\", \"text\": \"FitFreak Pro — приложение для тренеров, в котором можно создавать библиотеку упражнений, использовать свои видео, назначать программы и цели питания, а также просматривать прогресс клиентов.\"}},\n        {\"@type\": \"Question\", \"name\": \"Для кого создан FitFreak Pro?\", \"acceptedAnswer\": {\"@type\": \"Answer\", \"text\": \"Для независимых персональных тренеров, онлайн-тренеров и специалистов, которые совмещают очную и дистанционную работу.\"}},\n        {\"@type\": \"Question\", \"name\": \"Платит ли тренер за платформу?\", \"acceptedAnswer\": {\"@type\": \"Answer\", \"text\": \"Нет. Аккаунт тренера — 0 ₽.\"}},\n        {\"@type\": \"Question\", \"name\": \"Сколько стоит доступ клиента?\", \"acceptedAnswer\": {\"@type\": \"Answer\", \"text\": \"Доступ приглашенного клиента стоит 990 ₽ за 30 дней. Оплата через ЮKassa. Профессиональная услуга тренера оплачивается отдельно.\"}},\n        {\"@type\": \"Question\", \"name\": \"Можно ли использовать свои упражнения и видео?\", \"acceptedAnswer\": {\"@type\": \"Answer\", \"text\": \"Да. Тренер создает собственную библиотеку и использует свои видео, описания и рекомендации.\"}},\n        {\"@type\": \"Question\", \"name\": \"Как клиент подключается к тренеру?\", \"acceptedAnswer\": {\"@type\": \"Answer\", \"text\": \"Клиент получает код приглашения от тренера, вводит его в приложении и активирует доступ.\"}},\n        {\"@type\": \"Question\", \"name\": \"Где скачать приложение?\", \"acceptedAnswer\": {\"@type\": \"Answer\", \"text\": \"FitFreak Pro доступен в App Store и Google Play.\"}},\n        {\"@type\": \"Question\", \"name\": \"Является ли FitFreak Pro медицинским сервисом?\", \"acceptedAnswer\": {\"@type\": \"Answer\", \"text\": \"Нет. FitFreak Pro не является медицинской организацией, экстренной службой или заменой профессиональной медицинской консультации.\"}}\n      ]\n    }\n  ]\n}"
}
PAGE, true, 512, JSON_THROW_ON_ERROR);
@endphp

<x-layouts.public :page="$page">
<main id="main" class="home-page">
  <section class="hero redesign-hero">
    <div class="container hero-grid">
      <div class="hero-copy-wrap">
        <div class="eyebrow">Приложение для персональных тренеров</div>
        <h1>Ведите больше клиентов. <span class="lime-text">Без бесконечных таблиц и переписок.</span></h1>
        <p class="hero-copy">Создавайте собственные упражнения и программы, назначайте питание и отслеживайте прогресс клиентов в одном приложении.</p>
        <div class="hero-actions">
          <a class="btn btn-primary hero-primary-cta" href="#download" data-track="hero_app_download_cta">Создать бесплатный аккаунт тренера</a>
          <a class="btn btn-secondary" href="#workflow" data-track="see_workflow_click">Посмотреть, как это работает</a>
        </div>
        <p class="download-label">Аккаунт тренера — 0 ₽. Доступно на iPhone и Android.</p>
        <p class="hero-differentiator">Создано вокруг вашей методики, а не алгоритма.</p>
      </div>
      <div class="product-shot-grid" aria-label="Экраны приложения FitFreak Pro">
        <figure class="phone-shot phone-shot-primary">
          <img src="{{ asset('assets/img/app-screen-1.webp') }}" width="619" height="1100" alt="Панель тренера FitFreak Pro с клиентами, программами, питанием и прогрессом" loading="eager" />
        </figure>
        <figure class="phone-shot phone-shot-secondary">
          <img src="{{ asset('images/tutorial/coach/02-exercise-library.png') }}" width="922" height="2000" alt="Собственная библиотека упражнений тренера в FitFreak Pro" loading="eager" />
        </figure>
      </div>
    </div>
  </section>

  <section class="download-strip" id="download" aria-labelledby="download-heading">
    <div class="container download-strip-inner">
      <div>
        <h2 id="download-heading">Скачайте FitFreak Pro</h2>
        <p>Зарегистрируйтесь бесплатно как тренер или подключитесь по приглашению своего тренера.</p>
      </div>
      <div class="store-row" aria-label="Ссылки для скачивания приложения">
        <a class="store-badge" href="https://apps.apple.com/us/app/fit-freak-pro/id6742347988" target="_blank" rel="noopener noreferrer" data-track="app_store_click" aria-label="Скачать FitFreak Pro в App Store"><span>Скачать в<strong>App Store</strong></span></a>
        <a class="store-badge" href="https://play.google.com/store/apps/details?id=com.duseca.fitfreak" target="_blank" rel="noopener noreferrer" data-track="google_play_click" aria-label="Скачать FitFreak Pro в Google Play"><span>Доступно в<strong>Google Play</strong></span></a>
      </div>
    </div>
  </section>

  <section class="section home-band home-band-muted" id="product">
    <div class="container section-header">
      <div>
        <div class="section-kicker">Продукт</div>
        <h2 class="section-title">Работа тренера не должна быть разбросана по пяти разным инструментам.</h2>
        <p class="section-copy">Программы в таблицах. Общение с клиентами в сообщениях. Видео упражнений в папках. Цели питания в заметках. FitFreak Pro объединяет основную работу тренера в одном приложении для вас и ваших клиентов.</p>
      </div>
    </div>
    <div class="container metrics-row">
      <div class="metric-card"><strong>0 ₽</strong><span>аккаунт тренера</span></div>
      <div class="metric-card"><strong>990 ₽</strong><span>доступ клиента на 30 дней</span></div>
      <div class="metric-card"><strong>1</strong><span>приложение для сопровождения</span></div>
    </div>
  </section>

  <section class="section home-band home-band-primary" id="workflow">
    <div class="container section-header">
      <div>
        <div class="section-kicker">Рабочий процесс тренера</div>
        <h2 class="section-title">Один процесс от настройки до проверки прогресса.</h2>
        <p class="section-copy">FitFreak Pro помогает организовать упражнения, видео, программы клиентов, цели питания и данные прогресса в одном рабочем пространстве.</p>
      </div>
    </div>
    <div class="container workflow-showcase">
      <figure class="workflow-product-shot">
        <img src="{{ asset('images/tutorial/coach/04-create-program.png') }}" width="922" height="2000" alt="Создание и назначение программы клиента в FitFreak Pro" loading="lazy" />
      </figure>
      <div class="workflow-flow" aria-label="Этапы работы тренера">
        <article class="workflow-card"><div class="feature-icon" aria-hidden="true">01</div><h3>Создайте библиотеку упражнений</h3><p>Добавьте свои упражнения, видео и тренерские заметки.</p></article>
        <article class="workflow-card"><div class="feature-icon" aria-hidden="true">02</div><h3>Спланируйте работу</h3><p>Создавайте рабочие блоки в календаре тренера.</p></article>
        <article class="workflow-card"><div class="feature-icon" aria-hidden="true">03</div><h3>Пригласите и назначьте</h3><p>Пригласите клиента и назначьте ему персональную программу.</p></article>
        <article class="workflow-card"><div class="feature-icon" aria-hidden="true">04</div><h3>Проверяйте прогресс</h3><p>Просматривайте тренировки, питание и данные клиента.</p></article>
      </div>
    </div>
  </section>

  <section class="section feature-split home-feature home-feature-primary" id="features">
    <span id="coach-owned-content" class="legacy-anchor" aria-hidden="true"></span>
    <div class="container split-panel">
      <div>
        <div class="section-kicker">Работайте по-своему</div>
        <h2>Сохраняйте свой подход в центре работы.</h2>
        <p>Клиенты выбрали вас, а не универсальную библиотеку. Используйте собственные видео упражнений, объяснения, заметки и программы, чтобы приложение поддерживало привычный формат вашей работы.</p>
        <div class="pill-row"><span>Своя библиотека упражнений</span><span>Свои видео и демонстрации</span><span>Многоразовые разделы упражнений</span><span>Программа под каждого клиента</span></div>
      </div>
      <figure class="app-ui-frame">
        <img src="{{ asset('images/tutorial/coach/02-exercise-library.png') }}" width="922" height="2000" alt="Библиотека упражнений тренера в FitFreak Pro" loading="lazy" />
      </figure>
    </div>
  </section>

  <section class="section feature-split home-feature home-feature-client" id="client-experience">
    <div class="container split-panel reverse">
      <figure class="app-ui-frame">
        <img src="{{ asset('images/tutorial/client/04-client-dashboard.png') }}" width="922" height="2000" alt="Панель клиента с назначенной тренировкой и целями питания" loading="lazy" />
      </figure>
      <div>
        <div class="section-kicker">Для ваших клиентов</div>
        <h2>Дайте каждому клиенту понятный план.</h2>
        <p>Клиент видит назначенные тренировки, описания упражнений, цели питания и данные прогресса, которые ожидает получить тренер.</p>
        <ul class="check-list">
          <li>Тренировки, подходы, повторения и видео собраны вместе.</li>
          <li>Цели питания легко понять и отслеживать.</li>
          <li>Данные прогресса доступны тренеру для проверки.</li>
        </ul>
      </div>
    </div>
  </section>

  <section class="section feature-split home-feature home-secondary-feature" id="coach-calendar">
    <div class="container split-panel reverse">
      <figure class="app-ui-frame app-ui-frame-compact"><img src="{{ asset('images/tutorial/coach/06-coach-calendar.png') }}" width="922" height="2000" alt="Календарь тренера с рабочими блоками в FitFreak Pro" loading="lazy" /></figure>
      <div>
        <div class="section-kicker">Расписание тренера</div>
        <h2>Планируйте работу с клиентами.</h2>
        <p>Календарь FitFreak Pro помогает держать расписание рядом с тренировками, целями питания и проверкой прогресса.</p>
        <ul class="check-list">
          <li>Создавайте рабочие блоки на выбранные дни.</li>
          <li>Управляйте временем в том же рабочем пространстве.</li>
          <li>Связывайте планирование с назначениями клиентов.</li>
        </ul>
      </div>
    </div>
  </section>

  <section class="section pricing-section home-band home-band-pricing" id="pricing">
    <div class="container">
      <div class="section-kicker">Цены</div>
      <div class="section-header">
        <div>
          <h2 class="section-title">Тренер работает бесплатно. Клиент оплачивает цифровое сопровождение.</h2>
          <p class="section-copy">Тренер начинает без ежемесячной платы за платформу. Приглашенный клиент активирует доступ к материалам и назначениям своего тренера.</p>
        </div>
      </div>
      <div class="pricing-grid">
        <article class="pricing-card featured">
          <p class="pricing-label">Аккаунт тренера</p>
          <div class="price">0 ₽</div>
          <p>Создавайте библиотеку упражнений, приглашайте клиентов и ведите их без ежемесячной платы за аккаунт тренера.</p>
          <ul><li>Создание библиотеки упражнений</li><li>Собственные видео</li><li>Приглашение клиентов</li><li>Назначение тренировок</li><li>Цели питания</li><li>Проверка прогресса</li><li>Без ежемесячной платы тренера</li></ul>
        </article>
        <article class="pricing-card">
          <p class="pricing-label">Доступ приглашенного клиента</p>
          <div class="price">990 ₽ <small>за 30 дней</small></div>
          <p>Клиент активирует доступ после приглашения от своего тренера. Оплата через ЮKassa.</p>
          <ul><li>Назначенные тренировки</li><li>Инструкции и видео упражнений</li><li>Цели питания</li><li>Передача данных прогресса</li><li>План, созданный тренером</li></ul>
        </article>
      </div>
      <div class="content-note">
        <h3>Почему клиент оплачивает доступ?</h3>
        <p>Оплата открывает клиенту цифровое сопровождение в FitFreak Pro: назначенные тренировки, видео, цели питания и инструменты прогресса. Профессиональная услуга тренера оплачивается отдельно.</p>
      </div>
    </div>
  </section>

  <section class="section founder-section" id="about">
    <div class="container split-panel compact">
      <div>
        <div class="section-kicker">Демонстрация продукта</div>
        <h2 class="section-title">Поговорите с командой FitFreak Pro.</h2>
        <p class="section-copy">Посмотрите рабочий процесс тренера и клиента, задайте вопросы и оцените, подходит ли FitFreak Pro вашему формату работы.</p>
      </div>
      <div class="founder-card">
        <h3>Запросите демонстрацию продукта.</h3>
        <p>Узнайте, как объединить таблицы, заметки, видео и сообщения в одном рабочем процессе.</p>
        <a class="btn btn-primary" href="mailto:support@fitfreakpro.com?subject=Демонстрация%20FitFreak%20Pro" data-track="founder_walkthrough_click">Запросить демонстрацию</a>
      </div>
    </div>
  </section>

  <section class="section faq-section" id="faq">
    <div class="container">
      <div class="section-kicker">Вопросы</div>
      <h2 class="section-title">Что важно знать тренеру.</h2>
      <div class="faq-list">
        <x-ui.faq-item question="Что такое FitFreak Pro?">FitFreak Pro — приложение для тренеров: собственная библиотека упражнений, видео, персональные программы, цели питания и проверка прогресса клиентов.</x-ui.faq-item>
        <x-ui.faq-item question="Для кого создан FitFreak Pro?">Для независимых персональных тренеров, онлайн-тренеров и специалистов, которые совмещают очную и дистанционную работу.</x-ui.faq-item>
        <x-ui.faq-item question="Платит ли тренер за платформу?">Нет. Аккаунт тренера — 0 ₽. Ежемесячной платы за аккаунт тренера нет.</x-ui.faq-item>
        <x-ui.faq-item question="Сколько стоит доступ клиента?">990 ₽ за 30 дней после приглашения от тренера. Оплата через ЮKassa. Профессиональная услуга тренера оплачивается отдельно.</x-ui.faq-item>
        <x-ui.faq-item question="Можно ли использовать свои упражнения и видео?">Да. Вы создаете собственную библиотеку и используете свои видео, инструкции и тренерские заметки.</x-ui.faq-item>
        <x-ui.faq-item question="Можно ли работать онлайн и очно?">Да. FitFreak Pro подходит для онлайн-, очного и смешанного формата работы.</x-ui.faq-item>
        <x-ui.faq-item question="Как клиент подключается?">Клиент получает приглашение от тренера, вводит код и активирует доступ в приложении.</x-ui.faq-item>
        <x-ui.faq-item question="Где скачать приложение?">FitFreak Pro доступен в App Store и Google Play.</x-ui.faq-item>
      </div>
    </div>
  </section>

  <section class="section final-cta">
    <div class="container cta-panel">
      <h2>Соберите работу с клиентами в одном приложении.</h2>
      <p>Организуйте упражнения, программы, цели питания и данные прогресса без разрозненных таблиц, ссылок и сообщений.</p>
      <div class="cta-actions">
        <a class="btn btn-primary" href="#download" data-track="hero_app_download_cta">Начать бесплатно</a>
        <a class="btn btn-secondary" href="mailto:support@fitfreakpro.com?subject=Демонстрация%20FitFreak%20Pro" data-track="founder_walkthrough_click">Запросить демонстрацию</a>
      </div>
    </div>
  </section>
</main>
</x-layouts.public>
