# Adaptation pour autres agences Alpha Service

## 🏢 Alpha Service - Multi-Site Configuration

Ce template peut être adapté pour les autres agences Alpha Service.

---

## 🔧 ADAPTATION POUR AVRILLÉ (49)

### Configuration à modifier:

#### includes/config.php
```php
$site_config = [
    'company_name' => 'Alpha Service SYCARO SARL',
    'tagline' => 'Louez propre, rendez sale !',
    'phone' => '02 41 34 28 05',
    'phone_clickable' => '+33241342805',
    'email' => 'avrille@alphaservice.fr',
    'address' => '2 Rue Louis Bréguet, 49240 Avrillé',
    'region' => 'Avrillé',
];
```

#### Domaine
- alphaservice-avrille.fr
- ou avrille.alphaservice.fr (subdomain)

#### Meta Tags
```php
$page_description = 'Alpha Service Avrillé - Location matériel événementiel...';
$page_keywords = 'location matériel Avrillé, event rental 49, ...';
```

---

## 🔧 ADAPTATION POUR LE MANS (72)

### Configuration à modifier:

#### includes/config.php
```php
$site_config = [
    'phone' => '02 43 24 21 49',
    'phone_clickable' => '+33243242149',
    'email' => 'lemans@alphaservice.fr',
    'address' => 'Boulevard Saint Nicolas, 72190 Coulaines',
    'region' => 'Le Mans',
];
```

#### Domaine
- alphaservice-lemans.fr
- ou lemans.alphaservice.fr

---

## 🌐 MULTI-SITE STRUCTURE (Optionnel)

Pour gérer plusieurs agences depuis une plateforme unique:

```
alpha-service/
├── /chartres/
│   ├── index.php
│   ├── pages/
│   └── assets/
├── /avrille/
│   ├── index.php
│   ├── pages/
│   └── assets/
├── /lemans/
│   ├── index.php
│   ├── pages/
│   └── assets/
├── shared/
│   ├── includes/
│   │   ├── config.php (multi-site)
│   │   ├── Database.php
│   │   └── Cache.php
│   └── assets/
│       ├── css/
│       ├── js/
│       └── images/
└── .htaccess (routing multi-site)
```

### .htaccess Multi-Site
```apache
# Route based on domain
RewriteCond %{HTTP_HOST} ^chartres\.alphaservice\.fr$ [OR]
RewriteCond %{HTTP_HOST} ^alphaservice28\.fr$
RewriteRule ^(.*)$ /chartres/$1 [L]

RewriteCond %{HTTP_HOST} ^avrille\.alphaservice\.fr$
RewriteRule ^(.*)$ /avrille/$1 [L]

RewriteCond %{HTTP_HOST} ^lemans\.alphaservice\.fr$
RewriteRule ^(.*)$ /lemans/$1 [L]
```

### Shared Config (Multi-site)
```php
// shared/includes/config-multi.php
$site_configs = [
    'chartres' => [
        'phone' => '02 37 36 61 70',
        'email' => 'contact@alphaservice28.fr',
        'address' => '7 Rue Georges Charpak, 28300 Chartres',
    ],
    'avrille' => [
        'phone' => '02 41 34 28 05',
        'email' => 'avrille@alphaservice.fr',
        'address' => '2 Rue Louis Bréguet, 49240 Avrillé',
    ],
    'lemans' => [
        'phone' => '02 43 24 21 49',
        'email' => 'lemans@alphaservice.fr',
        'address' => 'Boulevard Saint Nicolas, 72190 Coulaines',
    ],
];

// Déterminer le site actuel
$current_site = basename(dirname(__FILE__));
$site_config = $site_configs[$current_site] ?? $site_configs['chartres'];
```

---

## 🎨 BRANDING PAR AGENCE

Chaque agence peut avoir:
- Logo légèrement différent
- Couleurs secondaires personnalisées
- Photos spécifiques
- Histoire locale

```css
/* css/site-specific.css */

/* Chartres */
:root {
    --primary-color: #16a34a;
    --dark-color: #1a472a;
}

/* Avrillé */
body.site-avrille {
    --primary-color: #0891b2;
    --dark-color: #164e63;
}

/* Le Mans */
body.site-lemans {
    --primary-color: #7c3aed;
    --dark-color: #5b21b6;
}
```

---

## 📊 GESTION CENTRALISÉE DES DONNÉES

### Single Database pour tous les sites
```sql
CREATE TABLE branches (
    id INT AUTO_INCREMENT PRIMARY KEY,
    slug VARCHAR(50) UNIQUE,
    name VARCHAR(100),
    phone VARCHAR(20),
    email VARCHAR(100),
    address TEXT,
    city VARCHAR(50),
    zip_code VARCHAR(10),
    region VARCHAR(50),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

ALTER TABLE contacts ADD branch_id INT;
ALTER TABLE orders ADD branch_id INT;
ALTER TABLE products ADD branch_id INT;
```

