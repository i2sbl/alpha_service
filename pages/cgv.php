<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = 'Conditions Générales de Vente';
$page_description = 'Conditions générales de vente et d\'utilisation d\'Alpha Service';

include __DIR__ . '/../includes/header.php';
?>

<section class="hero" style="padding: 3rem 0;">
    <div class="container">
        <h1>Conditions Générales de Vente</h1>
    </div>
</section>

<section>
    <div class="container" style="max-width: 800px;">
        
        <h2>Conditions Générales de Vente</h2>

        <h3>1. Objet</h3>
        <p>
            Les présentes Conditions Générales de Vente (CGV) régissent la location de matériel événementiel par 
            <?php echo $site_config['company_name']; ?> aux clients.
        </p>

        <h3>2. Produits et services</h3>
        <p>
            <?php echo $site_config['company_name']; ?> propose la location de matériel événementiel : vaisselle, mobilier, nappage, décoration, 
            matériel de cuisine et autres équipements listés sur le site.
        </p>

        <h3>3. Prix et devis</h3>
        <p>
            Les prix affichés sur le site sont en euros TTC. Un devis détaillé est établi après consultation. 
            Les tarifs sont valables 30 jours à compter de la date du devis. Les frais de livraison et de mise en place 
            sont indiqués séparément sur le devis.
        </p>

        <h3>4. Commande et confirmation</h3>
        <p>
            La commande est confirmée par écrit (email). Un acompte de 30% est demandé à la signature du contrat. 
            Le solde est dû avant l'événement ou 30 jours après la facture.
        </p>

        <h3>5. Délai de livraison</h3>
        <p>
            Délai standard : 7 jours après confirmation. Pour un délai plus court, contactez-nous. 
            Les retards sont communiqués dans les meilleurs délais.
        </p>

        <h3>6. Livraison et mise en place</h3>
        <p>
            La livraison et la mise en place sont incluses pour les formules Premium et Élégance. 
            Pour les autres cas, elles peuvent être facturées selon la distance. 
            Le client accepte que la mise en place soit effectuée le jour de l'événement.
        </p>

        <h3>7. État du matériel</h3>
        <p>
            Le matériel est loué dans un bon état d'usage normal. L'utilisateur s'engage à l'utiliser correctement. 
            Les défauts visibles doivent être signalés à la livraison.
        </p>

        <h3>8. Responsabilité et assurance</h3>
        <p>
            Le client est responsable du matériel du moment de la livraison jusqu'à son enlèvement. 
            Une assurance casse peut être souscrite. En cas de casse ou dommage, une franchise s'applique.
        </p>

        <h3>9. Retour du matériel</h3>
        <p>
            Le matériel doit être restitué dans l'état de location. Les frais de nettoyage supplémentaires 
            seront facturés si nécessaire. L'enlèvement est gratuit dans les 3 jours suivant l'événement.
        </p>

        <h3>10. Conditions de paiement</h3>
        <p>
            Paiement par virement bancaire, chèque ou espèces. Les chèques certifiés sont acceptés.
        </p>

        <h3>11. Annulation et remboursement</h3>
        <ul>
            <li><strong>Annulation plus de 30 jours avant :</strong> Remboursement de 100% (moins les frais d'administration)</li>
            <li><strong>Annulation 30-15 jours avant :</strong> Remboursement de 50%</li>
            <li><strong>Annulation moins de 15 jours avant :</strong> Pas de remboursement</li>
        </ul>

        <h3>12. Modifications et report</h3>
        <p>
            Les modifications sont acceptées si le matériel est disponible. Un report est possible 
            gratuitement dans les 6 mois.
        </p>

        <h3>13. Limitation de responsabilité</h3>
        <p>
            La responsabilité de <?php echo $site_config['company_name']; ?> est limitée au montant de la location. 
            Nous ne sommes pas responsables des dommages indirects ou pertes de profits.
        </p>

        <h3>14. Force majeure</h3>
        <p>
            En cas de force majeure (catastrophe naturelle, épidémie, etc.), 
            l'événement pourra être reporté. Un remboursement partiel peut être offert.
        </p>

        <h3>15. Conformité légale</h3>
        <p>
            Tout matériel location doit être utilisé conformément aux lois en vigueur. 
            L'utilisateur est responsable de la conformité réglementaire.
        </p>

        <h3>16. Résolution de litiges</h3>
        <p>
            Les litiges seront résolus à l'amiable. En dernier recours, les tribunaux compétents 
            sont ceux de Mainvilliers.
        </p>

        <h3>17. Contact</h3>
        <p>
            Pour toute question : <a href="mailto:<?php echo $site_config['email']; ?>"><?php echo $site_config['email']; ?></a><br>
            Tél : <a href="tel:<?php echo str_replace(' ', '', $site_config['phone_clickable']); ?>"><?php echo $site_config['phone']; ?></a>
        </p>

        <p><em>Dernière mise à jour : <?php echo date('d/m/Y'); ?></em></p>
    </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
