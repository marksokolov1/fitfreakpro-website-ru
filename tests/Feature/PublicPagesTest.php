<?php

use Illuminate\Support\Facades\File;

dataset('public pages', [
    'home' => ['home', 'Приложение для персональных тренеров | FitFreak Pro', '/'],
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
        ->assertSee('990 ₽')
        ->assertDontSee('1490')
        ->assertDontSee('1 490')
        ->assertDontSee('1&nbsp;490', escape: false);

    $this->get(route('home', absolute: false))
        ->assertOk()
        ->assertSee('"price": "990"', escape: false)
        ->assertDontSee('"price": "1490"', escape: false);
});

it('keeps the trainer landing page conversion flow in order', function () {
    $response = $this->get(route('home', absolute: false));

    $response
        ->assertOk()
        ->assertSeeInOrder([
            'class="hero redesign-hero"',
            'id="trainer-problem"',
            'id="product"',
            'id="core-features"',
            'id="coach-library"',
            'id="client-process"',
            'id="coach-calendar"',
            'id="workflow"',
            'id="pricing"',
            'id="faq"',
            'class="section final-cta"',
        ], escape: false)
        ->assertSee('Создайте бесплатный аккаунт тренера')
        ->assertSee('Добавьте упражнения и видео')
        ->assertSee('Соберите программы клиентов')
        ->assertSee('Пригласите клиентов')
        ->assertSee('Проверяйте прогресс');
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
