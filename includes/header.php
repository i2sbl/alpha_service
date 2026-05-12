<?php
/**
 * Header global avec optimisation SEO
 */
if (!isset($page_title)) {
    $page_title = 'Accueil';
}
if (!isset($page_description)) {
    $page_description = 'Alpha Service - Location de matériel événementiel, vaisselle, nappage et décoration à Mainvilliers';
}
if (!isset($page_keywords)) {
    $page_keywords = 'location matériel, événement, mariage, vaisselle, nappage, Mainvilliers';
}
if (!isset($canonical_url)) {
    $canonical_url = SITE_URL . $_SERVER['REQUEST_URI'];
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#1a472a">
    
    <!-- SEO & Meta Tags -->
    <title><?php echo sanitize_input($page_title); ?> | Alpha Service</title>
    <meta name="description" content="<?php echo sanitize_input($page_description); ?>">
    <meta name="keywords" content="<?php echo sanitize_input($page_keywords); ?>">
    <meta name="author" content="Alpha Service">
    <link rel="canonical" href="<?php echo $canonical_url; ?>">
    
    <!-- Open Graph -->
    <meta property="og:title" content="<?php echo sanitize_input($page_title); ?> | Alpha Service">
    <meta property="og:description" content="<?php echo sanitize_input($page_description); ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo $canonical_url; ?>">
    <meta property="og:image" content="<?php echo SITE_URL; ?>/assets/images/logo.png">
    
    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo sanitize_input($page_title); ?> | Alpha Service">
    <meta name="twitter:description" content="<?php echo sanitize_input($page_description); ?>">
    
    <!-- Preconnect & DNS Prefetch -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="dns-prefetch" href="https://www.google-analytics.com">
    
    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo SITE_URL; ?>/assets/css/reset.css">
    <link rel="stylesheet" href="<?php echo SITE_URL; ?>/assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?php echo SITE_URL; ?>/assets/images/favicon.png">
    <link rel="apple-touch-icon" href="<?php echo SITE_URL; ?>/assets/images/apple-touch-icon.png">
    
    <!-- Structured Data (JSON-LD) -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "LocalBusiness",
        "name": "<?php echo $site_config['company_name']; ?>",
        "image": "<?php echo SITE_URL; ?>/assets/images/logo.png",
        "description": "<?php echo $site_config['tagline']; ?>",
        "telephone": "<?php echo $site_config['phone_clickable']; ?>",
        "email": "<?php echo $site_config['email']; ?>",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "<?php echo $site_config['address']; ?>",
            "addressLocality": "<?php echo $site_config['region']; ?>",
            "addressCountry": "FR"
        },
        "url": "<?php echo SITE_URL; ?>",
        "sameAs": [
            "<?php echo $site_config['social_media']['facebook']; ?>",
            "<?php echo $site_config['social_media']['instagram']; ?>"
        ]
    }
    </script>
</head>
<body>
    <!-- Cookie Consent Banner -->
    <div id="cookie-banner" class="cookie-banner">
        <div class="cookie-content">
            <p>🍪 Nous utilisons des cookies pour améliorer votre expérience. En continuant, vous acceptez notre utilisation de cookies.</p>
            <div class="cookie-buttons">
                <button id="cookie-accept" class="btn btn-primary">Accepter</button>
                <button id="cookie-customize" class="btn btn-secondary">Personnaliser</button>
            </div>
        </div>
    </div>

    <!-- Navigation Header -->
    <header class="header" role="banner">
        <nav class="navbar" role="navigation" aria-label="Navigation principale">
            <div class="container">
                <div class="navbar-brand">
                    <a href="<?php echo SITE_URL; ?>" class="logo" aria-label="Alpha Service - Accueil">
                        <i class="fas fa-champagne-glasses"></i>
                        <span>Alpha Service</span>
                    </a>
                </div>

                <button class="menu-toggle" id="menu-toggle" aria-label="Menu" aria-expanded="false">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>

                <ul class="navbar-nav" id="navbar-nav" role="menubar">
                    <li role="menuitem"><a href="<?php echo SITE_URL; ?>/" class="nav-link">Accueil</a></li>
                    <li role="menuitem"><a href="<?php echo SITE_URL; ?>/pages/produits.php" class="nav-link">Produits</a></li>
                    <li role="menuitem"><a href="<?php echo SITE_URL; ?>/pages/formules.php" class="nav-link">Formules</a></li>
                    <li role="menuitem"><a href="<?php echo SITE_URL; ?>/pages/materiel.php" class="nav-link">Matériel</a></li>
                    <li role="menuitem"><a href="<?php echo SITE_URL; ?>/pages/contact.php" class="nav-link btn-cta">Contact</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <main role="main">