### Query Multi-Branch
```php
// Contacts pour une agence spécifique
$contacts = $db->fetchAll(
    "SELECT * FROM contacts WHERE branch_id = ?",
    [$branch_id]
);

// Tous les contacts (reporting central)
$all_contacts = $db->fetchAll(
    "SELECT c.*, b.name as branch_name 
     FROM contacts c 
     JOIN branches b ON c.branch_id = b.id"
);
```

---

## 🔄 SYNCHRONISATION MULTI-SITE

Pour garder les produits à jour partout:

```php
// admin/sync-products.php
function sync_products_to_branches($product_id) {
    $product = get_product($product_id);
    
    foreach (get_all_branches() as $branch) {
        update_product_in_branch($branch['id'], $product);
    }
}
```

---

## 🌍 SITE CORPORATE (Optionnel)

Site mère regroupant toutes les agences:

```
alphaservice-ouest.com (déjà existant)
├── /                           (Accueil corporate)
├── /chartres/                  (Redirection)
├── /avrille/                   (Redirection)
├── /lemans/                    (Redirection)
├── /agences/                   (Toutes les agences)
├── /blog/                      (Blog partagé)
├── /contact/                   (Formulaire central)
└── /about/                     (À propos du groupe)
```

---

## 📧 EMAIL & NOTIFICATIONS

Pour gestion centralisée:

```php
// Route emails selon branche
function route_contact_email($contact) {
    $branch_email = get_branch_email($contact['branch_id']);
    
    send_email(
        to: $branch_email,
        subject: "Nouvelle demande de contact",
        template: 'contact-notification'
    );
}
```

---

## 📱 SEO PAR RÉGION

Optimiser pour chaque région:

```php
// Mots-clés locaux
$keywords = [
    'chartres' => 'location matériel événement Chartres, 28, Eure-et-Loire',
    'avrille' => 'location matériel Avrillé, 49, Maine-et-Loire',
    'lemans' => 'location matériel Le Mans, 72, Sarthe',
];

// Descriptions Google
$descriptions = [
    'chartres' => 'Alpha Service Chartres: location vaisselle, nappage, mobilier...',
    'avrille' => 'Alpha Service Avrillé: matériel événementiel région Anjou...',
    'lemans' => 'Alpha Service Le Mans: équipements réception région Pays de la Loire...',
];
```

---

## 🎯 GOOGLE MY BUSINESS - Multi-Agences

Créer des listings séparés:
- alphaservice-chartres.gmb
- alphaservice-avrille.gmb
- alphaservice-lemans.gmb

Configurer dans Google Search Console:
```
chartres.alphaservice.fr
avrille.alphaservice.fr
lemans.alphaservice.fr
```

---

## 📊 ANALYTICS MULTI-SITE

Google Analytics avec filtres par agence:

```javascript
// Track branch
gtag('event', 'page_view', {
    'page_path': window.location.pathname,
    'branch': 'chartres'
});

// Custom dimension
gtag('config', 'G-XXXXXXXXXX', {
    'custom_map': {
        'dimension1': 'branch_name'
    },
    'branch_name': 'Chartres'
});
```

---

## ✅ CHECKLIST ADAPTATION

### Pour chaque nouvelle agence:
- [ ] Configurer domaine/sous-domaine
- [ ] Modifier includes/config.php
- [ ] Créer profil Google My Business
- [ ] Configurer Google Search Console
- [ ] Mettre à jour Analytics
- [ ] Créer email professionnel
- [ ] Configurer SMTP par agence
- [ ] Traduire/adapter contenu local
- [ ] Ajouter images locales
- [ ] Tester formulaire contact
- [ ] Ajouter à sitemap principal
- [ ] Configurer certificat SSL par domaine

---

## 📞 SUPPORT MULTI-AGENCES

Créer système de support centralisé:

```php
// admin/support-tickets.php
- Tickets centralisés
- Routing par agence
- Statistiques par branche
- Chat support partagé
```

---

## 💡 RECOMMANDATIONS

1. **Commencer simple** : Un site par agence d'abord
2. **Scalabilité** : Préparer pour multi-site
3. **SEO** : Domaines distinctes pour meilleur ranking
4. **Branding** : Garder cohérence globale
5. **Support** : Centraliser gestion clients

---

**Cette approche permet:**
✅ Flexibilité pour chaque agence
✅ Gestion centralisée des données
✅ Scalabilité pour nouvelles agences
✅ Optimisation SEO régionale
✅ Économies de maintenance

---

Pour questions: contact@alphaservice28.fr
