# Production audit

Дата аудита: 2026-07-14  
Production URL: `https://marksokolov1.github.io/fitfreakpro-website-ru/`  
Base path: `/fitfreakpro-website-ru/`

## URL inventory

| URL | Source file | Search status | Title | Meta description | Canonical | H1 | Structured data | Internal link count |
|---|---|---|---|---|---|---|---|---|
| `/` | `index.html` | indexable | FitFreak Pro — приложение для персональных тренеров | Создавайте библиотеку упражнений, назначайте тренировки, задавайте цели по питанию и отслеживайте прогресс клиентов в FitFreak Pro. | `https://marksokolov1.github.io/fitfreakpro-website-ru/` | Ваш подход. Ваши упражнения. Клиент видит, что делать. | Organization, WebSite, SoftwareApplication, FAQPage | 9 |
| `/how-it-works/` | `how-it-works/index.html` | indexable | Как работает FitFreak Pro для тренеров | Как тренеру начать бесплатно: создать библиотеку упражнений, пригласить клиента, назначить тренировки и проверить прогресс. | `https://marksokolov1.github.io/fitfreakpro-website-ru/how-it-works/` | От настройки тренера до работы с клиентом. | WebPage, BreadcrumbList | 9 |
| `/for-personal-trainers/` | `for-personal-trainers/index.html` | indexable | FitFreak Pro для персональных тренеров | Приложение для независимых персональных тренеров: своя библиотека упражнений, клиентские планы, цели по питанию и просмотр прогресса. | `https://marksokolov1.github.io/fitfreakpro-website-ru/for-personal-trainers/` | Организуйте работу с клиентами без лишних инструментов. | WebPage, BreadcrumbList | 9 |
| `/pricing/` | `pricing/index.html` | indexable | Цены FitFreak Pro для тренеров и клиентов | Тренер регистрируется бесплатно. Приглашенный клиент платит 1490 ₽ в месяц за доступ к тренировкам, питанию и прогрессу. | `https://marksokolov1.github.io/fitfreakpro-website-ru/pricing/` | Простая модель для работы тренера с клиентом. | WebPage, BreadcrumbList | 9 |
| `/about/` | `about/index.html` | indexable | О FitFreak Pro — приложение для тренеров | FitFreak Pro помогает персональным тренерам хранить упражнения, назначать тренировки, задавать цели по питанию и видеть прогресс клиентов. | `https://marksokolov1.github.io/fitfreakpro-website-ru/about/` | FitFreak Pro помогает тренерам организовать работу с клиентами. | AboutPage, BreadcrumbList | 9 |
| `/support/` | `support/index.html` | indexable | Поддержка FitFreak Pro для тренеров и клиентов | Помощь по аккаунту тренера, клиентскому доступу, подпискам, тренировкам, целям по питанию, прогрессу и входу в FitFreak Pro. | `https://marksokolov1.github.io/fitfreakpro-website-ru/support/` | Чем мы можем помочь? | ContactPage, BreadcrumbList | 9 |
| `/privacy/` | `privacy/index.html` | noindex | Политика конфиденциальности FitFreak Pro | Предварительное описание обработки данных в FitFreak Pro для тренеров и клиентов. Текст требует юридической проверки перед публикацией. | `https://marksokolov1.github.io/fitfreakpro-website-ru/privacy/` | Как FitFreak Pro описывает данные тренера и клиента. | WebPage | 9 |
| `/terms/` | `terms/index.html` | noindex | Условия использования FitFreak Pro | Предварительный обзор условий FitFreak Pro для тренеров и клиентов. Текст требует юридической проверки перед публикацией. | `https://marksokolov1.github.io/fitfreakpro-website-ru/terms/` | Условия использования | WebPage | 9 |
| `/404.html` | `404.html` | noindex | Страница не найдена \| FitFreak Pro | Страница FitFreak Pro не найдена. Перейдите на главную, к продукту, ценам или поддержке. | `https://marksokolov1.github.io/fitfreakpro-website-ru/404.html` | Страница не найдена. | none | 1 |

## Indexation matrix

| URL | Expected status | Sitemap | Robots meta | Canonical |
|---|---|---|---|---|
| `/` | indexable | yes | index | self |
| `/how-it-works/` | indexable | yes | index | self |
| `/for-personal-trainers/` | indexable | yes | index | self |
| `/pricing/` | indexable | yes | index | self |
| `/about/` | indexable | yes | index | self |
| `/support/` | indexable | yes | index | self |
| `/privacy/` | noindex | no | `noindex,follow` | self |
| `/terms/` | noindex | no | `noindex,follow` | self |
| `/404.html` | noindex | no | `noindex,follow` | self |

## Keyword-to-page map

| Intent | Primary page |
|---|---|
| приложение для персональных тренеров | `/` |
| приложение для тренера | `/about/` |
| ведение клиентов для тренера | `/for-personal-trainers/` |
| программа для персонального тренера | `/for-personal-trainers/` |
| составление тренировок для клиентов | `/how-it-works/` |
| приложение для онлайн-тренера | `/for-personal-trainers/` |
| цена приложения для тренера | `/pricing/` |
| поддержка FitFreak Pro | `/support/` |

