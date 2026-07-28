@props([
  'active' => false,
  'href',
])

<a
  href="{{ $href }}"
  @if ($active) aria-current="page" @endif
  {{ $attributes }}
>
  {{ $slot }}
</a>
