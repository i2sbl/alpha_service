<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = 'Nos Produits';
$page_description = 'Découvrez notre large gamme de produits pour location: vaisselle (Standard, Arcopal, Premium, Prestige), mobilier, nappage, décoration pour vos événements';
$page_keywords = 'location vaisselle, location mobilier, location nappage, location décoration';

include __DIR__ . '/../includes/header.php';
?>

<section class="hero" style="padding: 3rem 0;">
    <div class="container">
        <h1>Nos Produits de Qualité</h1>
        <p>Une sélection complète pour tous vos besoins événementiels</p>
    </div>
</section>

<section class="product-links" style="padding: 2rem 0; background: #f8f9fa;">
    <div class="container">
        <h2>Accès rapide aux produits</h2>
        <div style="display: flex; flex-wrap: wrap; gap: 1rem; margin-top: 1rem;">
            <a href="<?php echo SITE_URL; ?>/pages/produits.php#vaisselle" class="card" style="flex: 1 1 220px; text-align: center; padding: 1rem; border: 1px solid #d1d5db; border-radius: 8px; background: white; text-decoration: none; color: inherit;">
                <strong>Vaisselle</strong>
            </a>
            <a href="<?php echo SITE_URL; ?>/pages/produits.php#materiel" class="card" style="flex: 1 1 220px; text-align: center; padding: 1rem; border: 1px solid #d1d5db; border-radius: 8px; background: white; text-decoration: none; color: inherit;">
                <strong>Mobilier</strong>
            </a>
            <a href="<?php echo SITE_URL; ?>/pages/produits.php#nappage" class="card" style="flex: 1 1 220px; text-align: center; padding: 1rem; border: 1px solid #d1d5db; border-radius: 8px; background: white; text-decoration: none; color: inherit;">
                <strong>Nappage</strong>
            </a>
            <a href="<?php echo SITE_URL; ?>/pages/materiel.php" class="card" style="flex: 1 1 220px; text-align: center; padding: 1rem; border: 1px solid #d1d5db; border-radius: 8px; background: white; text-decoration: none; color: inherit;">
                <strong>Livraison sur demande</strong>
            </a>
            <a href="<?php echo SITE_URL; ?>/pages/formules.php" class="card" style="flex: 1 1 220px; text-align: center; padding: 1rem; border: 1px solid #d1d5db; border-radius: 8px; background: white; text-decoration: none; color: inherit;">
                <strong>Formules</strong>
            </a>
        </div>
    </div>
</section>

