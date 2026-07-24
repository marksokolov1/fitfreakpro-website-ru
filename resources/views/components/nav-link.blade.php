@props([
    'route',
    'label',
    'fragment' => null,
])

@php
    $path = route($route, absolute: false);
    $href = ($path === '/' ? $path : $path.'/').($fragment ? '#'.$fragment : '');
    $active = request()->routeIs($route) && ! $fragment;
@endphp

<a href="{{ $href }}" @if ($active) aria-current="page" @endif>{{ $label }}</a>
