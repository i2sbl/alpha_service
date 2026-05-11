# Guide d'Implémentation & Configuration - Alpha Service

## 🚀 Étapes de Mise en Production

### 1. CONFIGURATION DU DOMAINE

```
Domaine: alphaservice28.fr
DNS A Record: [Adresse IP du serveur]
MX Records: [Configuration email]
```

### 2. CONFIGURATION SSL/HTTPS

```bash
# Installation certificat Let's Encrypt (recommandé)
certbot certonly --webroot -w /var/www/alphaservice28.fr -d alphaservice28.fr -d www.alphaservice28.fr

# Auto-renewal
certbot renew --quiet
```

### 3. CONFIGURATION APACHE

```apache
<VirtualHost *:80>
    ServerName alphaservice28.fr
    DocumentRoot /var/www/alphaservice28.fr
    
    # Redirection HTTP -> HTTPS
    Redirect permanent / https://alphaservice28.fr/
</VirtualHost>

<VirtualHost *:443>
    ServerName alphaservice28.fr
    DocumentRoot /var/www/alphaservice28.fr
    
    SSLEngine on
    SSLCertificateFile /etc/letsencrypt/live/alphaservice28.fr/fullchain.pem
    SSLCertificateKeyFile /etc/letsencrypt/live/alphaservice28.fr/privkey.pem
    
    # Modules PHP
    <FilesMatch "\.(php)$">
        SetHandler "proxy:unix:/run/php-fpm.sock|fcgi://localhost"
    </FilesMatch>
    
    <Directory /var/www/alphaservice28.fr>
        AllowOverride All
        Require all granted
    </Directory>
</VirtualHost>
```

### 4. CONFIGURATION PHP

```ini
; /etc/php/8.1/fpm/php.ini
display_errors = Off
log_errors = On
error_log = /var/log/php-error.log
max_upload_filesize = 10M
post_max_size = 10M
max_execution_time = 300
session.cookie_secure = On
session.cookie_httponly = On
session.cookie_samesite = Strict
```

### 5. CONFIGURATION BASE DE DONNÉES

