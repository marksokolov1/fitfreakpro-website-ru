@php
$page = json_decode(<<<'PAGE'
{
  "title": "О FitFreak Pro | Приложение для персональных тренеров",
  "description": "FitFreak Pro помогает организовать библиотеку упражнений, программы клиентов, цели питания, расписание и проверку прогресса.",
  "canonical": "https://fitfreakpro.ru/about/",
  "ogTitle": "О FitFreak Pro | Приложение для персональных тренеров",
  "ogDescription": "Практичное приложение для упражнений, программ, целей питания, расписания и прогресса клиентов.",
  "ogImage": "https://fitfreakpro.ru/assets/img/fitfreak-logo.png",
  "ogImageWidth": "640",
  "ogImageHeight": "640",
  "ogImageAlt": "Логотип FitFreak Pro",
  "twitterCard": "summary",
  "twitterTitle": "О FitFreak Pro | Приложение для персональных тренеров",
  "twitterDescription": "FitFreak Pro помогает тренерам отказаться от разрозненных таблиц, заметок, сообщений и ссылок на видео.",
  "twitterImage": "https://fitfreakpro.ru/assets/img/fitfreak-logo.png",
  "twitterImageAlt": "Логотип FitFreak Pro",
  "schema": "[{\"@context\":\"https://schema.org\",\"@type\":\"AboutPage\",\"@id\":\"https://fitfreakpro.ru/about/#webpage\",\"url\":\"https://fitfreakpro.ru/about/\",\"name\":\"О FitFreak Pro\",\"description\":\"FitFreak Pro — приложение для организации упражнений, программ, питания, расписания и прогресса клиентов.\",\"isPartOf\":{\"@id\":\"https://fitfreakpro.ru/#website\"},\"about\":{\"@id\":\"https://fitfreakpro.ru/#software\"},\"inLanguage\":\"ru-RU\"},{\"@context\":\"https://schema.org\",\"@type\":\"BreadcrumbList\",\"itemListElement\":[{\"@type\":\"ListItem\",\"position\":1,\"name\":\"Главная\",\"item\":\"https://fitfreakpro.ru/\"},{\"@type\":\"ListItem\",\"position\":2,\"name\":\"О нас\",\"item\":\"https://fitfreakpro.ru/about/\"}]}]"
}
PAGE, true, 512, JSON_THROW_ON_ERROR);
@endphp

<x-layouts.public :page="$page">
<main id="main">
  <section class="route-hero"><div class="container"><div class="eyebrow">О нас</div><h1>Создано, чтобы упростить самостоятельную работу тренера.</h1><p>FitFreak Pro — практичный инструмент для тренеров, которым надоело вести программы, видео, цели питания и данные клиентов в разных сервисах.</p></div></section>
  <section class="section" style="padding-top:0;"><div class="container split-panel compact"><div><h2>Создано для понятной работы с клиентами.</h2><p class="section-copy">FitFreak Pro помогает персональным тренерам предоставлять индивидуальные программы без разрозненных таблиц, видео, целей питания и сообщений.</p><p class="section-copy">Тренер остается в центре процесса. FitFreak Pro дает структуру для упражнений, назначений и проверки прогресса.</p></div><div class="founder-card"><h3>Поговорите с командой FitFreak Pro.</h3><p>Посмотрите рабочий процесс тренера и клиента, задайте вопросы и оцените, подходит ли приложение вашему формату работы.</p><a class="btn btn-primary" href="mailto:support@fitfreakpro.com?subject=Демонстрация%20FitFreak%20Pro" data-track="founder_walkthrough_click">Запросить демонстрацию</a></div></div></section>
  <section class="section"><div class="container route-grid"><article class="route-card"><h2>Что такое FitFreak Pro</h2><p>Приложение для библиотек упражнений, назначения тренировок, целей питания, приглашений клиентов и проверки прогресса.</p></article><article class="route-card"><h2>Чем FitFreak Pro не является</h2><p>Это не медицинский сервис, не приложение с готовыми универсальными тренировками, не система управления спортзалом, не сервис записи на занятия и не замена персональному тренеру.</p></article></div></section>
</main>
</x-layouts.public>
