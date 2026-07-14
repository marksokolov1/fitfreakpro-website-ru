# SEO и публикация русской версии

Этот документ фиксирует технические настройки сайта `fitfreakpro-website-ru` перед публикацией на GitHub Pages.

## Текущий production URL

- Основной URL: `https://marksokolov1.github.io/fitfreakpro-website-ru/`
- Базовый путь проекта: `/fitfreakpro-website-ru/`
- Карта сайта: `https://marksokolov1.github.io/fitfreakpro-website-ru/sitemap.xml`
- Файл robots: `https://marksokolov1.github.io/fitfreakpro-website-ru/robots.txt`

Все canonical, Open Graph URL, sitemap URL и внутренние ссылки должны оставаться на этом host/base path, пока не выбран другой домен.

## Индексируемые страницы

Эти URL должны быть в `sitemap.xml` и не должны иметь `noindex`:

- `/`
- `/how-it-works/`
- `/for-personal-trainers/`
- `/pricing/`
- `/about/`
- `/support/`

## Неиндексируемые страницы

Эти страницы оставлены доступными для пользователей, но исключены из индекса до юридической проверки:

- `/privacy/`
- `/terms/`

На них используется `noindex,follow`, и они не включены в `sitemap.xml`.

## Ограничение GitHub Pages project site

Для project site GitHub Pages файл `robots.txt` находится по адресу `/fitfreakpro-website-ru/robots.txt`, а не в корне домена `marksokolov1.github.io/robots.txt`.

Практические варианты:

- Подключить отдельный custom domain и разместить сайт в корне домена.
- Использовать account-root Pages сайт для управления корневым `robots.txt`.
- Отправлять project sitemap напрямую в Google Search Console, Bing Webmaster Tools и Яндекс Вебмастер.

Для текущего URL самый надежный путь — отправить sitemap напрямую в инструменты поисковых систем.

## После публикации

1. Откройте `https://marksokolov1.github.io/fitfreakpro-website-ru/` и проверьте, что CSS, JS и изображения загружаются без 404.
2. Откройте `sitemap.xml` и убедитесь, что там только индексируемые URL.
3. В Google Search Console добавьте ресурс URL-prefix для `https://marksokolov1.github.io/fitfreakpro-website-ru/`.
4. Подтвердите владение способом, который предложит Google.
5. Отправьте sitemap: `https://marksokolov1.github.io/fitfreakpro-website-ru/sitemap.xml`.
6. Через URL Inspection проверьте главную страницу и несколько внутренних страниц.
7. Посмотрите, какой canonical выбрал Google.
8. Проверьте раздел Pages/Indexing на исключения, дубликаты и страницы с `noindex`.
9. Повторите отправку sitemap в Bing Webmaster Tools.
10. Для аудитории РФ добавьте сайт в Яндекс Вебмастер и отправьте тот же sitemap.
11. После индексации проверьте сниппеты, заголовки, описания и Core Web Vitals.

## Перед сменой домена

При переходе на другой домен нужно обновить:

- canonical URL на всех страницах
- `og:url`
- `og:image`
- `twitter:image`
- `sitemap.xml`
- `robots.txt`
- ссылки в README и этом документе

После смены домена снова отправьте sitemap в поисковые системы.
