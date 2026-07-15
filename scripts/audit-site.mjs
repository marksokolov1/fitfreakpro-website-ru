import fs from 'node:fs';
import path from 'node:path';

const root = process.cwd();
const basePath = '/fitfreakpro-website-ru';
const baseUrl = 'https://marksokolov1.github.io/fitfreakpro-website-ru';
const errors = [];
const warnings = [];

const expectedPages = {
  'index.html': { url: `${baseUrl}/`, indexable: true, navHref: null, schema: ['Organization', 'WebSite', 'SoftwareApplication', 'FAQPage'] },
  'how-it-works/index.html': { url: `${baseUrl}/how-it-works/`, indexable: true, navHref: `${basePath}/how-it-works/`, schema: ['WebPage', 'BreadcrumbList'] },
  'for-personal-trainers/index.html': { url: `${baseUrl}/for-personal-trainers/`, indexable: true, navHref: `${basePath}/for-personal-trainers/`, schema: ['WebPage', 'BreadcrumbList'] },
  'pricing/index.html': { url: `${baseUrl}/pricing/`, indexable: true, navHref: `${basePath}/pricing/`, schema: ['WebPage', 'BreadcrumbList'] },
  'about/index.html': { url: `${baseUrl}/about/`, indexable: true, navHref: `${basePath}/about/`, schema: ['AboutPage', 'BreadcrumbList'] },
  'support/index.html': { url: `${baseUrl}/support/`, indexable: true, navHref: `${basePath}/support/`, schema: ['ContactPage', 'BreadcrumbList'] },
  'privacy/index.html': { url: `${baseUrl}/privacy/`, indexable: false, navHref: null, schema: ['WebPage'] },
  'terms/index.html': { url: `${baseUrl}/terms/`, indexable: false, navHref: null, schema: ['WebPage'] },
  '404.html': { url: `${baseUrl}/404.html`, indexable: false, navHref: null, schema: [] }
};

const expectedNav = [
  [`${basePath}/#product`, 'Возможности'],
  [`${basePath}/how-it-works/`, 'Как это работает'],
  [`${basePath}/for-personal-trainers/`, 'Для тренеров'],
  [`${basePath}/pricing/`, 'Цены'],
  [`${basePath}/about/`, 'О FitFreak Pro'],
  [`${basePath}/support/`, 'Поддержка']
];

const allowedEvents = new Set([
  'app_download_click',
  'app_store_click',
  'google_play_click',
  'demo_request_click',
  'support_email_click',
  'pricing_view',
  'pricing_link_click',
  'workflow_link_click',
  'linkedin_click'
]);

const read = (file) => fs.readFileSync(path.join(root, file), 'utf8');
const exists = (file) => fs.existsSync(path.join(root, file));
const fail = (message) => errors.push(message);
const warn = (message) => warnings.push(message);

