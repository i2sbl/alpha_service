# Alpha Service - Professional Event Rental Website

> **Site web professionnel pour Alpha Service** - Louez propre, rendez sale !

## 🚀 Caractéristiques Principales

### Frontend
- ✅ Design responsive et moderne (Mobile-First)
- ✅ Navigation intuitive et accessible
- ✅ Pages optimisées SEO
- ✅ Formulaires de contact sécurisés
- ✅ Gestion des cookies RGPD-compliant
- ✅ Performance optimisée

### Backend
- ✅ PHP 7.4+ avec architecture modulaire
- ✅ Base de données MySQL/MariaDB
- ✅ Gestion de sécurité avancée (CSRF, SQL Injection, XSS)
- ✅ Cache et optimisation de performance
- ✅ Logging et monitoring

### SEO & Référencement
- ✅ Meta tags optimisés (OpenGraph, Twitter Card)
- ✅ Structured Data (JSON-LD)
- ✅ Sitemap dynamique et robots.txt
- ✅ URLs SEO-friendly
- ✅ Compression GZIP
- ✅ CDN-ready

### Sécurité & Conformité
- ✅ RGPD compliant
- ✅ Politique de confidentialité complète
- ✅ Mentions légales
- ✅ Gestion des cookies
- ✅ HTTPS obligatoire
- ✅ Headers de sécurité (CSP, HSTS, X-Frame-Options)

## 📁 Structure du Projet

```
alpha-service/
├── index.php                 # Page d'accueil
├── pages/
│   ├── produits.php         # Catalogue produits
│   ├── formules.php         # Formules de location
│   ├── materiel.php         # Équipements disponibles
│   ├── contact.php          # Formulaire de contact
│   ├── mentions-legales.php # Mentions légales
│   ├── politique-confidentialite.php
│   └── cgv.php              # Conditions générales de vente
├── includes/
│   ├── config.php           # Configuration générale
│   ├── header.php           # En-tête/Navigation
│   ├── footer.php           # Pied de page
│   ├── Database.php         # Gestion BDD
│   └── Cache.php            # Système de cache
├── assets/
│   ├── css/
│   │   ├── reset.css        # Reset CSS
│   │   └── style.css        # Styles principaux
│   ├── js/
│   │   ├── main.js          # JavaScript principal
│   │   └── cookies.js       # Gestion des cookies
│   └── images/              # Images/logos
├── admin/                   # Panel administrateur (optionnel)
├── data/
│   ├── cache/               # Cache des données
│   └── activity.log         # Logs d'activité
├── .htaccess               # Configuration Apache
├── robots.txt              # Instructions moteurs recherche
├── sitemap.xml             # Plan du site
└── README.md               # Ce fichier
```

## 🔧 Installation

### Prérequis
- PHP 7.4 ou supérieur
- MySQL 5.7 ou MariaDB 10.2+
- Apache avec mod_rewrite activé
- Certificat SSL (HTTPS)

### Étapes d'installation

1. **Clonez/téléchargez le projet**
```bash
git clone https://github.com/i2sbl/alpha_service.git
cd alpha-service
```

2. **Configurez les fichiers**
```bash
cp .env.example .env
# Éditez .env avec vos paramètres
```

3. **Créez la base de données**
```sql
CREATE DATABASE alpha_service_db CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
CREATE USER 'alpha_service_user'@'localhost' IDENTIFIED BY 'secure_password';
GRANT ALL PRIVILEGES ON alpha_service_db.* TO 'alpha_service_user'@'localhost';
FLUSH PRIVILEGES;
```

4. **Configurez Apache**
- Pointez le DocumentRoot vers le répertoire du projet
- Vérifiez que mod_rewrite est activé
- Importez les headers de sécurité du .htaccess

5. **Accédez au site**
```
https://alphaservice28.fr
```

## 🎨 Personnalisation

### Modifier les couleurs
Éditer `assets/css/style.css` :
```css
--primary-color: #16a34a;   /* Vert */
--dark-color: #1a472a;      /* Vert foncé */
```

### Modifier les informations de contact
Éditer `includes/config.php` - Section VARIABLES GLOBALES

### Ajouter des produits
Créer une table `products` et éditer `pages/produits.php`

## 📊 SEO Optimization Checklist

- ✅ Meta descriptions pour chaque page
- ✅ Canonical URLs
- ✅ Schema.org Structured Data
- ✅ Sitemap & robots.txt
- ✅ Mobile-responsive design
- ✅ Page speed optimization
- ✅ Internal linking strategy
- ✅ Alt text on images
- ✅ SSL/HTTPS
- ✅ Google Search Console integration
- ✅ Google Analytics integration
- ✅ Core Web Vitals optimization

## 🔒 Sécurité

### Recommandations

1. **Fichier .env**
   - Jamais committé sur Git
   - Permissions 600
   - Accès restreint côté serveur

2. **Base de données**
   - Utilisateur spécifique avec droits limités
   - Sauvegardes régulières
   - Mots de passe forts

3. **HTTPS**
   - Certificat SSL valide obligatoire
   - HSTS enabled (via .htaccess)
   - Redirection HTTP → HTTPS

4. **Formulaires**
   - Validation côté serveur obligatoire
   - CSRF token sur tous les formulaires
   - Sanitisation des inputs
   - reCAPTCHA v3 recommandé

## 📧 Email Configuration

Pour les formulaires de contact, configurez SMTP :

```php
// includes/config.php
define('SMTP_HOST', 'smtp.gmail.com');
define('SMTP_PORT', 587);
define('SMTP_USER', 'your-email@gmail.com');
define('SMTP_PASS', 'app-specific-password');
```

## 🚀 Déploiement

### Sur un serveur mutualisé

1. Transférez les fichiers via FTP
2. Importez la base de données
3. Modifiez les permissions (755 pour dossiers, 644 pour fichiers)
4. Configurez les variables d'environnement

### Optimisation production

```apache
# Activez la compression
mod_deflate: Enabled
mod_expires: Enabled

# Cache browser
ExpiresByType text/css "access plus 1 year"
ExpiresByType application/javascript "access plus 1 year"
```

## 📱 Mobile Optimization

- Viewport meta tag configuré
- Touch-friendly buttons (min 44x44px)
- Responsive images
- Mobile-first CSS
- Performant font loading

## ♿ Accessibility (A11y)

- Semantic HTML
- ARIA labels
- Keyboard navigation
- High contrast mode support
- Screen reader friendly

## 🎯 Performance Tips

- Minifiez CSS/JS en production
- Optimisez les images (WebP)
- Utilisez un CDN pour les assets statiques
- Activez la compression GZIP
- Implémentez la pagination pour les listes longues

## 📞 Support & Contact

**Alpha Service**
- 📍 7 Rue Georges Charpak, 28300 Chartres
- ☎️ 02 37 36 61 70
- 📧 contact@alphaservice28.fr
- 🌐 https://alphaservice28.fr

## 📄 Licence

Ce projet est propriétaire d'Alpha Service. Tous droits réservés.

## 🤝 Contribution

Pour les modifications, contactez directement l'équipe Alpha Service.

---

**Dernière mise à jour:** <?php echo date('d/m/Y'); ?>
**Version:** 1.0.0
