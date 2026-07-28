<x-layouts.public
    title="FitFreak Pro для персональных тренеров"
    description="Приложение для независимых персональных тренеров: своя библиотека упражнений, клиентские планы, цели по питанию и просмотр прогресса."
    canonical-path="/for-personal-trainers/"
    social-image-alt="FitFreak Pro: приложение для персональных тренеров"
>
    <x-slot:schema>
        <script type="application/ld+json">
[
  {
    "@@context": "https://schema.org",
    "@type": "WebPage",
    "@id": "https://fitfreakpro.ru/for-personal-trainers/#webpage",
    "name": "FitFreak Pro для персональных тренеров",
    "description": "Страница для независимых персональных тренеров.",
    "url": "https://fitfreakpro.ru/for-personal-trainers/",
    "inLanguage": "ru-RU",
    "isPartOf": {
      "@id": "https://fitfreakpro.ru/#website"
    },
    "publisher": {
      "@id": "https://fitfreakpro.ru/#organization"
    }
  },
  {
    "@@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
      {
        "@type": "ListItem",
        "position": 1,
        "name": "Главная",
        "item": "https://fitfreakpro.ru/"
      },
      {
        "@type": "ListItem",
        "position": 2,
        "name": "Для персональных тренеров",
        "item": "https://fitfreakpro.ru/for-personal-trainers/"
      }
    ]
  }
]
        </script>
    </x-slot:schema>

<main id="main">

      <nav class="breadcrumbs container" aria-label="Хлебные крошки"><a href="/">Главная</a><span aria-hidden="true">/</span><span>Для персональных тренеров</span></nav>

      <section class="route-hero trainer-hero">
        <div class="container trainer-hero-grid">
          <div class="trainer-hero-copy">
            <div class="eyebrow">Для персональных тренеров</div>
            <h1>Вся работа с клиентами в одном месте.</h1>
            <p>FitFreak Pro объединяет упражнения, программы, питание, расписание и данные прогресса. Меньше переключений между сервисами — больше внимания клиентам.</p>
            <div class="cta-actions">
              <a class="btn btn-primary" href="/#download" data-track="app_download_click">Скачать приложение</a>
              <a class="btn btn-secondary" href="#trainer-workspace">Посмотреть возможности</a>
            </div>
            <ul class="trainer-hero-points" aria-label="Основные возможности">
              <li>Бесплатный аккаунт тренера</li>
              <li>Собственная библиотека</li>
              <li>Клиенты и прогресс</li>
            </ul>
          </div>
          <figure class="trainer-hero-visual">
            <img src="{{ asset('assets/img/app-screen-1.webp') }}" width="619" height="1100" alt="Панель тренера FitFreak Pro со списком клиентов" loading="eager" fetchpriority="high" />
          </figure>
        </div>
      </section>
      <section class="section coach-cards-section" id="trainer-workspace">
        <div class="container coach-section-heading">
          <div class="eyebrow">Рабочее пространство тренера</div>
          <h2>Всё необходимое для ежедневной работы.</h2>
          <p>От первого приглашения до проверки прогресса — основные действия собраны в понятном рабочем процессе.</p>
        </div>
        <div class="container route-grid coach-card-grid">
          <article class="route-card"><span class="route-card-index">01</span><h3>Ваш контент</h3><p>Создавайте собственную библиотеку упражнений и используйте свои видео, чтобы клиент видел именно ваш подход.</p></article>
          <article class="route-card"><span class="route-card-index">02</span><h3>Ваше расписание</h3><p>Планируйте блоки работы с клиентами в календаре тренера и держите день под контролем.</p></article>
          <article class="route-card"><span class="route-card-index">03</span><h3>Ваши клиенты</h3><p>Приглашайте клиентов, назначайте планы и смотрите данные прогресса в панели тренера.</p></article>
          <article class="route-card"><span class="route-card-index">04</span><h3>Полная картина</h3><p>Тренировки, питание и проверка прогресса собраны в одном рабочем сценарии для тренера и клиента.</p></article>
        </div>
      </section>
      <section class="section coach-gallery-section">
        <div class="container coach-gallery-heading">
          <span class="section-kicker">Внутри приложения</span>
          <h2>Инструменты, которые всегда под рукой.</h2>
        </div>
        <div class="container coach-screenshot-grid">
          <figure><img src="{{ asset('assets/img/app-screen-4.webp') }}" width="619" height="1100" alt="Разделы библиотеки упражнений тренера" loading="lazy" /><figcaption>Библиотека упражнений</figcaption></figure>
          <figure><img src="{{ asset('assets/img/app-screen-11.webp') }}" width="619" height="1100" alt="Календарь тренера с блоками расписания" loading="lazy" /><figcaption>Расписание тренера</figcaption></figure>
          <figure><img src="{{ asset('assets/img/app-screen-8.webp') }}" width="619" height="1100" alt="Детали упражнения клиента" loading="lazy" /><figcaption>Программы клиентов</figcaption></figure>
          <figure><img src="{{ asset('assets/img/app-screen-9.webp') }}" width="619" height="1100" alt="Экран отслеживания целей по питанию" loading="lazy" /><figcaption>Цели по питанию</figcaption></figure>
        </div>
      </section>
      <section class="section"><div class="container cta-panel"><h2>Добавьте свои упражнения, видео и программы в один рабочий процесс.</h2><p>Создавайте назначения, задавайте цели питания и проверяйте прогресс клиентов с бесплатного аккаунта тренера.</p><div class="cta-actions"><a class="btn btn-primary" href="/#download" data-track="app_download_click">Создать бесплатный аккаунт тренера</a><a class="btn btn-secondary" href="{{ route('how-it-works', absolute: false) }}">Посмотреть, как это работает</a></div></div></section>

    </main>
</x-layouts.public>
