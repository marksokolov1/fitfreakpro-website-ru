@php
$page = json_decode(<<<'PAGE'
{
  "title": "Как работает FitFreak Pro для персональных тренеров",
  "description": "Создайте библиотеку упражнений, пригласите клиентов, назначьте программы и цели питания, затем проверяйте прогресс в одном приложении.",
  "canonical": "https://fitfreakpro.ru/how-it-works/",
  "ogTitle": "Как работает FitFreak Pro для персональных тренеров",
  "ogDescription": "От собственной библиотеки упражнений до персональных программ и проверки прогресса клиента.",
  "ogImage": "https://fitfreakpro.ru/assets/img/app-screen-4.webp",
  "ogImageWidth": "619",
  "ogImageHeight": "1100",
  "ogImageAlt": "Библиотека упражнений тренера в FitFreak Pro",
  "twitterCard": "summary_large_image",
  "twitterTitle": "Как работает FitFreak Pro для персональных тренеров",
  "twitterDescription": "Организуйте упражнения, программы, питание и прогресс клиентов в одном приложении.",
  "twitterImage": "https://fitfreakpro.ru/assets/img/app-screen-4.webp",
  "twitterImageAlt": "Библиотека упражнений тренера в FitFreak Pro",
  "schema": "[{\"@context\":\"https://schema.org\",\"@type\":\"WebPage\",\"@id\":\"https://fitfreakpro.ru/how-it-works/#webpage\",\"url\":\"https://fitfreakpro.ru/how-it-works/\",\"name\":\"Как работает FitFreak Pro для персональных тренеров\",\"description\":\"Создайте бесплатный аккаунт тренера, библиотеку упражнений, пригласите клиентов, назначьте программы и проверяйте прогресс.\",\"isPartOf\":{\"@id\":\"https://fitfreakpro.ru/#website\"},\"about\":{\"@id\":\"https://fitfreakpro.ru/#software\"},\"inLanguage\":\"ru-RU\"},{\"@context\":\"https://schema.org\",\"@type\":\"BreadcrumbList\",\"itemListElement\":[{\"@type\":\"ListItem\",\"position\":1,\"name\":\"Главная\",\"item\":\"https://fitfreakpro.ru/\"},{\"@type\":\"ListItem\",\"position\":2,\"name\":\"Как работает\",\"item\":\"https://fitfreakpro.ru/how-it-works/\"}]}]"
}
PAGE, true, 512, JSON_THROW_ON_ERROR);
@endphp

<x-layouts.public :page="$page">
<main id="main" class="how-it-works-page">
  <section class="route-hero"><div class="container"><div class="eyebrow">Как работает</div><h1>От вашей методики к понятному плану для клиента.</h1><p>Создайте библиотеку упражнений, пригласите клиентов, назначьте персональные программы и цели питания, а затем проверяйте прогресс в одном приложении.</p></div></section>
  <section class="section how-it-works-workflow-section"><div class="container"><div class="workflow-timeline">
    <article class="workflow-step"><figure class="workflow-app-shot workflow-app-shot-registration"><img src="{{ asset('images/tutorial/coach/01-create-coach-account.png') }}" width="922" height="2000" alt="Регистрация профиля тренера в FitFreak Pro" loading="lazy" /></figure><div><span>Шаг 1</span><h2>Создайте бесплатный профиль тренера</h2><p>Добавьте опыт, специализацию, сертификаты и описание своего подхода.</p></div></article>
    <article class="workflow-step"><figure class="workflow-app-shot"><img src="{{ asset('images/tutorial/coach/02-exercise-library.png') }}" width="922" height="2000" alt="Библиотека упражнений в FitFreak Pro" loading="lazy" /></figure><div><span>Шаг 2</span><h2>Соберите библиотеку упражнений</h2><p>Добавьте свои упражнения, видео, инструкции и тренерские подсказки.</p></div></article>
    <article class="workflow-step"><figure class="workflow-app-shot"><img src="{{ asset('images/tutorial/coach/03-invite-client.png') }}" width="922" height="2000" alt="Приглашение клиента в FitFreak Pro" loading="lazy" /></figure><div><span>Шаг 3</span><h2>Пригласите клиента</h2><p>Отправьте приглашение, чтобы клиент создал аккаунт, активировал доступ и подключился к вам.</p></div></article>
    <article class="workflow-step"><figure class="workflow-app-shot"><img src="{{ asset('images/tutorial/coach/04-create-program.png') }}" width="922" height="2000" alt="Создание программы с упражнениями, подходами и нагрузкой" loading="lazy" /></figure><div><span>Шаг 4</span><h2>Назначьте программу</h2><p>Выберите сохраненную программу или создайте новую, настройте упражнения, повторения, вес или время и цели питания.</p></div></article>
    <article class="workflow-step"><figure class="workflow-app-shot"><img src="{{ asset('images/tutorial/coach/05-set-nutrition-targets.png') }}" width="798" height="1727" alt="Цели питания клиента в FitFreak Pro" loading="lazy" /></figure><div><span>Шаг 5</span><h2>Проверяйте и корректируйте</h2><p>Просматривайте тренировки, питание, параметры и данные прогресса, затем обновляйте план.</p></div></article>
  </div><p class="workflow-price-note">Приглашенный клиент активирует доступ за 990 ₽ на 30 дней. Оплата через ЮKassa.</p></div></section>
  <section class="section how-it-works-cta-section"><div class="container cta-panel"><h2>Посмотрите, как FitFreak Pro подходит вашему формату работы.</h2><p>Объедините таблицы, заметки, видео и сообщения в одном повторяемом рабочем процессе.</p><div class="cta-actions"><a class="btn btn-primary" href="{{ route('home') }}#download" data-track="hero_app_download_cta">Начать бесплатно как тренер</a><a class="btn btn-secondary" href="mailto:support@fitfreakpro.com?subject=Демонстрация%20FitFreak%20Pro" data-track="founder_walkthrough_click">Запросить демонстрацию</a></div></div></section>
</main>
</x-layouts.public>
