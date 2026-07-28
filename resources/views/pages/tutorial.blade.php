@php
$page = json_decode(<<<'PAGE'
{
  "title": "Как пользоваться FitFreak Pro — инструкция для тренера и клиента",
  "description": "Пошаговая инструкция FitFreak Pro для тренеров и клиентов: регистрация, приглашения, программы, питание, прогресс и PDF-руководства.",
  "canonical": "https://fitfreakpro.ru/tutorial/",
  "ogTitle": "Как пользоваться FitFreak Pro — инструкция для тренера и клиента",
  "ogDescription": "Основные шаги тренера и клиента, а также полные PDF-руководства FitFreak Pro.",
  "ogImage": "https://fitfreakpro.ru/images/tutorial/coach/04-create-program.png",
  "ogImageWidth": "",
  "ogImageHeight": "",
  "ogImageAlt": "Создание программы тренировок в FitFreak Pro",
  "twitterCard": "summary_large_image",
  "twitterTitle": "Как пользоваться FitFreak Pro — инструкция",
  "twitterDescription": "Изучите основные шаги тренера и клиента и скачайте полные PDF-руководства.",
  "twitterImage": "https://fitfreakpro.ru/images/tutorial/coach/04-create-program.png",
  "twitterImageAlt": "Создание программы тренировок в FitFreak Pro",
  "schema": "[{\"@context\":\"https://schema.org\",\"@type\":\"WebPage\",\"@id\":\"https://fitfreakpro.ru/tutorial/#webpage\",\"url\":\"https://fitfreakpro.ru/tutorial/\",\"name\":\"Как пользоваться FitFreak Pro — инструкция для тренера и клиента\",\"description\":\"Пошаговая инструкция FitFreak Pro с полными PDF-руководствами.\",\"isPartOf\":{\"@id\":\"https://fitfreakpro.ru/#website\"},\"about\":{\"@id\":\"https://fitfreakpro.ru/#software\"},\"inLanguage\":\"ru-RU\"},{\"@context\":\"https://schema.org\",\"@type\":\"BreadcrumbList\",\"itemListElement\":[{\"@type\":\"ListItem\",\"position\":1,\"name\":\"Главная\",\"item\":\"https://fitfreakpro.ru/\"},{\"@type\":\"ListItem\",\"position\":2,\"name\":\"Инструкция\",\"item\":\"https://fitfreakpro.ru/tutorial/\"}]}]"
}
PAGE, true, 512, JSON_THROW_ON_ERROR);
@endphp

