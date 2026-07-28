<x-layouts.public
    title="FitFreak Pro — приложение для тренеров и работы с клиентами"
    description="Создавайте планы тренировок, ведите клиентов, назначайте упражнения, отслеживайте прогресс и предоставляйте персональное сопровождение с FitFreak Pro."
    canonical-path="/"
    social-image-alt="FitFreak Pro: профессиональная платформа для персональных тренеров"
>
    <x-slot:schema>
        <script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Organization",
      "@id": "https://fitfreakpro.ru/#organization",
      "name": "FitFreak Pro",
      "url": "https://fitfreakpro.ru/",
      "logo": "https://fitfreakpro.ru/assets/img/fitfreak-logo.png",
      "sameAs": [
        "https://www.linkedin.com/company/fitfreak-pro/"
      ]
    },
    {
      "@type": "WebSite",
      "@id": "https://fitfreakpro.ru/#website",
      "name": "FitFreak Pro",
      "url": "https://fitfreakpro.ru/",
      "inLanguage": "ru-RU",
      "publisher": {
        "@id": "https://fitfreakpro.ru/#organization"
      }
    },
    {
      "@type": "SoftwareApplication",
      "@id": "https://fitfreakpro.ru/#software",
      "name": "FitFreak Pro",
      "applicationCategory": "BusinessApplication",
      "operatingSystem": [
        "iOS",
        "Android"
      ],
      "description": "Профессиональная платформа для персональных тренеров: собственные упражнения, программы, назначения, питание и прогресс клиентов в одном рабочем процессе.",
      "url": "https://fitfreakpro.ru/",
      "downloadUrl": [
        "https://apps.apple.com/us/app/fit-freak-pro/id6742347988",
        "https://play.google.com/store/apps/details?id=com.duseca.fitfreak"
      ],
      "publisher": {
        "@id": "https://fitfreakpro.ru/#organization"
      },
      "offers": [
        {
          "@type": "Offer",
          "name": "Аккаунт тренера",
          "price": "0",
          "priceCurrency": "RUB"
        },
        {
          "@type": "Offer",
          "name": "Доступ приглашенного клиента",
          "price": "990",
          "priceCurrency": "RUB"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "@id": "https://fitfreakpro.ru/#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Платит ли тренер за платформу?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Нет. Аккаунт тренера — 0 ₽. Тренер может добавлять упражнения и видео, создавать программы, задавать цели питания, приглашать клиентов и просматривать их прогресс."
          }
        },
        {
          "@type": "Question",
          "name": "Сколько стоит доступ клиента?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Доступ клиента — 990 ₽ за 30 дней. Оплата через ЮKassa."
          }
        },
        {
          "@type": "Question",
          "name": "Почему клиент оплачивает доступ отдельно?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Клиент оплачивает доступ к упражнениям, видео, программам, целям питания и передаче прогресса в приложении. Профессиональная услуга тренера оплачивается отдельно."
          }
        },
        {
          "@type": "Question",
          "name": "Можно ли использовать свои упражнения и видео?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Да. Вы создаете собственную библиотеку и сами выбираете упражнения, видео и рекомендации для клиентов."
          }
        },
        {
          "@type": "Question",
          "name": "Можно ли продолжать работать по своей методике?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Да. Вы сами выбираете упражнения, собираете программы, задаете цели питания и решаете, как корректировать работу с клиентом."
          }
        },
        {
          "@type": "Question",
          "name": "Что происходит после приглашения клиента?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Клиент вводит код приглашения, оплачивает доступ через ЮKassa и видит назначенные вами упражнения, видео, программу и цели питания."
          }
        },
        {
          "@type": "Question",
          "name": "Что видит клиент в приложении?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Клиент видит персональную программу, упражнения и видео тренера, цели питания и разделы для передачи данных прогресса."
          }
        },
        {
          "@type": "Question",
          "name": "Может ли клиент пользоваться FitFreak Pro на телефоне?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Да. FitFreak Pro доступен на iPhone и Android."
          }
        }
      ]
    }
  ]
}
        </script>
    </x-slot:schema>

