@php
$page = [
  'title' => 'Страница не найдена | FitFreak Pro',
  'description' => 'Запрошенная страница FitFreak Pro не найдена.',
  'robots' => 'noindex,follow',
  'canonical' => 'https://fitfreakpro.ru/404.html',
  'ogTitle' => 'Страница не найдена | FitFreak Pro',
  'ogDescription' => 'Запрошенная страница FitFreak Pro не найдена.',
  'ogImage' => 'https://fitfreakpro.ru/assets/img/fitfreak-logo.png',
  'ogImageWidth' => '640',
  'ogImageHeight' => '640',
  'ogImageAlt' => 'Логотип FitFreak Pro',
  'twitterCard' => 'summary',
  'twitterTitle' => 'Страница не найдена | FitFreak Pro',
  'twitterDescription' => 'Запрошенная страница FitFreak Pro не найдена.',
  'twitterImage' => 'https://fitfreakpro.ru/assets/img/fitfreak-logo.png',
  'twitterImageAlt' => 'Логотип FitFreak Pro',
  'schema' => null,
];
@endphp

<x-layouts.public :page="$page">
  <main id="main">
    <section class="route-hero">
      <div class="container">
        <div class="eyebrow">Ошибка 404</div>
        <h1>Страница не найдена.</h1>
        <p>Возможно, адрес изменился или страница больше недоступна.</p>
        <div class="cta-actions">
          <a class="btn btn-primary" href="{{ route('home') }}">Вернуться на главную</a>
          <a class="btn btn-secondary" href="{{ route('support') }}">Связаться с поддержкой</a>
        </div>
      </div>
    </section>
  </main>
</x-layouts.public>
