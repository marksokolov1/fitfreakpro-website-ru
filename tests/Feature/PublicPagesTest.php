<?php

beforeEach(function (): void {
    $this->withoutVite();
});

test('public pages render Russian titles and primary headings', function (
    string $route,
    string $title,
    string $heading
): void {
    $this->get(route($route))
        ->assertOk()
        ->assertSee("<title>{$title}</title>", escape: false)
        ->assertSee($heading)
        ->assertSee('FitFreak Pro — главная')
        ->assertSee('Основная навигация')
        ->assertSee('Навигация в подвале')
        ->assertDontSee('Struo');
})->with([
    'home' => ['home', 'FitFreak Pro — приложение для тренеров и работы с клиентами', 'Ведите больше клиентов.'],
    'how it works' => ['how-it-works', 'Как работает FitFreak Pro для персональных тренеров', 'От вашей методики к понятному плану для клиента.'],
    'personal trainers' => ['for-personal-trainers', 'Приложение для персональных тренеров | FitFreak Pro', 'Организуйте работу с клиентами без лишних инструментов.'],
    'pricing' => ['pricing', 'Цены FitFreak Pro для тренеров и клиентов', 'Тренер работает бесплатно. Клиент оплачивает цифровое сопровождение.'],
    'tutorial' => ['tutorial', 'Как пользоваться FitFreak Pro — инструкция для тренера и клиента', 'Начните пользоваться FitFreak Pro за несколько минут.'],
    'about' => ['about', 'О FitFreak Pro | Приложение для персональных тренеров', 'Создано, чтобы упростить самостоятельную работу тренера.'],
    'support' => ['support', 'Поддержка FitFreak Pro для тренеров и клиентов', 'Чем мы можем помочь?'],
    'privacy' => ['privacy', 'Политика конфиденциальности | FitFreak Pro', 'Данные тренера и клиента в FitFreak Pro.'],
    'terms' => ['terms', 'Условия использования | FitFreak Pro', 'Условия использования'],
]);

test('Russian pricing is consistent across pages and metadata', function (): void {
    foreach (['home', 'pricing', 'support', 'terms'] as $route) {
        $this->get(route($route))
            ->assertOk()
            ->assertSee('990 ₽')
            ->assertDontSee('$12.99')
            ->assertDontSee('990 ₽ в месяц')
            ->assertDontSee('YooKassa');
    }

    $this->get(route('home'))
        ->assertSee('"price": "990"', escape: false)
        ->assertSee('"priceCurrency": "RUB"', escape: false);

    $this->get(route('pricing'))
        ->assertSee('"price": "990"', escape: false)
        ->assertSee('Оплата через ЮKassa')
        ->assertSee('Профессиональная услуга тренера оплачивается отдельно.');
});

test('pricing presents trainer and client access as one sequence', function (): void {
    $this->get(route('pricing'))
        ->assertOk()
        ->assertSeeInOrder([
            'Тренер создает бесплатный аккаунт',
            'Приглашает клиента',
            'Клиент активирует доступ',
            'Аккаунт тренера',
            'Цифровое сопровождение клиента',
        ])
        ->assertSee('<span>0 ₽</span>', escape: false)
        ->assertSee('<span>990 ₽</span><small>за 30 дней</small>', escape: false)
        ->assertSee('Начать бесплатно как тренер')
        ->assertSee('https://apps.apple.com/us/app/fit-freak-pro/id6742347988', escape: false)
        ->assertSee('https://play.google.com/store/apps/details?id=com.duseca.fitfreak', escape: false);
});

test('tutorial uses Russian guides, regional payment, and localized media', function (): void {
    $this->get(route('tutorial'))
        ->assertOk()
        ->assertSee('Навигация по инструкции')
        ->assertSee('data-tutorial-nav="coach-guide"', escape: false)
        ->assertSee('data-tutorial-nav="client-guide"', escape: false)
        ->assertSeeInOrder(['Аккаунт', 'Библиотека', 'Программы', 'Приглашения', 'Прогресс'])
        ->assertSeeInOrder(['Для тренера', 'Для клиента'])
        ->assertSeeInOrder([
            'Создайте аккаунт тренера',
            'Соберите библиотеку упражнений',
            'Создайте и назначьте программу',
            'Пригласите клиента',
            'Задайте цели питания и проверяйте прогресс',
        ])
        ->assertSee('Доступно на iPhone и Android')
        ->assertSee('Оплата через ЮKassa')
        ->assertSee('Почему это важно:')
        ->assertSee(asset('downloads/fitfreak-pro-coach-guide-ru.pdf'), escape: false)
        ->assertSee(asset('downloads/fitfreak-pro-client-guide-ru.pdf'), escape: false)
        ->assertSee(asset('images/tutorial/client/03-yookassa.png'), escape: false)
        ->assertDontSee('Stripe')
        ->assertDontSee('fitfreak-pro-coach-guide-en.pdf');

    expect(public_path('downloads/fitfreak-pro-coach-guide-ru.pdf'))->toBeFile()
        ->and(public_path('downloads/fitfreak-pro-client-guide-ru.pdf'))->toBeFile()
        ->and(public_path('images/tutorial/client/03-yookassa.png'))->toBeFile();
});

test('store, social, and support destinations remain unchanged', function (): void {
    $this->get(route('home'))
        ->assertOk()
        ->assertSee('https://apps.apple.com/us/app/fit-freak-pro/id6742347988', escape: false)
        ->assertSee('https://play.google.com/store/apps/details?id=com.duseca.fitfreak', escape: false)
        ->assertSee('https://www.linkedin.com/company/fitfreak-pro/', escape: false)
        ->assertSee('support@fitfreakpro.com');
});

test('footer preserves the English structure with Russian labels', function (): void {
    $this->get(route('about'))
        ->assertOk()
        ->assertSeeInOrder([
            'Готовы организовать работу с клиентами?',
            'Создать бесплатный аккаунт',
            'Продукт',
            'Ресурсы',
            'Компания',
            'Скачать FitFreak Pro',
            'FitFreak Pro в соцсетях',
        ])
        ->assertSeeInOrder(['Главная', 'Возможности', 'Цены'])
        ->assertSeeInOrder(['Как работает', 'Инструкция', 'Вопросы', 'Поддержка'])
        ->assertSeeInOrder(['О нас', 'Конфиденциальность', 'Условия'])
        ->assertDontSee('>Для тренеров</a>', escape: false)
        ->assertSee('support@fitfreakpro.com');
});

test('navigation renders current page state on the server', function (
    string $route,
    string $label
): void {
    $this->get(route($route))
        ->assertOk()
        ->assertSee('aria-current="page"', escape: false)
        ->assertSee($label);
})->with([
    'how it works' => ['how-it-works', 'Как работает'],
    'tutorial' => ['tutorial', 'Инструкция'],
    'privacy' => ['privacy', 'Конфиденциальность'],
]);

test('faq controls render stable accessible relationships', function (): void {
    $this->get(route('home'))
        ->assertOk()
        ->assertSee('aria-controls="faq-', escape: false)
        ->assertSee('aria-labelledby="faq-', escape: false)
        ->assertSee('Что такое FitFreak Pro?');
});

test('legal drafts are not indexable', function (): void {
    foreach (['privacy', 'terms'] as $route) {
        $this->get(route($route))
            ->assertOk()
            ->assertSee('<meta name="robots" content="noindex,follow" />', escape: false);
    }
});

test('unknown public pages render the localized not found page', function (): void {
    $this->get('/not-a-real-page')
        ->assertNotFound()
        ->assertSee('Страница не найдена.')
        ->assertSee('Вернуться на главную');
});
