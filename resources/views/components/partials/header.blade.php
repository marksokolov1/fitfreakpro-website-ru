<header class="site-header">
    <div class="container header-inner">
        <x-partials.brand />

        <nav id="primary-navigation" class="main-nav" aria-label="Основная навигация">
            <span class="nav-desktop-only">
                <x-ui.navigation-link :href="route('for-personal-trainers', absolute: false)" :active="request()->routeIs('for-personal-trainers')">
                    {{ __('navigation.for_trainers') }}
                </x-ui.navigation-link>
            </span>
            <x-ui.navigation-link :href="route('how-it-works', absolute: false)" :active="request()->routeIs('how-it-works')">
                {{ __('navigation.how_it_works') }}
            </x-ui.navigation-link>
            <span class="nav-desktop-only">
                <x-ui.navigation-link :href="route('home', absolute: false).'#features'" data-section-nav="features">
                    {{ __('navigation.features') }}
                </x-ui.navigation-link>
            </span>
            <x-ui.navigation-link :href="route('pricing', absolute: false)" :active="request()->routeIs('pricing')">
                {{ __('navigation.pricing') }}
            </x-ui.navigation-link>
            <x-ui.navigation-link :href="route('tutorial', absolute: false)" :active="request()->routeIs('tutorial')">
                {{ __('navigation.tutorial') }}
            </x-ui.navigation-link>
            <span class="nav-desktop-only">
                <x-ui.navigation-link :href="route('about', absolute: false)" :active="request()->routeIs('about')">
                    {{ __('navigation.about') }}
                </x-ui.navigation-link>
            </span>
            <a class="mobile-nav-cta" href="{{ route('home', absolute: false) }}#download" data-track="trainer_account_click">
                {{ __('navigation.create_trainer_account') }}
            </a>
        </nav>

        <div class="header-actions">
            <a class="btn btn-primary" href="{{ route('home', absolute: false) }}#download" data-track="trainer_account_click">
                {{ __('navigation.create_trainer_account') }}
            </a>
            <button
                class="mobile-toggle"
                type="button"
                aria-label="Открыть меню"
                aria-controls="primary-navigation"
                aria-expanded="false"
            >
                <span></span><span></span><span></span>
            </button>
        </div>
    </div>
    <button class="navigation-scrim" type="button" aria-label="Закрыть меню" data-navigation-close></button>
</header>
