// Main JavaScript - DOM & Interactivity

document.addEventListener('DOMContentLoaded', function() {
    initMobileMenu();
    initCookieBanner();
    initScrollTracking();
    initFormValidation();
    initLazyLoading();
});

/**
 * Mobile Menu Toggle
 */
function initMobileMenu() {
    const menuToggle = document.getElementById('menu-toggle');
    const navbarNav = document.getElementById('navbar-nav');

    if (!menuToggle) return;

    menuToggle.addEventListener('click', function() {
        navbarNav.classList.toggle('active');
        const isExpanded = menuToggle.getAttribute('aria-expanded') === 'true';
        menuToggle.setAttribute('aria-expanded', !isExpanded);
    });

    // Close menu on link click
    const navLinks = navbarNav.querySelectorAll('.nav-link');
    navLinks.forEach(link => {
        link.addEventListener('click', function() {
            navbarNav.classList.remove('active');
            menuToggle.setAttribute('aria-expanded', 'false');
        });
    });
}

/**
 * Cookie Consent Banner
 */
function initCookieBanner() {
    const banner = document.getElementById('cookie-banner');
    const acceptBtn = document.getElementById('cookie-accept');
    const customizeBtn = document.getElementById('cookie-customize');

    if (!banner) return;

    // Show banner if no consent
    if (!localStorage.getItem('cookieConsent')) {
        banner.classList.add('show');
    }

    acceptBtn?.addEventListener('click', function() {
        localStorage.setItem('cookieConsent', 'accepted');
        localStorage.setItem('cookieConsentDate', new Date().toISOString());
        banner.classList.remove('show');
        enableAnalytics();
    });

    customizeBtn?.addEventListener('click', function() {
        alert('Vous pouvez gérer vos préférences de cookies dans les paramètres de votre navigateur.');
    });
}

/**
 * Enable Google Analytics
 */
function enableAnalytics() {
    if (window.gtag) {
        gtag('consent', 'update', {
            'analytics_storage': 'granted'
        });
    }
}

/**
 * Active nav link on scroll
 */
function initScrollTracking() {
    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('.navbar-nav .nav-link');

    window.addEventListener('scroll', function() {
        let current = '';

        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            if (window.pageYOffset >= sectionTop - 200) {
                current = section.getAttribute('id');
            }
        });

        navLinks.forEach(link => {
            link.classList.remove('active');
            if (link.getAttribute('href')?.includes(current)) {
                link.classList.add('active');
            }
        });
    });
}

/**
 * Form Validation
 */
function initFormValidation() {
    const forms = document.querySelectorAll('form');

    forms.forEach(form => {
        form.addEventListener('submit', function(e) {
            if (!validateForm(form)) {
                e.preventDefault();
            }
        });
    });
}

function validateForm(form) {
    let isValid = true;
    const inputs = form.querySelectorAll('input[required], textarea[required], select[required]');

    inputs.forEach(input => {
        if (!input.value.trim()) {
            input.classList.add('error');
            isValid = false;
        } else {
            input.classList.remove('error');
        }

        // Email validation
        if (input.type === 'email' && input.value) {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(input.value)) {
                input.classList.add('error');
                isValid = false;
            }
        }

        // Phone validation (French format)
        if (input.type === 'tel' && input.value) {
            const phoneRegex = /^(?:(?:\+|00)33|0)[1-9](?:[0-9]{8})$/;
            if (!phoneRegex.test(input.value.replace(/[\s\-\.]/g, ''))) {
                input.classList.add('error');
                isValid = false;
            }
        }
    });

    return isValid;
}

/**
 * Lazy Loading Images
 */
function initLazyLoading() {
    if ('IntersectionObserver' in window) {
        const images = document.querySelectorAll('img[data-src]');

        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.src = img.dataset.src;
                    img.removeAttribute('data-src');
                    observer.unobserve(img);
                }
            });
        });

        images.forEach(img => imageObserver.observe(img));
    }
}

/**
 * Smooth scroll anchor links
 */
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
    });
});

/**
 * Add fade-in animation on scroll
 */
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -100px 0px'
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('fade-in');
            observer.unobserve(entry.target);
        }
    });
}, observerOptions);

document.querySelectorAll('.card, .hero, section').forEach(el => {
    observer.observe(el);
});

// Export for external use
window.validateForm = validateForm;
window.initFormValidation = initFormValidation;
