<?php

use Illuminate\Support\Facades\File;

dataset('public pages', [
    'home' => ['home', 'FitFreak Pro — приложение для тренеров и работы с клиентами', '/'],
    'how it works' => ['how-it-works', 'Как работает FitFreak Pro для персонального тренера', '/how-it-works/'],
    'tutorial' => ['tutorial', 'Как пользоваться FitFreak Pro — инструкция для тренера и клиента', '/tutorial/'],
    'for trainers' => ['for-personal-trainers', 'FitFreak Pro для персональных тренеров', '/for-personal-trainers/'],
    'pricing' => ['pricing', 'Цены FitFreak Pro для тренеров и клиентов', '/pricing/'],
    'about' => ['about', 'О FitFreak Pro — приложение для тренеров', '/about/'],
    'support' => ['support', 'Поддержка FitFreak Pro для тренеров и клиентов', '/support/'],
    'privacy' => ['privacy', 'Политика конфиденциальности FitFreak Pro', '/privacy/'],
    'terms' => ['terms', 'Условия использования FitFreak Pro', '/terms/'],
]);

it('serves every public page with shared navigation and canonical metadata', function (
    string $routeName,
    string $title,
    string $canonicalPath,
) {
    $response = $this->get(route($routeName, absolute: false));

    $response
        ->assertOk()
        ->assertSee("<title>{$title}</title>", escape: false)
        ->assertSee('Инструкция')
        ->assertSee('href="'.config('app.url').$canonicalPath.'"', escape: false)
        ->assertSee('FitFreak Pro. Все права защищены.');
})->with('public pages');

it('keeps the current client price everywhere', function () {
    $this->get(route('pricing', absolute: false))
        ->assertOk()
        ->assertSee('Аккаунт тренера — 0 ₽')
        ->assertSee('Доступ клиента — 990 ₽ за 30 дней')
        ->assertSee('Оплата через ЮKassa')
        ->assertDontSee('990 ₽ в месяц')
        ->assertDontSee('YooKassa')
        ->assertDontSee('1490')
        ->assertDontSee('1 490')
        ->assertDontSee('1&nbsp;490', escape: false);

    $this->get(route('home', absolute: false))
        ->assertOk()
        ->assertSee('"price": "990"', escape: false)
        ->assertSee('Доступ клиента — 990 ₽ за 30 дней')
        ->assertSee('Оплата через ЮKassa')
        ->assertDontSee('990 ₽ в месяц')
        ->assertDontSee('YooKassa')
        ->assertDontSee('"price": "1490"', escape: false);
});

it('uses a focused trainer conversion navigation', function () {
    $response = $this->get(route('home', absolute: false));

    $response
        ->assertOk()
        ->assertSeeInOrder([
            'Как работает',
            'Возможности',
            'Цены',
            'Инструкция',
            'О нас',
        ])
        ->assertSee('Создать аккаунт тренера')
        ->assertSee('class="mobile-nav-cta"', escape: false)
        ->assertSee('class="mobile-nav-client"', escape: false)
        ->assertSee('У меня есть код приглашения')
        ->assertDontSee('Скачать приложение</a>', escape: false);
});

it('keeps the trainer landing page conversion flow in order', function () {
    $response = $this->get(route('home', absolute: false));

    $response
        ->assertOk()
        ->assertSeeInOrder([
            'class="hero redesign-hero"',
            'id="trainer-problem"',
            'id="product"',
            'id="built-for-trainers"',
            'id="core-features"',
            'id="coach-library"',
            'id="client-process"',
            'id="coach-calendar"',
            'id="workflow"',
            'id="pricing"',
            'id="faq"',
            'class="section final-cta"',
        ], escape: false)
        ->assertSee('Создайте аккаунт')
        ->assertSee('Добавьте упражнения')
        ->assertSee('Соберите программу')
        ->assertSee('Пригласите клиента')
        ->assertSee('Проверяйте прогресс');
});

