<?php
require_once __DIR__ . '/../../includes/config.php';

$page_title = 'Notre Matériel';
$page_description = 'Découvrez tout le matériel disponible pour votre location événementielle';
$page_keywords = 'matériel, équipement, kitchen, cuisine, chauffage';

include __DIR__ . '/../../includes/header.php';
?>

<section class="hero" style="padding: 3rem 0;">
    <div class="container">
        <h1>Notre Matériel Complet</h1>
        <p>Tous les équipements pour organiser votre événement dans les meilleures conditions</p>
    </div>
</section>

<section>
    <div class="container">
        <h2>Équipements de Cuisine & Service</h2>
        <div class="grid grid-3">
            <div class="card">
                <h4>Chafing Dishes</h4>
                <p>Plateaux chauffants électriques pour maintenir la température des plats</p>
                <p><strong>À partir de 3€/jour</strong></p>
            </div>
            <div class="card">
                <h4>Planchas & Réchauds</h4>
                <p>Planchas électriques, réchauds gaz pour cuisson sur place</p>
                <p><strong>À partir de 5€/jour</strong></p>
            </div>
            <div class="card">
                <h4>Barres de Service</h4>
                <p>Barres de service réfrigérées et non réfrigérées</p>
                <p><strong>À partir de 10€/jour</strong></p>
            </div>
            <div class="card">
                <h4>Ustensiles de Cuisine</h4>
                <p>Couteaux, planches à découper, pinces, louches, etc.</p>
                <p><strong>À partir de 0,50€/pièce</strong></p>
            </div>
            <div class="card">
                <h4>Poubelles & Bacs</h4>
                <p>Poubelles, bacs à glaçons, bacs de rangement</p>
                <p><strong>À partir de 2€/jour</strong></p>
            </div>
            <div class="card">
                <h4>Glacières & Refroidisseurs</h4>
                <p>Glacières, refroidisseurs pour boissons</p>
                <p><strong>À partir de 3€/jour</strong></p>
            </div>
        </div>
    </div>
</section>

<section style="background: #f8f9fa;">
    <div class="container">
        <h2>Équipements de Confort & Ambiance</h2>
        <div class="grid grid-3">
            <div class="card">
                <h4>Chauffage Extérieur</h4>
                <p>Braseros, radiateurs électriques, parasols chauffants</p>
                <p><strong>À partir de 5€/jour</strong></p>
            </div>
            <div class="card">
                <h4>Tentes & Barnums</h4>
                <p>Tentes de réception, barnums transparents pour tous les événements</p>
                <p><strong>À partir de 15€/jour</strong></p>
            </div>
            <div class="card">
                <h4>Ventilateurs & Climatisation</h4>
                <p>Ventilateurs oscillants, climatiseurs portables</p>
                <p><strong>À partir de 5€/jour</strong></p>
            </div>
            <div class="card">
                <h4>Éclairage Professionnel</h4>
                <p>Projecteurs, lampadaires, LED, guirlandes professionnelles</p>
                <p><strong>À partir de 3€/jour</strong></p>
            </div>
            <div class="card">
                <h4>Son & Microphone</h4>
                <p>Système sonore, microphones sans fil, enceintes</p>
                <p><strong>À partir de 8€/jour</strong></p>
            </div>
            <div class="card">
                <h4>Podium & Estrade</h4>
                <p>Podiums modulables, estrades pour décorateur</p>
                <p><strong>À partir de 10€/jour</strong></p>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <h2>Accessoires & Options</h2>
        <div class="grid grid-3">
            <div class="card">
                <h4>Racks & Rangements</h4>
                <p>Racks de transport, casiers de rangement</p>
                <p><strong>À partir de 2€/jour</strong></p>
            </div>
            <div class="card">
                <h4>Chemin de Table</h4>
                <p>Chemins de table de qualité en différentes couleurs</p>
                <p><strong>À partir de 1€/pièce</strong></p>
            </div>
            <div class="card">
                <h4>Sets de Table</h4>
                <p>Sets de table réutilisables et lavables</p>
                <p><strong>À partir de 0,50€/pièce</strong></p>
            </div>
            <div class="card">
                <h4>Verres Colorés</h4>
                <p>Verres réutilisables dans plusieurs coloris</p>
                <p><strong>À partir de 0,50€/pièce</strong></p>
            </div>
            <div class="card">
                <h4>Photobooth</h4>
                <p>Photobooth interactif avec impressions pour photos souvenir</p>
                <p><strong>À partir de 80€/événement</strong></p>
            </div>
            <div class="card">
                <h4>Confettis & Décorations</h4>
                <p>Confettis biodégradables, bulles, ballons</p>
                <p><strong>À partir de 2€/set</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section id="devis" style="background: linear-gradient(135deg, #1a472a 0%, #2d5a3d 100%); color: white; text-align: center;">
    <div class="container">
        <h2 style="color: white;">Vous cherchez un équipement spécifique ?</h2>
        <p>Contactez-nous ! Si nous ne l'avons pas, nous pouvons le chercher pour vous.</p>
        <a href="<?php echo SITE_URL; ?>/pages/contact.php" class="btn btn-primary">Nous contacter</a>
    </div>
</section>

<?php include __DIR__ . '/../../includes/footer.php'; ?>
