<footer class="site-footer" id="site-footer">
  <div class="container">
    <div class="footer-cta">
      <div>
        <p class="footer-cta-kicker">Начните бесплатно как тренер</p>
        <h2>Готовы организовать работу с клиентами?</h2>
        <p>Создайте бесплатный аккаунт тренера и соберите свой рабочий процесс в FitFreak Pro.</p>
      </div>
      <a class="btn btn-primary" href="{{ route('home') }}#download" data-track="footer_trainer_account_cta">Создать бесплатный аккаунт</a>
    </div>
  </div>
  <div class="container footer-grid">
    <div class="footer-brand">
      <x-partials.brand footer />
      <p class="footer-tagline">Создано для тренеров, которые ведут клиентов в мобильном приложении.</p>
    </div>
    <div class="footer-navigation">
      <nav class="footer-navigation-grid" aria-label="Навигация в подвале">
        <div class="footer-link-group">
          <p class="footer-heading">Продукт</p>
          <div class="footer-links">
            <a href="{{ route('home') }}"{!! request()->routeIs('home') ? ' aria-current="page"' : '' !!}>Главная</a>
            <a href="{{ route('home') }}#features">Возможности</a>
            <a href="{{ route('pricing') }}"{!! request()->routeIs('pricing') ? ' aria-current="page"' : '' !!}>Цены</a>
          </div>
        </div>
        <div class="footer-link-group">
          <p class="footer-heading">Ресурсы</p>
          <div class="footer-links">
            <a href="{{ route('how-it-works') }}"{!! request()->routeIs('how-it-works') ? ' aria-current="page"' : '' !!}>Как работает</a>
            <a href="{{ route('tutorial') }}"{!! request()->routeIs('tutorial') ? ' aria-current="page"' : '' !!}>Инструкция</a>
            <a href="{{ route('home') }}#faq">Вопросы</a>
            <a href="{{ route('support') }}"{!! request()->routeIs('support') ? ' aria-current="page"' : '' !!}>Поддержка</a>
          </div>
        </div>
        <div class="footer-link-group">
          <p class="footer-heading">Компания</p>
          <div class="footer-links">
            <a href="{{ route('about') }}"{!! request()->routeIs('about') ? ' aria-current="page"' : '' !!}>О нас</a>
            <a href="{{ route('privacy') }}"{!! request()->routeIs('privacy') ? ' aria-current="page"' : '' !!}>Конфиденциальность</a>
            <a href="{{ route('terms') }}"{!! request()->routeIs('terms') ? ' aria-current="page"' : '' !!}>Условия</a>
          </div>
        </div>
      </nav>
    </div>
    <div class="footer-actions">
      <div class="footer-download">
        <p class="footer-heading">Скачать FitFreak Pro</p>
        <p class="footer-audience-note">Для тренеров, которые создают программы, и клиентов, подключающихся по приглашению.</p>
        <div class="store-row">
          <a class="store-badge" href="https://apps.apple.com/us/app/fit-freak-pro/id6742347988" target="_blank" rel="noopener noreferrer" data-track="app_store_click" aria-label="Скачать FitFreak Pro в App Store">
            <span>Скачать в<strong>App Store</strong></span>
          </a>
          <a class="store-badge" href="https://play.google.com/store/apps/details?id=com.duseca.fitfreak" target="_blank" rel="noopener noreferrer" data-track="google_play_click" aria-label="Скачать FitFreak Pro в Google Play">
            <span>Доступно в<strong>Google Play</strong></span>
          </a>
        </div>
      </div>
      <div class="footer-social">
        <p class="footer-heading footer-social-heading">FitFreak Pro в соцсетях</p>
        <a class="social-link" href="https://www.linkedin.com/company/fitfreak-pro/" target="_blank" rel="noopener noreferrer" data-track="linkedin_click" aria-label="FitFreak Pro в LinkedIn">LinkedIn</a>
      </div>
    </div>
  </div>
  <div class="container footer-legal">
    <span>© {{ now()->year }} FitFreak Pro. Все права защищены.</span>
    <span class="footer-legal-links">
      <a href="{{ route('privacy') }}">Конфиденциальность</a> ·
      <a href="{{ route('terms') }}">Условия</a> ·
      <a href="{{ route('support') }}">Поддержка</a> ·
      <a href="mailto:support@fitfreakpro.com" data-track="support_click">support@fitfreakpro.com</a>
    </span>
  </div>
</footer>