```sql
CREATE DATABASE alpha_service_db CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

CREATE USER 'alpha_service_user'@'localhost' IDENTIFIED BY 'SecurePassword123!@#';

GRANT ALL PRIVILEGES ON alpha_service_db.* TO 'alpha_service_user'@'localhost';

FLUSH PRIVILEGES;

-- Tables optionnelles
CREATE TABLE contacts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(20),
    company VARCHAR(100),
    event_type VARCHAR(50),
    event_date DATE,
    guests INT,
    message TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    status ENUM('new', 'contacted', 'converted') DEFAULT 'new'
);

CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    description TEXT,
    category VARCHAR(50),
    price DECIMAL(10, 2),
    image_url VARCHAR(255),
    active BOOLEAN DEFAULT true,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

### 6. PERMISSIONS & SÉCURITÉ

```bash
# Permissions des répertoires
chmod 755 /var/www/alphaservice28.fr
chmod 755 /var/www/alphaservice28.fr/assets
chmod 755 /var/www/alphaservice28.fr/includes
chmod 644 /var/www/alphaservice28.fr/pages/*.php

# Permissions fichiers sensibles
chmod 600 /var/www/alphaservice28.fr/.env
chmod 600 /var/www/alphaservice28.fr/includes/config.php

# Répertoires d'écriture
chmod 775 /var/www/alphaservice28.fr/data
chmod 775 /var/www/alphaservice28.fr/data/cache

# Propriétaire
chown -R www-data:www-data /var/www/alphaservice28.fr
```

### 7. FIREWALL & SÉCURITÉ SERVEUR

```bash
# UFW Firewall (Ubuntu)
sudo ufw allow 22/tcp          # SSH
sudo ufw allow 80/tcp          # HTTP
sudo ufw allow 443/tcp         # HTTPS
sudo ufw enable

# Fail2ban (prévention brute force)
sudo apt install fail2ban
sudo systemctl start fail2ban
```

### 8. CONFIGURATION EMAIL

```php
// includes/config.php
define('SMTP_HOST', 'mail.alphaservice28.fr');
define('SMTP_PORT', 587);
define('SMTP_USER', 'noreply@alphaservice28.fr');
define('SMTP_PASS', 'SecurePassword123');
define('CONTACT_EMAIL', 'contact@alphaservice28.fr');
```

### 9. MONITORING & LOGS

```bash
# Apache
tail -f /var/log/apache2/access.log
tail -f /var/log/apache2/error.log

# PHP
tail -f /var/log/php-error.log

# Application
tail -f /var/www/alphaservice28.fr/data/activity.log
```

### 10. CRON JOBS (Tâches planifiées)

```bash
# Nettoyage cache (quotidien)
0 2 * * * /usr/bin/php /var/www/alphaservice28.fr/admin/cleanup-cache.php

# Backup base de données (hebdomadaire)
0 3 * * 0 mysqldump -u alpha_service_user -p'password' alpha_service_db > /backups/db-$(date +\%Y\%m\%d).sql

# Renouvellement certificat SSL (automatique)
0 12 * * * certbot renew --quiet
```

## 📊 Performance Optimization

### Cache Configuration

```php
// Activer cache pour 24h
Cache::set('homepage_cache', $content, 86400);

// Purger cache si nécessaire
Cache::flush();
```

### Database Optimization

```sql
-- Créer indexes
CREATE INDEX idx_email ON contacts(email);
CREATE INDEX idx_status ON contacts(status);
CREATE INDEX idx_created_at ON contacts(created_at);

-- Analyser tables
ANALYZE TABLE contacts;
OPTIMIZE TABLE contacts;
```

### CDN Configuration

```html
<!-- CloudFlare CDN -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5/dist/js/bootstrap.bundle.min.js"></script>
```

## 🔒 Sécurité Avancée

### OWASP Top 10 Prevention

1. **SQL Injection**: PDO prepared statements ✅
2. **XSS**: htmlspecialchars() + sanitization ✅
3. **CSRF**: Tokens sur tous les forms ✅
4. **Broken Auth**: Gestion sessions secure ✅
5. **Security Misconfiguration**: Headers de sécurité ✅

### Scan de Sécurité

```bash
# OWASP ZAP Scan
zaproxy -cmd -quickurl https://alphaservice28.fr -quickout report.html

# SSL Labs Test
# https://www.ssllabs.com/ssltest/analyze.html?d=alphaservice28.fr
```

## 🎯 SEO Implementation

### Search Console Setup

1. Aller sur: https://search.google.com/search-console
2. Ajouter propriété: `alphaservice28.fr`
3. Vérifier par DNS TXT record
4. Soumettre sitemap.xml
5. Vérifier Core Web Vitals

### Analytics Setup

1. Créer GA4 property
2. Ajouter tracking code à header.php
3. Configurer conversions
4. Lier avec Search Console

## 📈 Maintenance Plan

### Quotidien
- ✅ Monitorer logs erreurs
- ✅ Vérifier uptime serveur
- ✅ Répondre emails contact

### Hebdomadaire
- ✅ Backup base de données
- ✅ Vérifier performance site
- ✅ Analyser trafic GA4

### Mensuel
- ✅ Audit SEO
- ✅ Review conversions
- ✅ Optimiser images
- ✅ Mettre à jour contenu

### Annuel
- ✅ Renouveler certificat SSL
- ✅ Audit de sécurité complet
- ✅ Migrer vers PHP plus récent
- ✅ Mettre à jour dépendances

## 🚨 Dépannage Courant

### Site lent
1. Vérifier Core Web Vitals via PageSpeed
2. Optimiser images
3. Activer compression GZIP
4. Réduire requêtes CSS/JS

### Erreur 500
1. Vérifier logs: `/var/log/apache2/error.log`
2. Vérifier permissions fichiers
3. Vérifier connexion BDD

### Formulaire ne s'envoie pas
1. Vérifier configuration SMTP
2. Vérifier logs PHP
3. Tester envoi email direct

### Site pas en HTTPS
1. Vérifier certificat SSL installé
2. Vérifier redirection HTTP > HTTPS dans .htaccess
3. Forcer HTTPS dans Apache config

---

**Support:**
- Email: contact@alphaservice28.fr
- Tel: 02 37 36 61 70
- Documentation: README.md
