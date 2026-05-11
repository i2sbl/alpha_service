<?php
require_once __DIR__ . '/../../includes/config.php';

$page_title = 'Nos Produits';
$page_description = 'Découvrez notre large gamme de produits pour location: vaisselle, mobilier, nappage, décoration pour vos événements';
$page_keywords = 'location vaisselle, location mobilier, location nappage, location décoration';

include __DIR__ . '/../../includes/header.php';
?>

<section class="hero" style="padding: 3rem 0;">
    <div class="container">
        <h1>Nos Produits de Qualité</h1>
        <p>Une sélection complète pour tous vos besoins événementiels</p>
    </div>
</section>

<!-- Vaisselle -->
<section id="vaisselle">
    <div class="container">
        <h2>Vaisselle & Art de la Table</h2>
        <div class="grid grid-4">
            <div class="card">
                <div style="height: 200px; background: #e8e8e8; border-radius: 4px; display: flex; align-items: center; justify-content: center; margin-bottom: 1rem;">
                    <i class="fas fa-plate-wheat" style="font-size: 3rem; color: #1a472a;"></i>
                </div>
                <h4>Assiettes</h4>
                <p>Assiettes plates, creuses, à dessert en porcelaine de qualité</p>
                <div style="margin-top: 1rem;">
                    <strong>À partir de 0,50€ / pièce</strong>
                </div>
            </div>
            <div class="card">
                <div style="height: 200px; background: #e8e8e8; border-radius: 4px; display: flex; align-items: center; justify-content: center; margin-bottom: 1rem;">
                    <i class="fas fa-wine-glass" style="font-size: 3rem; color: #1a472a;"></i>
                </div>
                <h4>Verres</h4>
                <p>Verres à eau, à vin, à champagne de qualité supérieure</p>
                <div style="margin-top: 1rem;">
                    <strong>À partir de 0,30€ / pièce</strong>
                </div>
            </div>
            <div class="card">
                <div style="height: 200px; background: #e8e8e8; border-radius: 4px; display: flex; align-items: center; justify-content: center; margin-bottom: 1rem;">
                    <i class="fas fa-utensils" style="font-size: 3rem; color: #1a472a;"></i>
                </div>
                <h4>Couverts</h4>
                <p>Fourchettes, couteaux, cuillères inox 18/10</p>
                <div style="margin-top: 1rem;">
                    <strong>À partir de 0,25€ / pièce</strong>
                </div>
            </div>
            <div class="card">
                <div style="height: 200px; background: #e8e8e8; border-radius: 4px; display: flex; align-items: center; justify-content: center; margin-bottom: 1rem;">
                    <i class="fas fa-mug-hot" style="font-size: 3rem; color: #1a472a;"></i>
                </div>
                <h4>Tasses & Soucoupes</h4>
                <p>Tasses à café, tasses à thé avec soucoupes</p>
                <div style="margin-top: 1rem;">
                    <strong>À partir de 0,35€ / set</strong>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Mobilier -->
