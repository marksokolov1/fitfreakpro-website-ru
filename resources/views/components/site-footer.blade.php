<footer class="site-footer">
    <div class="container footer-grid">
        <div>
            <a href="{{ route('home') }}" aria-label="Главная FitFreak Pro">
                <x-logo footer />
            </a>
            <p class="footer-tagline">{{ __('footer.tagline') }}</p>
        </div>
        <div>
            <p class="footer-heading">{{ __('footer.navigation') }}</p>
            <nav class="footer-links" aria-label="Навигация в подвале">
                <a href="{{ route('home') }}#product">{{ __('navigation.features') }}</a>
                <a href="{{ route('how-it-works') }}">{{ __('navigation.how_it_works') }}</a>
                <a href="{{ route('tutorial') }}">{{ __('navigation.tutorial') }}</a>
                <a href="{{ route('for-personal-trainers') }}">{{ __('navigation.for_trainers') }}</a>
                <a href="{{ route('pricing') }}">{{ __('navigation.pricing') }}</a>
                <a href="{{ route('about') }}">{{ __('navigation.about') }}</a>
                <a href="{{ route('support') }}">{{ __('navigation.support') }}</a>
                <a href="{{ route('privacy') }}">{{ __('navigation.privacy') }}</a>
                <a href="{{ route('terms') }}">{{ __('navigation.terms') }}</a>
            </nav>
        </div>
        <div>
            <p class="footer-heading">{{ __('footer.download') }}</p>
            <div class="store-row" aria-label="Ссылки для скачивания приложения">
                <a class="store-badge" href="https://apps.apple.com/us/app/fit-freak-pro/id6742347988" target="_blank" rel="noopener noreferrer" data-track="app_store_click" aria-label="Скачать FitFreak Pro в App Store"><span>Скачать в<strong>App Store</strong></span></a>
                <a class="store-badge" href="https://play.google.com/store/apps/details?id=com.duseca.fitfreak" target="_blank" rel="noopener noreferrer" data-track="google_play_click" aria-label="Скачать FitFreak Pro в Google Play"><span>Доступно в<strong>Google Play</strong></span></a>
            </div>
            <p class="footer-heading footer-social-heading">{{ __('footer.social') }}</p>
            <a class="social-link" href="https://www.linkedin.com/company/fitfreak-pro/" target="_blank" rel="noopener noreferrer" data-track="linkedin_click" aria-label="FitFreak Pro в LinkedIn"><span aria-hidden="true">in</span><span>LinkedIn</span></a>
        </div>
    </div>
    <div class="container footer-legal">
        <span>© <span data-year>{{ now()->year }}</span> {{ __('footer.copyright') }}</span>
        <span><a href="{{ route('privacy') }}">{{ __('navigation.privacy') }}</a> · <a href="{{ route('terms') }}">{{ __('navigation.terms') }}</a> · <a href="{{ route('support') }}">{{ __('navigation.support') }}</a> · <a href="mailto:support@fitfreakpro.com" data-track="support_email_click">support@fitfreakpro.com</a></span>
    </div>
</footer>
