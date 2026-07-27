import { execFileSync } from 'node:child_process';

try {
    execFileSync('git', ['diff', '--exit-code'], { stdio: 'inherit' });

    const untrackedFiles = execFileSync(
        'git',
        ['ls-files', '--others', '--exclude-standard'],
        { encoding: 'utf8' },
    ).trim();

    if (untrackedFiles) {
        console.error(`Untracked export files:\n${untrackedFiles}`);
        process.exit(1);
    }
} catch {
    console.error(
        [
            '',
            'The committed static export is out of date.',
            'Run "npm run export:static", then commit the generated HTML and build files.',
            '',
        ].join('\n'),
    );
    process.exit(1);
}