const walk = (dir) => {
  const entries = fs.readdirSync(path.join(root, dir), { withFileTypes: true });
  return entries.flatMap((entry) => {
    const rel = path.join(dir, entry.name);
    if (entry.name === '.git' || entry.name === 'node_modules') return [];
    if (entry.isDirectory()) return walk(rel);
    return rel.replace(/^\.\//, '');
  });
};

const htmlFiles = walk('.').filter((file) => file.endsWith('.html')).sort();
const sitemap = read('sitemap.xml');
const robots = read('robots.txt');
const sitemapUrls = [...sitemap.matchAll(/<loc>([^<]+)<\/loc>/g)].map((match) => match[1]);
const titles = new Map();
const descriptions = new Map();
const canonicals = new Map();
const indexableCanonicals = [];
const noindexCanonicals = [];

const stripHidden = (html) => html
  .replace(/<script[\s\S]*?<\/script>/gi, ' ')
  .replace(/<style[\s\S]*?<\/style>/gi, ' ')
  .replace(/<!--[\s\S]*?-->/g, ' ');

const visibleText = (html) => stripHidden(html)
  .replace(/<[^>]+>/g, ' ')
  .replace(/\s+/g, ' ')
  .trim();

const get = (html, regex) => html.match(regex)?.[1]?.trim() || '';
const all = (html, regex) => [...html.matchAll(regex)].map((match) => match[1]);
const esc = (value) => value.replace(/[.*+?^${}()|[\]\\]/g, '\\$&');

const parseAttributes = (attributeText) => {
  const attrs = {};
  for (const match of attributeText.matchAll(/([a-zA-Z:-]+)(?:=(["'])(.*?)\2)?/g)) {
    attrs[match[1].toLowerCase()] = match[3] ?? '';
  }
  return attrs;
};

const localFromProjectPath = (url) => {
  const clean = url.split('#')[0].split('?')[0];
  if (!clean || clean.startsWith('mailto:') || clean.startsWith('tel:') || clean.startsWith('http')) return null;
  if (!clean.startsWith(basePath)) return { invalidBase: true, path: clean };
  const rel = clean.slice(basePath.length).replace(/^\/+/, '');
  let file = rel || 'index.html';
  if (file.endsWith('/')) file += 'index.html';
  return { path: file };
};

const expectedHtmlFiles = Object.keys(expectedPages).sort();
for (const file of expectedHtmlFiles) {
  if (!htmlFiles.includes(file)) fail(`${file}: expected page file is missing`);
}
for (const file of htmlFiles) {
  if (!expectedPages[file]) warn(`${file}: HTML file is not in the expected URL matrix`);
}

const schemaTypesFrom = (html, file) => {
  const types = [];
  for (const match of html.matchAll(/<script\s+type=["']application\/ld\+json["'][^>]*>([\s\S]*?)<\/script>/gi)) {
    try {
      const parsed = JSON.parse(match[1]);
      const collect = (node) => {
        if (!node || typeof node !== 'object') return;
        if (Array.isArray(node)) return node.forEach(collect);
        if (node['@type']) types.push(node['@type']);
        if (node['@graph']) collect(node['@graph']);
      };
      collect(parsed);
    } catch (error) {
      fail(`${file}: invalid JSON-LD (${error.message})`);
    }
  }
  return types;
};

const headingLevels = (html) => [...html.matchAll(/<h([1-6])\b[^>]*>/gi)].map((match) => Number(match[1]));
const countWords = (text, pattern) => (text.match(pattern) || []).length;

for (const file of htmlFiles) {
  const expected = expectedPages[file];
  const html = read(file);
  const cleanHtml = stripHidden(html);
  const text = visibleText(html);
  const isNoindex = /<meta\s+name=["']robots["'][^>]+content=["'][^"']*noindex/i.test(html);
  const lang = get(html, /<html\s+lang=["']([^"']+)["']/i);
  const title = get(html, /<title>([\s\S]*?)<\/title>/i);
  const description = get(html, /<meta\s+name=["']description["']\s+content=["']([^"']+)["']/i);
  const canonical = get(html, /<link\s+rel=["']canonical["']\s+href=["']([^"']+)["']/i);
  const ogTitle = get(html, /<meta\s+property=["']og:title["']\s+content=["']([^"']+)["']/i);
  const ogDescription = get(html, /<meta\s+property=["']og:description["']\s+content=["']([^"']+)["']/i);
  const ogUrl = get(html, /<meta\s+property=["']og:url["']\s+content=["']([^"']+)["']/i);
  const ogImage = get(html, /<meta\s+property=["']og:image["']\s+content=["']([^"']+)["']/i);
  const twitterTitle = get(html, /<meta\s+name=["']twitter:title["']\s+content=["']([^"']+)["']/i);
  const twitterDescription = get(html, /<meta\s+name=["']twitter:description["']\s+content=["']([^"']+)["']/i);
  const twitterImage = get(html, /<meta\s+name=["']twitter:image["']\s+content=["']([^"']+)["']/i);
  const h1Count = (html.match(/<h1\b/gi) || []).length;
  const hLevels = headingLevels(html);

  if (lang !== 'ru-RU') fail(`${file}: expected lang="ru-RU"`);
  if (!title) fail(`${file}: missing <title>`);
  if (!description) fail(`${file}: missing meta description`);
  if (title.length > 62) warn(`${file}: title is long (${title.length} chars)`);
  if (description.length < 70 || description.length > 165) warn(`${file}: meta description length is ${description.length} chars`);
  if (h1Count !== 1) fail(`${file}: expected exactly one h1, found ${h1Count}`);
  for (let i = 1; i < hLevels.length; i += 1) {
    if (hLevels[i] - hLevels[i - 1] > 1) fail(`${file}: heading level jumps from h${hLevels[i - 1]} to h${hLevels[i]}`);
  }
  if (/<meta\s+name=["']keywords["']/i.test(html)) fail(`${file}: meta keywords tag is not allowed`);

  if (expected) {
    if (!canonical) fail(`${file}: missing canonical`);
    if (canonical !== expected.url) fail(`${file}: canonical does not match expected URL (${canonical})`);
    if (expected.indexable && isNoindex) fail(`${file}: indexable page contains noindex`);
    if (!expected.indexable && !isNoindex) fail(`${file}: noindex page is missing noindex,follow`);
  }
  if (canonical && !canonical.startsWith(baseUrl)) fail(`${file}: canonical uses wrong host/base path`);
  if (canonical && ogUrl !== canonical) fail(`${file}: og:url does not match canonical`);
  if (ogTitle && ogTitle !== title) warn(`${file}: og:title differs from title`);
  if (twitterTitle && twitterTitle !== title) warn(`${file}: twitter:title differs from title`);
  if (ogDescription && ogDescription !== description) warn(`${file}: og:description differs from meta description`);
  if (twitterDescription && twitterDescription !== description) warn(`${file}: twitter:description differs from meta description`);
  if (ogImage && twitterImage && ogImage !== twitterImage) fail(`${file}: Open Graph and Twitter image differ`);

  if (title) {
    if (titles.has(title)) fail(`${file}: duplicate title also used by ${titles.get(title)}`);
    titles.set(title, file);
  }
  if (description) {
    if (descriptions.has(description)) fail(`${file}: duplicate meta description also used by ${descriptions.get(description)}`);
    descriptions.set(description, file);
  }
  if (canonical) {
    if (canonicals.has(canonical)) fail(`${file}: duplicate canonical also used by ${canonicals.get(canonical)}`);
    canonicals.set(canonical, file);
    if (isNoindex) noindexCanonicals.push(canonical);
    else indexableCanonicals.push(canonical);
  }

  const schemaTypes = schemaTypesFrom(html, file);
  if (html.includes('"@type": "ВопросыPage"')) fail(`${file}: invalid translated Schema.org type`);
  for (const requiredType of expected?.schema || []) {
    if (!schemaTypes.includes(requiredType)) fail(`${file}: missing required structured-data type ${requiredType}`);
  }
  if (schemaTypes.includes('AggregateRating') || schemaTypes.includes('Review')) {
    fail(`${file}: reviews or aggregate ratings are not supported by supplied facts`);
  }
  if (schemaTypes.includes('FAQPage') && !cleanHtml.includes('class="faq-item"')) {
    fail(`${file}: FAQPage schema exists without visible FAQ content`);
  }

  const mainNav = [...html.matchAll(/<nav class=["']main-nav["'][\s\S]*?<\/nav>/gi)][0]?.[0] || '';
  const navLinks = [...mainNav.matchAll(/<a\s+([^>]*?)>([^<]+)<\/a>/g)].map((match) => {
    const attrs = parseAttributes(match[1]);
    return [attrs.href, match[2], attrs['aria-current'] || ''];
  });
  if (JSON.stringify(navLinks.map(([href, label]) => [href, label])) !== JSON.stringify(expectedNav)) {
    fail(`${file}: shared main navigation is inconsistent`);
  }
  if (expected?.navHref) {
    const current = navLinks.find(([href]) => href === expected.navHref);
    if (!current || current[2] !== 'page') fail(`${file}: current main-nav link is missing aria-current="page"`);
  } else if (navLinks.some(([, , current]) => current === 'page')) {
    fail(`${file}: unexpected aria-current="page" in main navigation`);
  }
  if (!/class=["']mobile-toggle["'][^>]+aria-controls=["']primary-navigation["']/i.test(html)) {
    fail(`${file}: mobile menu button missing aria-controls`);
  }

  for (const href of all(html, /<a\b[^>]*\shref=["']([^"']+)["']/gi)) {
    if (href.startsWith('#')) {
      const id = href.slice(1);
      if (id && !new RegExp(`id=["']${esc(id)}["']`).test(html)) fail(`${file}: broken same-page anchor ${href}`);
      continue;
    }
    const local = localFromProjectPath(href);
    if (!local) continue;
    if (local.invalidBase) fail(`${file}: internal link without project base path (${local.path})`);
    else if (!exists(local.path)) fail(`${file}: broken internal link ${href}`);
  }

  for (const anchor of [...html.matchAll(/<a\b([^>]*)>/gi)]) {
    const attrs = parseAttributes(anchor[1]);
    if (attrs.target === '_blank' && !/\bnoopener\b/.test(attrs.rel || '')) {
      fail(`${file}: target="_blank" link missing rel="noopener"`);
    }
  }

  const assetRefs = [
    ...all(html, /<(?:img|script)\b[^>]*\ssrc=["']([^"']+)["']/gi),
    ...all(html, /<link\b[^>]*\shref=["']([^"']+)["']/gi).filter((href) => href.includes('/assets/')),
    ogImage,
    twitterImage
  ].filter(Boolean);
  for (const asset of assetRefs) {
    if (asset.startsWith(baseUrl)) {
      const rel = asset.slice(baseUrl.length).replace(/^\/+/, '');
      if (rel && !exists(rel)) fail(`${file}: missing local social asset ${asset}`);
      continue;
    }
    const local = localFromProjectPath(asset);
    if (!local) continue;
    if (local.invalidBase) fail(`${file}: local asset without project base path (${local.path})`);
    else if (!exists(local.path)) fail(`${file}: missing local asset ${asset}`);
  }

  for (const img of [...html.matchAll(/<img\b([^>]*)>/gi)]) {
    const attrs = parseAttributes(img[1]);
    const ariaHidden = attrs['aria-hidden'] === 'true';
    if (!ariaHidden && (!('alt' in attrs) || attrs.alt.trim() === '')) fail(`${file}: informative image missing alt text`);
    if (!attrs.width || !attrs.height) fail(`${file}: image missing width or height attribute`);
  }

  for (const event of all(html, /data-track=["']([^"']+)["']/gi)) {
    if (!allowedEvents.has(event)) fail(`${file}: unapproved analytics event name ${event}`);
  }

  const bannedVisible = [
    /Скачать FitFreak Pro and/i,
    /invite a client/i,
    /For personal trainers/i,
    /FitFreak Pro not/i,
    /sections inside/i,
    /screen in FitFreak/i,
    /walkthrough/i,
    /Download Free/i,
    /Privacy Policy/i,
    /Support for/i,
    /работа внутри плана тренера/i,
    /путь тренера/i,
    /аккуратный процесс/i,
    /создайте свою систему тренера/i,
    /информация о прогрессе/i
  ];
  for (const pattern of bannedVisible) {
    if (pattern.test(text)) fail(`${file}: known weak or untranslated visible fragment (${pattern})`);
  }

  const metadata = [
    title,
    description,
    ...all(html, /<meta\s+(?:name|property)=["'][^"']+["']\s+content=["']([^"']+)["']/gi),
    ...all(html, /aria-label=["']([^"']+)["']/gi),
    ...all(html, /alt=["']([^"']+)["']/gi),
    ...all(html, /href=["']mailto:[^"']*subject=([^"']+)["']/gi)
  ].join(' ');
  for (const pattern of bannedVisible) {
    if (pattern.test(metadata)) fail(`${file}: known weak or untranslated metadata fragment (${pattern})`);
  }

  if (expected?.indexable && countWords(text, /понятн/gi) > 3) {
    warn(`${file}: repeated use of forms of "понятный"`);
  }
  if (expected?.indexable && countWords(text, /тренировочный процесс|процесс тренера|процессом тренера/gi) > 2) {
    warn(`${file}: repeated abstract "процесс" phrasing`);
  }
}

if (!/<urlset[^>]+xmlns=["']http:\/\/www\.sitemaps\.org\/schemas\/sitemap\/0\.9["']/.test(sitemap)) {
  fail('sitemap.xml: missing sitemap namespace');
}
if (/<lastmod>/i.test(sitemap)) {
  warn('sitemap.xml: lastmod is present; confirm it is generated from accurate source timestamps');
}
const expectedSitemapUrls = Object.values(expectedPages).filter((page) => page.indexable).map((page) => page.url);
for (const url of noindexCanonicals) {
  if (sitemapUrls.includes(url)) fail(`sitemap.xml: noindex URL is included (${url})`);
}
for (const url of expectedSitemapUrls) {
  if (!sitemapUrls.includes(url)) fail(`sitemap.xml: indexable canonical missing (${url})`);
}
for (const url of sitemapUrls) {
  if (!url.startsWith(baseUrl)) fail(`sitemap.xml: URL uses wrong base path (${url})`);
  if (!expectedSitemapUrls.includes(url)) fail(`sitemap.xml: URL is not an expected indexable canonical (${url})`);
}

if (!robots.includes(`Sitemap: ${baseUrl}/sitemap.xml`)) {
  fail('robots.txt: missing exact sitemap URL');
}
if (!robots.includes(`Allow: ${basePath}/`)) {
  fail('robots.txt: missing project path allow rule');
}
warn('robots.txt: this is a GitHub Pages project-path robots file, not the host-root robots file; see docs/seo-deployment.md.');

const allHtmlSource = htmlFiles.map(read).join('\n');
if (/TODO|PLACEHOLDER|LEGAL_REVIEW_REQUIRED/i.test(stripHidden(allHtmlSource))) {
  fail('HTML contains user-visible TODO/placeholder/legal-review marker');
}

if (warnings.length) {
  console.warn(`Site audit warnings (${warnings.length}):`);
  for (const warning of warnings) console.warn(`- ${warning}`);
}

if (errors.length) {
  console.error(`Site audit failed with ${errors.length} issue(s):`);
  for (const error of errors) console.error(`- ${error}`);
  process.exit(1);
}

console.log(`Site audit passed: ${htmlFiles.length} HTML files, ${indexableCanonicals.length} indexable pages, ${noindexCanonicals.length} noindex pages, ${warnings.length} warning(s).`);
