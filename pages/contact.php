<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = 'Contact & Devis';
$page_description = 'Contactez Alpha Service pour obtenir un devis gratuit pour votre événement';
$page_keywords = 'contact, devis, formulaire de contact';

include __DIR__ . '/../includes/header.php';

// Process form submission
$success = false;
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verify CSRF token
    if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
        $error = 'Erreur de sécurité. Veuillez recharger la page et réessayer.';
    } else {
        // Sanitize inputs
        $name = sanitize_input($_POST['name'] ?? '');
        $email = sanitize_input($_POST['email'] ?? '');
        $phone = sanitize_input($_POST['phone'] ?? '');
        $company = sanitize_input($_POST['company'] ?? '');
        $event_date = sanitize_input($_POST['event_date'] ?? '');
        $event_type = sanitize_input($_POST['event_type'] ?? '');
        $guests = sanitize_input($_POST['guests'] ?? '');
        $message = sanitize_input($_POST['message'] ?? '');

        // Validate inputs
        if (empty($name) || empty($email) || empty($phone) || empty($message)) {
            $error = 'Veuillez remplir tous les champs obligatoires.';
        } elseif (!validate_email($email)) {
            $error = 'Adresse email invalide.';
        } else {
            // Prepare email content
            $email_subject = "[Alpha Service] Nouvelle demande de devis de " . $name;
            $email_body = "Nouvelle demande de devis reçue:\n\n";
            $email_body .= "Nom: " . $name . "\n";
            $email_body .= "Email: " . $email . "\n";
            $email_body .= "Téléphone: " . $phone . "\n";
            $email_body .= "Entreprise: " . $company . "\n";
            $email_body .= "Type d'événement: " . $event_type . "\n";
            $email_body .= "Date: " . $event_date . "\n";
            $email_body .= "Nombre d'invités: " . $guests . "\n";
            $email_body .= "Message:\n" . $message . "\n\n";
            $email_body .= "---\nMessage envoyé depuis le site Alpha Service";

            // Headers
            $headers = "From: " . $site_config['email'] . "\r\n";
            $headers .= "Reply-To: " . $email . "\r\n";
            $headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";
            $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

            // Send email
            if (mail($site_config['email'], $email_subject, $email_body, $headers)) {
                $success = true;
                log_activity('contact_form_submitted', $email);

                // Send confirmation email to user
                $confirm_subject = "Alpha Service - Confirmation de votre demande de devis";
                $confirm_body = "Bonjour " . $name . ",\n\n";
                $confirm_body .= "Nous avons bien reçu votre demande de devis.\n";
                $confirm_body .= "Notre équipe vous recontactera dans les 48h.\n\n";
                $confirm_body .= "Cordialement,\nAlpha Service";

                mail($email, $confirm_subject, $confirm_body, "From: " . $site_config['email'] . "\r\nContent-Type: text/plain; charset=UTF-8\r\n");
            } else {
                $error = 'Erreur lors de l\'envoi du formulaire. Veuillez réessayer.';
                log_activity('contact_form_error', $email);
            }
        }
    }
}
?>

<section class="hero" style="padding: 3rem 0;">
    <div class="container">
        <h1>Contact & Devis</h1>
        <p>Contactez-nous pour obtenir un devis gratuit et personnalisé</p>
    </div>
</section>

