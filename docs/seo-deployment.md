# SEO и публикация русской версии

Этот документ фиксирует технические настройки сайта `fitfreakpro-website-ru` перед публикацией на GitHub Pages с пользовательским доменом.

## Текущий production URL

- Основной URL: `https://fitfreakpro.ru/`
- Базовый путь проекта: `/`
- Карта сайта: `https://fitfreakpro.ru/sitemap.xml`
- Файл robots: `https://fitfreakpro.ru/robots.txt`

Все canonical, Open Graph URL, sitemap URL и внутренние ссылки должны использовать этот production-домен.

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
- `/404.html`

На них используется `noindex,follow`, и они не включены в `sitemap.xml`.

## GitHub Pages и пользовательский домен

Файл `CNAME` закрепляет за публикацией домен `fitfreakpro.ru`. Сайт размещается в корне домена, поэтому `robots.txt` доступен по адресу `https://fitfreakpro.ru/robots.txt`, а карта сайта — по адресу `https://fitfreakpro.ru/sitemap.xml`.

DNS-записи для корневого домена и при необходимости `www` должны быть настроены у регистратора в соответствии с требованиями GitHub Pages. В настройках Pages следует включить принудительный HTTPS после успешной проверки домена.

## После публикации

1. Откройте `https://fitfreakpro.ru/` и проверьте, что CSS, JS и изображения загружаются без 404.
2. Запустите `npm run audit:live`, чтобы сравнить production с локальным источником, проверить статусы, sitemap, robots, ассеты, внешние ссылки и 404.
3. Откройте `sitemap.xml` и убедитесь, что там только индексируемые URL.
4. В Google Search Console добавьте ресурс URL-prefix для `https://fitfreakpro.ru/`.
5. Подтвердите владение способом, который предложит Google.
6. Отправьте sitemap: `https://fitfreakpro.ru/sitemap.xml`.
7. Через URL Inspection проверьте главную страницу и несколько внутренних страниц.
8. Посмотрите, какой canonical выбрал Google.
9. Проверьте раздел Pages/Indexing на исключения, дубликаты и страницы с `noindex`.
10. Повторите отправку sitemap в Bing Webmaster Tools.
11. Для аудитории РФ добавьте сайт в Яндекс Вебмастер и отправьте тот же sitemap.
12. После индексации проверьте сниппеты, заголовки, описания и Core Web Vitals.

## При следующей смене домена

При переходе на другой домен нужно обновить:

- canonical URL на всех страницах
- `og:url`
- `og:image`
- `twitter:image`
- `sitemap.xml`
- `robots.txt`
- ссылки в README и этом документе

После смены домена снова отправьте sitemap в поисковые системы.