<!-- ===== SECTION VAISSELLE ===== -->
<section id="vaisselle">
    <div class="container">
        <h2>Vaisselle & Art de la Table</h2>
        
        <!-- GAMME STANDARD -->
        <div style="margin-bottom: 3rem;">
            <h3 style="color: #8B5CF6; font-size: 1.3rem; margin-bottom: 1.5rem; padding-bottom: 0.75rem; border-bottom: 3px solid #E9D5FF;">
                <i class="fas fa-layer-group" style="margin-right: 0.5rem;"></i>Gamme Standard - Économique
            </h3>
            <div class="grid grid-4">
                <div class="card">
                    <div style="height: 200px; background: #F3E8FF; border-radius: 4px; display: flex; align-items: center; justify-content: center; margin-bottom: 1rem;">
                        <i class="fas fa-plate-wheat" style="font-size: 3rem; color: #8B5CF6;"></i>
                    </div>
                    <h4>Assiettes Standard</h4>
                    <p>Assiettes robustes pour gros volumes</p>
                    <div style="margin-top: 1rem;"><strong style="color: #8B5CF6;">À partir de 0,30€</strong></div>
                </div>
                <div class="card">
                    <div style="height: 200px; background: #F3E8FF; border-radius: 4px; display: flex; align-items: center; justify-content: center; margin-bottom: 1rem;">
                        <i class="fas fa-wine-glass" style="font-size: 3rem; color: #8B5CF6;"></i>
                    </div>
                    <h4>Verres Standard</h4>
                    <p>Verres résistants pour buffets</p>
                    <div style="margin-top: 1rem;"><strong style="color: #8B5CF6;">À partir de 0,15€</strong></div>
                </div>
                <div class="card">
                    <div style="height: 200px; background: #F3E8FF; border-radius: 4px; display: flex; align-items: center; justify-content: center; margin-bottom: 1rem;">
                        <i class="fas fa-utensils" style="font-size: 3rem; color: #8B5CF6;"></i>
                    </div>
                    <h4>Couverts Standard</h4>
                    <p>Couverts inox économique</p>
                    <div style="margin-top: 1rem;"><strong style="color: #8B5CF6;">À partir de 0,15€</strong></div>
                </div>
                <div class="card">
                    <div style="height: 200px; background: #F3E8FF; border-radius: 4px; display: flex; align-items: center; justify-content: center; margin-bottom: 1rem;">
                        <i class="fas fa-mug-hot" style="font-size: 3rem; color: #8B5CF6;"></i>
                    </div>
                    <h4>Tasses Standard</h4>
                    <p>Tasses café et thé pratiques</p>
                    <div style="margin-top: 1rem;"><strong style="color: #8B5CF6;">À partir de 0,20€</strong></div>
                </div>
            </div>
        </div>

        <!-- GAMME ARCOPAL -->
        <div style="margin-bottom: 3rem; background: #f8f9fa; padding: 2rem; border-radius: 8px;">
            <h3 style="color: #8B5CF6; font-size: 1.3rem; margin-bottom: 1.5rem; padding-bottom: 0.75rem; border-bottom: 3px solid #E9D5FF;">
                <i class="fas fa-plate" style="margin-right: 0.5rem;"></i>Gamme Arcopal - Verrerie Robuste
            </h3>
            <div class="grid grid-4">
                <div class="card">
                    <div style="height: 200px; background: #E9D5FF; border-radius: 4px; display: flex; align-items: center; justify-content: center; margin-bottom: 1rem;">
                        <i class="fas fa-plate-wheat" style="font-size: 3rem; color: #7C3AED;"></i>
                    </div>
                    <h4>Assiettes Arcopal</h4>
                    <p>Porcelaine blanche opaque très résistante</p>
                    <div style="margin-top: 1rem;"><strong style="color: #7C3AED;">À partir de 0,50€</strong></div>
                </div>
                <div class="card">
                    <div style="height: 200px; background: #E9D5FF; border-radius: 4px; display: flex; align-items: center; justify-content: center; margin-bottom: 1rem;">
                        <i class="fas fa-wine-glass" style="font-size: 3rem; color: #7C3AED;"></i>
                    </div>
                    <h4>Verres Savoie</h4>
                    <p>Verres Arcopal usage professionnel</p>
                    <div style="margin-top: 1rem;"><strong style="color: #7C3AED;">À partir de 0,30€</strong></div>
                </div>
                <div class="card">
                    <div style="height: 200px; background: #E9D5FF; border-radius: 4px; display: flex; align-items: center; justify-content: center; margin-bottom: 1rem;">
                        <i class="fas fa-bowl-rice" style="font-size: 3rem; color: #7C3AED;"></i>
                    </div>
                    <h4>Bols Arcopal</h4>
                    <p>Bols résistants pour soupes</p>
                    <div style="margin-top: 1rem;"><strong style="color: #7C3AED;">À partir de 0,40€</strong></div>
                </div>
                <div class="card">
                    <div style="height: 200px; background: #E9D5FF; border-radius: 4px; display: flex; align-items: center; justify-content: center; margin-bottom: 1rem;">
                        <i class="fas fa-mug-hot" style="font-size: 3rem; color: #7C3AED;"></i>
                    </div>
                    <h4>Tasses Arcopal</h4>
                    <p>Tasses avec soucoupes porcelaine</p>
                    <div style="margin-top: 1rem;"><strong style="color: #7C3AED;">À partir de 0,45€</strong></div>
                </div>
            </div>
        </div>

        <!-- GAMME PREMIUM -->
        <div style="margin-bottom: 3rem;">
            <h3 style="color: #8B5CF6; font-size: 1.3rem; margin-bottom: 1.5rem; padding-bottom: 0.75rem; border-bottom: 3px solid #E9D5FF;">
                <i class="fas fa-crown" style="margin-right: 0.5rem;"></i>Gamme Premium - Porcelaine Fine
            </h3>
            <div class="grid grid-4">
                <div class="card">
                    <div style="height: 200px; background: #FEF3C7; border-radius: 4px; display: flex; align-items: center; justify-content: center; margin-bottom: 1rem;">
                        <i class="fas fa-plate-wheat" style="font-size: 3rem; color: #D97706;"></i>
                    </div>
                    <h4>Assiettes Premium</h4>
                    <p>Porcelaine fine blanche élégante</p>
                    <div style="margin-top: 1rem;"><strong style="color: #D97706;">À partir de 0,75€</strong></div>
                </div>
                <div class="card">
                    <div style="height: 200px; background: #FEF3C7; border-radius: 4px; display: flex; align-items: center; justify-content: center; margin-bottom: 1rem;">
                        <i class="fas fa-wine-glass" style="font-size: 3rem; color: #D97706;"></i>
                    </div>
                    <h4>Verres Premium</h4>
                    <p>Verrerie fine cristal</p>
                    <div style="margin-top: 1rem;"><strong style="color: #D97706;">À partir de 0,60€</strong></div>
                </div>
                <div class="card">
                    <div style="height: 200px; background: #FEF3C7; border-radius: 4px; display: flex; align-items: center; justify-content: center; margin-bottom: 1rem;">
                        <i class="fas fa-utensils" style="font-size: 3rem; color: #D97706;"></i>
                    </div>
                    <h4>Couverts Premium</h4>
                    <p>Couverts inox 18/10 polis</p>
                    <div style="margin-top: 1rem;"><strong style="color: #D97706;">À partir de 0,50€</strong></div>
                </div>
                <div class="card">
                    <div style="height: 200px; background: #FEF3C7; border-radius: 4px; display: flex; align-items: center; justify-content: center; margin-bottom: 1rem;">
                        <i class="fas fa-mug-hot" style="font-size: 3rem; color: #D97706;"></i>
                    </div>
                    <h4>Tasses Premium</h4>
                    <p>Tasses porcelaine fine décorées</p>
                    <div style="margin-top: 1rem;"><strong style="color: #D97706;">À partir de 0,70€</strong></div>
                </div>
            </div>
        </div>

        <!-- GAMME PRESTIGE -->
        <div style="margin-bottom: 1rem; background: #f0fdfa; padding: 2rem; border-radius: 8px;">
            <h3 style="color: #8B5CF6; font-size: 1.3rem; margin-bottom: 1.5rem; padding-bottom: 0.75rem; border-bottom: 3px solid #E9D5FF;">
                <i class="fas fa-star" style="margin-right: 0.5rem;"></i>Gamme Prestige - Haut de Gamme
            </h3>
            <div class="grid grid-4">
                <div class="card">
                    <div style="height: 200px; background: #F0FDFA; border-radius: 4px; display: flex; align-items: center; justify-content: center; margin-bottom: 1rem;">
                        <i class="fas fa-plate-wheat" style="font-size: 3rem; color: #0D9488;"></i>
                    </div>
                    <h4>Assiettes Prestige</h4>
                    <p>Porcelaine décorée or/argent</p>
                    <div style="margin-top: 1rem;"><strong style="color: #0D9488;">À partir de 1,20€</strong></div>
                </div>
                <div class="card">
                    <div style="height: 200px; background: #F0FDFA; border-radius: 4px; display: flex; align-items: center; justify-content: center; margin-bottom: 1rem;">
                        <i class="fas fa-wine-glass" style="font-size: 3rem; color: #0D9488;"></i>
                    </div>
                    <h4>Verres Prestige</h4>
                    <p>Cristal de luxe décor raffiné</p>
                    <div style="margin-top: 1rem;"><strong style="color: #0D9488;">À partir de 1,50€</strong></div>
                </div>
                <div class="card">
                    <div style="height: 200px; background: #F0FDFA; border-radius: 4px; display: flex; align-items: center; justify-content: center; margin-bottom: 1rem;">
                        <i class="fas fa-utensils" style="font-size: 3rem; color: #0D9488;"></i>
                    </div>
                    <h4>Couverts Prestige</h4>
                    <p>Couverts plaqué or/argent massif</p>
                    <div style="margin-top: 1rem;"><strong style="color: #0D9488;">À partir de 1,80€</strong></div>
                </div>
                <div class="card">
                    <div style="height: 200px; background: #F0FDFA; border-radius: 4px; display: flex; align-items: center; justify-content: center; margin-bottom: 1rem;">
                        <i class="fas fa-mug-hot" style="font-size: 3rem; color: #0D9488;"></i>
                    </div>
                    <h4>Tasses Prestige</h4>
                    <p>Tasses collection porcelaine</p>
                    <div style="margin-top: 1rem;"><strong style="color: #0D9488;">À partir de 1,50€</strong></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== SECTION MOBILIER ===== -->
