@props(['footer' => false])

@if ($footer)
  <img
    class="footer-logo"
    src="{{ asset('assets/img/fitfreak-logo.webp') }}"
    width="1024"
    height="1024"
    alt="Логотип FitFreak Pro"
  />
@else
  <a class="brand" href="{{ route('home') }}" aria-label="FitFreak Pro — главная">
    <img
      class="brand-mark"
      src="{{ asset('assets/img/fitfreak-logo.webp') }}"
      width="1024"
      height="1024"
      alt="Логотип FitFreak Pro"
    />
  </a>
@endif
