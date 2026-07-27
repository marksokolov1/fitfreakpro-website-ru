<header class="site-header">
    <div class="container header-inner">
        <a class="brand" href="{{ route('home', absolute: false) }}" aria-label="Главная FitFreak Pro">
            <x-logo priority />
        </a>
        <nav class="main-nav" id="primary-navigation" aria-label="Основная навигация">
            <span class="nav-desktop-only">
                <x-nav-link route="for-personal-trainers" :label="__('navigation.for_trainers')" />
            </span>
            <x-nav-link route="how-it-works" :label="__('navigation.how_it_works')" />
            <span class="nav-desktop-only">
                <x-nav-link route="home" fragment="product" :label="__('navigation.features')" />
            </span>
            <x-nav-link route="pricing" :label="__('navigation.pricing')" />
            <x-nav-link route="tutorial" :label="__('navigation.tutorial')" />
            <span class="nav-desktop-only">
                <x-nav-link route="about" :label="__('navigation.about')" />
            </span>
            <a
                class="mobile-nav-cta"
                href="{{ route('home', absolute: false) }}#download"
                data-track="trainer_account_click"
            >
                {{ __('navigation.create_trainer_account') }}
            </a>
        </nav>
        <div class="header-actions">
            <a class="btn btn-primary" href="{{ route('home', absolute: false) }}#download" data-track="trainer_account_click">
                {{ __('navigation.create_trainer_account') }}
            </a>
            <button class="mobile-toggle" type="button" aria-label="Открыть меню" aria-expanded="false" aria-controls="primary-navigation">
                <span></span><span></span><span></span>
            </button>
        </div>
    </div>
</header>
