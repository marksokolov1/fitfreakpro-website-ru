<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use RuntimeException;

class ExportStaticSite extends Command
{
    protected $signature = 'site:export
        {--output= : Output directory; defaults to the repository root for GitHub Pages}';

    protected $description = 'Render the public Laravel routes as static files for GitHub Pages';

    /**
     * @var array<string, string>
     */
    private const PAGES = [
        '/' => 'index.html',
        '/how-it-works' => 'how-it-works/index.html',
        '/tutorial' => 'tutorial/index.html',
        '/for-personal-trainers' => 'for-personal-trainers/index.html',
        '/pricing' => 'pricing/index.html',
        '/about' => 'about/index.html',
        '/support' => 'support/index.html',
        '/privacy' => 'privacy/index.html',
        '/terms' => 'terms/index.html',
        '/404.html' => '404.html',
    ];

    /**
     * @var list<string>
     */
    private const PUBLIC_DIRECTORIES = [
        'assets',
        'build',
        'downloads',
        'images',
    ];

    /**
     * @var list<string>
     */
    private const PUBLIC_FILES = [
        'CNAME',
        'robots.txt',
        'sitemap.xml',
    ];

    public function handle(Kernel $kernel): int
    {
        $output = $this->resolveOutputDirectory();

        if (! File::isDirectory(public_path('build'))) {
            $this->components->error('Vite assets are missing. Run npm run build first.');

            return self::FAILURE;
        }

        foreach (self::PAGES as $path => $destination) {
            $request = Request::create(rtrim(config('app.url'), '/').$path, 'GET');
            $response = $kernel->handle($request);
            $expectedStatus = $path === '/404.html' ? 404 : 200;

            if ($response->getStatusCode() !== $expectedStatus) {
                throw new RuntimeException(
                    sprintf('%s returned HTTP %d.', $path, $response->getStatusCode())
                );
            }

            $target = $output.DIRECTORY_SEPARATOR.$destination;
            File::ensureDirectoryExists(dirname($target));
            File::put($target, $response->getContent());
            $kernel->terminate($request, $response);
        }

        $this->copyPublicAssets($output);
        File::put($output.DIRECTORY_SEPARATOR.'.nojekyll', '');

        $this->components->info(sprintf(
            'Exported %d pages to %s.',
            count(self::PAGES),
            $output
        ));

        return self::SUCCESS;
    }

    private function resolveOutputDirectory(): string
    {
        $configuredOutput = $this->option('output');
        $output = $configuredOutput
            ? base_path($configuredOutput)
            : base_path();

        File::ensureDirectoryExists($output);

        return realpath($output) ?: $output;
    }

    private function copyPublicAssets(string $output): void
    {
        foreach (self::PUBLIC_DIRECTORIES as $directory) {
            $source = public_path($directory);
            $destination = $output.DIRECTORY_SEPARATOR.$directory;

            if ($directory === 'build') {
                File::deleteDirectory($destination);
            }

            File::ensureDirectoryExists($destination);
            File::copyDirectory($source, $destination);
        }

        foreach (self::PUBLIC_FILES as $file) {
            File::copy(
                public_path($file),
                $output.DIRECTORY_SEPARATOR.$file
            );
        }
    }
}
