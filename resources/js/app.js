const header = document.querySelector('.site-header');
const toggle = document.querySelector('.mobile-toggle');
const nav = document.querySelector('.main-nav');
const navigationScrim = document.querySelector('[data-navigation-close]');
const mobileNavigation = window.matchMedia('(max-width: 1040px)');
let lastFocusedBeforeNav = null;

const trackEvent = (eventName, detail = {}) => {
  if (!eventName) return;
  window.dispatchEvent(new CustomEvent('fitfreakpro:analytics', {
    detail: { eventName, ...detail }
  }));
};

const closeNavigation = () => {
  const wasOpen = header && header.classList.contains('nav-open');
  if (header) header.classList.remove('nav-open');
  document.body.classList.remove('navigation-open');
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
    document.body.classList.toggle('navigation-open', open);
    toggle.setAttribute('aria-expanded', String(open));
    toggle.setAttribute('aria-label', open ? 'Закрыть меню' : 'Открыть меню');
    if (open && nav) {
      const firstLink = nav.querySelector('a');
      if (firstLink) firstLink.focus();
    }
  });
}

if (navigationScrim) {
  navigationScrim.addEventListener('click', closeNavigation);
}

document.querySelectorAll('.main-nav a').forEach((link) => {
  link.addEventListener('click', () => {
    closeNavigation();
  });
});

const syncSectionNavigation = () => {
  const currentSection = window.location.hash.slice(1);

  document.querySelectorAll('[data-section-nav]').forEach((link) => {
    if (link.getAttribute('data-section-nav') === currentSection) {
      link.setAttribute('aria-current', 'location');
    } else {
      link.removeAttribute('aria-current');
    }
  });
};

syncSectionNavigation();
window.addEventListener('hashchange', syncSectionNavigation);

const tutorialGuideLinks = [...document.querySelectorAll('[data-tutorial-nav]')];
const tutorialRoleLinks = [...document.querySelectorAll('[data-tutorial-role]')];
const tutorialProgressGroups = [...document.querySelectorAll('[data-tutorial-progress]')];
const tutorialStepLinks = [...document.querySelectorAll('[data-tutorial-step-link]')];
const tutorialGuideSections = tutorialGuideLinks
  .map((link) => document.getElementById(link.getAttribute('data-tutorial-nav')))
  .filter(Boolean);
let currentTutorialGuideId = 'coach-guide';

const setCurrentTutorialGuide = (sectionId) => {
  currentTutorialGuideId = sectionId;

  tutorialGuideLinks.forEach((link) => {
    if (link.getAttribute('data-tutorial-nav') === sectionId) {
      link.setAttribute('aria-current', 'location');
    } else {
      link.removeAttribute('aria-current');
    }
  });

  tutorialRoleLinks.forEach((link) => {
    if (link.getAttribute('data-tutorial-role') === sectionId) {
      link.setAttribute('aria-current', 'location');
    } else {
      link.removeAttribute('aria-current');
    }
  });

  tutorialProgressGroups.forEach((group) => {
    const isActive = group.getAttribute('data-tutorial-progress') === sectionId;
    group.classList.toggle('is-active', isActive);
    group.setAttribute('aria-hidden', String(!isActive));

    if (isActive && !group.querySelector('[aria-current="step"]')) {
      const firstStep = group.querySelector('[data-tutorial-step-link]');
      if (firstStep) firstStep.setAttribute('aria-current', 'step');
    }
  });
};

const setCurrentTutorialStep = (stepId) => {
  let activeStepLink = null;

  tutorialStepLinks.forEach((link) => {
    if (link.getAttribute('data-tutorial-step-link') === stepId) {
      link.setAttribute('aria-current', 'step');
      activeStepLink = link;
    } else {
      link.removeAttribute('aria-current');
    }
  });

  const step = document.getElementById(stepId);
  const guide = step ? step.closest('.tutorial-journey') : null;
  if (guide) setCurrentTutorialGuide(guide.id);
  if (activeStepLink) {
    activeStepLink.scrollIntoView({ block: 'nearest', inline: 'center' });
  }
};

const syncCurrentTutorialStep = () => {
  const activationLine = Math.min(window.innerHeight * 0.36, 320);
  const activeGuide = tutorialGuideSections
    .filter((section) => section.getBoundingClientRect().top <= activationLine)
    .at(-1) || tutorialGuideSections[0];

  if (activeGuide && activeGuide.id !== currentTutorialGuideId) {
    setCurrentTutorialGuide(activeGuide.id);
  }

  const guide = document.getElementById(currentTutorialGuideId);
  if (!guide) return;

  const guideSteps = [...guide.querySelectorAll('[data-tutorial-step-section]')];
  const visibleSteps = guideSteps.filter((step) => {
    const bounds = step.getBoundingClientRect();
    return bounds.top <= activationLine && bounds.bottom > 150;
  });

  if (visibleSteps.length) {
    setCurrentTutorialStep(visibleSteps[visibleSteps.length - 1].id);
  }
};

if (tutorialGuideSections.length) {
  const initialTutorialTarget = document.getElementById(window.location.hash.slice(1));
  const initialTutorialGuide = initialTutorialTarget
    ? initialTutorialTarget.closest('.tutorial-journey')
    : null;

  setCurrentTutorialGuide(initialTutorialGuide ? initialTutorialGuide.id : 'coach-guide');
  if (initialTutorialTarget && initialTutorialTarget.matches('[data-tutorial-step-section]')) {
    setCurrentTutorialStep(initialTutorialTarget.id);
  }

  let tutorialStepSyncFrame = null;
  const scheduleTutorialStepSync = () => {
    if (tutorialStepSyncFrame) return;
    tutorialStepSyncFrame = window.requestAnimationFrame(() => {
      tutorialStepSyncFrame = null;
      syncCurrentTutorialStep();
    });
  };

  window.addEventListener('scroll', scheduleTutorialStepSync, { passive: true });
  window.addEventListener('resize', scheduleTutorialStepSync);
  window.addEventListener('hashchange', scheduleTutorialStepSync);
  window.addEventListener('load', scheduleTutorialStepSync);
}

document.addEventListener('keydown', (event) => {
  if (event.key === 'Escape') closeNavigation();
});

document.addEventListener('focusin', (event) => {
  if (!header || !header.classList.contains('nav-open')) return;
  if (header.contains(event.target)) return;
  closeNavigation();
});

mobileNavigation.addEventListener('change', (event) => {
  if (!event.matches) closeNavigation();
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