## Severity-ranked findings

### Critical

- **Confirmed:** GitHub Pages project-site `robots.txt` is not host-root robots control. Evidence: `robots.txt` is served at `/fitfreakpro-website-ru/robots.txt`, not `https://marksokolov1.github.io/robots.txt`. Fix: documented in `docs/seo-deployment.md`; retained page-level robots and direct sitemap submission.
- **Confirmed:** Legal/privacy facts are not final. Evidence: `privacy/index.html` and `terms/index.html` contain preliminary language and require legal review. Fix: both remain `noindex,follow` and are excluded from `sitemap.xml`; questionnaire added in `docs/legal-facts-required.md`.
- **Confirmed:** App Store page exposes `Data Not Collected`, while website privacy draft describes possible data categories. Evidence: live App Store HTML includes `Data Not Collected`; website legal draft mentions account, workout, nutrition, progress and technical data categories. Fix: discrepancy documented; no final privacy claim added.

### High

- **Confirmed:** Production does not include the latest local changes until this branch is reviewed and published. Evidence: live homepage SHA-256 differed from local `index.html` after this pass. Fix: `scripts/audit-live.mjs` now reports live/source drift.
- **Confirmed:** Previous repeated navigation and runtime nav rewriting could drift across pages. Fix: static nav normalized; runtime rewrite removed; `aria-current="page"` added on current main-nav pages.
- **Confirmed:** Mixed or weak translated phrases existed, including “путь тренера”, “работа внутри плана тренера” and repeated “процесс”. Fix: visible copy updated and weak fragments added to the audit script.

### Medium

- **Confirmed:** Browser-based Lighthouse/axe could not be completed in this local environment because installed browsers aborted under headless automation. Fix: static accessibility checks were expanded; run Lighthouse/axe in CI or a normal desktop browser before final launch.
- **Confirmed:** App interface language is not verified. Evidence: store pages contain English-language signals and screenshots contain English UI text. Fix: `docs/legal-facts-required.md` asks for supported app languages; site avoids claiming Russian app UI.
- **Recommendation:** Consider a small static generator later to centralize header/footer/metadata. Current static HTML is acceptable because `scripts/audit-site.mjs` checks drift.

### Low

- **Confirmed:** `.DS_Store` appeared as untracked repo noise. Fix: `.gitignore` added.
- **Recommendation:** Add accurate `<lastmod>` values only if generated from real file modification or release timestamps.

## Production comparison

Live checks performed on 2026-07-14:

- Expected pages returned HTTP 200.
- `/fitfreakpro-website-ru/not-a-real-page-*` returned HTTP 404.
- App Store and Google Play links returned HTTP 200.
- Current production HTML differs from the local source after this pass because these changes have not been pushed/deployed.

Run after deployment:

```bash
npm run audit:live
```

## Structured-data review

- Homepage uses `Organization`, `WebSite`, `SoftwareApplication` and `FAQPage`.
- `SoftwareApplication.applicationCategory` is `BusinessApplication`, which matches the product positioning as a trainer business utility better than `HealthApplication`.
- Inner pages use `WebPage`, `AboutPage`, `ContactPage` and `BreadcrumbList` where appropriate.
- No `Review` or `AggregateRating` markup is present.
- JSON-LD parses in `npm run audit:site`.

FAQ markup is retained because the homepage has visible FAQ content. It is not treated as a guaranteed Google rich-result feature.

## Accessibility review

Implemented or verified:

- Skip link.
- Main landmarks.
- Exactly one H1 per page.
- Static `aria-current="page"` on current main-nav pages.
- Mobile menu `aria-expanded` and `aria-controls`.
- Escape closes the mobile menu.
- FAQ buttons use `aria-expanded` and `aria-controls`.
- Informative images have alt text and width/height.
- External links using `target="_blank"` include `rel="noopener noreferrer"`.
- Reduced-motion CSS is present.

Remaining recommended manual check:

- Keyboard test in real Safari/Chrome at mobile and desktop widths.
- axe or Lighthouse accessibility run in a browser environment that can launch headless or headed Chrome.

## Performance review

Implemented or verified:

- Screenshots use WebP.
- Image width and height attributes are present.
- Above-the-fold hero image uses eager loading and fetch priority.
- Offscreen images use lazy loading.
- Mobile and reduced-data styles reduce expensive decorative effects.
- JavaScript remains small and vanilla.

Measured locally:

- `assets/css/styles.css`: approximately 43 KB.
- `assets/js/main.js`: approximately 3.5 KB.
- `assets/img/social-share-ru.png`: 1200 x 630.

Lighthouse scores were not claimed because browser automation was unavailable in this environment.

## Automation

- `npm run audit:site`: local static audit.
- `npm run audit:live`: network/live audit.
- `npm test`: local static audit.
- `.github/workflows/site-quality.yml`: runs `npm test` on pull requests and main pushes.
