@props([
    'footer' => false,
    'priority' => false,
])

<img
    {{ $attributes->class([$footer ? 'footer-logo' : 'brand-mark']) }}
    src="{{ asset('assets/img/fitfreak-logo.webp') }}"
    width="1024"
    height="1024"
    alt=""
    aria-hidden="true"
    @unless ($priority) loading="lazy" @endunless
    @if ($priority) fetchpriority="high" @endif
>
