@php
$page = json_decode(<<<'PAGE'
{
  "title": "Политика конфиденциальности | FitFreak Pro",
  "description": "Предварительное описание обработки данных в FitFreak Pro для тренеров и приглашенных клиентов.",
  "robots": "noindex,follow",
  "canonical": "https://fitfreakpro.ru/privacy/",
  "ogTitle": "Политика конфиденциальности | FitFreak Pro",
  "ogDescription": "Предварительное описание обработки данных тренеров и приглашенных клиентов FitFreak Pro.",
  "ogImage": "https://fitfreakpro.ru/assets/img/fitfreak-logo.png",
  "ogImageWidth": "640",
  "ogImageHeight": "640",
  "ogImageAlt": "Логотип FitFreak Pro",
  "twitterCard": "summary",
  "twitterTitle": "Политика конфиденциальности | FitFreak Pro",
  "twitterDescription": "Предварительное описание обработки данных FitFreak Pro.",
  "twitterImage": "https://fitfreakpro.ru/assets/img/fitfreak-logo.png",
  "twitterImageAlt": "Логотип FitFreak Pro",
  "schema": "[{\"@context\":\"https://schema.org\",\"@type\":\"WebPage\",\"@id\":\"https://fitfreakpro.ru/privacy/#webpage\",\"url\":\"https://fitfreakpro.ru/privacy/\",\"name\":\"Политика конфиденциальности | FitFreak Pro\",\"description\":\"Предварительное описание обработки данных FitFreak Pro.\",\"isPartOf\":{\"@id\":\"https://fitfreakpro.ru/#website\"},\"about\":{\"@id\":\"https://fitfreakpro.ru/#software\"},\"inLanguage\":\"ru-RU\"},{\"@context\":\"https://schema.org\",\"@type\":\"BreadcrumbList\",\"itemListElement\":[{\"@type\":\"ListItem\",\"position\":1,\"name\":\"Главная\",\"item\":\"https://fitfreakpro.ru/\"},{\"@type\":\"ListItem\",\"position\":2,\"name\":\"Конфиденциальность\",\"item\":\"https://fitfreakpro.ru/privacy/\"}]}]"
}
PAGE, true, 512, JSON_THROW_ON_ERROR);
@endphp

