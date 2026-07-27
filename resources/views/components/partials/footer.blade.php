<footer class="site-footer">
    <div class="container footer-grid">
        <div>
            <x-partials.brand footer />
            <p class="footer-tagline">{{ __('footer.tagline') }}</p>
        </div>
        <div>
            <p class="footer-heading">{{ __('footer.navigation') }}</p>
            <nav class="footer-links" aria-label="Навигация в подвале">
                <x-ui.navigation-link :href="route('home', absolute: false).'#product'" :active="request()->routeIs('home')">{{ __('navigation.features') }}</x-ui.navigation-link>
                <x-ui.navigation-link :href="route('how-it-works', absolute: false)" :active="request()->routeIs('how-it-works')">{{ __('navigation.how_it_works') }}</x-ui.navigation-link>
                <x-ui.navigation-link :href="route('for-personal-trainers', absolute: false)" :active="request()->routeIs('for-personal-trainers')">{{ __('navigation.for_trainers') }}</x-ui.navigation-link>
                <x-ui.navigation-link :href="route('pricing', absolute: false)" :active="request()->routeIs('pricing')">{{ __('navigation.pricing') }}</x-ui.navigation-link>
                <x-ui.navigation-link :href="route('tutorial', absolute: false)" :active="request()->routeIs('tutorial')">{{ __('navigation.tutorial') }}</x-ui.navigation-link>
                <x-ui.navigation-link :href="route('about', absolute: false)" :active="request()->routeIs('about')">{{ __('navigation.about') }}</x-ui.navigation-link>
                <x-ui.navigation-link :href="route('support', absolute: false)" :active="request()->routeIs('support')">{{ __('navigation.support') }}</x-ui.navigation-link>
                <x-ui.navigation-link :href="route('privacy', absolute: false)" :active="request()->routeIs('privacy')">{{ __('navigation.privacy') }}</x-ui.navigation-link>
                <x-ui.navigation-link :href="route('terms', absolute: false)" :active="request()->routeIs('terms')">{{ __('navigation.terms') }}</x-ui.navigation-link>
            </nav>
        </div>
        <div>
            <p class="footer-heading">{{ __('footer.download') }}</p>
            <div class="store-row" aria-label="Ссылки для скачивания приложения">
                <a class="store-badge" href="https://apps.apple.com/us/app/fit-freak-pro/id6742347988" target="_blank" rel="noopener noreferrer" data-track="app_store_click" aria-label="Скачать FitFreak Pro в App Store"><span>Скачать в<strong>App Store</strong></span></a>
                <a class="store-badge" href="https://play.google.com/store/apps/details?id=com.duseca.fitfreak" target="_blank" rel="noopener noreferrer" data-track="google_play_click" aria-label="Скачать FitFreak Pro в Google Play"><span>Доступно в<strong>Google Play</strong></span></a>
            </div>
            <p class="footer-heading footer-social-heading">{{ __('footer.social') }}</p>
            <a class="social-link" href="https://www.linkedin.com/company/fitfreak-pro/" target="_blank" rel="noopener noreferrer" data-track="linkedin_click" aria-label="FitFreak Pro в LinkedIn">LinkedIn</a>
        </div>
    </div>
    <div class="container footer-legal">
        <span>© {{ now()->year }} {{ __('footer.copyright') }}</span>
        <span>
            <a href="{{ route('privacy', absolute: false) }}">{{ __('navigation.privacy') }}</a> ·
            <a href="{{ route('terms', absolute: false) }}">{{ __('navigation.terms') }}</a> ·
            <a href="{{ route('support', absolute: false) }}">{{ __('navigation.support') }}</a> ·
            <a href="mailto:support@fitfreakpro.com" data-track="support_email_click">support@fitfreakpro.com</a>
        </span>
    </div>
</footer>
