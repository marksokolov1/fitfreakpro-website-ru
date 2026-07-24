@props([
    'footer' => false,
    'priority' => false,
])

<img
    {{ $attributes->class([$footer ? 'footer-logo' : 'brand-mark']) }}
    src="{{ asset('assets/img/fitfreak-logo.png') }}"
    width="640"
    height="640"
    alt=""
    aria-hidden="true"
    @unless ($priority) loading="lazy" @endunless
    @if ($priority) fetchpriority="high" @endif
>
@unless ($footer)
    <span class="brand-word">FitFreak Pro</span>
@endunless