<section id="materiel" style="background: #f8f9fa;">
    <div class="container">
        <h2>Mobilier & Équipements</h2>
        <div class="grid grid-4">
            <div class="card">
                <div style="height: 200px; background: #e8e8e8; border-radius: 4px; display: flex; align-items: center; justify-content: center; margin-bottom: 1rem;">
                    <i class="fas fa-table" style="font-size: 3rem; color: #8B5CF6;"></i>
                </div>
                <h4>Tables</h4>
                <p>Tables rectangulaires, rondes, carrées de différentes tailles</p>
                <div style="margin-top: 1rem;">
                    <strong style="color: #8B5CF6;">À partir de 5€ / pièce</strong>
                </div>
            </div>
            <div class="card">
                <div style="height: 200px; background: #e8e8e8; border-radius: 4px; display: flex; align-items: center; justify-content: center; margin-bottom: 1rem;">
                    <i class="fas fa-chair" style="font-size: 3rem; color: #8B5CF6;"></i>
                </div>
                <h4>Chaises</h4>
                <p>Chaises de banquet, chaises Napoléon, chaises bistrot</p>
                <div style="margin-top: 1rem;">
                    <strong style="color: #8B5CF6;">À partir de 1,50€ / pièce</strong>
                </div>
            </div>
            <div class="card">
                <div style="height: 200px; background: #e8e8e8; border-radius: 4px; display: flex; align-items: center; justify-content: center; margin-bottom: 1rem;">
                    <i class="fas fa-bars" style="font-size: 3rem; color: #8B5CF6;"></i>
                </div>
                <h4>Mange-Debout</h4>
                <p>Mange-debout de cocktail, tables hautes</p>
                <div style="margin-top: 1rem;">
                    <strong style="color: #8B5CF6;">À partir de 3€ / pièce</strong>
                </div>
            </div>
            <div class="card">
                <div style="height: 200px; background: #e8e8e8; border-radius: 4px; display: flex; align-items: center; justify-content: center; margin-bottom: 1rem;">
                    <i class="fas fa-couch" style="font-size: 3rem; color: #8B5CF6;"></i>
                </div>
                <h4>Mobilier Lumineux</h4>
                <p>Tables basses lumineuses, assises LED</p>
                <div style="margin-top: 1rem;">
                    <strong style="color: #8B5CF6;">À partir de 10€ / pièce</strong>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== SECTION NAPPAGE & DÉCORATION ===== -->