<section id="materiel" style="background: #f8f9fa;">
    <div class="container">
        <h2>Mobilier & Équipements</h2>
        <div class="grid grid-4">
            <div class="card">
                <div style="height: 200px; background: #e8e8e8; border-radius: 4px; display: flex; align-items: center; justify-content: center; margin-bottom: 1rem;">
                    <i class="fas fa-table" style="font-size: 3rem; color: #1a472a;"></i>
                </div>
                <h4>Tables</h4>
                <p>Tables rectangulaires, rondes, carrées de différentes tailles</p>
                <div style="margin-top: 1rem;">
                    <strong>À partir de 5€ / pièce</strong>
                </div>
            </div>
            <div class="card">
                <div style="height: 200px; background: #e8e8e8; border-radius: 4px; display: flex; align-items: center; justify-content: center; margin-bottom: 1rem;">
                    <i class="fas fa-chair" style="font-size: 3rem; color: #1a472a;"></i>
                </div>
                <h4>Chaises</h4>
                <p>Chaises de banquet, chaises Napoléon, chaises bistrot</p>
                <div style="margin-top: 1rem;">
                    <strong>À partir de 1,50€ / pièce</strong>
                </div>
            </div>
            <div class="card">
                <div style="height: 200px; background: #e8e8e8; border-radius: 4px; display: flex; align-items: center; justify-content: center; margin-bottom: 1rem;">
                    <i class="fas fa-bars" style="font-size: 3rem; color: #1a472a;"></i>
                </div>
                <h4>Mange-Debout</h4>
                <p>Mange-debout de cocktail, tables hautes</p>
                <div style="margin-top: 1rem;">
                    <strong>À partir de 3€ / pièce</strong>
                </div>
            </div>
            <div class="card">
                <div style="height: 200px; background: #e8e8e8; border-radius: 4px; display: flex; align-items: center; justify-content: center; margin-bottom: 1rem;">
                    <i class="fas fa-couch" style="font-size: 3rem; color: #1a472a;"></i>
                </div>
                <h4>Mobilier Lumineux</h4>
                <p>Tables basses lumineuses, assises LED</p>
                <div style="margin-top: 1rem;">
                    <strong>À partir de 10€ / pièce</strong>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Nappage & Décoration -->
<section id="nappage">
    <div class="container">
        <h2>Nappage & Décoration</h2>
        <div class="grid grid-4">
            <div class="card">
                <div style="height: 200px; background: #e8e8e8; border-radius: 4px; display: flex; align-items: center; justify-content: center; margin-bottom: 1rem;">
                    <i class="fas fa-scroll" style="font-size: 3rem; color: #1a472a;"></i>
                </div>
                <h4>Nappes Tissu</h4>
                <p>Nappes de qualité en différentes couleurs et formats</p>
                <div style="margin-top: 1rem;">
                    <strong>À partir de 2€ / pièce</strong>
                </div>
            </div>
            <div class="card">
                <div style="height: 200px; background: #e8e8e8; border-radius: 4px; display: flex; align-items: center; justify-content: center; margin-bottom: 1rem;">
                    <i class="fas fa-ribbon" style="font-size: 3rem; color: #1a472a;"></i>
                </div>
                <h4>Chemins de Table</h4>
                <p>Chemins de table décorés, nœuds, rubans</p>
                <div style="margin-top: 1rem;">
                    <strong>À partir de 1€ / pièce</strong>
                </div>
            </div>
            <div class="card">
                <div style="height: 200px; background: #e8e8e8; border-radius: 4px; display: flex; align-items: center; justify-content: center; margin-bottom: 1rem;">
                    <i class="fas fa-flower" style="font-size: 3rem; color: #1a472a;"></i>
                </div>
                <h4>Chandeliers & Vases</h4>
                <p>Chandeliers dorés, vases pour compositions florales</p>
                <div style="margin-top: 1rem;">
                    <strong>À partir de 2€ / pièce</strong>
                </div>
            </div>
            <div class="card">
                <div style="height: 200px; background: #e8e8e8; border-radius: 4px; display: flex; align-items: center; justify-content: center; margin-bottom: 1rem;">
                    <i class="fas fa-lightbulb" style="font-size: 3rem; color: #1a472a;"></i>
                </div>
                <h4>Éclairage LED</h4>
                <p>Guirlandes, bougies LED, lanternes lumineuses</p>
                <div style="margin-top: 1rem;">
                    <strong>À partir de 1,50€ / pièce</strong>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section id="devis" style="background: linear-gradient(135deg, #1a472a 0%, #2d5a3d 100%); color: white; text-align: center;">
    <div class="container">
        <h2 style="color: white;">Vous avez trouvé ce qu'il vous faut ?</h2>
        <p>Demandez un devis gratuit dès maintenant !</p>
        <a href="<?php echo SITE_URL; ?>/pages/contact.php" class="btn btn-primary">Demander un devis</a>
    </div>
</section>

<?php include __DIR__ . '/../../includes/footer.php'; ?>
