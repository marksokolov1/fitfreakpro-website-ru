# FitFreak Pro на русском языке

Русский сайт FitFreak Pro работает на Laravel 12, Blade, Tailwind CSS 4 и Vite 6. Основной домен: `https://fitfreakpro.ru`.

## Локальный запуск

Требуются PHP 8.2+, Composer, Node.js и npm.

```bash
composer install
cp .env.example .env
php artisan key:generate
npm install
npm run build
php artisan serve
```

Для одновременного запуска Laravel и Vite:

```bash
composer run dev
```

## Проверка

```bash
php artisan test
./vendor/bin/pint --test
npm run build
```

## Размещение

Веб-сервер должен использовать каталог `public/` как document root. Для production задайте `APP_ENV=production`, `APP_DEBUG=false`, `APP_URL=https://fitfreakpro.ru` и выполните:

```bash
composer install --no-dev --optimize-autoloader
npm ci
npm run build
php artisan optimize
```

Сайт не требует базы данных. Клиентский доступ указан как `990 ₽ в месяц`, аккаунт тренера — `0 ₽`. Предварительные тексты политики конфиденциальности и условий закрыты от индексации до юридической проверки.
