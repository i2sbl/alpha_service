// =============================================
// ALPHA SERVICE - MODERN JAVASCRIPT
// =============================================

class AlphaService {
    constructor() {
        this.menuToggle = document.getElementById('menu-toggle');
        this.navbar = document.getElementById('navbar-nav');
        this.navLinks = document.querySelectorAll('.nav-link');
        this.cookieBanner = document.getElementById('cookie-banner');
        this.cookieAccept = document.getElementById('cookie-accept');
        this.cookieCustomize = document.getElementById('cookie-customize');
        
        this.init();
    }

    init() {
        this.setupMenu();
        this.setupCookies();
        this.setupNavigation();
        this.setupAnimations();
    }

    // Mobile Menu Management
    setupMenu() {
        if (!this.menuToggle) return;

        this.menuToggle.addEventListener('click', () => {
            this.toggleMenu();
        });

        // Close menu when clicking nav link
        this.navLinks.forEach(link => {
            link.addEventListener('click', () => {
                this.closeMenu();
            });
        });

        // Close menu when clicking outside
        document.addEventListener('click', (e) => {
            if (!e.target.closest('.navbar')) {
                this.closeMenu();
            }
        });
    }

    toggleMenu() {
        this.menuToggle.classList.toggle('active');
        this.navbar.classList.toggle('active');
    }

    closeMenu() {
        this.menuToggle.classList.remove('active');
        this.navbar.classList.remove('active');
    }

    // Navigation Active Link
    setupNavigation() {
        const currentPage = window.location.pathname.split('/').pop() || 'index.html';
        
        this.navLinks.forEach(link => {
            const href = link.getAttribute('href');
            if (href === currentPage || (currentPage === '' && href === 'index.html')) {
                link.classList.add('active');
            } else {
                link.classList.remove('active');
            }
        });
    }

    // Cookie Management
    setupCookies() {
        // Check if user already accepted cookies
        const cookieConsent = localStorage.getItem('cookie-consent');
        
        if (!cookieConsent) {
            this.showCookieBanner();
        }

        if (this.cookieAccept) {
            this.cookieAccept.addEventListener('click', () => {
                this.acceptCookies();
            });
        }

        if (this.cookieCustomize) {
            this.cookieCustomize.addEventListener('click', () => {
                this.customizeCookies();
            });
        }
    }

    showCookieBanner() {
        if (this.cookieBanner) {
            setTimeout(() => {
                this.cookieBanner.classList.add('show');
            }, 500);
        }
    }

    acceptCookies() {
        localStorage.setItem('cookie-consent', 'accepted');
        this.hideCookieBanner();
        this.enableAnalytics();
    }

    customizeCookies() {
        alert('Paramètres de cookies - À personnaliser selon vos besoins');
    }

    hideCookieBanner() {
        this.cookieBanner.classList.remove('show');
    }

    enableAnalytics() {
        // Add Google Analytics or other tracking code here
        console.log('Analytics enabled');
    }

    // Animations
    setupAnimations() {
        this.observeElements();
    }

    observeElements() {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, {
            threshold: 0.1,
            rootMargin: '0px 0px -100px 0px'
        });

        document.querySelectorAll('.feature-card, .stat-card, .category-card').forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(20px)';
            el.style.transition = 'all 0.6s ease-out';
            observer.observe(el);
        });
    }
}

// Initialize on DOM Ready
document.addEventListener('DOMContentLoaded', () => {
    new AlphaService();
});

// Smooth scroll for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
    });
});

// Performance: Lazy load images
if ('IntersectionObserver' in window) {
    const imageObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.dataset.src;
                img.classList.add('loaded');
                observer.unobserve(img);
            }
        });
    });

    document.querySelectorAll('img[data-src]').forEach(img => imageObserver.observe(img));
}