<x-layouts.public :page="$page">
<main id="main">
  <section class="page-hero">
    <div class="container">
      <div class="eyebrow">Политика конфиденциальности</div>
      <h1>Данные тренера и клиента в FitFreak Pro.</h1>
      <p>Эта политика описывает, как FitFreak Pro может собирать, использовать, хранить и передавать информацию при работе с сайтом, мобильным приложением и платформой.</p>
      <p style="font-size:.95rem;color:rgba(255,255,255,.65);"><strong>Статус:</strong> предварительный текст. Требуется юридическая проверка перед публикацией.</p>
    </div>
  </section>
  <section class="container policy-layout">
    <aside class="sidebar-nav" aria-label="Разделы политики конфиденциальности">
      <a href="#introduction">Введение</a><a href="#information">Какие данные мы собираем</a><a href="#account">Данные аккаунта</a><a href="#coach-client">Данные тренера и клиента</a><a href="#workout">Тренировки, питание и прогресс</a><a href="#payments">Оплата и доступ</a><a href="#use">Как используются данные</a><a href="#sharing">Когда данные передаются</a><a href="#security">Безопасность</a><a href="#retention">Срок хранения</a><a href="#choices">Возможности пользователя</a><a href="#children">Данные детей</a><a href="#third-party">Сторонние сервисы</a><a href="#stores">App Store и Google Play</a><a href="#changes">Изменения политики</a><a href="#contact">Контакты</a>
    </aside>
    <div class="policy-content">
      <article class="policy-card" id="introduction"><h2>Введение</h2><p>FitFreak Pro — приложение для тренеров, которые ведут клиентов, создают библиотеки упражнений, назначают программы, задают цели питания и просматривают данные прогресса.</p><div class="disclaimer-box"><strong>Важно:</strong> FitFreak Pro не является медицинской организацией, медицинским сервисом, экстренной службой или заменой профессиональной медицинской консультации. Не отправляйте через платформу экстренные или особо чувствительные медицинские данные без надлежащих оснований.</div></article>
      <article class="policy-card" id="information"><h2>Какие данные мы собираем</h2><p>Могут обрабатываться данные, которые вы предоставляете, информация, создаваемая при использовании платформы, и ограниченные технические сведения.</p><p>В том числе:</p><ul><li>Имя</li><li>Адрес электронной почты</li><li>Данные для входа</li><li>Профиль тренера или клиента</li><li>Планы тренировок</li><li>Материалы библиотеки упражнений</li><li>Видео или ссылки на видео</li><li>Цели питания</li><li>Данные прогресса клиента</li><li>Информация чек-инов</li><li>Информация об оплате и доступе</li><li>Данные устройства, браузера и использования</li></ul></article>
      <article class="policy-card" id="account"><h2>Данные аккаунта</h2><p>При создании аккаунта могут собираться имя, email, пароль, роль и настройки аккаунта.</p><p>Тренеры создают аккаунты для организации своей работы. Клиенты подключаются после приглашения от тренера.</p></article>
      <article class="policy-card" id="coach-client"><h2>Данные тренера и клиента</h2><p>FitFreak Pro позволяет тренеру приглашать клиентов и вести связанную с сопровождением информацию: назначенные тренировки, цели питания, изменения прогресса и другие отправленные клиентом сведения.</p><p>Клиент понимает, что отправленная через FitFreak Pro информация может быть доступна его тренеру для сопровождения и проверки прогресса.</p></article>
      <article class="policy-card" id="workout"><h2>Тренировки, питание и прогресс</h2><p>FitFreak Pro может хранить планы тренировок, детали упражнений, видео, цели питания, чек-ины, заметки и другие данные сопровождения.</p><p>Они помогают тренеру организовать работу, а клиенту — следовать назначенному плану.</p></article>
      <article class="policy-card" id="payments"><h2>Оплата и доступ</h2><p>После приглашения от тренера клиент может оплатить 990 ₽ за 30 дней доступа через ЮKassa. Платежные данные могут обрабатываться сторонним платежным сервисом.</p><p>FitFreak Pro не намерен хранить полные номера банковских карт, если их безопасная обработка выполняется платежным провайдером.</p></article>
      <article class="policy-card" id="use"><h2>Как используются данные</h2><p>Данные могут использоваться, чтобы:</p><ul><li>Создавать аккаунты и управлять ими</li><li>Позволять тренерам приглашать и вести клиентов</li><li>Показывать клиентам назначенные тренировки и цели питания</li><li>Обрабатывать оплату и доступ</li><li>Предоставлять поддержку</li><li>Улучшать работу платформы</li><li>Предотвращать злоупотребления</li><li>Отправлять сервисные сообщения</li><li>Поддерживать безопасность и надежность</li><li>Соблюдать требования законодательства</li></ul></article>
      <article class="policy-card" id="sharing"><h2>Когда данные передаются</h2><p>Мы не продаем персональные данные.</p><p>Информация может передаваться в ограниченных случаях:</p><ul><li>Тренеру, если клиент отправляет данные для проверки</li><li>Поставщикам сервисов, которые обеспечивают работу платформы</li><li>Платежным провайдерам для обработки оплаты</li><li>Если этого требует закон или официальный запрос</li><li>Для защиты прав, безопасности и надежности FitFreak Pro и пользователей</li><li>При реорганизации или передаче бизнеса</li></ul></article>
      <article class="policy-card" id="security"><h2>Безопасность данных</h2><p>Для защиты информации могут применяться разумные административные, технические и организационные меры.</p><p>Ни одна цифровая платформа не может гарантировать абсолютную безопасность. Пользователь отвечает за конфиденциальность данных для входа.</p></article>
      <article class="policy-card" id="retention"><h2>Срок хранения</h2><p>Информация хранится столько, сколько необходимо для работы платформы, поддержки аккаунтов, соблюдения требований, урегулирования споров и исполнения соглашений.</p><p>Запросить помощь с удалением аккаунта или данными можно через поддержку.</p></article>
      <article class="policy-card" id="choices"><h2>Возможности пользователя</h2><p>Часть данных аккаунта можно обновлять в приложении.</p><p>Через поддержку можно запросить помощь с:</p><ul><li>Обновлением данных аккаунта</li><li>Удалением аккаунта</li><li>Доступом к определенным персональным данным</li><li>Проблемами со входом или оплатой</li></ul></article>
      <article class="policy-card" id="children"><h2>Данные детей</h2><p>FitFreak Pro не предназначен для детей младше 13 лет. Мы не намерены сознательно собирать их персональные данные.</p><p>Если станет известно о таких данных, будут предприняты меры для их удаления.</p></article>
      <article class="policy-card" id="third-party"><h2>Сторонние сервисы</h2><p>Для хостинга, аналитики, платежей, распространения приложения, email, поддержки и других операций могут использоваться сторонние сервисы.</p><p>Они могут обрабатывать информацию в соответствии со своими политиками конфиденциальности.</p></article>
      <article class="policy-card" id="stores"><h2>App Store и Google Play</h2><p>FitFreak Pro доступен в App Store и Google Play. Использование магазинов регулируется условиями и политиками Apple и Google.</p><div class="app-download-inline"><a class="store-badge" href="https://apps.apple.com/us/app/fit-freak-pro/id6742347988" target="_blank" rel="noopener noreferrer" data-track="app_store_click" aria-label="Скачать FitFreak Pro в App Store"><span>Скачать в<strong>App Store</strong></span></a><a class="store-badge" href="https://play.google.com/store/apps/details?id=com.duseca.fitfreak" target="_blank" rel="noopener noreferrer" data-track="google_play_click" aria-label="Скачать FitFreak Pro в Google Play"><span>Доступно в<strong>Google Play</strong></span></a></div></article>
      <article class="policy-card" id="changes"><h2>Изменения политики</h2><p>Политика может обновляться. При изменениях дата вступления в силу будет обновлена.</p><p>Продолжая использовать FitFreak Pro после публикации изменений, пользователь принимает обновленную политику.</p></article>
      <article class="policy-card" id="contact"><h2>Контакты</h2><p>По вопросам конфиденциальности, аккаунта или данных напишите:</p><p><a class="email-link" href="mailto:support@fitfreakpro.com" data-track="support_email_click">support@fitfreakpro.com</a></p></article>
    </div>
  </section>
</main>
</x-layouts.public>
