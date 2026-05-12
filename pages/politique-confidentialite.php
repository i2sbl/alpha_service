<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = 'Politique de Confidentialité';
$page_description = 'Politique de confidentialité et RGPD d\'Alpha Service';

include __DIR__ . '/../includes/header.php';
?>

<section class="hero" style="padding: 3rem 0;">
    <div class="container">
        <h1>Politique de Confidentialité</h1>
        <p>RGPD - Vos données nous importent</p>
    </div>
</section>

<section>
    <div class="container" style="max-width: 800px;">
        <h2>Règlement Général sur la Protection des Données (RGPD)</h2>

        <h3>1. Responsable du traitement</h3>
        <p>
            <strong><?php echo $site_config['company_name']; ?></strong> est responsable du traitement de vos données personnelles.<br>
            Contact : <a href="mailto:<?php echo $site_config['email']; ?>"><?php echo $site_config['email']; ?></a>
        </p>

        <h3>2. Données collectées</h3>
        <p>Nous collectons les données suivantes lorsque vous :</p>
        <ul>
            <li>Remplissez notre formulaire de contact (nom, email, téléphone, message)</li>
            <li>Demandez un devis (informations d'événement, nombre d'invités)</li>
            <li>Naviguez sur le site (adresse IP, cookies d'analyse)</li>
        </ul>

        <h3>3. Finalité du traitement</h3>
        <p>Vos données sont utilisées pour :</p>
        <ul>
            <li>Répondre à vos demandes de devis et de contact</li>
            <li>Améliorer notre service et notre site web</li>
            <li>Vous envoyer des informations sur nos services (si vous l'acceptez)</li>
            <li>Analyser le trafic du site via Google Analytics</li>
        </ul>

        <h3>4. Bases légales</h3>
        <p>Le traitement de vos données repose sur :</p>
        <ul>
            <li>Votre consentement (formulaires)</li>
            <li>L'exécution d'un contrat (devis, commande)</li>
            <li>Notre intérêt légitime (analyse d'usage du site)</li>
        </ul>

        <h3>5. Conservation des données</h3>
        <p>
            Vos données de contact sont conservées pendant 3 ans après votre dernière interaction avec nous. 
            Les données d'analyse du site sont supprimées après 14 mois.
        </p>

        <h3>6. Partage de données</h3>
        <p>
            Nous ne partageons pas vos données avec des tiers, sauf si :</p>
        <ul>
            <li>Vous l'acceptez explicitement</li>
            <li>La loi nous l'impose</li>
            <li>Avec nos prestataires de service (hébergement, email)</li>
        </ul>

        <h3>7. Sécurité des données</h3>
        <p>
            Nous mettons en place des mesures de sécurité appropriées pour protéger vos données personnelles contre :
        </p>
        <ul>
            <li>L'accès non autorisé</li>
            <li>La modification ou destruction accidentelle</li>
            <li>La transmission non sécurisée</li>
        </ul>

        <h3>8. Vos droits</h3>
        <p>Conformément au RGPD, vous avez le droit de :</p>
        <ul>
            <li><strong>Accéder</strong> à vos données</li>
            <li><strong>Rectifier</strong> vos données inexactes</li>
            <li><strong>Supprimer</strong> vos données</li>
            <li><strong>Limiter</strong> le traitement de vos données</li>
            <li><strong>Portabilité</strong> de vos données</li>
            <li><strong>Vous opposer</strong> au traitement de vos données</li>
        </ul>

        <p>Pour exercer ces droits, contactez-nous à : <a href="mailto:<?php echo $site_config['email']; ?>"><?php echo $site_config['email']; ?></a></p>

        <h3>9. Cookies</h3>
        <p>
            Ce site utilise des cookies pour :</p>
        <ul>
            <li><strong>Cookies essentiels</strong> : Fonctionnement du site</li>
            <li><strong>Cookies d'analyse</strong> : Google Analytics (trafic)</li>
            <li><strong>Cookies marketing</strong> : Suivi des conversions</li>
        </ul>

        <p>Vous pouvez accepter ou refuser les cookies via notre banneau de consentement. 
        Vous pouvez aussi modifier vos préférences dans les paramètres de votre navigateur.</p>

        <h3>10. Plaintes</h3>
        <p>
            Si vous avez des préoccupations concernant le traitement de vos données, 
            vous pouvez déposer une plainte auprès de la CNIL : <a href="https://www.cnil.fr" target="_blank">https://www.cnil.fr</a>
        </p>

        <h3>11. Modifications de cette politique</h3>
        <p>
            Nous pouvons mettre à jour cette politique à tout moment. Les modifications prendront effet dès leur publication sur le site.
        </p>

        <p><em>Dernière mise à jour : <?php echo date('d/m/Y'); ?></em></p>
    </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
