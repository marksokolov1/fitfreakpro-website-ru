@props(['page'])

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>{{ $page['title'] }}</title>
  <meta name="description" content="{{ $page['description'] }}" />
  @if (! empty($page['robots']))
    <meta name="robots" content="{{ $page['robots'] }}" />
  @endif
  <link rel="canonical" href="{{ $page['canonical'] }}" />
  <meta property="og:type" content="website" />
  <meta property="og:site_name" content="FitFreak Pro" />
  <meta property="og:title" content="{{ $page['ogTitle'] }}" />
  <meta property="og:description" content="{{ $page['ogDescription'] }}" />
  <meta property="og:url" content="{{ $page['canonical'] }}" />
  <meta property="og:image" content="{{ $page['ogImage'] }}" />
  @if (! empty($page['ogImageWidth']))
    <meta property="og:image:width" content="{{ $page['ogImageWidth'] }}" />
  @endif
  @if (! empty($page['ogImageHeight']))
    <meta property="og:image:height" content="{{ $page['ogImageHeight'] }}" />
  @endif
  @if (! empty($page['ogImageAlt']))
    <meta property="og:image:alt" content="{{ $page['ogImageAlt'] }}" />
  @endif
  <meta name="twitter:card" content="{{ $page['twitterCard'] ?? 'summary_large_image' }}" />
  <meta name="twitter:title" content="{{ $page['twitterTitle'] }}" />
  <meta name="twitter:description" content="{{ $page['twitterDescription'] }}" />
  <meta name="twitter:image" content="{{ $page['twitterImage'] }}" />
  @if (! empty($page['twitterImageAlt']))
    <meta name="twitter:image:alt" content="{{ $page['twitterImageAlt'] }}" />
  @endif
  <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}" />
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  @if (! empty($page['schema']))
    <script type="application/ld+json">{!! $page['schema'] !!}</script>
  @endif
</head>
<body>
  <a class="skip-link" href="#main">Перейти к содержанию</a>
  <div class="page-shell">
    <div class="glow-orb orb-one" aria-hidden="true"></div>
    <div class="glow-orb orb-two" aria-hidden="true"></div>
    <x-partials.header />
    {{ $slot }}
    <x-partials.footer />
  </div>
</body>
</html>
