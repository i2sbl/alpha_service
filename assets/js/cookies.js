/**
 * Cookie Management
 */

const CookieManager = {
    get: function(name) {
        const nameEQ = name + "=";
        const ca = document.cookie.split(';');
        for (let i = 0; i < ca.length; i++) {
            let c = ca[i].trim();
            if (c.indexOf(nameEQ) === 0) {
                return decodeURIComponent(c.substring(nameEQ.length));
            }
        }
        return null;
    },

    set: function(name, value, days = 365) {
        const date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        const expires = "expires=" + date.toUTCString();
        const secureFlag = location.protocol === 'https:' ? ';Secure' : '';
        document.cookie = name + "=" + encodeURIComponent(value) + ";" + expires + ";path=/;SameSite=Strict" + secureFlag;
    },

    delete: function(name) {
        this.set(name, "", -1);
    },

    acceptAll: function() {
        this.set('analytics_cookies', 'accepted');
        this.set('marketing_cookies', 'accepted');
        this.set('functional_cookies', 'accepted');
        localStorage.setItem('cookieConsent', 'all');
    },

    rejectAll: function() {
        this.set('analytics_cookies', 'rejected');
        this.set('marketing_cookies', 'rejected');
        localStorage.setItem('cookieConsent', 'rejected');
    }
};

// Make available globally
window.CookieManager = CookieManager;
