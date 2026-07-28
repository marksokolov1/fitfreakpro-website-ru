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
            "text": "Нет. Аккаунт тренера бесплатный, ежемесячной платы для тренера нет."
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
            "text": "Да. FitFreak Pro не задает готовую методику и не заменяет тренера. Платформа помогает организовать ваш текущий подход."
          }
        },
        {
          "@type": "Question",
          "name": "Что происходит после приглашения клиента?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Клиент получает код, подключается к вашему профилю и после активации доступа видит назначенные вами программы и цели."
          }
        },
        {
          "@type": "Question",
          "name": "Подходит ли FitFreak Pro для персональных тренеров?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Да. Платформа создана для независимых персональных тренеров, онлайн-тренеров и небольших тренерских команд."
          }
        },
        {
          "@type": "Question",
          "name": "Может ли клиент пользоваться FitFreak Pro на телефоне?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Да. FitFreak Pro доступен на iPhone и Android."
          }
        },
        {
          "@type": "Question",
          "name": "Почему клиент оплачивает подписку?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Подписка за 990 ₽ в месяц дает клиенту доступ к цифровому сопровождению от своего тренера: персональному плану, упражнениям, целям по питанию и передаче прогресса."
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
          </div>
          <div class="trainer-tools" aria-label="Разрозненные инструменты в работе тренера">
            <article class="trainer-tool"><span>01</span><div><h3>Telegram</h3><p>Обсуждение тренировок и обратная связь</p></div></article>
            <article class="trainer-tool"><span>02</span><div><h3>Таблицы</h3><p>Программы, назначения и расписание</p></div></article>
            <article class="trainer-tool"><span>03</span><div><h3>PDF</h3><p>Планы и инструкции для клиентов</p></div></article>
            <article class="trainer-tool"><span>04</span><div><h3>Видео</h3><p>Отдельные ссылки на технику упражнений</p></div></article>
            <article class="trainer-tool"><span>05</span><div><h3>Заметки</h3><p>Ручная фиксация прогресса и питания</p></div></article>
          </div>
          <div class="problem-transition">
            <span>Вместо разрозненных инструментов</span>
            <strong>Все необходимое для сопровождения клиента в одном приложении.</strong>
          </div>
        </div>
      </section>

      <section class="section home-band home-band-primary" id="product">
        <div class="container section-header"><div><div class="section-kicker">Рабочая система тренера</div><h2 class="section-title">Вы управляете методикой. FitFreak Pro помогает организовать работу.</h2><p class="section-copy">Вы выбираете упражнения, создаете программы и принимаете решения по клиенту. FitFreak Pro сохраняет назначения, питание и прогресс в одном профессиональном рабочем процессе.</p></div></div>
        <div class="container metrics-row">
          <div class="metric-card"><strong>0 ₽</strong><span>регистрация тренера</span></div>
          <div class="metric-card"><strong>990 ₽</strong><span>клиентский доступ в месяц</span></div>
          <div class="metric-card"><strong>1</strong><span>рабочий процесс для сопровождения клиентов</span></div>
        </div>
      </section>

      <section class="section trainer-trust home-band" id="built-for-trainers">
        <div class="container trainer-trust-layout">
          <div class="trainer-trust-copy">
            <div class="section-kicker">Создано для персональных тренеров</div>
            <h2 class="section-title">Ваш подход остается вашим.</h2>
            <p class="section-copy">FitFreak Pro поддерживает работу тренера, а не заменяет ее. Вы определяете содержание программ, выбираете упражнения и сохраняете прямые отношения со своими клиентами.</p>
          </div>
          <div class="trainer-ownership-list" aria-label="Что остается под контролем тренера">
            <article><span>01</span><div><h3>Ваша библиотека упражнений</h3><p>Вы сами формируете набор упражнений для своей практики.</p></div></article>
            <article><span>02</span><div><h3>Ваши видео</h3><p>Клиент видит демонстрации и пояснения своего тренера.</p></div></article>
            <article><span>03</span><div><h3>Ваша методика</h3><p>Платформа организует процесс, не диктуя подход к тренировкам.</p></div></article>
            <article><span>04</span><div><h3>Ваши программы клиентов</h3><p>Вы создаете и назначаете персональные планы каждому клиенту.</p></div></article>
            <article><span>05</span><div><h3>Ваши отношения с клиентами</h3><p>Решения, обратная связь и сопровождение остаются за тренером.</p></div></article>
          </div>
        </div>
      </section>

      <section class="section feature-showcase home-band" id="core-features">
        <span id="features" class="legacy-anchor" aria-hidden="true"></span>
        <span id="coach-library" class="legacy-anchor" aria-hidden="true"></span>
        <div class="container feature-showcase-grid">
          <div class="feature-showcase-copy">
            <div class="section-kicker">01 · Ваша база упражнений</div>
            <h2>Создайте собственную библиотеку упражнений</h2>
            <p>Соберите в одном месте упражнения, собственные видео и пояснения, которые используете в работе с клиентами.</p>
            <ul class="interface-callouts" aria-label="Возможности библиотеки упражнений">
              <li>Категории упражнений</li>
              <li>Собственные видео</li>
              <li>Пояснения по технике</li>
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
            <p>Создавайте план для конкретного клиента и назначайте выбранные упражнения, подходы и повторения.</p>
            <ul class="interface-callouts" aria-label="Возможности персональных программ">
              <li>Программа для клиента</li>
              <li>Подходы и повторения</li>
              <li>Назначение в пару нажатий</li>
            </ul>
          </div>
        </div>
      </section>

      <section class="section feature-showcase feature-showcase-wide home-band" id="coach-calendar">
        <div class="container feature-showcase-wide-layout">
          <div class="feature-showcase-copy">
            <div class="section-kicker">03 · Питание клиента</div>
            <h2>Устанавливайте цели питания</h2>
            <p>Задавайте клиенту ориентиры по калориям, БЖУ и воде рядом с его тренировочной программой.</p>
            <ul class="interface-callouts" aria-label="Возможности целей питания">
              <li>Цель по калориям</li>
              <li>Баланс БЖУ</li>
              <li>Норма воды</li>
            </ul>
          </div>
          <figure class="feature-product-frame feature-product-frame-wide">
            <img src="{{ asset('assets/img/app-screen-6.webp') }}" width="619" height="1100" alt="Настройка целей клиента по калориям, БЖУ и воде в FitFreak Pro" loading="lazy" />
          </figure>
        </div>
      </section>

      <section class="section feature-showcase feature-showcase-progress home-band" id="progress">
        <div class="container feature-showcase-grid">
          <div class="feature-showcase-copy">
            <div class="section-kicker">04 · Данные клиента</div>
            <h2>Отслеживайте прогресс клиента</h2>
            <p>Просматривайте цели, исходные данные и активность клиента, чтобы оценивать изменения и корректировать дальнейший план.</p>
            <ul class="interface-callouts" aria-label="Данные для отслеживания прогресса">
              <li>Цель клиента</li>
              <li>Вес и параметры</li>
              <li>Уровень активности</li>
            </ul>
          </div>
          <figure class="feature-product-frame">
            <img src="{{ asset('assets/img/app-screen-5.webp') }}" width="619" height="1100" alt="Данные, цель и уровень активности клиента в FitFreak Pro" loading="lazy" />
          </figure>
        </div>
      </section>

      <section class="section home-band home-band-primary" id="workflow">
        <div class="container section-header"><div><div class="section-kicker">Как это работает</div><h2 class="section-title">Пять шагов от вашей методики до персонального плана клиента.</h2><p class="section-copy">Вы определяете содержание работы на каждом этапе. FitFreak Pro помогает последовательно передать его клиенту.</p></div></div>
        <div class="container workflow-showcase">
          <figure class="workflow-product-shot">
            <img src="{{ asset('images/tutorial/coach/04-create-program.png') }}" width="1080" height="2400" alt="Создание и назначение программы клиента в FitFreak Pro" loading="lazy" />
          </figure>
          <div class="workflow-flow" aria-label="Шаги процесса тренера">
            <article class="workflow-card"><div class="feature-icon" aria-hidden="true">01</div><h3>Создайте бесплатный аккаунт тренера</h3><p>Зарегистрируйтесь бесплатно и подготовьте рабочее пространство для своей практики.</p></article>
            <article class="workflow-card"><div class="feature-icon" aria-hidden="true">02</div><h3>Добавьте свои упражнения и видео</h3><p>Создайте библиотеку из упражнений, демонстраций и рекомендаций, которые используете вы.</p></article>
            <article class="workflow-card"><div class="feature-icon" aria-hidden="true">03</div><h3>Соберите программу по своей методике</h3><p>Выберите упражнения, настройте детали занятий и подготовьте персональный план.</p></article>
            <article class="workflow-card"><div class="feature-icon" aria-hidden="true">04</div><h3>Пригласите клиента и назначьте план</h3><p>Клиент подключается по вашему приглашению и получает созданные вами назначения.</p></article>
            <article class="workflow-card"><div class="feature-icon" aria-hidden="true">05</div><h3>Проверяйте прогресс и корректируйте работу</h3><p>Просматривайте данные клиента и принимайте решения о следующих шагах.</p></article>
          </div>
        </div>
        <div class="container journey-cta">
          <div><h2>Организуйте сопровождение клиентов вокруг своей методики.</h2><p>Аккаунт тренера — 0 ₽ в месяц.</p></div>
          <div class="cta-actions"><a class="btn btn-primary" href="#download" data-track="app_download_click">Создать бесплатный аккаунт тренера</a><a class="btn btn-secondary" href="#pricing">Посмотреть цены</a></div>
        </div>
      </section>

      <section class="section pricing-section home-band home-band-pricing" id="pricing">
        <div class="container section-header"><div><div class="section-kicker">Цены</div><h2 class="section-title">Понятная модель для тренера и его клиентов.</h2><p class="section-copy">Тренер бесплатно создает систему работы и приглашает клиентов. Клиент оплачивает доступ к персональному цифровому сопровождению от своего тренера.</p></div></div>
        <div class="container pricing-grid">
          <article class="pricing-card featured"><h3 class="pricing-label">Аккаунт тренера</h3><div class="price">0 ₽ <small>в месяц</small></div><p>Создайте аккаунт тренера, добавляйте упражнения, создавайте программы и приглашайте клиентов.</p><ul><li>Собственная библиотека упражнений</li><li>Собственные видео и рекомендации</li><li>Создание и назначение программ</li><li>Цели по питанию</li><li>Просмотр данных прогресса</li><li>Приглашение клиентов</li><li>Без ежемесячной платы для тренера</li></ul></article>
          <article class="pricing-card"><h3 class="pricing-label">Доступ клиента</h3><div class="price">990 ₽ <small>в месяц</small></div><p>Клиент оплачивает доступ к цифровому сопровождению, которое предоставляет его тренер.</p><ul><li>Персональный план от тренера</li><li>Видео и описания выбранных тренером упражнений</li><li>Назначенные тренировки</li><li>Цели по питанию</li><li>Передача данных прогресса тренеру</li></ul></article>
        </div>
        <div class="container pricing-confidence">
          <div>
            <h3>Почему подписку оплачивает клиент?</h3>
            <p>Подписка открывает клиенту цифровой формат персонального сопровождения: план, упражнения и видео тренера, цели по питанию и передачу данных прогресса. Содержание и дальнейшие решения определяет тренер.</p>
          </div>
          <ul aria-label="Условия оплаты FitFreak Pro">
            <li>Аккаунт тренера — 0 ₽</li>
            <li>Без ежемесячной платы для тренера</li>
            <li>Оплата клиента через YooKassa</li>
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
            <x-ui.faq-item question="Платит ли тренер за платформу?">Нет. Аккаунт тренера бесплатный, ежемесячной платы для тренера нет.</x-ui.faq-item>
            <x-ui.faq-item question="Можно ли использовать свои упражнения и видео?">Да. Вы создаете собственную библиотеку и сами выбираете упражнения, видео и рекомендации для клиентов.</x-ui.faq-item>
            <x-ui.faq-item question="Можно ли продолжать работать по своей методике?">Да. FitFreak Pro не задает готовую методику и не заменяет тренера. Платформа помогает организовать ваш текущий подход.</x-ui.faq-item>
            <x-ui.faq-item question="Что происходит после приглашения клиента?">Клиент получает код, подключается к вашему профилю и после активации доступа видит назначенные вами программы и цели.</x-ui.faq-item>
            <x-ui.faq-item question="Подходит ли FitFreak Pro для персональных тренеров?">Да. Платформа создана для независимых персональных тренеров, онлайн-тренеров и небольших тренерских команд.</x-ui.faq-item>
            <x-ui.faq-item question="Может ли клиент пользоваться FitFreak Pro на телефоне?">Да. FitFreak Pro доступен на iPhone и Android.</x-ui.faq-item>
            <x-ui.faq-item question="Почему клиент оплачивает подписку?">Подписка за 990 ₽ в месяц дает клиенту доступ к цифровому сопровождению от своего тренера: персональному плану, упражнениям, целям по питанию и передаче прогресса.</x-ui.faq-item>
          </div>
        </div>
      </section>

      <section class="section final-cta" aria-label="Следующий шаг">
        <div class="container final-cta-grid">
          <article class="role-cta role-cta-trainer">
            <div class="section-kicker">Для тренера</div>
            <h2>Готовы выстроить свой рабочий процесс?</h2>
            <p>Создайте бесплатный аккаунт и организуйте сопровождение клиентов вокруг своей методики.</p>
            <a class="btn btn-primary" href="#download" data-track="trainer_account_click">Создать бесплатный аккаунт тренера</a>
          </article>
          <article class="role-cta role-cta-client">
            <div class="section-kicker">Для клиента</div>
            <h2>У вас уже есть тренер?</h2>
            <p>Откройте клиентскую инструкцию, чтобы подключиться по коду приглашения.</p>
            <a class="btn btn-secondary" href="{{ route('tutorial', absolute: false) }}#client-guide" data-track="invitation_code_help_click">Ввести код приглашения</a>
          </article>
        </div>
      </section>

    </main>
</x-layouts.public>