<main id="main" class="home-page">

      <section class="hero redesign-hero">
        <div class="container hero-grid">
          <div class="hero-copy-wrap">
            <h1>Ведите больше клиентов <span class="lime-text">без бесконечных таблиц и переписок.</span></h1>
            <p class="hero-copy">Создавайте собственные упражнения и программы, назначайте питание и отслеживайте прогресс клиентов в одном приложении. Аккаунт тренера — 0 ₽.</p>
            <div class="hero-actions">
              <a class="btn btn-primary hero-primary-cta" href="#download" data-track="app_download_click">Создать бесплатный аккаунт тренера</a>
              <a class="btn btn-secondary" href="#workflow" data-track="workflow_link_click">Посмотреть, как это работает</a>
            </div>
          </div>
          <div class="product-shot-grid" aria-label="Скриншоты приложения FitFreak Pro">
            <figure class="phone-shot phone-shot-primary"><img src="{{ asset('assets/img/app-screen-1.webp') }}" width="619" height="1100" alt="Панель тренера с клиентами в FitFreak Pro" loading="eager" fetchpriority="high" /></figure>
            <figure class="phone-shot phone-shot-secondary"><img src="{{ asset('assets/img/app-screen-7.webp') }}" width="619" height="1100" alt="Персональный план клиента в приложении FitFreak Pro" loading="eager" /></figure>
          </div>
        </div>
      </section>

      <section class="section trainer-problem home-band home-band-muted" id="trainer-problem">
        <div class="container problem-layout">
          <div class="problem-copy">
            <div class="section-kicker">Проблема тренера</div>
            <h2 class="section-title">Сопровождение клиентов не должно быть разбросано по пяти инструментам.</h2>
            <p class="section-copy">Telegram для сообщений, таблицы для программ, PDF для инструкций, отдельные ссылки на видео и ручные заметки о прогрессе — так тренеру приходится собирать работу с каждым клиентом по частям.</p>
            <p class="problem-conclusion">FitFreak Pro объединяет упражнения, программы, питание и прогресс клиента в одном приложении.</p>
          </div>
          <div class="trainer-tools" aria-label="Разрозненные инструменты в работе тренера">
            <article class="trainer-tool"><span>01</span><div><h3>Telegram</h3><p>Обсуждение тренировок и обратная связь</p></div></article>
            <article class="trainer-tool"><span>02</span><div><h3>Таблицы</h3><p>Программы, назначения и расписание</p></div></article>
            <article class="trainer-tool"><span>03</span><div><h3>PDF</h3><p>Планы и инструкции для клиентов</p></div></article>
            <article class="trainer-tool"><span>04</span><div><h3>Видео</h3><p>Отдельные ссылки на технику упражнений</p></div></article>
            <article class="trainer-tool"><span>05</span><div><h3>Заметки</h3><p>Ручная фиксация прогресса и питания</p></div></article>
          </div>
        </div>
      </section>

      <section class="section trainer-trust home-band home-band-primary" id="product">
        <span id="built-for-trainers" class="legacy-anchor" aria-hidden="true"></span>
        <div class="container trainer-trust-layout">
          <div class="trainer-trust-copy">
            <div class="section-kicker">Создано для персональных тренеров</div>
            <h2 class="section-title">Вы определяете, как работать с клиентом.</h2>
            <p class="section-copy">Создавайте собственные упражнения, используйте свои видео, собирайте персональные программы и самостоятельно принимайте решения по каждому клиенту. FitFreak Pro организует этот процесс, но не заменяет тренера.</p>
          </div>
          <div class="trainer-ownership-list" aria-label="Что остается под контролем тренера">
            <article><span>01</span><div><h3>Ваши упражнения и видео</h3></div></article>
            <article><span>02</span><div><h3>Ваши персональные программы</h3></div></article>
            <article><span>03</span><div><h3>Ваши решения по каждому клиенту</h3></div></article>
            <article><span>04</span><div><h3>Ваши отношения с клиентами</h3></div></article>
          </div>
        </div>
        <div class="container metrics-row">
          <div class="metric-card"><strong>0 ₽</strong><span>для тренера</span></div>
          <div class="metric-card"><strong>990 ₽</strong><span>за 30 дней для клиента</span></div>
          <div class="metric-card"><strong>1</strong><span>рабочий процесс</span></div>
        </div>
      </section>

      <section class="section feature-showcase home-band" id="core-features">
        <span id="features" class="legacy-anchor" aria-hidden="true"></span>
        <span id="coach-library" class="legacy-anchor" aria-hidden="true"></span>
        <div class="container feature-showcase-grid">
          <div class="feature-showcase-copy">
            <div class="section-kicker">01 · Ваша база упражнений</div>
            <h2>Создайте собственную библиотеку упражнений</h2>
            <p>Добавляйте собственные упражнения, видео, описания и инструкции, которые используете в работе с клиентами.</p>
            <ul class="interface-callouts" aria-label="Возможности библиотеки упражнений">
              <li>Свои упражнения</li>
              <li>Собственные видео</li>
              <li>Описания и инструкции</li>
            </ul>
          </div>
          <figure class="feature-product-frame">
            <img src="{{ asset('assets/img/app-screen-2.webp') }}" width="619" height="1100" alt="Библиотека упражнений с собственными видео тренера в FitFreak Pro" loading="lazy" />
          </figure>
        </div>
      </section>

      <section class="section feature-showcase feature-showcase-reverse home-band" id="client-process">
        <div class="container feature-showcase-grid">
          <figure class="feature-product-frame">
            <img src="{{ asset('assets/img/app-screen-3.webp') }}" width="619" height="1100" alt="Назначение персональной программы клиенту в FitFreak Pro" loading="lazy" />
          </figure>
          <div class="feature-showcase-copy">
            <div class="section-kicker">02 · Персональный план</div>
            <h2>Назначайте персональные программы</h2>
            <p>Каждый клиент получает план, созданный его тренером: упражнения, подходы и нагрузку, а также связанные цели питания и данные прогресса.</p>
            <ul class="interface-callouts" aria-label="Возможности персональных программ">
              <li>Тренировки и нагрузка</li>
              <li>Цели питания</li>
              <li>Данные прогресса</li>
            </ul>
          </div>
        </div>
      </section>

      <section class="section feature-showcase feature-showcase-compact home-band" id="coach-calendar">
        <div class="container feature-showcase-grid">
          <figure class="feature-product-frame feature-product-frame-calendar">
            <img src="{{ asset('images/tutorial/coach/06-coach-calendar.png') }}" width="922" height="2000" alt="Календарь тренера с блоком работы с клиентом в FitFreak Pro" loading="lazy" />
          </figure>
          <div class="feature-showcase-copy">
            <div class="section-kicker">03 · Расписание тренера</div>
            <h2>Планируйте работу с клиентами</h2>
            <p>Создавайте блоки расписания на выбранный день и держите рабочий календарь рядом с клиентскими назначениями.</p>
            <ul class="interface-callouts" aria-label="Возможности календаря тренера">
              <li>Блоки расписания</li>
              <li>Выбранные дни</li>
              <li>Работа рядом с назначениями</li>
            </ul>
          </div>
        </div>
      </section>

      <section class="section home-band home-band-primary" id="workflow">
        <div class="container section-header"><div><div class="section-kicker">Как это работает</div><h2 class="section-title">От регистрации до работы с клиентом — пять шагов.</h2></div></div>
        <div class="container workflow-showcase">
          <figure class="workflow-product-shot">
            <img src="{{ asset('images/tutorial/coach/04-create-program.png') }}" width="1080" height="2400" alt="Создание и назначение программы клиента в FitFreak Pro" loading="lazy" />
          </figure>
          <div class="workflow-flow" aria-label="Шаги процесса тренера">
            <article class="workflow-card"><div class="feature-icon" aria-hidden="true">01</div><h3>Создайте аккаунт</h3><p>Зарегистрируйтесь бесплатно как тренер.</p></article>
            <article class="workflow-card"><div class="feature-icon" aria-hidden="true">02</div><h3>Добавьте упражнения</h3><p>Загрузите собственные видео и инструкции.</p></article>
            <article class="workflow-card"><div class="feature-icon" aria-hidden="true">03</div><h3>Соберите программу</h3><p>Настройте упражнения, подходы и нагрузку.</p></article>
            <article class="workflow-card"><div class="feature-icon" aria-hidden="true">04</div><h3>Пригласите клиента</h3><p>Отправьте код и назначьте персональный план.</p></article>
            <article class="workflow-card"><div class="feature-icon" aria-hidden="true">05</div><h3>Проверяйте прогресс</h3><p>Просматривайте данные и корректируйте сопровождение.</p></article>
          </div>
        </div>
        <div class="container journey-cta">
          <div><h2>Создавайте упражнения и видео, назначайте программы и проверяйте прогресс.</h2><p>Аккаунт тренера — 0 ₽.</p></div>
          <div class="cta-actions"><a class="btn btn-primary" href="#download" data-track="app_download_click">Создать бесплатный аккаунт тренера</a><a class="btn btn-secondary" href="{{ route('how-it-works', absolute: false) }}">Посмотреть, как это работает</a></div>
        </div>
      </section>

      <section class="section pricing-section home-band home-band-pricing" id="pricing">
        <div class="container section-header"><div><div class="section-kicker">Цены</div><h2 class="section-title">Тренер работает бесплатно. Клиент оплачивает цифровое сопровождение.</h2><p class="section-copy">Тренер бесплатно добавляет упражнения и видео, создает программы, задает цели питания и проверяет прогресс. Клиент оплачивает доступ к этим материалам в приложении.</p></div></div>
        <div class="container pricing-grid">
          <article class="pricing-card featured"><h3 class="pricing-label">Аккаунт тренера</h3><div class="price">0 ₽</div><p>Добавляйте свои упражнения и видео, создавайте программы, задавайте цели питания, приглашайте клиентов и проверяйте их прогресс.</p><ul><li>Собственная библиотека упражнений и видео</li><li>Персональные программы для клиентов</li><li>Цели питания и данные прогресса</li><li>Приглашение клиентов по коду</li></ul><a class="btn btn-primary pricing-card-cta" href="#download" data-track="trainer_account_click">Создать бесплатный аккаунт тренера</a></article>
          <article class="pricing-card"><h3 class="pricing-label">Доступ клиента</h3><div class="price">990 ₽ <small>за 30 дней</small></div><p>Клиент получает созданные тренером программы, упражнения, видео и цели питания, а также передает тренеру данные прогресса.</p><p class="pricing-service-note">Профессиональная услуга тренера оплачивается отдельно.</p><ul><li>Персональная программа от тренера</li><li>Упражнения, видео и цели питания</li><li>Передача результатов и прогресса</li><li>Оплата через ЮKassa</li></ul><a class="btn btn-secondary pricing-card-cta" href="{{ route('tutorial', absolute: false) }}#client-guide" data-track="invitation_code_help_click">У меня есть код приглашения</a></article>
        </div>
        <div class="container pricing-confidence">
          <div>
            <h3>Что входит в доступ клиента</h3>
            <p>Клиент видит упражнения и видео своего тренера, выполняет назначенную программу, следует целям питания и отправляет данные прогресса. Тренер определяет содержание и корректирует план.</p>
          </div>
          <ul aria-label="Условия оплаты FitFreak Pro">
            <li>Аккаунт тренера — 0 ₽</li>
            <li>Доступ клиента — 990 ₽ за 30 дней</li>
            <li>Оплата через ЮKassa</li>
          </ul>
        </div>
      </section>

      <section class="download-strip" id="download" aria-labelledby="download-heading">
        <div class="container download-strip-inner">
          <div><h2 id="download-heading">Создайте бесплатный аккаунт тренера</h2><p>Скачайте FitFreak Pro, зарегистрируйтесь как тренер бесплатно и начните создавать собственную систему работы с клиентами.</p></div>
          <div class="store-row" aria-label="Ссылки для скачивания приложения">
      <a class="store-badge" href="https://apps.apple.com/us/app/fit-freak-pro/id6742347988" target="_blank" rel="noopener noreferrer" data-track="app_store_click" aria-label="Скачать FitFreak Pro в App Store"><span>Скачать в<strong>App Store</strong></span></a>
      <a class="store-badge" href="https://play.google.com/store/apps/details?id=com.duseca.fitfreak" target="_blank" rel="noopener noreferrer" data-track="google_play_click" aria-label="Скачать FitFreak Pro в Google Play"><span>Доступно в<strong>Google Play</strong></span></a>
    </div>
        </div>
      </section>

      <section class="section faq-section" id="faq">
        <div class="container">
          <div class="section-kicker">Вопросы</div>
          <h2 class="section-title">Что важно знать тренеру</h2>
          <div class="faq-list">
            <x-ui.faq-item question="Платит ли тренер за платформу?">Нет. Аккаунт тренера — 0 ₽. Тренер может добавлять упражнения и видео, создавать программы, задавать цели питания, приглашать клиентов и просматривать их прогресс.</x-ui.faq-item>
            <x-ui.faq-item question="Сколько стоит доступ клиента?">Доступ клиента — 990 ₽ за 30 дней. Оплата через ЮKassa.</x-ui.faq-item>
            <x-ui.faq-item question="Почему клиент оплачивает доступ отдельно?">Клиент оплачивает доступ к упражнениям, видео, программам, целям питания и передаче прогресса в приложении. Профессиональная услуга тренера оплачивается отдельно.</x-ui.faq-item>
            <x-ui.faq-item question="Можно ли использовать свои упражнения и видео?">Да. Вы создаете собственную библиотеку и сами выбираете упражнения, видео и рекомендации для клиентов.</x-ui.faq-item>
            <x-ui.faq-item question="Можно ли продолжать работать по своей методике?">Да. Вы сами выбираете упражнения, собираете программы, задаете цели питания и решаете, как корректировать работу с клиентом.</x-ui.faq-item>
            <x-ui.faq-item question="Что происходит после приглашения клиента?">Клиент вводит код приглашения, оплачивает доступ через ЮKassa и видит назначенные вами упражнения, видео, программу и цели питания.</x-ui.faq-item>
            <x-ui.faq-item question="Что видит клиент в приложении?">Клиент видит персональную программу, упражнения и видео тренера, цели питания и разделы для передачи данных прогресса.</x-ui.faq-item>
            <x-ui.faq-item question="Может ли клиент пользоваться FitFreak Pro на телефоне?">Да. FitFreak Pro доступен на iPhone и Android.</x-ui.faq-item>
          </div>
        </div>
      </section>

      <section class="section final-cta" aria-label="Следующий шаг">
        <div class="container final-cta-grid">
          <article class="role-cta role-cta-trainer">
            <div class="section-kicker">Для тренера</div>
            <h2>Готовы собрать упражнения, программы и прогресс клиентов в одном месте?</h2>
            <p>Добавьте свои упражнения и видео, назначайте программы и питание, затем проверяйте результаты клиентов.</p>
            <div class="cta-actions"><a class="btn btn-primary" href="#download" data-track="trainer_account_click">Создать бесплатный аккаунт тренера</a><a class="btn btn-secondary" href="{{ route('how-it-works', absolute: false) }}">Посмотреть, как это работает</a></div>
          </article>
          <article class="role-cta role-cta-client">
            <div class="section-kicker">Для клиента</div>
            <h2>У вас уже есть тренер?</h2>
            <p>Подключитесь по коду, чтобы увидеть назначенные тренером упражнения, видео, программу и цели питания.</p>
            <a class="btn btn-secondary" href="{{ route('tutorial', absolute: false) }}#client-guide" data-track="invitation_code_help_click">У меня есть код приглашения</a>
          </article>
        </div>
      </section>

    </main>
</x-layouts.public>