<x-layouts.public :page="$page">
<main id="main" class="tutorial-page">
  <section class="tutorial-hero">
    <div class="container tutorial-hero-grid">
      <div class="tutorial-hero-copy">
        <div class="eyebrow">FitFreak Pro — инструкция</div>
        <h1>Начните пользоваться FitFreak Pro за несколько минут.</h1>
        <p>Пройдите полный путь тренера и клиента: от создания аккаунта до назначенных тренировок, целей питания и проверки прогресса.</p>
        <nav class="tutorial-role-selector" aria-label="Выберите инструкцию для тренера или клиента">
          <a class="tutorial-role-option" href="#coach-guide" data-tutorial-role="coach-guide" data-track="tutorial_coach_jump" aria-current="location"><strong>Я тренер</strong><span>Создание программ, приглашения и проверка прогресса.</span></a>
          <a class="tutorial-role-option" href="#client-guide" data-tutorial-role="client-guide" data-track="tutorial_client_jump"><strong>Я клиент</strong><span>Подключение к тренеру, тренировки и передача прогресса.</span></a>
        </nav>
        <ul class="tutorial-trust-list" aria-label="Доступность и оплата FitFreak Pro"><li>Доступно на iPhone и Android</li><li>Оплата через ЮKassa</li><li>Программы и рекомендации определяет тренер</li></ul>
      </div>
      <div class="tutorial-hero-visual" aria-label="Экраны FitFreak Pro для тренера и клиента">
        <figure class="phone-shot tutorial-hero-phone tutorial-hero-phone-primary tutorial-hero-phone-dashboard"><img src="{{ asset('assets/img/app-screen-1.webp') }}" width="619" height="1100" alt="Панель тренера с клиентами и их текущими данными" loading="eager" /></figure>
        <figure class="phone-shot tutorial-hero-phone tutorial-hero-phone-secondary"><img src="{{ asset('images/tutorial/client/04-client-dashboard.png') }}" width="1242" height="2688" alt="Панель клиента с назначенной тренировкой и целями питания" loading="eager" /></figure>
      </div>
    </div>
  </section>

  <nav class="tutorial-path-nav" aria-label="Навигация по инструкции">
    <div class="container tutorial-path-nav-inner">
      <div class="tutorial-guide-switch" aria-label="Выберите руководство"><a href="#coach-guide" data-tutorial-nav="coach-guide" aria-current="location">Для тренера</a><a href="#client-guide" data-tutorial-nav="client-guide">Для клиента</a></div>
      <ol class="tutorial-progress-links is-active" data-tutorial-progress="coach-guide" aria-label="Шаги руководства тренера">
        <li><a href="#trainer-account" data-tutorial-step-link="trainer-account" aria-current="step">Аккаунт</a></li>
        <li><a href="#trainer-library" data-tutorial-step-link="trainer-library">Библиотека</a></li>
        <li><a href="#trainer-programs" data-tutorial-step-link="trainer-programs">Программы</a></li>
        <li><a href="#trainer-invite" data-tutorial-step-link="trainer-invite">Приглашения</a></li>
        <li><a href="#trainer-progress" data-tutorial-step-link="trainer-progress">Прогресс</a></li>
      </ol>
      <ol class="tutorial-progress-links" data-tutorial-progress="client-guide" aria-label="Шаги руководства клиента" aria-hidden="true">
        <li><a href="#client-account" data-tutorial-step-link="client-account">Аккаунт</a></li>
        <li><a href="#client-code" data-tutorial-step-link="client-code">Код</a></li>
        <li><a href="#client-subscription" data-tutorial-step-link="client-subscription">Доступ</a></li>
        <li><a href="#client-plan" data-tutorial-step-link="client-plan">План</a></li>
        <li><a href="#client-progress" data-tutorial-step-link="client-progress">Прогресс</a></li>
      </ol>
    </div>
  </nav>

  <section class="section tutorial-journey tutorial-journey-trainer" id="coach-guide">
    <div class="container section-header"><div><div class="section-kicker">Для тренера</div><h2 class="section-title">Создавайте программы и ведите клиентов.</h2><p class="section-copy">Для персональных тренеров, которые создают и назначают клиентские программы.</p></div></div>
    <div class="container tutorial-step-list">
      <article class="tutorial-step" id="trainer-account" data-tutorial-step-section>
        <div class="tutorial-step-copy"><span class="tutorial-step-number">01</span><h3>Создайте аккаунт тренера</h3><p>Создайте аккаунт для ведения клиентов. Добавьте контактные данные и профессиональный профиль, чтобы клиент понимал, кто создает его план.</p><p class="tutorial-step-why"><strong>Почему это важно:</strong> Профиль дает клиенту понятную информацию о специалисте, который его сопровождает.</p></div>
        <figure class="tutorial-media"><img src="{{ asset('images/tutorial/coach/01-create-coach-account.png') }}" width="1242" height="2688" alt="Форма аккаунта тренера FitFreak Pro с контактными и профессиональными данными" loading="lazy" /></figure>
      </article>
      <article class="tutorial-step is-reverse" id="trainer-library" data-tutorial-step-section>
        <div class="tutorial-step-copy"><span class="tutorial-step-number">02</span><h3>Соберите библиотеку упражнений</h3><p>Добавьте свои упражнения, инструкции, изображения и видео, чтобы каждое назначение отражало ваш подход.</p><p class="tutorial-step-why"><strong>Почему это важно:</strong> Программы сохраняют ваши демонстрации, формулировки и тренерские подсказки.</p></div>
        <figure class="tutorial-media"><img src="{{ asset('images/tutorial/coach/02-exercise-library.png') }}" width="1242" height="2688" alt="Собственная библиотека упражнений тренера с разделами" loading="lazy" /></figure>
      </article>
      <article class="tutorial-step" id="trainer-programs" data-tutorial-step-section>
        <div class="tutorial-step-copy"><span class="tutorial-step-number">03</span><h3>Создайте и назначьте программу</h3><p>Соберите программу из своей библиотеки, укажите вес, время, подходы или повторения и назначьте ее нужному клиенту.</p><p class="tutorial-step-why"><strong>Почему это важно:</strong> Каждый клиент получает конкретный план вместо общего списка упражнений.</p></div>
        <figure class="tutorial-media"><img src="{{ asset('images/tutorial/coach/04-create-program.png') }}" width="1242" height="2688" alt="Редактор программы с упражнениями, подходами, повторениями и нагрузкой" loading="lazy" /></figure>
      </article>
      <article class="tutorial-step is-reverse" id="trainer-invite" data-tutorial-step-section>
        <div class="tutorial-step-copy"><span class="tutorial-step-number">04</span><h3>Пригласите клиента</h3><p>Отправьте приглашение из аккаунта тренера. Клиент получит код для подключения своего аккаунта к вашему профилю.</p><p class="tutorial-step-why"><strong>Почему это важно:</strong> Код связывает нужного клиента с вашим сопровождением.</p></div>
        <figure class="tutorial-media"><img src="{{ asset('images/tutorial/coach/03-invite-client.png') }}" width="1242" height="2688" alt="Форма приглашения клиента и получения кода подключения" loading="lazy" /></figure>
      </article>
      <article class="tutorial-step" id="trainer-progress" data-tutorial-step-section>
        <div class="tutorial-step-copy"><span class="tutorial-step-number">05</span><h3>Задайте цели питания и проверяйте прогресс</h3><p>Укажите цели по калориям, нутриентам и воде, затем просматривайте тренировки, питание, параметры и данные прогресса клиента.</p><p class="tutorial-step-why"><strong>Почему это важно:</strong> Данные клиента помогают обоснованно корректировать план.</p></div>
        <figure class="tutorial-media"><img src="{{ asset('images/tutorial/coach/05-set-nutrition-targets.png') }}" width="1242" height="2688" alt="Цели клиента по калориям, нутриентам и воде" loading="lazy" /></figure>
      </article>
    </div>
  </section>

  <section class="tutorial-guide-band tutorial-guide-band-trainer" aria-labelledby="trainer-cta-title"><div class="container"><article class="tutorial-guide-card tutorial-action-card"><div class="section-kicker">Следующий шаг тренера</div><h2 id="trainer-cta-title">Готовы организовать свою работу?</h2><p>Создайте бесплатный аккаунт тренера в приложении FitFreak Pro для iPhone и Android.</p><div class="cta-actions"><a class="btn btn-primary" href="{{ route('home') }}#download" data-track="tutorial_coach_app_download">Начать бесплатно как тренер</a></div></article></div></section>

  <section class="section tutorial-journey tutorial-journey-client" id="client-guide">
    <div class="container section-header"><div><div class="section-kicker">Для клиента</div><h2 class="section-title">Подключитесь к тренеру и следуйте своему плану.</h2><p class="section-copy">Для клиентов, которые подключаются к тренеру и выполняют назначенные программы.</p></div></div>
    <div class="container tutorial-step-list">
      <article class="tutorial-step" id="client-account" data-tutorial-step-section>
        <div class="tutorial-step-copy"><span class="tutorial-step-number">01</span><h3>Создайте аккаунт клиента</h3><p>Выберите роль обычного пользователя, подтвердите email и заполните профиль, чтобы подключиться к тренеру.</p><p class="tutorial-step-why"><strong>Почему это важно:</strong> В аккаунте появится актуальный план от вашего тренера.</p></div>
        <figure class="tutorial-media"><img src="{{ asset('images/tutorial/client/01-create-client-account.png') }}" width="1242" height="2688" alt="Регистрация и подтверждение аккаунта клиента FitFreak Pro" loading="lazy" /></figure>
      </article>
      <article class="tutorial-step is-reverse" id="client-code" data-tutorial-step-section>
        <div class="tutorial-step-copy"><span class="tutorial-step-number">02</span><h3>Введите код приглашения тренера</h3><p>Введите код, полученный от тренера. Он связывает ваш аккаунт с тренером, который назначает тренировки и цели питания.</p><p class="tutorial-step-why"><strong>Почему это важно:</strong> Код подключает вас к нужному тренеру и его рекомендациям.</p></div>
        <figure class="tutorial-media"><img src="{{ asset('images/tutorial/client/02-enter-coach-code.png') }}" width="1242" height="2688" alt="Экран ввода кода приглашения тренера" loading="lazy" /></figure>
      </article>
      <article class="tutorial-step tutorial-step-payment" id="client-subscription" data-tutorial-step-section>
        <div class="tutorial-step-copy"><span class="tutorial-step-number">03</span><h3>Активируйте доступ через ЮKassa</h3><p>Проверьте условия в приложении и оплатите 990 ₽ за 30 дней через ЮKassa. После активации откроется цифровое сопровождение от вашего тренера.</p><p class="tutorial-step-why"><strong>Почему это важно:</strong> Активация открывает назначения и материалы вашего тренера.</p></div>
        <figure class="tutorial-media tutorial-media-payment"><img src="{{ asset('images/tutorial/client/03-yookassa.png') }}?v=20260728-layout" width="1080" height="545" alt="Экран ЮKassa для оплаты 990 ₽ за 30 дней доступа FitFreak Pro" loading="lazy" /></figure>
      </article>
      <article class="tutorial-step is-reverse" id="client-plan" data-tutorial-step-section>
        <div class="tutorial-step-copy"><span class="tutorial-step-number">04</span><h3>Откройте назначенный план</h3><p>После активации откройте панель, чтобы увидеть текущую тренировку и цели питания от своего тренера.</p><p class="tutorial-step-why"><strong>Почему это важно:</strong> Актуальные тренировки и цели остаются в одном месте.</p></div>
        <figure class="tutorial-media"><img src="{{ asset('images/tutorial/client/04-client-dashboard.png') }}" width="1242" height="2688" alt="Панель клиента с назначенной тренировкой и целями питания" loading="lazy" /></figure>
      </article>
      <article class="tutorial-step" id="client-progress" data-tutorial-step-section>
        <div class="tutorial-step-copy"><span class="tutorial-step-number">05</span><h3 class="tutorial-step-title-long">Выполняйте тренировки, следуйте целям питания и отправляйте прогресс</h3><p>Смотрите демонстрации и инструкции, выполняйте назначения, следуйте целям питания и воды и отправляйте данные прогресса тренеру.</p><p class="tutorial-step-why"><strong>Почему это важно:</strong> Тренер проверяет ваши данные и корректирует созданный им план.</p></div>
        <figure class="tutorial-media"><img src="{{ asset('images/tutorial/client/05-exercise-video.png') }}" width="1242" height="2688" alt="Упражнение клиента с видео и инструкциями тренера" loading="lazy" /></figure>
      </article>
    </div>
  </section>

  <section class="tutorial-guide-band tutorial-guide-band-client" aria-labelledby="client-cta-title"><div class="container"><article class="tutorial-guide-card tutorial-action-card"><div class="section-kicker">Следующий шаг клиента</div><h2 id="client-cta-title">Готовы подключиться к тренеру?</h2><p>Введите код приглашения в приложении и активируйте доступ через ЮKassa.</p><div class="cta-actions"><a class="btn btn-primary" href="{{ route('home') }}#download" data-track="tutorial_client_app_download">У меня есть код приглашения</a></div></article></div></section>

  <section class="tutorial-resource-band" id="pdf-guides" aria-labelledby="pdf-guides-title">
    <div class="container"><div class="tutorial-resource-card"><div><div class="section-kicker">Подробные руководства</div><h2 id="pdf-guides-title">Нужна полная инструкция?</h2><p>Скачайте подробное руководство для тренера или клиента.</p></div><div class="tutorial-resource-links">
      <a href="{{ asset('downloads/fitfreak-pro-coach-guide-ru.pdf') }}" target="_blank" rel="noopener noreferrer" download data-track="coach_pdf_download">Для тренера <span aria-hidden="true">PDF</span><span class="sr-only">(PDF)</span></a>
      <a href="{{ asset('downloads/fitfreak-pro-client-guide-ru.pdf') }}" target="_blank" rel="noopener noreferrer" download data-track="client_pdf_download">Для клиента <span aria-hidden="true">PDF</span><span class="sr-only">(PDF)</span></a>
    </div></div></div>
  </section>
</main>
</x-layouts.public>
