<?php
/**
 * Footer global avec SEO optimization
 */
?>
    </main>

    <!-- Footer -->
    <footer class="footer" role="contentinfo">
        <div class="container">
            <div class="footer-grid">
                <!-- Company Info -->
                <div class="footer-section">
                    <h3>À Propos</h3>
                    <p><strong><?php echo $site_config['company_name']; ?></strong></p>
                    <p><?php echo $site_config['tagline']; ?></p>
                    <div class="social-links">
                        <a href="<?php echo $site_config['social_media']['facebook']; ?>" target="_blank" rel="noopener noreferrer" aria-label="Facebook">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a href="<?php echo $site_config['social_media']['instagram']; ?>" target="_blank" rel="noopener noreferrer" aria-label="Instagram">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="<?php echo $site_config['social_media']['google_business']; ?>" target="_blank" rel="noopener noreferrer" aria-label="Google Maps">
                            <i class="fab fa-google"></i>
                        </a>
                    </div>
                </div>

                <!-- Products -->
                <div class="footer-section">
                    <h3>Produits</h3>
                    <ul>
                        <li><a href="<?php echo SITE_URL; ?>/pages/produits.php#vaisselle">Vaisselle</a></li>
                        <li><a href="<?php echo SITE_URL; ?>/pages/produits.php#materiel">Matériel</a></li>
                        <li><a href="<?php echo SITE_URL; ?>/pages/produits.php#nappage">Nappage</a></li>
                        <li><a href="<?php echo SITE_URL; ?>/pages/produits.php#decoration">Décoration</a></li>
                    </ul>
                </div>

                <!-- Services -->
                <div class="footer-section">
                    <h3>Services</h3>
                    <ul>
                        <li><a href="<?php echo SITE_URL; ?>/pages/formules.php">Formules</a></li>
                        <li><a href="<?php echo SITE_URL; ?>/pages/materiel.php">Équipements</a></li>
                        <li><a href="<?php echo SITE_URL; ?>/pages/contact.php">Devis</a></li>
                        <li><a href="<?php echo SITE_URL; ?>/pages/contact.php">Contact</a></li>
                    </ul>
                </div>

                <!-- Contact -->
                <div class="footer-section">
                    <h3>Contact</h3>
                    <p>
                        <strong><?php echo $site_config['region']; ?></strong><br>
                        <?php echo $site_config['address']; ?><br>
                        <a href="tel:<?php echo str_replace(' ', '', $site_config['phone_clickable']); ?>">
                            <?php echo $site_config['phone']; ?>
                        </a><br>
                        <a href="mailto:<?php echo $site_config['email']; ?>">
                            <?php echo $site_config['email']; ?>
                        </a>
                    </p>
                    <p class="business-hours">
                        <strong>Horaires:</strong><br>
                        Lun: 8h-12h30 | 14h-17h30<br>
                        Mar-Ven: 9h-12h30 | 14h-17h30<br>
                        Sam: 9h-12h
                    </p>
                </div>
            </div>

            <!-- Bottom Footer -->
            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> <?php echo $site_config['company_name']; ?>. Tous droits réservés.</p>
                <ul class="footer-links">
                    <li><a href="<?php echo SITE_URL; ?>/pages/mentions-legales.php">Mentions légales</a></li>
                    <li><a href="<?php echo SITE_URL; ?>/pages/politique-confidentialite.php">Politique de confidentialité</a></li>
                    <li><a href="<?php echo SITE_URL; ?>/pages/cgv.php">CGV</a></li>
                </ul>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="<?php echo SITE_URL; ?>/assets/js/main.js" defer></script>
    <script src="<?php echo SITE_URL; ?>/assets/js/cookies.js" defer></script>
    
    <!-- Google Analytics (replace with your ID) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-XXXXXXXXXX"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-XXXXXXXXXX', {
            'anonymize_ip': true,
            'cookie_flags': 'SameSite=None;Secure'
        });
    </script>
</body>
</html>