it('positions the landing page around trainer ownership and client workflow', function () {
    $this->get(route('home', absolute: false))
        ->assertOk()
        ->assertSee('Ведите больше клиентов')
        ->assertSee('без бесконечных таблиц и переписок.')
        ->assertSee('Создавайте собственные упражнения и программы, назначайте питание и отслеживайте прогресс клиентов в одном приложении. Аккаунт тренера — 0 ₽.')
        ->assertSee('FitFreak Pro объединяет упражнения, программы, питание и прогресс клиента в одном приложении.')
        ->assertSee('FitFreak Pro организует этот процесс, но не заменяет тренера.')
        ->assertSeeInOrder([
            'Создайте собственную библиотеку упражнений',
            'Назначайте персональные программы',
            'Планируйте работу с клиентами',
        ])
        ->assertSee('Тренер работает бесплатно. Клиент оплачивает цифровое сопровождение.')
        ->assertSee('Профессиональная услуга тренера оплачивается отдельно.')
        ->assertSee('Почему клиент оплачивает доступ отдельно?')
        ->assertSee('Можно ли продолжать работать по своей методике?')
        ->assertDontSee('1490')
        ->assertDontSee('AI-powered')
        ->assertDontSee('революцион');
});

it('adds verifiable trust, seo, and role-specific conversion signals', function () {
    $response = $this->get(route('home', absolute: false));

    $response
        ->assertOk()
        ->assertSee('<meta name="description" content="Создавайте планы тренировок, ведите клиентов, назначайте упражнения, отслеживайте прогресс и предоставляйте персональное сопровождение с FitFreak Pro.">', escape: false)
        ->assertSee('Создано для персональных тренеров')
        ->assertSee('FitFreak Pro организует этот процесс, но не заменяет тренера.')
        ->assertSee('Аккаунт тренера — 0 ₽')
        ->assertSee('Доступ клиента — 990 ₽ за 30 дней')
        ->assertSee('Оплата через ЮKassa')
        ->assertSee('FitFreak Pro доступен на iPhone и Android.')
        ->assertSee('Готовы собрать упражнения, программы и прогресс клиентов в одном месте?')
        ->assertSee('У вас уже есть тренер?')
        ->assertSee('У меня есть код приглашения')
        ->assertSee(route('tutorial', absolute: false).'#client-guide', escape: false)
        ->assertDontSee('Stripe')
        ->assertDontSee('testimonial')
        ->assertDontSee('"aggregateRating"', escape: false);
});

it('matches the shared English design structure while preserving Russian behavior', function () {
    $this->get(route('home', absolute: false))
        ->assertOk()
        ->assertSee('<main id="main" class="home-page">', escape: false)
        ->assertSee('workflow-showcase', escape: false)
        ->assertSee('feature-product-frame', escape: false)
        ->assertSee('class="faq-answer-inner"', escape: false)
        ->assertSee('role="region"', escape: false)
        ->assertSee('class="navigation-scrim"', escape: false);

    $this->get(route('how-it-works', absolute: false))
        ->assertOk()
        ->assertSee('class="how-it-works-page"', escape: false)
        ->assertSee('class="workflow-timeline"', escape: false)
        ->assertSee('workflow-app-shot', escape: false)
        ->assertSee('990 ₽ за 30 дней')
        ->assertSee('ЮKassa')
        ->assertDontSee('YooKassa')
        ->assertDontSee('Stripe');

    $this->get(route('pricing', absolute: false))
        ->assertOk()
        ->assertSee('class="pricing-page"', escape: false)
        ->assertSee('class="pricing-sequence"', escape: false)
        ->assertSee('pricing-cta-panel', escape: false);

    $this->get(route('tutorial', absolute: false))
        ->assertOk()
        ->assertSee('class="tutorial-page"', escape: false)
        ->assertSee('class="tutorial-role-selector"', escape: false)
        ->assertSee('class="tutorial-path-nav"', escape: false)
        ->assertSee('data-tutorial-progress="coach-guide"', escape: false)
        ->assertSee('data-tutorial-progress="client-guide"', escape: false)
        ->assertSee('data-tutorial-step-section', escape: false)
        ->assertSee('ЮKassa')
        ->assertDontSee('YooKassa')
        ->assertDontSee('Stripe');
});

it('publishes eight concise trainer faq questions with full-row controls', function () {
    $response = $this->get(route('home', absolute: false));

    $response
        ->assertOk()
        ->assertSee('Что важно знать тренеру')
        ->assertSee('Сколько стоит доступ клиента?')
        ->assertSee('Что видит клиент в приложении?')
        ->assertSee('class="faq-question"', escape: false)
        ->assertSee('aria-expanded="false"', escape: false)
        ->assertSee('aria-controls="faq-', escape: false)
        ->assertSee('role="region"', escape: false)
        ->assertSee('hidden', escape: false);

    expect(substr_count($response->getContent(), 'class="faq-item"'))->toBe(8);
});

