<?php

declare(strict_types=1);

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;

$basePath = dirname(__DIR__);
$origin = 'https://fitfreakpro.ru';
$routes = [
    '/' => 'index.html',
    '/how-it-works' => 'how-it-works/index.html',
    '/for-personal-trainers' => 'for-personal-trainers/index.html',
    '/pricing' => 'pricing/index.html',
    '/tutorial' => 'tutorial/index.html',
    '/about' => 'about/index.html',
    '/support' => 'support/index.html',
    '/privacy' => 'privacy/index.html',
    '/terms' => 'terms/index.html',
];
$publicDirectories = ['assets', 'build', 'downloads', 'images'];
$publicFiles = ['robots.txt', 'sitemap.xml'];

putenv('APP_ENV=production');
putenv('APP_DEBUG=false');
putenv('APP_KEY=base64:AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA=');
putenv("APP_URL={$origin}");
putenv('APP_LOCALE=ru');
putenv('APP_FALLBACK_LOCALE=ru');
putenv('APP_FAKER_LOCALE=ru_RU');
$_ENV['APP_ENV'] = $_SERVER['APP_ENV'] = 'production';
$_ENV['APP_DEBUG'] = $_SERVER['APP_DEBUG'] = 'false';
$_ENV['APP_KEY'] = $_SERVER['APP_KEY'] = 'base64:AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA=';
$_ENV['APP_URL'] = $_SERVER['APP_URL'] = $origin;
$_ENV['APP_LOCALE'] = $_SERVER['APP_LOCALE'] = 'ru';
$_ENV['APP_FALLBACK_LOCALE'] = $_SERVER['APP_FALLBACK_LOCALE'] = 'ru';
$_ENV['APP_FAKER_LOCALE'] = $_SERVER['APP_FAKER_LOCALE'] = 'ru_RU';

require $basePath.'/vendor/autoload.php';

if (! is_file($basePath.'/public/build/manifest.json')) {
    fwrite(STDERR, "Missing public/build/manifest.json. Run npm run build first.\n");
    exit(1);
}

$application = require $basePath.'/bootstrap/app.php';
$kernel = $application->make(Kernel::class);

foreach ($routes as $route => $outputPath) {
    $response = $kernel->handle(Request::create($origin.$route, 'GET'));

    if ($response->getStatusCode() !== 200) {
        fwrite(STDERR, "Static export failed for {$route}: HTTP {$response->getStatusCode()}.\n");
        exit(1);
    }

    $destination = $basePath.'/'.$outputPath;
    ensureDirectory(dirname($destination));
    $html = str_replace(
        '<!doctype html>',
        "<!doctype html>\n<!-- Generated from Laravel Blade by scripts/export-static.php. -->",
        $response->getContent(),
    );
    file_put_contents($destination, $html);
}

$notFoundResponse = $kernel->handle(Request::create($origin.'/not-found', 'GET'));

if ($notFoundResponse->getStatusCode() !== 404) {
    fwrite(STDERR, "Static export failed for 404 page: HTTP {$notFoundResponse->getStatusCode()}.\n");
    exit(1);
}

file_put_contents(
    $basePath.'/404.html',
    str_replace(
        '<!doctype html>',
        "<!doctype html>\n<!-- Generated from Laravel Blade by scripts/export-static.php. -->",
        $notFoundResponse->getContent(),
    ),
);

foreach ($publicDirectories as $directory) {
    $source = $basePath.'/public/'.$directory;
    $destination = $basePath.'/'.$directory;
    removeDirectory($destination);
    copyDirectory($source, $destination);
}

foreach ($publicFiles as $file) {
    copy($basePath.'/public/'.$file, $basePath.'/'.$file);
}

file_put_contents($basePath.'/CNAME', trim(file_get_contents($basePath.'/public/CNAME')).PHP_EOL);
file_put_contents($basePath.'/.nojekyll', '');

echo 'Exported '.count($routes)." pages for GitHub Pages.\n";

function ensureDirectory(string $directory): void
{
    if (! is_dir($directory) && ! mkdir($directory, 0755, true) && ! is_dir($directory)) {
        throw new RuntimeException("Unable to create directory: {$directory}");
    }
}

function copyDirectory(string $source, string $destination): void
{
    ensureDirectory($destination);

    foreach (new FilesystemIterator($source, FilesystemIterator::SKIP_DOTS) as $item) {
        $target = $destination.'/'.$item->getFilename();

        if ($item->isDir()) {
            copyDirectory($item->getPathname(), $target);
        } elseif (! copy($item->getPathname(), $target)) {
            throw new RuntimeException("Unable to copy file: {$item->getPathname()}");
        }
    }
}

function removeDirectory(string $directory): void
{
    if (! is_dir($directory)) {
        return;
    }

    $items = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator($directory, FilesystemIterator::SKIP_DOTS),
        RecursiveIteratorIterator::CHILD_FIRST,
    );

    foreach ($items as $item) {
        $item->isDir() ? rmdir($item->getPathname()) : unlink($item->getPathname());
    }

    rmdir($directory);
}