<section>
    <div class="container">
        <div class="grid grid-2" style="gap: 3rem;">
            <!-- Contact Form -->
            <div>
                <h2>Envoyez-nous votre demande</h2>

                <?php if ($success): ?>
                    <div style="background: #d4edda; border: 1px solid #c3e6cb; color: #155724; padding: 1rem; border-radius: 4px; margin-bottom: 1rem;">
                        ✓ Merci ! Votre demande a été envoyée avec succès. Nous vous recontacterons rapidement.
                    </div>
                <?php endif; ?>

                <?php if ($error): ?>
                    <div style="background: #f8d7da; border: 1px solid #f5c6cb; color: #721c24; padding: 1rem; border-radius: 4px; margin-bottom: 1rem;">
                        ✗ <?php echo $error; ?>
                    </div>
                <?php endif; ?>

                <form method="POST" novalidate>
                    <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">

                    <div class="form-group">
                        <label for="name">Nom complet *</label>
                        <input type="text" id="name" name="name" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email *</label>
                        <input type="email" id="email" name="email" required>
                    </div>

                    <div class="form-group">
                        <label for="phone">Téléphone *</label>
                        <input type="tel" id="phone" name="phone" required>
                    </div>

                    <div class="form-group">
                        <label for="company">Entreprise / Organisme</label>
                        <input type="text" id="company" name="company">
                    </div>

                    <div class="form-group">
                        <label for="event_type">Type d'événement</label>
                        <select id="event_type" name="event_type">
                            <option value="">Sélectionnez...</option>
                            <option value="marriage">Mariage</option>
                            <option value="anniversary">Anniversaire</option>
                            <option value="seminar">Séminaire</option>
                            <option value="conference">Conférence</option>
                            <option value="gala">Dîner de Gala</option>
                            <option value="corporate">Événement Corporatif</option>
                            <option value="other">Autre</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="event_date">Date de l'événement</label>
                        <input type="date" id="event_date" name="event_date">
                    </div>

                    <div class="form-group">
                        <label for="guests">Nombre d'invités</label>
                        <input type="number" id="guests" name="guests" min="1">
                    </div>

                    <div class="form-group">
                        <label for="message">Votre message *</label>
                        <textarea id="message" name="message" required></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary" style="width: 100%;">Envoyer ma demande</button>
                </form>
            </div>

            <!-- Contact Info -->
            <div>
                <h2>Informations de Contact</h2>

                <div class="card" style="border-left: 4px solid #16a34a;">
                    <h3>Alpha Service Mainvilliers</h3>
                    <p>
                        <strong>Adresse:</strong><br>
                        <?php echo $site_config['address']; ?>
                    </p>
                    <p>
                        <strong>Téléphone:</strong><br>
                        <a href="tel:<?php echo str_replace(' ', '', $site_config['phone_clickable']); ?>">
                            <?php echo $site_config['phone']; ?>
                        </a>
                    </p>
                    <p>
                        <strong>Email:</strong><br>
                        <a href="mailto:<?php echo $site_config['email']; ?>">
                            <?php echo $site_config['email']; ?>
                        </a>
                    </p>
                </div>

                <div class="card" style="border-left: 4px solid #16a34a; margin-top: 1rem;">
                    <h3>Horaires d'ouverture</h3>
                    <ul style="list-style: none;">
                        <li><strong>Lundi:</strong> 8h-12h30 | 14h-17h30</li>
                        <li><strong>Mardi:</strong> 9h-12h30 | 14h-17h30</li>
                        <li><strong>Mercredi:</strong> 9h-12h30 | 14h-17h30</li>
                        <li><strong>Jeudi:</strong> 9h-12h30 | 14h-17h30</li>
                        <li><strong>Vendredi:</strong> 9h-12h30 | 14h-17h</li>
                        <li><strong>Samedi:</strong> 9h-12h</li>
                        <li><strong>Dimanche:</strong> Fermé</li>
                    </ul>
                </div>

                <div class="card" style="border-left: 4px solid #16a34a; margin-top: 1rem;">
                    <h3>Suivez-nous</h3>
                    <div class="social-links">
                        <a href="<?php echo $site_config['social_media']['facebook']; ?>" target="_blank" rel="noopener" title="Facebook">
                            <i class="fab fa-facebook-f"></i> Facebook
                        </a>
                        <a href="<?php echo $site_config['social_media']['instagram']; ?>" target="_blank" rel="noopener" title="Instagram">
                            <i class="fab fa-instagram"></i> Instagram
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Map -->
<section style="background: #f8f9fa; padding: 2rem 0;">
    <div class="container">
        <h2>Nous localiser</h2>
        <div style="width: 100%; height: 400px; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 12px rgba(0,0,0,0.1);">
            <iframe src="https://www.google.com/maps?q=7+Rue+Georges+Charpak+28300+Mainvilliers&output=embed" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
