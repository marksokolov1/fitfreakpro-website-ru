@props([
    'route',
    'label',
    'fragment' => null,
])

@php
    $href = route($route).($fragment ? '#'.$fragment : '');
    $active = request()->routeIs($route) && ! $fragment;
@endphp

<a href="{{ $href }}" @if ($active) aria-current="page" @endif>{{ $label }}</a>
