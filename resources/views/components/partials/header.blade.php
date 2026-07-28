<header class="site-header">
  <div class="container header-inner">
    <x-partials.brand />

    <nav id="primary-navigation" class="main-nav" aria-label="Основная навигация">
      <a href="{{ route('how-it-works') }}" @if (request()->routeIs('how-it-works')) aria-current="page" @endif>Как работает</a>
      <a href="{{ route('home') }}#features" data-section-nav="features">Возможности</a>
      <a href="{{ route('pricing') }}" @if (request()->routeIs('pricing')) aria-current="page" @endif>Цены</a>
      <a href="{{ route('tutorial') }}" @if (request()->routeIs('tutorial')) aria-current="page" @endif>Инструкция</a>
      <a href="{{ route('home') }}#faq" data-section-nav="faq">Вопросы</a>
      <a class="mobile-nav-cta" href="{{ route('home') }}#download" data-track="header_app_download_cta">Начать бесплатно</a>
    </nav>

    <div class="header-actions">
      <a class="btn btn-primary" href="{{ route('home') }}#download" data-track="header_app_download_cta">Начать бесплатно</a>
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
