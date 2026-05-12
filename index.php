<?php
require_once __DIR__ . '/includes/config.php';

$page_title = 'Accueil';
$page_description = 'Alpha Service - Louez du matériel événementiel, vaisselle, nappage et décoration à Mainvilliers pour vos mariages, anniversaires et fêtes';
$page_keywords = 'location matériel, mariage, anniversaire, vaisselle, nappages, décoration, événement, Mainvilliers';

include __DIR__ . '/includes/header.php';
?>

<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <div class="hero-content">
            <h1>Louez Propre, Rendez Sale !</h1>
            <p><?php echo $site_config['tagline']; ?></p>
            <p>Votre spécialiste en location de matériel événementiel à Mainvilliers depuis plus de 30 ans</p>
            <a href="<?php echo SITE_URL; ?>/pages/contact.php" class="btn btn-primary">Demander un devis</a>
        </div>
    </div>
</section>

<!-- Key Benefits -->
<section id="avantages">
    <div class="container">
        <h2>Pourquoi nous choisir ?</h2>
        <div class="grid grid-3">
            <div class="card">
                <div style="font-size: 3rem; text-align: center; margin-bottom: 1rem;">
                    <i class="fas fa-clock"></i>
                </div>
                <h3>Expérience</h3>
                <p>Plus de 30 ans d'expérience dans la location de matériel pour tous vos événements</p>
            </div>
            <div class="card">
                <div style="font-size: 3rem; text-align: center; margin-bottom: 1rem;">
                    <i class="fas fa-check-circle"></i>
                </div>
                <h3>Conseils Personnalisés</h3>
                <p>Notre équipe vous aide à choisir les équipements adaptés à votre événement</p>
            </div>
            <div class="card">
                <div style="font-size: 3rem; text-align: center; margin-bottom: 1rem;">
                    <i class="fas fa-boxes"></i>
                </div>
                <h3>Large Gamme</h3>
                <p>Une sélection complète de produits pour tous les types d'événements</p>
            </div>
            <div class="card">
                <div style="font-size: 3rem; text-align: center; margin-bottom: 1rem;">
                    <i class="fas fa-truck"></i>
                </div>
                <h3>Livraison</h3>
                <p>Nous nous occupons de la livraison et de la mise en place de votre matériel</p>
            </div>
            <div class="card">
                <div style="font-size: 3rem; text-align: center; margin-bottom: 1rem;">
                    <i class="fas fa-phone"></i>
                </div>
                <h3>Support 24h/24</h3>
                <p>Permanence téléphonique disponible en cas d'urgence</p>
            </div>
            <div class="card">
                <div style="font-size: 3rem; text-align: center; margin-bottom: 1rem;">
                    <i class="fas fa-star"></i>
                </div>
                <h3>Qualité Premium</h3>
                <p>Matériel de qualité entretenu régulièrement pour votre satisfaction</p>
            </div>
        </div>
    </div>
</section>

<!-- Products Preview -->
<section id="produits" style="background: #f8f9fa;">
    <div class="container">
        <h2>Nos Catégories de Produits</h2>
        <div class="grid grid-3">
            <a href="<?php echo SITE_URL; ?>/pages/produits.php#vaisselle" class="card" style="text-align: center; cursor: pointer;">
                <div style="font-size: 4rem; margin-bottom: 1rem;">🍷</div>
                <h3>Vaisselle</h3>
                <p>Assiettes, verres, couverts, nappes pour sublimer votre table</p>
            </a>
            <a href="<?php echo SITE_URL; ?>/pages/produits.php#materiel" class="card" style="text-align: center; cursor: pointer;">
                <div style="font-size: 4rem; margin-bottom: 1rem;">🪑</div>
                <h3>Mobilier</h3>
                <p>Tables, chaises, mange-debout pour aménager votre espace</p>
            </a>
            <a href="<?php echo SITE_URL; ?>/pages/produits.php#nappage" class="card" style="text-align: center; cursor: pointer;">
                <div style="font-size: 4rem; margin-bottom: 1rem;">🧵</div>
                <h3>Nappage</h3>
                <p>Nappes, chemins de table pour une ambiance raffinée</p>
            </a>
            <a href="<?php echo SITE_URL; ?>/pages/produits.php#decoration" class="card" style="text-align: center; cursor: pointer;">
                <div style="font-size: 4rem; margin-bottom: 1rem;">✨</div>
                <h3>Décoration</h3>
                <p>Chandeliers, vases, éléments lumineux pour créer l'ambiance</p>
            </a>
            <a href="<?php echo SITE_URL; ?>/pages/formules.php" class="card" style="text-align: center; cursor: pointer;">
                <div style="font-size: 4rem; margin-bottom: 1rem;">📦</div>
                <h3>Formules</h3>
                <p>Packs complets pour simplifier votre organisation</p>
            </a>
            <a href="<?php echo SITE_URL; ?>/pages/materiel.php" class="card" style="text-align: center; cursor: pointer;">
                <div style="font-size: 4rem; margin-bottom: 1rem;">⚙️</div>
                <h3>Équipements</h3>
                <p>Matériel de cuisine, chauffage, électrique</p>
            </a>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section id="devis" style="background: linear-gradient(135deg, #1a472a 0%, #2d5a3d 100%); color: white; text-align: center;">
    <div class="container">
        <h2 style="color: white;">Prêt à Créer l'Événement Parfait ?</h2>
        <p style="font-size: 1.1rem; margin-bottom: 2rem;">Contactez-nous dès maintenant pour obtenir votre devis personnalisé</p>
        <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
            <a href="<?php echo SITE_URL; ?>/pages/contact.php" class="btn btn-primary">Demander un devis</a>
            <a href="tel:<?php echo str_replace(' ', '', $site_config['phone_clickable']); ?>" class="btn" style="background: white; color: #1a472a;">
                <i class="fas fa-phone"></i> Appeler
            </a>
        </div>
    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
