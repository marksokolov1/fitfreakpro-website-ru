import fs from 'node:fs';
import path from 'node:path';

const root = process.cwd();
const baseUrl = 'https://marksokolov1.github.io/fitfreakpro-website-ru';
const hostRoot = 'https://marksokolov1.github.io';
const warnings = [];
const errors = [];

const pages = [
  ['index.html', `${baseUrl}/`, 200],
  ['how-it-works/index.html', `${baseUrl}/how-it-works/`, 200],
  ['for-personal-trainers/index.html', `${baseUrl}/for-personal-trainers/`, 200],
  ['pricing/index.html', `${baseUrl}/pricing/`, 200],
  ['about/index.html', `${baseUrl}/about/`, 200],
  ['support/index.html', `${baseUrl}/support/`, 200],
  ['privacy/index.html', `${baseUrl}/privacy/`, 200],
  ['terms/index.html', `${baseUrl}/terms/`, 200],
  ['404.html', `${baseUrl}/404.html`, 200]
];

const assets = [
  `${baseUrl}/assets/css/styles.css?v=20260714-production`,
  `${baseUrl}/assets/js/main.js?v=20260714-production`,
  `${baseUrl}/assets/img/social-share-ru.png`,
  `${baseUrl}/sitemap.xml`,
  `${baseUrl}/robots.txt`
];

const externalLinks = [
  'https://apps.apple.com/us/app/fit-freak-pro/id6742347988',
  'https://play.google.com/store/apps/details?id=com.duseca.fitfreak',
  'https://www.linkedin.com/company/fitfreak-pro/'
];

const fetchWithRedirects = async (url, maxRedirects = 6) => {
  const chain = [];
  let current = url;
  for (let i = 0; i <= maxRedirects; i += 1) {
    const response = await fetch(current, { redirect: 'manual' });
    chain.push({ url: current, status: response.status, location: response.headers.get('location') || '' });
    if (response.status >= 300 && response.status < 400 && response.headers.get('location')) {
      current = new URL(response.headers.get('location'), current).toString();
      continue;
    }
    const body = await response.text();
    return { response, body, chain };
  }
  throw new Error(`Too many redirects for ${url}`);
};

for (const [file, url, expectedStatus] of pages) {
  const { response, body, chain } = await fetchWithRedirects(url);
  if (response.status !== expectedStatus) {
    errors.push(`${url}: expected ${expectedStatus}, got ${response.status}`);
  }
  if (chain.length > 1) {
    warnings.push(`${url}: redirect chain ${chain.map((entry) => entry.status).join(' -> ')}`);
  }
  const localBody = fs.readFileSync(path.join(root, file), 'utf8');
  if (body !== localBody) {
    warnings.push(`${url}: live HTML differs from local ${file}. Deploy after review before claiming production is current.`);
  }
}

for (const url of assets) {
  const { response, chain } = await fetchWithRedirects(url);
  if (response.status !== 200) {
    errors.push(`${url}: expected 200, got ${response.status}`);
  }
  if (chain.length > 1) {
    warnings.push(`${url}: redirect chain ${chain.map((entry) => entry.status).join(' -> ')}`);
  }
}

const missing = await fetchWithRedirects(`${baseUrl}/not-a-real-page-${Date.now()}`);
if (missing.response.status !== 404) {
  errors.push(`${baseUrl}/nonexistent: expected GitHub Pages 404, got ${missing.response.status}`);
}

const hostRobots = await fetchWithRedirects(`${hostRoot}/robots.txt`);
if (hostRobots.response.status !== 200) {
  warnings.push(`${hostRoot}/robots.txt is not controlled by this project site. Use page-level robots and direct sitemap submission until a root robots solution exists.`);
}

for (const url of externalLinks) {
  const { response, chain } = await fetchWithRedirects(url);
  if (response.status < 200 || response.status >= 400) {
    errors.push(`${url}: external link returned ${response.status}`);
  }
  if (chain.length > 3) {
    warnings.push(`${url}: long redirect chain (${chain.length} hops)`);
  }
}

if (warnings.length) {
  console.warn(`Live audit warnings (${warnings.length}):`);
  for (const warning of warnings) console.warn(`- ${warning}`);
}

if (errors.length) {
  console.error(`Live audit failed with ${errors.length} issue(s):`);
  for (const error of errors) console.error(`- ${error}`);
  process.exit(1);
}

console.log(`Live audit completed: ${pages.length} pages, ${assets.length} local assets, ${externalLinks.length} external links checked.`);
