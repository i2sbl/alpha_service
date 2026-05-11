<?php
require_once __DIR__ . '/../../includes/config.php';

$page_title = 'Nos Formules';
$page_description = 'Découvrez nos formules complètes et adaptées à votre budget pour votre événement';
$page_keywords = 'formules, packs événement, offres, tarifs';

include __DIR__ . '/../../includes/header.php';
?>

<section class="hero" style="padding: 3rem 0;">
    <div class="container">
        <h1>Nos Formules Complètes</h1>
        <p>Des packs tout inclus adaptés à vos besoins et votre budget</p>
    </div>
</section>

<section>
    <div class="container">
        <div class="grid grid-2" style="gap: 2rem;">
            <!-- Formula 1 -->
            <div class="card" style="border: 2px solid #16a34a; position: relative;">
                <div style="position: absolute; top: -15px; right: 20px; background: #16a34a; color: white; padding: 0.5rem 1rem; border-radius: 20px; font-size: 0.9rem;">
                    Populaire
                </div>
                <h3>Formule Découverte</h3>
                <p style="color: #666; font-size: 0.95rem; margin-bottom: 1.5rem;">Pour les petits événements intimistes</p>

                <div style="font-size: 2.5rem; color: #16a34a; font-weight: bold; margin-bottom: 1rem;">
                    À partir de 150€
                </div>

                <ul style="list-style: none; margin-bottom: 2rem;">
                    <li style="padding: 0.5rem 0; display: flex; align-items: center;">
                        <i class="fas fa-check" style="color: #16a34a; margin-right: 0.5rem;"></i>
                        Tables et chaises pour 10 personnes
                    </li>
                    <li style="padding: 0.5rem 0; display: flex; align-items: center;">
                        <i class="fas fa-check" style="color: #16a34a; margin-right: 0.5rem;"></i>
                        Vaisselle et couverts complets
                    </li>
                    <li style="padding: 0.5rem 0; display: flex; align-items: center;">
                        <i class="fas fa-check" style="color: #16a34a; margin-right: 0.5rem;"></i>
                        Nappe de table
                    </li>
                    <li style="padding: 0.5rem 0; display: flex; align-items: center;">
                        <i class="fas fa-check" style="color: #16a34a; margin-right: 0.5rem;"></i>
                        Éclairage basique
                    </li>
                    <li style="padding: 0.5rem 0; display: flex; align-items: center;">
                        <i class="fas fa-times" style="color: #ccc; margin-right: 0.5rem;"></i>
                        <span style="color: #999;">Livraison incluse</span>
                    </li>
                </ul>

                <a href="<?php echo SITE_URL; ?>/pages/contact.php" class="btn btn-primary" style="width: 100%; text-align: center;">Demander devis</a>
            </div>

            <!-- Formula 2 -->
            <div class="card" style="border: 2px solid #16a34a; position: relative;">
                <div style="position: absolute; top: -15px; right: 20px; background: #16a34a; color: white; padding: 0.5rem 1rem; border-radius: 20px; font-size: 0.9rem;">
                    Recommandé ⭐
                </div>
                <h3>Formule Premium</h3>
                <p style="color: #666; font-size: 0.95rem; margin-bottom: 1.5rem;">Pour les événements classiques</p>

                <div style="font-size: 2.5rem; color: #16a34a; font-weight: bold; margin-bottom: 1rem;">
                    À partir de 450€
                </div>

                <ul style="list-style: none; margin-bottom: 2rem;">
                    <li style="padding: 0.5rem 0; display: flex; align-items: center;">
                        <i class="fas fa-check" style="color: #16a34a; margin-right: 0.5rem;"></i>
                        Tables et chaises pour 50 personnes
                    </li>
                    <li style="padding: 0.5rem 0; display: flex; align-items: center;">
                        <i class="fas fa-check" style="color: #16a34a; margin-right: 0.5rem;"></i>
                        Vaisselle haut de gamme et couverts
                    </li>
                    <li style="padding: 0.5rem 0; display: flex; align-items: center;">
                        <i class="fas fa-check" style="color: #16a34a; margin-right: 0.5rem;"></i>
                        Nappes et chemins de table
                    </li>
                    <li style="padding: 0.5rem 0; display: flex; align-items: center;">
                        <i class="fas fa-check" style="color: #16a34a; margin-right: 0.5rem;"></i>
                        Décoration (chandeliers, vases)
                    </li>
                    <li style="padding: 0.5rem 0; display: flex; align-items: center;">
                        <i class="fas fa-check" style="color: #16a34a; margin-right: 0.5rem;"></i>
                        Éclairage LED et bougies
                    </li>
                    <li style="padding: 0.5rem 0; display: flex; align-items: center;">
                        <i class="fas fa-check" style="color: #16a34a; margin-right: 0.5rem;"></i>
                        ✓ Livraison et mise en place
                    </li>
                </ul>

                <a href="<?php echo SITE_URL; ?>/pages/contact.php" class="btn btn-primary" style="width: 100%; text-align: center; background: #16a34a;">Demander devis</a>
            </div>

            <!-- Formula 3 -->
            <div class="card" style="border: 2px solid #16a34a;">
                <h3>Formule Élégance</h3>
                <p style="color: #666; font-size: 0.95rem; margin-bottom: 1.5rem;">Pour les grands événements prestigieux</p>

                <div style="font-size: 2.5rem; color: #16a34a; font-weight: bold; margin-bottom: 1rem;">
                    À partir de 900€
                </div>

                <ul style="list-style: none; margin-bottom: 2rem;">
                    <li style="padding: 0.5rem 0; display: flex; align-items: center;">
                        <i class="fas fa-check" style="color: #16a34a; margin-right: 0.5rem;"></i>
                        Tables et chaises pour 100+ personnes
                    </li>
                    <li style="padding: 0.5rem 0; display: flex; align-items: center;">
                        <i class="fas fa-check" style="color: #16a34a; margin-right: 0.5rem;"></i>
                        Vaisselle et verres premium
                    </li>
                    <li style="padding: 0.5rem 0; display: flex; align-items: center;">
                        <i class="fas fa-check" style="color: #16a34a; margin-right: 0.5rem;"></i>
                        Nappes luxe et nappes de qualité supérieure
                    </li>
                    <li style="padding: 0.5rem 0; display: flex; align-items: center;">
                        <i class="fas fa-check" style="color: #16a34a; margin-right: 0.5rem;"></i>
                        Décoration élégante complète
                    </li>
                    <li style="padding: 0.5rem 0; display: flex; align-items: center;">
                        <i class="fas fa-check" style="color: #16a34a; margin-right: 0.5rem;"></i>
                        Éclairage ambiance LED professionnel
                    </li>
                    <li style="padding: 0.5rem 0; display: flex; align-items: center;">
                        <i class="fas fa-check" style="color: #16a34a; margin-right: 0.5rem;"></i>
                        Mobilier lumineux en option
                    </li>
                    <li style="padding: 0.5rem 0; display: flex; align-items: center;">
                        <i class="fas fa-check" style="color: #16a34a; margin-right: 0.5rem;"></i>
                        ✓ Livraison, mise en place et enlèvement
                    </li>
                </ul>

                <a href="<?php echo SITE_URL; ?>/pages/contact.php" class="btn btn-outline" style="width: 100%; text-align: center;">Demander devis</a>
            </div>

            <!-- Formula Sur Mesure -->
            <div class="card" style="border: 2px solid #1a472a; background: #f8f9fa;">
                <h3>Formule Sur Mesure</h3>
                <p style="color: #666; font-size: 0.95rem; margin-bottom: 1.5rem;">Totalement adaptée à vos besoins</p>

                <div style="font-size: 1.5rem; color: #1a472a; font-weight: bold; margin-bottom: 1rem;">
                    Devis personnalisé
                </div>

                <p style="margin-bottom: 2rem;">Nous créons une formule 100% adaptée à votre événement, votre budget et vos souhaits particuliers.</p>

                <ul style="list-style: none; margin-bottom: 2rem; font-size: 0.95rem;">
                    <li style="padding: 0.5rem 0; display: flex; align-items: center;">
                        <i class="fas fa-check" style="color: #1a472a; margin-right: 0.5rem;"></i>
                        Conseil personnalisé
                    </li>
                    <li style="padding: 0.5rem 0; display: flex; align-items: center;">
                        <i class="fas fa-check" style="color: #1a472a; margin-right: 0.5rem;"></i>
                        Sélection produits adaptée
                    </li>
                    <li style="padding: 0.5rem 0; display: flex; align-items: center;">
                        <i class="fas fa-check" style="color: #1a472a; margin-right: 0.5rem;"></i>
                        Tarif compétitif
                    </li>
                    <li style="padding: 0.5rem 0; display: flex; align-items: center;">
                        <i class="fas fa-check" style="color: #1a472a; margin-right: 0.5rem;"></i>
                        Suivi avant/après événement
                    </li>
                </ul>

                <a href="<?php echo SITE_URL; ?>/pages/contact.php" class="btn btn-primary" style="width: 100%; text-align: center;">Nous contacter</a>
            </div>
        </div>
    </div>
</section>

<!-- FAQ -->
<section style="background: #f8f9fa;">
    <div class="container">
        <h2>Questions Fréquemment Posées</h2>
        <div class="grid grid-2">
            <div>
                <h4>Quels sont les délais de livraison ?</h4>
                <p>Nous livrons généralement dans les 7 jours suivant la confirmation. Pour les urgences, contactez-nous directement.</p>
            </div>
            <div>
                <h4>Pouvez-vous livrer au-delà de Chartres ?</h4>
                <p>Oui ! Nous livrons dans toute la région Eure-et-Loire et au-delà. Des frais de transport s'appliquent selon la distance.</p>
            </div>
            <div>
                <h4>Comment fonctionne l'annulation ?</h4>
                <p>Les annulations sans frais sont possibles jusqu'à 48h avant l'événement. Consultez nos CGV pour plus de détails.</p>
            </div>
            <div>
                <h4>Proposez-vous une assurance casse ?</h4>
                <p>Une franchise est incluse. Une assurance supplémentaire est disponible selon le type de matériel.</p>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/../../includes/footer.php'; ?>
