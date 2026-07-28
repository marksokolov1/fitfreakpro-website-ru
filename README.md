# FitFreak Pro Website

The FitFreak Pro marketing and support website is a Laravel 12 application rendered with Blade. Its frontend uses Tailwind CSS, Vite, and vanilla JavaScript.

## Requirements

- PHP 8.2 or newer
- Composer
- Node.js and npm

## Local setup

```bash
composer install
cp .env.example .env
php artisan key:generate
npm ci
npm run build
php artisan serve
```

## Public pages

- `/` Landing page
- `/how-it-works/` Coach workflow page
- `/for-personal-trainers/` Audience page for independent personal trainers
- `/pricing/` Pricing page
- `/tutorial/` Coach and client tutorial page
- `/about/` Founder-led product overview page
- `/privacy/` Privacy Policy page
- `/support/` Support page
- `/terms/` Terms overview page requiring legal review
- `/robots.txt` Search crawler instructions
- `/sitemap.xml` Public indexable route sitemap

## Quality checks

```bash
composer validate --no-check-publish
php artisan test
./vendor/bin/pint --test
npm run build
```

## Deployment

Configure the web server document root as `public/`. Install Composer dependencies without development packages, install frontend dependencies with `npm ci`, generate the production assets with `npm run build`, and provide production environment variables outside version control.

### GitHub Pages

GitHub Pages cannot execute Laravel or PHP. Generate the static deployment snapshot before publishing:

```bash
npm run export:static
```

The generated root HTML and public asset directories are deployment output. Blade, `resources/css`, and `resources/js` remain the editable source of truth.

## App links included

- Apple App Store: https://apps.apple.com/us/app/fit-freak-pro/id6742347988
- Google Play Store: https://play.google.com/store/apps/details?id=com.duseca.fitfreak

## Notes

The privacy policy and terms content should be reviewed by legal counsel before publishing.

The Terms page includes a source-code legal review reminder and should be approved by qualified counsel before being treated as final.
