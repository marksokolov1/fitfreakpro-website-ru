@php
$page = json_decode(<<<'PAGE'
{
  "title": "Приложение для персональных тренеров | FitFreak Pro",
  "description": "Организуйте видео упражнений, программы, расписание, цели питания, приглашения клиентов и проверку прогресса в одном приложении.",
  "canonical": "https://fitfreakpro.ru/for-personal-trainers/",
  "ogTitle": "Приложение для персональных тренеров | FitFreak Pro",
  "ogDescription": "Для тренеров, которые ведут клиентов через таблицы, сообщения, заметки, календари и отдельные ссылки на видео.",
  "ogImage": "https://fitfreakpro.ru/assets/img/app-screen-8.webp",
  "ogImageWidth": "619",
  "ogImageHeight": "1100",
  "ogImageAlt": "Детали упражнения в программе клиента FitFreak Pro",
  "twitterCard": "summary_large_image",
  "twitterTitle": "Приложение для персональных тренеров | FitFreak Pro",
  "twitterDescription": "Соберите упражнения, видео, расписание, программы, питание и прогресс клиентов в одном приложении.",
  "twitterImage": "https://fitfreakpro.ru/assets/img/app-screen-8.webp",
  "twitterImageAlt": "Детали упражнения в программе клиента FitFreak Pro",
  "schema": "[{\"@context\":\"https://schema.org\",\"@type\":\"WebPage\",\"@id\":\"https://fitfreakpro.ru/for-personal-trainers/#webpage\",\"url\":\"https://fitfreakpro.ru/for-personal-trainers/\",\"name\":\"Приложение для персональных тренеров | FitFreak Pro\",\"description\":\"FitFreak Pro помогает организовать упражнения, видео, программы, расписание, питание и прогресс клиентов.\",\"isPartOf\":{\"@id\":\"https://fitfreakpro.ru/#website\"},\"about\":{\"@id\":\"https://fitfreakpro.ru/#software\"},\"inLanguage\":\"ru-RU\"},{\"@context\":\"https://schema.org\",\"@type\":\"BreadcrumbList\",\"itemListElement\":[{\"@type\":\"ListItem\",\"position\":1,\"name\":\"Главная\",\"item\":\"https://fitfreakpro.ru/\"},{\"@type\":\"ListItem\",\"position\":2,\"name\":\"Для персональных тренеров\",\"item\":\"https://fitfreakpro.ru/for-personal-trainers/\"}]}]"
}
PAGE, true, 512, JSON_THROW_ON_ERROR);
@endphp

<x-layouts.public :page="$page">
<main id="main">
  <nav class="breadcrumbs container" aria-label="Хлебные крошки"><a href="{{ route('home') }}">Главная</a><span aria-hidden="true">/</span><span>Для персональных тренеров</span></nav>
  <section class="route-hero trainer-hero">
    <div class="container trainer-hero-grid">
      <div class="trainer-hero-copy">
        <div class="eyebrow">Для персональных тренеров</div>
        <h1>Организуйте работу с клиентами без лишних инструментов.</h1>
        <p>FitFreak Pro создан для независимых персональных тренеров, онлайн-тренеров и небольших команд, которые ведут упражнения, программы, питание, расписание и данные клиентов без разрозненных таблиц, заметок и сообщений.</p>
        <div class="cta-actions"><a class="btn btn-primary" href="{{ route('home') }}#download" data-track="hero_app_download_cta">Скачать бесплатное приложение</a><a class="btn btn-secondary" href="#trainer-workspace">Посмотреть рабочее пространство</a></div>
        <ul class="trainer-hero-points" aria-label="Основные возможности для тренера"><li>Бесплатный аккаунт тренера</li><li>Своя библиотека упражнений</li><li>Клиенты и прогресс</li></ul>
      </div>
      <figure class="trainer-hero-visual"><img src="{{ asset('assets/img/app-screen-1.webp') }}" width="619" height="1100" alt="Панель тренера FitFreak Pro с клиентами, тренировками, питанием и прогрессом" loading="eager" fetchpriority="high" /></figure>
    </div>
  </section>
  <section class="section coach-cards-section" id="trainer-workspace">
    <div class="container coach-section-heading"><div class="eyebrow">Рабочее пространство тренера</div><h2>Все необходимое для ежедневной работы.</h2><p>От первого приглашения до проверки прогресса основные действия собраны в одном понятном процессе.</p></div>
    <div class="container route-grid coach-card-grid">
      <article class="route-card"><span class="route-card-index">01</span><h3>Ваш контент</h3><p>Создавайте свою библиотеку упражнений и используйте свои видео.</p></article>
      <article class="route-card"><span class="route-card-index">02</span><h3>Ваше расписание</h3><p>Планируйте работу с клиентами в календаре тренера.</p></article>
      <article class="route-card"><span class="route-card-index">03</span><h3>Ваши клиенты</h3><p>Приглашайте клиентов, назначайте планы и проверяйте прогресс.</p></article>
      <article class="route-card"><span class="route-card-index">04</span><h3>Работа с клиентом</h3><p>Тренировки, питание и прогресс остаются в одном рабочем процессе.</p></article>
    </div>
  </section>
  <section class="section coach-gallery-section">
    <div class="container coach-gallery-heading"><span class="section-kicker">В приложении</span><h2>Нужные инструменты всегда под рукой.</h2></div>
    <div class="container coach-screenshot-grid">
      <figure><img src="{{ asset('assets/img/app-screen-4.webp') }}" width="619" height="1100" alt="Разделы библиотеки упражнений тренера" loading="lazy" /><figcaption>Библиотека упражнений</figcaption></figure>
      <figure><img src="{{ asset('assets/img/app-screen-11.webp') }}" width="619" height="1100" alt="Календарь тренера с рабочими блоками" loading="lazy" /><figcaption>Календарь тренера</figcaption></figure>
      <figure><img src="{{ asset('assets/img/app-screen-8.webp') }}" width="619" height="1100" alt="Детали упражнения с видео и подходами" loading="lazy" /><figcaption>Программы клиентов</figcaption></figure>
      <figure><img src="{{ asset('assets/img/app-screen-9.webp') }}" width="619" height="1100" alt="Экран целей питания клиента" loading="lazy" /><figcaption>Цели питания</figcaption></figure>
    </div>
  </section>
  <section class="section"><div class="container cta-panel"><h2>Стройте работу вокруг своей методики, а не универсальных шаблонов.</h2><p>Скачайте FitFreak Pro и начните с бесплатного аккаунта тренера.</p><div class="cta-actions"><a class="btn btn-primary" href="{{ route('home') }}#download" data-track="hero_app_download_cta">Скачать бесплатное приложение</a><a class="btn btn-secondary" href="{{ route('pricing') }}">Посмотреть цены</a></div></div></section>
</main>
</x-layouts.public>
