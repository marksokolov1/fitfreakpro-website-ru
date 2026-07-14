const header = document.querySelector('.site-header');
const toggle = document.querySelector('.mobile-toggle');
const nav = document.querySelector('.main-nav');
let lastFocusedBeforeNav = null;

// Integration point only: the repository does not send these events to an
// analytics provider. A site owner can listen for this event after choosing a
// privacy-reviewed analytics setup.
const trackEvent = (eventName, detail = {}) => {
  if (!eventName) return;
  window.dispatchEvent(new CustomEvent('fitfreakpro:analytics', {
    detail: { eventName, ...detail }
  }));
};

const closeNavigation = () => {
  const wasOpen = header && header.classList.contains('nav-open');
  if (header) header.classList.remove('nav-open');
  if (toggle) {
    toggle.setAttribute('aria-expanded', 'false');
    toggle.setAttribute('aria-label', 'Открыть меню');
  }
  if (wasOpen && lastFocusedBeforeNav && typeof lastFocusedBeforeNav.focus === 'function') {
    lastFocusedBeforeNav.focus();
  }
};

if (toggle && header) {
  if (nav) {
    nav.id = nav.id || 'primary-navigation';
    toggle.setAttribute('aria-controls', nav.id);
  }

  toggle.addEventListener('click', () => {
    const willOpen = !header.classList.contains('nav-open');
    if (willOpen) lastFocusedBeforeNav = document.activeElement;
    const open = header.classList.toggle('nav-open');
    toggle.setAttribute('aria-expanded', String(open));
    toggle.setAttribute('aria-label', open ? 'Закрыть меню' : 'Открыть меню');
    if (open && nav) {
      const firstLink = nav.querySelector('a');
      if (firstLink) firstLink.focus();
    }
  });
}

document.querySelectorAll('.main-nav a').forEach((link) => {
  link.addEventListener('click', () => {
    closeNavigation();
  });
});

document.addEventListener('keydown', (event) => {
  if (event.key === 'Escape') closeNavigation();
});

document.addEventListener('focusin', (event) => {
  if (!header || !header.classList.contains('nav-open')) return;
  if (header.contains(event.target)) return;
  closeNavigation();
});

document.querySelectorAll('.faq-question').forEach((button, index) => {
  const item = button.closest('.faq-item');
  const answer = item ? item.querySelector('.faq-answer') : null;
  if (answer) {
    answer.id = answer.id || `faq-answer-${index + 1}`;
    button.setAttribute('aria-controls', answer.id);
  }

  button.addEventListener('click', () => {
    if (!item) return;
    const isOpen = item.classList.toggle('open');
    button.setAttribute('aria-expanded', String(isOpen));
    if (isOpen) {
      trackEvent('faq_expand', { question: button.textContent.trim().replace(/\+$/, '').trim() });
    }
  });
});

document.querySelectorAll('[data-track]').forEach((element) => {
  element.addEventListener('click', () => {
    trackEvent(element.getAttribute('data-track'), {
      href: element.getAttribute('href') || ''
    });
  });
});

const yearNode = document.querySelector('[data-year]');
if (yearNode) yearNode.textContent = new Date().getFullYear();

const pricingSection = document.querySelector('#pricing');
if (pricingSection && 'IntersectionObserver' in window) {
  let pricingViewed = false;
  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (!pricingViewed && entry.isIntersecting) {
        pricingViewed = true;
        trackEvent('pricing_section_view');
        observer.disconnect();
      }
    });
  }, { threshold: 0.45 });
  observer.observe(pricingSection);
}
