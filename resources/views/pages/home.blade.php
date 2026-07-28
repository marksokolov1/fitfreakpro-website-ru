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
                    <div class="eyebrow">Приложение для персональных тренеров</div>
                    <h1>Ведите больше клиентов. <span class="lime-text">Без бесконечных таблиц и переписок.</span></h1>
                    <p class="hero-copy">Создавайте собственные упражнения и программы, назначайте питание и отслеживайте прогресс клиентов в одном приложении.</p>
                    <div class="hero-actions">
                        <a class="btn btn-primary hero-primary-cta" href="#download" data-track="trainer_account_click">Создать бесплатный аккаунт тренера</a>
                        <a class="btn btn-secondary" href="#workflow" data-track="workflow_link_click">Посмотреть, как это работает</a>
                    </div>
                    <p class="download-label">Аккаунт тренера — 0 ₽. Доступно на iPhone и Android.</p>
                    <p class="hero-differentiator">Ваша методика остается основой работы.</p>
                </div>
                <div class="product-shot-grid" aria-label="Скриншоты приложения FitFreak Pro">
                    <figure class="phone-shot phone-shot-primary">
                        <img src="{{ asset('assets/img/app-screen-1.webp') }}" width="619" height="1100" alt="Панель тренера для управления клиентами, программами, питанием и прогрессом" loading="eager" fetchpriority="high" />
                    </figure>
                    <figure class="phone-shot phone-shot-secondary">
                        <img src="{{ asset('images/tutorial/coach/02-exercise-library.png') }}" width="1080" height="2400" alt="Библиотека упражнений тренера в FitFreak Pro" loading="eager" />
                    </figure>
                </div>
            </div>
        </section>

        <section class="download-strip" id="download" aria-labelledby="download-heading">
            <div class="container download-strip-inner">
                <div>
                    <h2 id="download-heading">Скачайте FitFreak Pro</h2>
                    <p>Зарегистрируйтесь бесплатно как тренер или войдите по приглашению своего тренера.</p>
                </div>
                <div class="store-row" aria-label="Ссылки для скачивания приложения">
                    <a class="store-badge" href="https://apps.apple.com/us/app/fit-freak-pro/id6742347988" target="_blank" rel="noopener noreferrer" data-track="app_store_click" aria-label="Скачать FitFreak Pro в App Store"><span>Скачать в<strong>App Store</strong></span></a>
                    <a class="store-badge" href="https://play.google.com/store/apps/details?id=com.duseca.fitfreak" target="_blank" rel="noopener noreferrer" data-track="google_play_click" aria-label="Скачать FitFreak Pro в Google Play"><span>Доступно в<strong>Google Play</strong></span></a>
                </div>
            </div>
        </section>

        <section class="section home-band home-band-muted" id="product">
            <span id="trainer-problem" class="legacy-anchor" aria-hidden="true"></span>
            <div class="container section-header">
                <div>
                    <div class="section-kicker">Проблема тренера</div>
                    <h2 class="section-title">Сопровождение клиентов не должно быть разбросано по разным инструментам.</h2>
                    <p class="section-copy">Telegram для сообщений, таблицы для программ, PDF для инструкций, отдельные ссылки на видео и ручные заметки о прогрессе. FitFreak Pro объединяет упражнения, программы, питание и прогресс клиента в одном приложении.</p>
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
                    <h2 class="section-title">Один понятный процесс от настройки до проверки прогресса.</h2>
                    <p class="section-copy">FitFreak Pro помогает организовать упражнения, видео, персональные программы, цели питания и данные прогресса в одном рабочем пространстве.</p>
                </div>
            </div>
            <div class="container workflow-showcase">
                <figure class="workflow-product-shot">
                    <img src="{{ asset('images/tutorial/coach/04-create-program.png') }}" width="1080" height="2400" alt="Создание и назначение программы клиента в FitFreak Pro" loading="lazy" />
                </figure>
                <div class="workflow-flow" aria-label="Этапы работы тренера">
                    <article class="workflow-card"><div class="feature-icon" aria-hidden="true">01</div><h3>Создайте библиотеку</h3><p>Добавьте свои упражнения, видео, описания и инструкции.</p></article>
                    <article class="workflow-card"><div class="feature-icon" aria-hidden="true">02</div><h3>Соберите программу</h3><p>Настройте упражнения, подходы, нагрузку и цели питания.</p></article>
                    <article class="workflow-card"><div class="feature-icon" aria-hidden="true">03</div><h3>Пригласите клиента</h3><p>Отправьте код и назначьте персональный план.</p></article>
                    <article class="workflow-card"><div class="feature-icon" aria-hidden="true">04</div><h3>Проверяйте прогресс</h3><p>Просматривайте данные клиента и корректируйте сопровождение.</p></article>
                </div>
            </div>
        </section>

        <section class="section feature-split home-feature home-feature-primary" id="features">
            <span id="coach-library" class="legacy-anchor" aria-hidden="true"></span>
            <div class="container split-panel">
                <div>
                    <div class="section-kicker">Работайте по-своему</div>
                    <h2>Создайте собственную библиотеку упражнений.</h2>
                    <p>Используйте свои упражнения, видео, объяснения и тренерские заметки. FitFreak Pro помогает организовать вашу методику, но не заменяет тренера.</p>
                    <div class="pill-row">
                        <span>Ваши упражнения</span>
                        <span>Собственные видео</span>
                        <span>Описания и инструкции</span>
                        <span>Ваша методика</span>
                    </div>
                </div>
                <figure class="app-ui-frame">
                    <img src="{{ asset('images/tutorial/coach/02-exercise-library.png') }}" width="1080" height="2400" alt="Библиотека собственных упражнений и видео тренера в FitFreak Pro" loading="lazy" />
                </figure>
            </div>
        </section>

        <section class="section feature-split home-feature home-feature-client" id="client-process">
            <div class="container split-panel reverse">
                <figure class="app-ui-frame">
                    <img src="{{ asset('images/tutorial/client/04-client-dashboard.png') }}" width="1080" height="2400" alt="Персональный план клиента с тренировкой и целями питания" loading="lazy" />
                </figure>
                <div>
                    <div class="section-kicker">Для ваших клиентов</div>
                    <h2>Каждый клиент получает понятный персональный план.</h2>
                    <p>Клиент видит созданные тренером тренировки, упражнения, видео, цели питания и данные, которые нужно передать для проверки прогресса.</p>
                    <ul class="check-list">
                        <li>Упражнения, подходы и нагрузка собраны в одном месте.</li>
                        <li>Цели питания остаются понятными и доступными.</li>
                        <li>Данные прогресса доступны тренеру для проверки.</li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="section feature-split home-feature home-secondary-feature" id="coach-calendar">
            <div class="container split-panel reverse">
                <figure class="app-ui-frame app-ui-frame-compact">
                    <img src="{{ asset('images/tutorial/coach/06-coach-calendar.png') }}" width="922" height="2000" alt="Календарь тренера с блоками расписания в FitFreak Pro" loading="lazy" />
                </figure>
                <div>
                    <div class="section-kicker">Расписание тренера</div>
                    <h2>Планируйте работу с клиентами.</h2>
                    <p>Создавайте блоки расписания и держите календарь рядом с программами, питанием и данными прогресса.</p>
                    <ul class="check-list">
                        <li>Создавайте блоки для выбранных дней.</li>
                        <li>Управляйте своим временем в одном приложении.</li>
                        <li>Связывайте планирование с работой по клиентам.</li>
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
                        <p class="section-copy">Тренер создает упражнения, программы и цели питания без ежемесячной платы за платформу. Приглашенный клиент оплачивает доступ к цифровому сопровождению.</p>
                    </div>
                </div>
                <div class="pricing-grid">
                    <article class="pricing-card featured">
                        <p class="pricing-label">Аккаунт тренера</p>
                        <div class="price">0 ₽</div>
                        <p>Создавайте библиотеку упражнений, приглашайте клиентов и управляйте их сопровождением бесплатно.</p>
                        <ul>
                            <li>Собственные упражнения и видео</li>
                            <li>Персональные программы</li>
                            <li>Цели питания</li>
                            <li>Проверка данных прогресса</li>
                            <li>Без ежемесячной платы для тренера</li>
                        </ul>
                        <a class="btn btn-primary pricing-card-cta" href="#download" data-track="trainer_account_click">Создать бесплатный аккаунт тренера</a>
                    </article>
                    <article class="pricing-card">
                        <p class="pricing-label">Доступ клиента</p>
                        <div class="price">990 ₽ <small>за 30 дней</small></div>
                        <p>Клиент получает доступ после приглашения от своего тренера.</p>
                        <ul>
                            <li>Персональная программа тренера</li>
                            <li>Упражнения, инструкции и видео</li>
                            <li>Назначенные цели питания</li>
                            <li>Передача данных прогресса</li>
                            <li>Оплата через ЮKassa</li>
                        </ul>
                        <a class="btn btn-secondary pricing-card-cta" href="{{ route('tutorial', absolute: false) }}#client-guide" data-track="invitation_code_help_click">У меня есть код приглашения</a>
                    </article>
                </div>
                <div class="content-note">
                    <h3>Почему клиент оплачивает доступ?</h3>
                    <p>Оплата дает клиенту доступ к сопровождению, которое тренер предоставляет через FitFreak Pro: программам, упражнениям, видео, целям питания и передаче прогресса. Профессиональная услуга тренера оплачивается отдельно.</p>
                </div>
            </div>
        </section>

        <section class="section founder-section" id="about">
            <div class="container split-panel compact">
                <div>
                    <div class="section-kicker">Знакомство с продуктом</div>
                    <h2 class="section-title">Посмотрите, как FitFreak Pro работает на практике.</h2>
                    <p class="section-copy">Изучите рабочий процесс тренера и клиента, задайте вопросы и оцените, подходит ли приложение для вашей методики.</p>
                </div>
                <div class="founder-card">
                    <h3>Запросить обзор продукта</h3>
                    <p>Посмотрите, как организовать работу, которую вы сейчас ведете через таблицы, заметки, ссылки на видео и сообщения.</p>
                    <a class="btn btn-primary" href="mailto:support@fitfreakpro.com?subject=Обзор%20FitFreak%20Pro" data-track="product_walkthrough_click">Запросить обзор FitFreak Pro</a>
                </div>
            </div>
        </section>

        <section class="section faq-section" id="faq">
            <div class="container">
                <div class="section-kicker">Вопросы</div>
                <h2 class="section-title">Что важно знать тренеру.</h2>
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

        <section class="section final-cta">
            <div class="container cta-panel">
                <h2>Соберите сопровождение клиентов в одном приложении.</h2>
                <p>Создавайте свои упражнения, назначайте персональные программы и проверяйте прогресс без бесконечных таблиц и переписок.</p>
                <div class="cta-actions">
                    <a class="btn btn-primary" href="#download" data-track="trainer_account_click">Создать бесплатный аккаунт тренера</a>
                    <a class="btn btn-secondary" href="{{ route('tutorial', absolute: false) }}#client-guide" data-track="invitation_code_help_click">У меня есть код приглашения</a>
                </div>
            </div>
        </section>
    </main>
</x-layouts.public>
