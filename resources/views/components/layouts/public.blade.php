@props([
    'title',
    'description',
    'canonicalPath' => '/',
    'robots' => null,
    'socialImageAlt' => 'FitFreak Pro — приложение для персональных тренеров',
])

@php
    $baseUrl = rtrim(config('app.url'), '/');
    $canonicalUrl = $baseUrl.$canonicalPath;
    $socialImageUrl = $baseUrl.'/assets/img/social-share-ru.png';
@endphp

<!DOCTYPE html>
<html lang="ru-RU">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <meta name="description" content="{{ $description }}">
    @if ($robots)
        <meta name="robots" content="{{ $robots }}">
    @endif
    <link rel="canonical" href="{{ $canonicalUrl }}">
    <meta property="og:locale" content="ru_RU">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="FitFreak Pro">
    <meta property="og:title" content="{{ $title }}">
    <meta property="og:description" content="{{ $description }}">
    <meta property="og:url" content="{{ $canonicalUrl }}">
    <meta property="og:image" content="{{ $socialImageUrl }}">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="{{ $socialImageAlt }}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $title }}">
    <meta name="twitter:description" content="{{ $description }}">
    <meta name="twitter:image" content="{{ $socialImageUrl }}">
    <meta name="twitter:image:alt" content="{{ $socialImageAlt }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
@isset($schema)
    {{ $schema }}
@endisset
</head>
<body>
    <a class="skip-link" href="#main">Перейти к содержимому</a>
    <div class="page-shell">
        <x-site-header />
        {{ $slot }}
        <x-site-footer />
    </div>
</body>
</html>
