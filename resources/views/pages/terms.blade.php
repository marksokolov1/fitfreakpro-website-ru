@php
$page = json_decode(<<<'PAGE'
{
  "title": "Условия использования | FitFreak Pro",
  "description": "Предварительный обзор условий FitFreak Pro для тренеров и приглашенных клиентов.",
  "robots": "noindex,follow",
  "canonical": "https://fitfreakpro.ru/terms/",
  "ogTitle": "Условия использования | FitFreak Pro",
  "ogDescription": "Предварительный обзор условий FitFreak Pro для тренеров и клиентов.",
  "ogImage": "https://fitfreakpro.ru/assets/img/fitfreak-logo.png",
  "ogImageWidth": "640",
  "ogImageHeight": "640",
  "ogImageAlt": "Логотип FitFreak Pro",
  "twitterCard": "summary",
  "twitterTitle": "Условия использования | FitFreak Pro",
  "twitterDescription": "Предварительный обзор условий FitFreak Pro.",
  "twitterImage": "https://fitfreakpro.ru/assets/img/fitfreak-logo.png",
  "twitterImageAlt": "Логотип FitFreak Pro",
  "schema": "[{\"@context\":\"https://schema.org\",\"@type\":\"WebPage\",\"@id\":\"https://fitfreakpro.ru/terms/#webpage\",\"url\":\"https://fitfreakpro.ru/terms/\",\"name\":\"Условия использования | FitFreak Pro\",\"description\":\"Предварительный обзор условий FitFreak Pro.\",\"isPartOf\":{\"@id\":\"https://fitfreakpro.ru/#website\"},\"about\":{\"@id\":\"https://fitfreakpro.ru/#software\"},\"inLanguage\":\"ru-RU\"},{\"@context\":\"https://schema.org\",\"@type\":\"BreadcrumbList\",\"itemListElement\":[{\"@type\":\"ListItem\",\"position\":1,\"name\":\"Главная\",\"item\":\"https://fitfreakpro.ru/\"},{\"@type\":\"ListItem\",\"position\":2,\"name\":\"Условия\",\"item\":\"https://fitfreakpro.ru/terms/\"}]}]"
}
PAGE, true, 512, JSON_THROW_ON_ERROR);
@endphp

<x-layouts.public :page="$page">
<main id="main">
  <!-- LEGAL_REVIEW_REQUIRED: Условия должны быть проверены и одобрены квалифицированным юристом. -->
  <section class="page-hero"><div class="container"><div class="eyebrow">Условия</div><h1>Условия использования</h1><p>Эта страница содержит предварительный обзор обязанностей тренеров и клиентов FitFreak Pro и требует юридической проверки.</p></div></section>
  <section class="container policy-layout" style="grid-template-columns:1fr;">
    <div class="policy-content">
      <article class="terms-card"><h2>Использование платформы</h2><p>FitFreak Pro — приложение для персональных тренеров и приглашенных клиентов. Тренеры создают библиотеки упражнений, приглашают клиентов, назначают программы, задают цели питания и просматривают отправленные данные. Клиенты получают доступ к назначениям после приглашения и оплаты.</p></article>
      <article class="terms-card"><h2>Ответственность тренера и клиента</h2><p>Тренер отвечает за рекомендации, программы, цели питания, видео и другой контент, который предоставляет через платформу. Клиент отвечает за безопасное использование платформы и разумное следование рекомендациям тренера.</p></article>
      <article class="terms-card"><h2>Не медицинский и не экстренный сервис</h2><p>FitFreak Pro не является медицинской организацией, поставщиком медицинских услуг или экстренной службой. Не используйте FitFreak Pro для экстренной помощи, диагностики, лечения или иных медицинских целей.</p></article>
      <article class="terms-card"><h2>Оплата и доступ</h2><p>Аккаунт тренера — 0 ₽. Приглашенный клиент оплачивает 990 ₽ за 30 дней доступа через ЮKassa. Профессиональная услуга тренера оплачивается отдельно.</p></article>
      <article class="terms-card"><h2>Контакты</h2><p>Вопросы об условиях можно отправить на <a class="email-link" href="mailto:support@fitfreakpro.com" data-track="support_email_click">support@fitfreakpro.com</a>.</p></article>
    </div>
  </section>
</main>
</x-layouts.public>
