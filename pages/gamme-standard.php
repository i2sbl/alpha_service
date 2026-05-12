<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = 'Gamme Standard';
$page_description = 'Découvrez notre gamme Standard: produits économiques pour gros volumes';
$page_keywords = 'location vaisselle standard, location économique, location vaisselle pas cher';

include __DIR__ . '/../includes/header.php';

// Charger les données produits
$produits_json = file_get_contents(__DIR__ . '/../includes/produits-data.json');
$data = json_decode($produits_json, true);
$gamme_id = 'standard';
$gamme = array_filter($data['gammes'], fn($g) => $g['id'] === $gamme_id)[0] ?? null;
$produits = $data['produits'][$gamme_id] ?? [];
?>

<section class="hero" style="padding: 3rem 0;">
    <div class="container">
        <a href="<?php echo SITE_URL; ?>/gammes.html" style="color: #8B5CF6; margin-bottom: 1rem; display: inline-block;">
            <i class="fas fa-arrow-left"></i> Retour aux gammes
        </a>
        <h1><?php echo $gamme['nom']; ?></h1>
        <p><?php echo $gamme['description']; ?></p>
    </div>
</section>

<section style="padding: 3rem 0;">
    <div class="container">
        <div class="grid grid-4">
            <?php foreach ($produits as $produit): ?>
            <div class="card">
                <div class="product-media">
                    <img class="product-img" src="<?php echo SITE_URL; ?>/assets/images/<?php echo $produit['image']; ?>" 
                         alt="<?php echo htmlspecialchars($produit['nom']); ?>" 
                         onerror="this.style.display='none';this.nextElementSibling.style.display='flex';">
                    <div style="height: 200px; background: <?php echo $gamme['couleur_light']; ?>; border-radius: 4px; display: none; align-items: center; justify-content: center;">
                        <i class="fas fa-box" style="font-size: 3rem; color: <?php echo $gamme['couleur']; ?>;"></i>
                    </div>
                </div>
                <h4><?php echo $produit['nom']; ?></h4>
                <p><?php echo $produit['description']; ?></p>
                <div style="margin-top: 1rem;">
                    <strong style="color: <?php echo $gamme['couleur']; ?>;">À partir de <?php echo number_format($produit['prix'], 2, ',', '.'); ?>€</strong>
                </div>
                <div style="margin-top: 0.5rem; font-size: 0.85rem; color: #999;">
                    Code: <?php echo $produit['code']; ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ===== CALL TO ACTION ===== -->
<section id="devis" style="background: linear-gradient(135deg, #8B5CF6 0%, #7C3AED 100%); color: white; text-align: center; margin-top: 3rem;">
    <div class="container">
        <h2 style="color: white;">Intéressé par la gamme <?php echo $gamme['nom']; ?> ?</h2>
        <p>Demandez un devis gratuit dès maintenant !</p>
        <a href="<?php echo SITE_URL; ?>/pages/contact.php" class="btn btn-primary" style="background: white; color: #8B5CF6; font-weight: 600;">Demander un devis</a>
    </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
