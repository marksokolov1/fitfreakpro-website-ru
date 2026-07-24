<header class="site-header">
    <div class="container header-inner">
        <a class="brand" href="{{ route('home') }}" aria-label="Главная FitFreak Pro">
            <x-logo priority />
        </a>
        <nav class="main-nav" id="primary-navigation" aria-label="Основная навигация">
            <x-nav-link route="home" fragment="product" :label="__('navigation.features')" />
            <x-nav-link route="how-it-works" :label="__('navigation.how_it_works')" />
            <x-nav-link route="tutorial" :label="__('navigation.tutorial')" />
            <x-nav-link route="for-personal-trainers" :label="__('navigation.for_trainers')" />
            <x-nav-link route="pricing" :label="__('navigation.pricing')" />
            <x-nav-link route="about" :label="__('navigation.about')" />
            <x-nav-link route="support" :label="__('navigation.support')" />
        </nav>
        <div class="header-actions">
            <a class="btn btn-primary" href="{{ route('home') }}#download" data-track="app_download_click">{{ __('navigation.download') }}</a>
            <button class="mobile-toggle" type="button" aria-label="Открыть меню" aria-expanded="false" aria-controls="primary-navigation">
                <span></span><span></span><span></span>
            </button>
        </div>
    </div>
</header>