it('keeps a single page heading and descriptive landing images', function () {
    $response = $this->get(route('home', absolute: false));
    $content = $response->getContent();

    $response
        ->assertOk()
        ->assertSee('alt="Панель тренера с клиентами в FitFreak Pro"', escape: false)
        ->assertSee('alt="Библиотека упражнений с собственными видео тренера в FitFreak Pro"', escape: false)
        ->assertSee('alt="Персональный план клиента с тренировкой и целями питания в FitFreak Pro"', escape: false)
        ->assertSee('images/tutorial/coach/02-exercise-library.png', escape: false)
        ->assertSee('images/tutorial/client/04-client-dashboard.png', escape: false)
        ->assertDontSee('assets/img/app-screen-2.webp', escape: false)
        ->assertDontSee('assets/img/app-screen-3.webp', escape: false)
        ->assertSee('alt="Календарь тренера с блоком работы с клиентом в FitFreak Pro"', escape: false);

    expect(substr_count($content, '<h1'))->toBe(1);
});

it('uses the consolidated homepage and categorized Russian footer', function () {
    $response = $this->get(route('home', absolute: false));

    $response
        ->assertOk()
        ->assertSee('Вы определяете, как работать с клиентом.')
        ->assertSee('Ваши упражнения и видео')
        ->assertSee('Ваши персональные программы')
        ->assertSee('Ваши решения по каждому клиенту')
        ->assertSee('Ваши отношения с клиентами')
        ->assertDontSee('Ваш подход остается вашим.')
        ->assertDontSee('Вы управляете методикой. FitFreak Pro помогает организовать работу.')
        ->assertDontSee('Все необходимое для сопровождения клиента в одном приложении.')
        ->assertSeeInOrder(['Продукт', 'Ресурсы', 'Компания', 'Скачать', 'Соцсети'])
        ->assertSee('Создано для тренеров, которые ведут клиентов в мобильном приложении.')
        ->assertSee('https://apps.apple.com/us/app/fit-freak-pro/id6742347988', escape: false)
        ->assertSee('https://play.google.com/store/apps/details?id=com.duseca.fitfreak', escape: false)
        ->assertSee('https://www.linkedin.com/company/fitfreak-pro/', escape: false)
        ->assertSee('support@fitfreakpro.com')
        ->assertDontSee('href="/for-personal-trainers"', escape: false);
});

it('publishes both current Russian manuals from the tutorial', function () {
    $response = $this->get(route('tutorial', absolute: false));

    $response
        ->assertOk()
        ->assertSee(asset('downloads/fitfreak-pro-coach-guide-ru.pdf'), escape: false)
        ->assertSee(asset('downloads/fitfreak-pro-client-guide-ru.pdf'), escape: false)
        ->assertDontSee('images/tutorial/client/03-yookassa.png');

    expect(File::exists(public_path('downloads/fitfreak-pro-coach-guide-ru.pdf')))->toBeTrue()
        ->and(File::exists(public_path('downloads/fitfreak-pro-client-guide-ru.pdf')))->toBeTrue();
});

it('marks draft legal pages as noindex', function (string $routeName) {
    $this->get(route($routeName, absolute: false))
        ->assertOk()
        ->assertSee('<meta name="robots" content="noindex,follow">', escape: false);
})->with(['privacy', 'terms']);

it('renders the branded 404 page for missing paths', function () {
    $this->get('/not-a-real-fitfreak-page')
        ->assertNotFound()
        ->assertSee('Страница не найдена.')
        ->assertSee('<meta name="robots" content="noindex,follow">', escape: false);
});

it('keeps discovery files on the Russian domain', function () {
    expect(File::get(public_path('CNAME')))->toContain('fitfreakpro.ru')
        ->and(File::get(public_path('robots.txt')))->toContain('https://fitfreakpro.ru/sitemap.xml')
        ->and(File::get(public_path('sitemap.xml')))->toContain('https://fitfreakpro.ru/tutorial/');
});
