import fs from 'node:fs';
import path from 'node:path';

const root = process.cwd();
const basePath = '/fitfreakpro-website-ru';
const baseUrl = 'https://marksokolov1.github.io/fitfreakpro-website-ru';
const errors = [];

const read = (file) => fs.readFileSync(path.join(root, file), 'utf8');
const exists = (file) => fs.existsSync(path.join(root, file));

const walk = (dir) => {
  const entries = fs.readdirSync(path.join(root, dir), { withFileTypes: true });
  return entries.flatMap((entry) => {
    const rel = path.join(dir, entry.name);
    if (entry.name === '.git') return [];
    if (entry.isDirectory()) return walk(rel);
    return rel;
  });
};

const htmlFiles = walk('.').filter((file) => file.endsWith('.html')).map((file) => file.replace(/^\.\//, '')).sort();
const sitemap = read('sitemap.xml');
const sitemapUrls = [...sitemap.matchAll(/<loc>([^<]+)<\/loc>/g)].map((match) => match[1]);
const titles = new Map();
const canonicals = new Map();
const indexableCanonicals = [];
const noindexCanonicals = [];
const expectedNav = [
  [`${basePath}/#product`, 'Продукт'],
  [`${basePath}/how-it-works/`, 'Как это работает'],
  [`${basePath}/for-personal-trainers/`, 'Для персональных тренеров'],
  [`${basePath}/pricing/`, 'Цены'],
  [`${basePath}/about/`, 'О проекте'],
  [`${basePath}/support/`, 'Поддержка']
];

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
const pagePathToUrl = (file) => {
  if (file === 'index.html') return `${baseUrl}/`;
  if (file === '404.html') return `${baseUrl}/404.html`;
  return `${baseUrl}/${file.replace(/index\.html$/, '')}`;
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

for (const file of htmlFiles) {
  const html = read(file);
  const isNoindex = /<meta\s+name=["']robots["'][^>]+content=["'][^"']*noindex/i.test(html);
  const title = get(html, /<title>([\s\S]*?)<\/title>/i);
  const description = get(html, /<meta\s+name=["']description["']\s+content=["']([^"']+)["']/i);
  const canonical = get(html, /<link\s+rel=["']canonical["']\s+href=["']([^"']+)["']/i);
  const h1Count = (html.match(/<h1\b/gi) || []).length;
  const ogUrl = get(html, /<meta\s+property=["']og:url["']\s+content=["']([^"']+)["']/i);
  const ogImage = get(html, /<meta\s+property=["']og:image["']\s+content=["']([^"']+)["']/i);

  if (!title) errors.push(`${file}: missing <title>`);
  if (!description) errors.push(`${file}: missing meta description`);
  if (h1Count !== 1) errors.push(`${file}: expected exactly one h1, found ${h1Count}`);
  if (!canonical && !isNoindex) errors.push(`${file}: missing canonical on indexable page`);
  if (canonical && !canonical.startsWith(baseUrl)) errors.push(`${file}: canonical uses wrong host/base path`);
  if (canonical && canonical !== pagePathToUrl(file)) errors.push(`${file}: canonical does not match file URL (${canonical})`);
  if (canonical && ogUrl !== canonical) errors.push(`${file}: og:url does not match canonical`);
  if (title) {
    if (titles.has(title)) errors.push(`${file}: duplicate title also used by ${titles.get(title)}`);
    titles.set(title, file);
  }
  if (canonical) {
    if (canonicals.has(canonical)) errors.push(`${file}: duplicate canonical also used by ${canonicals.get(canonical)}`);
    canonicals.set(canonical, file);
    if (isNoindex) noindexCanonicals.push(canonical);
    else indexableCanonicals.push(canonical);
  }

  const scriptJson = [...html.matchAll(/<script\s+type=["']application\/ld\+json["'][^>]*>([\s\S]*?)<\/script>/gi)];
  for (const match of scriptJson) {
    try {
      JSON.parse(match[1]);
    } catch (error) {
      errors.push(`${file}: invalid JSON-LD (${error.message})`);
    }
  }
  if (html.includes('"@type": "ВопросыPage"')) errors.push(`${file}: invalid translated Schema.org type`);

  const mainNav = [...html.matchAll(/<nav class=["']main-nav["'][\s\S]*?<\/nav>/gi)][0]?.[0] || '';
  const navLinks = [...mainNav.matchAll(/<a\s+href=["']([^"']+)["'][^>]*>([^<]+)<\/a>/g)].map((match) => [match[1], match[2]]);
  if (JSON.stringify(navLinks) !== JSON.stringify(expectedNav)) {
    errors.push(`${file}: shared main navigation is inconsistent`);
  }

  for (const href of all(html, /<a\b[^>]*\shref=["']([^"']+)["']/gi)) {
    if (href.startsWith('#')) {
      const id = href.slice(1);
      if (id && !new RegExp(`id=["']${id}["']`).test(html)) errors.push(`${file}: broken same-page anchor ${href}`);
      continue;
    }
    const local = localFromProjectPath(href);
    if (!local) continue;
    if (local.invalidBase) errors.push(`${file}: internal link without project base path (${local.path})`);
    else if (!exists(local.path)) errors.push(`${file}: broken internal link ${href}`);
  }

  const assetRefs = [
    ...all(html, /<(?:img|script)\b[^>]*\ssrc=["']([^"']+)["']/gi),
    ...all(html, /<link\b[^>]*\shref=["']([^"']+)["']/gi).filter((href) => href.includes('/assets/')),
    ogImage
  ].filter(Boolean);
  for (const asset of assetRefs) {
    if (asset.startsWith(baseUrl)) {
      const rel = asset.slice(baseUrl.length).replace(/^\/+/, '');
      if (rel && !exists(rel)) errors.push(`${file}: missing local social asset ${asset}`);
      continue;
    }
    const local = localFromProjectPath(asset);
    if (!local) continue;
    if (local.invalidBase) errors.push(`${file}: local asset without project base path (${local.path})`);
    else if (!exists(local.path)) errors.push(`${file}: missing local asset ${asset}`);
  }

  for (const img of [...html.matchAll(/<img\b([^>]*)>/gi)]) {
    const attrs = img[1];
    const ariaHidden = /aria-hidden=["']true["']/i.test(attrs);
    const alt = attrs.match(/\salt=["']([^"']*)["']/i)?.[1];
    if (!ariaHidden && (alt === undefined || alt.trim() === '')) errors.push(`${file}: informative image missing alt text`);
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
    /Support for/i
  ];
  const text = visibleText(html);
  for (const pattern of bannedVisible) {
    if (pattern.test(text)) errors.push(`${file}: known untranslated visible fragment (${pattern})`);
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
    if (pattern.test(metadata)) errors.push(`${file}: known untranslated metadata fragment (${pattern})`);
  }
}

if (!/<urlset[^>]+xmlns=["']http:\/\/www\.sitemaps\.org\/schemas\/sitemap\/0\.9["']/.test(sitemap)) {
  errors.push('sitemap.xml: missing sitemap namespace');
}
for (const url of noindexCanonicals) {
  if (sitemapUrls.includes(url)) errors.push(`sitemap.xml: noindex URL is included (${url})`);
}
for (const url of indexableCanonicals) {
  if (!sitemapUrls.includes(url)) errors.push(`sitemap.xml: indexable canonical missing (${url})`);
}
for (const url of sitemapUrls) {
  if (!url.startsWith(baseUrl)) errors.push(`sitemap.xml: URL uses wrong base path (${url})`);
  if (!indexableCanonicals.includes(url)) errors.push(`sitemap.xml: URL is not an indexable canonical (${url})`);
}

const allSource = htmlFiles.map(read).join('\n');
if (/TODO|PLACEHOLDER|LEGAL_REVIEW_REQUIRED/i.test(stripHidden(allSource))) {
  errors.push('HTML contains user-visible TODO/placeholder/legal-review marker');
}

if (errors.length) {
  console.error(`Site audit failed with ${errors.length} issue(s):`);
  for (const error of errors) console.error(`- ${error}`);
  process.exit(1);
}

console.log(`Site audit passed: ${htmlFiles.length} HTML files, ${indexableCanonicals.length} indexable pages, ${noindexCanonicals.length} noindex pages.`);
