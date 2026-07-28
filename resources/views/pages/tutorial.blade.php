<x-layouts.public
    title="Как пользоваться FitFreak Pro — инструкция для тренера и клиента"
    description="Краткая пошаговая инструкция по FitFreak Pro для тренеров и клиентов. Регистрация, приглашение, тренировки, питание и полные PDF-руководства."
    canonical-path="/tutorial/"
    social-image-alt="FitFreak Pro: инструкция для тренера и клиента"
>
    <x-slot:schema>
        <script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@graph": [
    {
      "@type": "WebPage",
      "@id": "https://fitfreakpro.ru/tutorial/#webpage",
      "url": "https://fitfreakpro.ru/tutorial/",
      "name": "Как пользоваться FitFreak Pro — инструкция для тренера и клиента",
      "description": "Краткая пошаговая инструкция по FitFreak Pro для тренеров и клиентов. Регистрация, приглашение, тренировки, питание и полные PDF-руководства.",
      "inLanguage": "ru-RU"
    },
    {
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
          "name": "Инструкция",
          "item": "https://fitfreakpro.ru/tutorial/"
        }
      ]
    }
  ]
}
        </script>
    </x-slot:schema>

<main id="main" class="tutorial-page">
      <section class="tutorial-hero">
        <div class="container tutorial-hero-grid">
          <div class="tutorial-hero-copy">
            <div class="eyebrow">FitFreak Pro — инструкция</div>
            <h1>Начните пользоваться FitFreak Pro за несколько минут.</h1>
            <p>Пройдите полный путь тренера и клиента: от создания аккаунта до назначенных тренировок, целей по питанию и фиксации прогресса.</p>
            <nav class="tutorial-role-selector" aria-label="Выберите инструкцию для тренера или клиента">
              <a class="tutorial-role-option" href="#coach-guide" data-tutorial-role="coach-guide" data-track="tutorial_coach_jump" aria-current="location">
                <strong>Я тренер</strong>
                <span>Создание программ, приглашения и проверка прогресса.</span>
              </a>
              <a class="tutorial-role-option" href="#client-guide" data-tutorial-role="client-guide" data-track="tutorial_client_jump">
                <strong>Я клиент</strong>
                <span>Подключение к тренеру, тренировки и прогресс.</span>
              </a>
            </nav>
            <ul class="tutorial-trust-list" aria-label="Доступность и оплата FitFreak Pro">
              <li>Доступно на iPhone и Android</li>
              <li>Оплата через ЮKassa</li>
              <li>Программы и рекомендации определяет тренер</li>
            </ul>
          </div>
          <div class="tutorial-hero-visual" aria-label="Экраны приложения FitFreak Pro для тренера и клиента">
            <figure class="phone-shot tutorial-hero-phone tutorial-hero-phone-primary tutorial-hero-phone-dashboard">
              <img src="{{ asset('assets/img/app-screen-1.webp') }}" width="619" height="1100" alt="Панель тренера с клиентами в FitFreak Pro" loading="eager" fetchpriority="high" />
            </figure>
            <figure class="phone-shot tutorial-hero-phone tutorial-hero-phone-secondary">
              <img src="{{ asset('images/tutorial/client/04-client-dashboard.png') }}" width="1080" height="2400" alt="Панель клиента с назначенной тренировкой и целями питания" loading="eager" />
            </figure>
          </div>
        </div>
      </section>

      <nav class="tutorial-path-nav" aria-label="Навигация по инструкции">
        <div class="container tutorial-path-nav-inner">
          <div class="tutorial-guide-switch" aria-label="Выберите руководство">
            <a href="#coach-guide" data-tutorial-nav="coach-guide" aria-current="location">Для тренера</a>
            <a href="#client-guide" data-tutorial-nav="client-guide">Для клиента</a>
          </div>
          <ol class="tutorial-progress-links is-active" data-tutorial-progress="coach-guide" aria-label="Шаги руководства тренера">
            <li><a href="#trainer-account" data-tutorial-step-link="trainer-account" aria-current="step">Аккаунт</a></li>
            <li><a href="#trainer-library" data-tutorial-step-link="trainer-library">Библиотека</a></li>
            <li><a href="#trainer-invite" data-tutorial-step-link="trainer-invite">Приглашение</a></li>
            <li><a href="#trainer-programs" data-tutorial-step-link="trainer-programs">Программы</a></li>
            <li><a href="#trainer-nutrition" data-tutorial-step-link="trainer-nutrition">Питание</a></li>
            <li><a href="#trainer-calendar" data-tutorial-step-link="trainer-calendar">Календарь</a></li>
          </ol>
          <ol class="tutorial-progress-links" data-tutorial-progress="client-guide" aria-label="Шаги руководства клиента" aria-hidden="true">
            <li><a href="#client-account" data-tutorial-step-link="client-account">Аккаунт</a></li>
            <li><a href="#client-code" data-tutorial-step-link="client-code">Код тренера</a></li>
            <li><a href="#client-subscription" data-tutorial-step-link="client-subscription">Подписка</a></li>
            <li><a href="#client-plan" data-tutorial-step-link="client-plan">План</a></li>
            <li><a href="#client-exercises" data-tutorial-step-link="client-exercises">Упражнения</a></li>
            <li><a href="#client-progress" data-tutorial-step-link="client-progress">Прогресс</a></li>
          </ol>
        </div>
      </nav>

      <section class="section tutorial-journey tutorial-journey-trainer" id="coach-guide">
        <div class="container section-header">
          <div>
            <div class="section-kicker">Для тренера</div>
            <h2 class="section-title">Создавайте программы и ведите клиентов.</h2>
            <p class="section-copy">Создайте бесплатный аккаунт тренера, подготовьте собственную библиотеку упражнений и организуйте работу с клиентами в одном приложении.</p>
          </div>
        </div>
        <div class="container tutorial-step-list">
          <article class="tutorial-step" id="trainer-account" data-tutorial-step-section>
            <div class="tutorial-step-copy">
              <span class="tutorial-step-number">01</span>
              <h3>Создайте аккаунт тренера</h3>
              <p>Выберите роль «Тренер», укажите контактные данные и заполните профессиональный профиль. Аккаунт тренера создается бесплатно.</p>
            </div>
            <figure class="tutorial-media">
              <img src="{{ asset('images/tutorial/coach/01-create-coach-account.png') }}" width="1080" height="2400" alt="Экран создания русскоязычного аккаунта тренера FitFreak Pro" loading="lazy" />
            </figure>
          </article>
          <article class="tutorial-step is-reverse" id="trainer-library" data-tutorial-step-section>
            <div class="tutorial-step-copy">
              <span class="tutorial-step-number">02</span>
              <h3>Подготовьте библиотеку упражнений</h3>
              <p>Создайте разделы по типу тренировок или группам мышц. Добавьте собственные упражнения, описания, изображения и видео.</p>
            </div>
            <figure class="tutorial-media">
              <img src="{{ asset('images/tutorial/coach/02-exercise-library.png') }}" width="1080" height="2400" alt="Разделы собственной библиотеки упражнений тренера" loading="lazy" />
            </figure>
          </article>
          <article class="tutorial-step" id="trainer-invite" data-tutorial-step-section>
            <div class="tutorial-step-copy">
              <span class="tutorial-step-number">03</span>
              <h3>Пригласите клиента</h3>
              <p>Откройте раздел приглашений, укажите имя и email клиента и отправьте приглашение. Клиент получит код для подключения к вашему профилю.</p>
            </div>
            <figure class="tutorial-media">
              <img src="{{ asset('images/tutorial/coach/03-invite-client.png') }}" width="1080" height="2400" alt="Форма отправки приглашения клиенту" loading="lazy" />
            </figure>
          </article>
          <article class="tutorial-step is-reverse" id="trainer-programs" data-tutorial-step-section>
            <div class="tutorial-step-copy">
              <span class="tutorial-step-number">04</span>
              <h3>Создайте и назначьте программу</h3>
              <p>Соберите тренировочные дни из упражнений своей библиотеки. Настройте подходы, повторения, вес или время, сохраните программу и назначьте ее клиенту.</p>
            </div>
            <figure class="tutorial-media">
              <img src="{{ asset('images/tutorial/coach/04-create-program.png') }}" width="1080" height="2400" alt="Готовая программа тренировок перед сохранением" loading="lazy" />
            </figure>
          </article>
          <article class="tutorial-step" id="trainer-nutrition" data-tutorial-step-section>
            <div class="tutorial-step-copy">
              <span class="tutorial-step-number">05</span>
              <h3>Установите цели питания</h3>
              <p>Откройте карточку клиента и задайте дневные цели по калориям, белкам, жирам, углеводам и воде.</p>
            </div>
            <figure class="tutorial-media">
              <img src="{{ asset('images/tutorial/coach/05-set-nutrition-targets.png') }}" width="1080" height="2400" alt="Настройка целей клиента по калориям и нутриентам" loading="lazy" />
            </figure>
          </article>
          <article class="tutorial-step is-reverse" id="trainer-calendar" data-tutorial-step-section>
            <div class="tutorial-step-copy">
              <span class="tutorial-step-number">06</span>
              <h3>Планируйте работу в календаре</h3>
              <p>Добавляйте рабочие блоки по дням и времени, чтобы держать расписание рядом с программами и данными клиентов.</p>
            </div>
            <figure class="tutorial-media">
              <img src="{{ asset('images/tutorial/coach/06-coach-calendar.png') }}" width="1080" height="2400" alt="Созданный рабочий блок в календаре тренера" loading="lazy" />
            </figure>
          </article>
        </div>
        <div class="container tutorial-download-panel">
          <div>
            <h2>Нужна подробная инструкция?</h2>
            <p>В полном руководстве показаны регистрация, профиль, библиотека упражнений, приглашения, программы, питание, параметры клиентов, календарь и настройки.</p>
          </div>
          <div class="tutorial-download-actions">
            <a class="btn btn-primary" href="{{ asset('downloads/fitfreak-pro-coach-guide-ru.pdf') }}" target="_blank" rel="noopener" download>Скачать руководство тренера (PDF)</a>
            <a class="btn btn-secondary" href="/#download" data-track="app_download_click">Скачать приложение для тренера</a>
          </div>
        </div>
      </section>
      <section class="section tutorial-journey tutorial-journey-client" id="client-guide">
        <div class="container section-header">
          <div>
            <div class="section-kicker">Для клиента</div>
            <h2 class="section-title">Подключитесь к тренеру и следуйте своему плану.</h2>
            <p class="section-copy">Подключитесь к тренеру по коду приглашения, активируйте доступ и используйте приложение для тренировок, питания и фиксации прогресса.</p>
          </div>
        </div>
        <div class="container tutorial-step-list">
          <article class="tutorial-step" id="client-account" data-tutorial-step-section>
            <div class="tutorial-step-copy">
              <span class="tutorial-step-number">01</span>
              <h3>Создайте клиентский аккаунт</h3>
              <p>На регистрации выберите роль «Обычный пользователь», подтвердите email и заполните основные данные профиля.</p>
            </div>
            <figure class="tutorial-media">
              <img src="{{ asset('images/tutorial/client/01-create-client-account.png') }}" width="1080" height="2400" alt="Экран создания русскоязычного клиентского аккаунта" loading="lazy" />
            </figure>
          </article>
          <article class="tutorial-step is-reverse" id="client-code" data-tutorial-step-section>
            <div class="tutorial-step-copy">
              <span class="tutorial-step-number">02</span>
              <h3>Введите код тренера</h3>
              <p>Введите код из приглашения. Он связывает ваш аккаунт с тренером, который будет назначать тренировки и цели питания.</p>
            </div>
            <figure class="tutorial-media">
              <img src="{{ asset('images/tutorial/client/02-enter-coach-code.png') }}" width="1080" height="2400" alt="Экран ввода кода приглашения тренера" loading="lazy" />
            </figure>
          </article>
          <article class="tutorial-step tutorial-step-copy-only" id="client-subscription" data-tutorial-step-section>
            <div class="tutorial-step-copy">
              <span class="tutorial-step-number">03</span>
              <h3>Активируйте доступ через ЮKassa</h3>
              <p>Перейдите к оформлению подписки и выберите ЮKassa. Проверьте актуальную стоимость и завершите оплату в защищенной платежной форме.</p>
            </div>
          </article>
          <article class="tutorial-step is-reverse" id="client-plan" data-tutorial-step-section>
            <div class="tutorial-step-copy">
              <span class="tutorial-step-number">04</span>
              <h3>Откройте назначенный план</h3>
              <p>После активации на панели управления появятся цели питания и назначенная тренером текущая тренировка.</p>
            </div>
            <figure class="tutorial-media">
              <img src="{{ asset('images/tutorial/client/04-client-dashboard.png') }}" width="1080" height="2400" alt="Панель клиента с целями питания и текущей тренировкой" loading="lazy" />
            </figure>
          </article>
          <article class="tutorial-step" id="client-exercises" data-tutorial-step-section>
            <div class="tutorial-step-copy">
              <span class="tutorial-step-number">05</span>
              <h3>Следуйте упражнениям тренера</h3>
              <p>Откройте упражнение, проверьте подходы и повторения и посмотрите видео с техникой выполнения.</p>
            </div>
            <figure class="tutorial-media">
              <img src="{{ asset('images/tutorial/client/05-exercise-video.png') }}" width="1080" height="2400" alt="Видео с демонстрацией назначенного упражнения" loading="lazy" />
            </figure>
          </article>
          <article class="tutorial-step is-reverse" id="client-progress" data-tutorial-step-section>
            <div class="tutorial-step-copy">
              <span class="tutorial-step-number">06</span>
              <h3>Отслеживайте питание и прогресс</h3>
              <p>Следите за дневными целями, добавляйте приемы пищи и воду и вносите данные, которые тренер использует для оценки прогресса.</p>
            </div>
            <figure class="tutorial-media">
              <img src="{{ asset('images/tutorial/client/06-nutrition.png') }}" width="1080" height="2400" alt="Экран дневных целей питания клиента" loading="lazy" />
            </figure>
          </article>
        </div>
        <div class="container tutorial-download-panel">
          <div>
            <h2>Посмотрите все возможности клиентского приложения</h2>
            <p>Полное руководство включает регистрацию, ЮKassa, тренировки, видео, отчет, фотографии прогресса, питание, продукты, рецепты, профиль тренера и настройки.</p>
          </div>
          <div class="tutorial-download-actions">
            <a class="btn btn-primary" href="{{ asset('downloads/fitfreak-pro-client-guide-ru.pdf') }}" target="_blank" rel="noopener" download>Скачать руководство клиента (PDF)</a>
          </div>
        </div>
      </section>
      <section class="section final-cta">
        <div class="container cta-panel">
          <h2>Готовы начать?</h2>
          <p>Тренеры могут зарегистрироваться бесплатно. Клиенты подключаются после получения приглашения от своего тренера.</p>
          <div class="cta-actions">
            <a class="btn btn-primary" href="/#download" data-track="app_download_click">Скачать приложение</a>
            <a class="btn btn-secondary" href="/support/">Связаться с поддержкой</a>
          </div>
        </div>
      </section>
    </main>
</x-layouts.public>