<section id="nappage">
    <div class="container">
        <h2>Nappage & Décoration</h2>
        <div class="grid grid-4">
            <div class="card">
                <div style="height: 200px; background: #e8e8e8; border-radius: 4px; display: flex; align-items: center; justify-content: center; margin-bottom: 1rem;">
                    <i class="fas fa-scroll" style="font-size: 3rem; color: #8B5CF6;"></i>
                </div>
                <h4>Nappes Tissu</h4>
                <p>Nappes de qualité en différentes couleurs et formats</p>
                <div style="margin-top: 1rem;">
                    <strong style="color: #8B5CF6;">À partir de 2€ / pièce</strong>
                </div>
            </div>
            <div class="card">
                <div style="height: 200px; background: #e8e8e8; border-radius: 4px; display: flex; align-items: center; justify-content: center; margin-bottom: 1rem;">
                    <i class="fas fa-ribbon" style="font-size: 3rem; color: #8B5CF6;"></i>
                </div>
                <h4>Chemins de Table</h4>
                <p>Chemins de table décorés, nœuds, rubans</p>
                <div style="margin-top: 1rem;">
                    <strong style="color: #8B5CF6;">À partir de 1€ / pièce</strong>
                </div>
            </div>
            <div class="card">
                <div style="height: 200px; background: #e8e8e8; border-radius: 4px; display: flex; align-items: center; justify-content: center; margin-bottom: 1rem;">
                    <i class="fas fa-flower" style="font-size: 3rem; color: #8B5CF6;"></i>
                </div>
                <h4>Chandeliers & Vases</h4>
                <p>Chandeliers dorés, vases pour compositions florales</p>
                <div style="margin-top: 1rem;">
                    <strong style="color: #8B5CF6;">À partir de 2€ / pièce</strong>
                </div>
            </div>
            <div class="card">
                <div style="height: 200px; background: #e8e8e8; border-radius: 4px; display: flex; align-items: center; justify-content: center; margin-bottom: 1rem;">
                    <i class="fas fa-lightbulb" style="font-size: 3rem; color: #8B5CF6;"></i>
                </div>
                <h4>Éclairage LED</h4>
                <p>Guirlandes, bougies LED, lanternes lumineuses</p>
                <div style="margin-top: 1rem;">
                    <strong style="color: #8B5CF6;">À partir de 1,50€ / pièce</strong>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== CALL TO ACTION ===== -->
<section id="devis" style="background: linear-gradient(135deg, #8B5CF6 0%, #7C3AED 100%); color: white; text-align: center;">
    <div class="container">
        <h2 style="color: white;">Vous avez trouvé ce qu'il vous faut ?</h2>
        <p>Demandez un devis gratuit dès maintenant !</p>
        <a href="<?php echo SITE_URL; ?>/pages/contact.php" class="btn btn-primary" style="background: white; color: #8B5CF6; font-weight: 600;">Demander un devis</a>
    </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
