<?php
require_once __DIR__ . '/../../includes/config.php';

$page_title = 'Mentions Légales';
$page_description = 'Mentions légales et informations légales d\'Alpha Service';

include __DIR__ . '/../../includes/header.php';
?>

<section class="hero" style="padding: 3rem 0;">
    <div class="container">
        <h1>Mentions Légales</h1>
    </div>
</section>

<section>
    <div class="container" style="max-width: 800px;">
        <h2>Informations légales</h2>

        <h3>Propriétaire du site</h3>
        <p>
            <strong><?php echo $site_config['company_name']; ?></strong><br>
            SIRET : [À REMPLIR]<br>
            <?php echo $site_config['address']; ?><br>
            Tél : <a href="tel:<?php echo str_replace(' ', '', $site_config['phone_clickable']); ?>"><?php echo $site_config['phone']; ?></a><br>
            Email : <a href="mailto:<?php echo $site_config['email']; ?>"><?php echo $site_config['email']; ?></a>
        </p>

        <h3>Responsable du contenu</h3>
        <p>La responsabilité du contenu de ce site incombe à <?php echo $site_config['company_name']; ?>.</p>

        <h3>Crédits et réalisation</h3>
        <p>
            Conception et réalisation : [Votre agence web]<br>
            Hébergement : [Votre hébergeur]
        </p>

        <h3>Propriété intellectuelle</h3>
        <p>
            L'ensemble du contenu de ce site (textes, images, logos, graphiques) est protégé par les lois sur la propriété intellectuelle. 
            La reproduction ou l'utilisation sans autorisation est strictement interdite.
        </p>

        <h3>Conditions d'utilisation</h3>
        <p>
            L'utilisateur accepte d'utiliser ce site conformément à la loi en vigueur. L'accès au site est gratuit et sans engagement. 
            <?php echo $site_config['company_name']; ?> se réserve le droit de modifier le contenu à tout moment sans préavis.
        </p>

        <h3>Limitation de responsabilité</h3>
        <p>
            <?php echo $site_config['company_name']; ?> met tout en œuvre pour assurer l'exactitude des informations fournies. 
            Cependant, elle ne peut être tenue responsable des erreurs, omissions ou interruptions du service. 
            L'utilisateur utilise ce site à ses propres risques.
        </p>

        <h3>Données personnelles</h3>
        <p>
            Les données personnelles collectées via ce site sont traitées conformément au Règlement Général sur la Protection des Données (RGPD). 
            Pour plus d'informations, veuillez consulter notre <a href="<?php echo SITE_URL; ?>/pages/politique-confidentialite.php">Politique de confidentialité</a>.
        </p>

        <h3>Cookies</h3>
        <p>
            Ce site utilise des cookies pour améliorer l'expérience utilisateur et collecter des données d'analyse. 
            L'utilisateur peut à tout moment modifier les paramètres de ses cookies via les paramètres de son navigateur.
        </p>

        <h3>Liens externes</h3>
        <p>
            Ce site peut contenir des liens vers d'autres sites web. {{site_config['company_name']}} n'est pas responsable du contenu de ces sites externes 
            et ne les approuve pas nécessairement.
        </p>

        <h3>Droit applicable</h3>
        <p>
            Ce site est régi par la loi française. Les tribunaux de Chartres sont compétents en cas de litige.
        </p>

        <h3>Contact</h3>
        <p>
            Pour toute question ou demande concernant ces mentions légales, veuillez nous contacter :
        </p>
        <p>
            <a href="mailto:<?php echo $site_config['email']; ?>"><?php echo $site_config['email']; ?></a><br>
            <a href="tel:<?php echo str_replace(' ', '', $site_config['phone_clickable']); ?>"><?php echo $site_config['phone']; ?></a>
        </p>
    </div>
</section>

<?php include __DIR__ . '/../../includes/footer.php'; ?>
