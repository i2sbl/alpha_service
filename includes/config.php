<?php
/**
 * Alpha Service - Configuration de sécurité et base de données
 * SEO Optimized & RGPD Compliant
 */

// === SECURITY ===
header('X-Content-Type-Options: nosniff');
header('X-Frame-Options: SAMEORIGIN');
header('X-XSS-Protection: 1; mode=block');
header('Referrer-Policy: strict-origin-when-cross-origin');
header('Permissions-Policy: geolocation=(), microphone=(), camera=()');

// Start secure session
if (session_status() === PHP_SESSION_NONE) {
    session_set_cookie_params([
        'lifetime' => 3600,
        'path' => '/',
        'domain' => $_SERVER['HTTP_HOST'] ?? 'alphaservice28.fr',
        'secure' => true,
        'httponly' => true,
        'samesite' => 'Strict'
    ]);
    session_start();
}

// === CONFIGURATION ===
define('SITE_NAME', 'Alpha Service - Location Matériel Événementiel');
define('SITE_URL', 'https://alphaservice28.fr');
define('CONTACT_EMAIL', 'contact@alphaservice28.fr');
define('ADMIN_EMAIL', 'admin@alphaservice28.fr');

// Base de données (à configurer selon votre serveur)
define('DB_HOST', 'localhost');
define('DB_USER', 'alpha_service_user');
define('DB_PASS', 'secure_password_here');
define('DB_NAME', 'alpha_service_db');

// === VARIABLES GLOBALES ===
$site_config = [
    'company_name' => 'Alpha Service SYCARO SARL',
    'tagline' => 'Louez propre, rendez sale !',
    'phone' => '02 37 36 61 70',
    'phone_clickable' => '+33237366170',
    'email' => 'contact@alphaservice28.fr',
    'address' => '7 Rue Georges Charpak, 28300 Chartres',
    'region' => 'Chartres',
    'business_hours' => [
        'Monday' => '8h-12h30 | 14h-17h30',
        'Tuesday' => '9h-12h30 | 14h-17h30',
        'Wednesday' => '9h-12h30 | 14h-17h30',
        'Thursday' => '9h-12h30 | 14h-17h30',
        'Friday' => '9h-12h30 | 14h-17h',
        'Saturday' => '9h-12h',
        'Sunday' => 'Fermé'
    ],
    'social_media' => [
        'facebook' => 'https://www.facebook.com/alphaserviceouest',
        'instagram' => 'https://www.instagram.com/alphaserviceouest/',
        'google_business' => 'https://www.google.com/maps/place/Alpha-Service/@48.028805,0.20223'
    ]
];

// === CSRF PROTECTION ===
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

// === UTILITY FUNCTIONS ===

/**
 * Sanitize user input
 */
function sanitize_input($data) {
    return htmlspecialchars(stripslashes(trim($data)), ENT_QUOTES, 'UTF-8');
}

/**
 * Validate email
 */
function validate_email($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

/**
 * Log activity
 */
function log_activity($action, $details = '') {
    $log_file = __DIR__ . '/../data/activity.log';
    $timestamp = date('Y-m-d H:i:s');
    $ip_address = sanitize_input($_SERVER['REMOTE_ADDR'] ?? 'unknown');
    $log_entry = "[$timestamp] IP: $ip_address | Action: $action | Details: $details\n";
    error_log($log_entry, 3, $log_file);
}

/**
 * Generate SEO-friendly URL
 */
function generate_slug($text) {
    $text = iconv('UTF-8', 'ASCII//TRANSLIT', $text);
    $text = preg_replace('/[^a-zA-Z0-9]+/', '-', $text);
    return strtolower(trim($text, '-'));
}

// === ENVIRONMENT SETUP ===
define('IS_PRODUCTION', $_SERVER['HTTP_HOST'] !== 'localhost' && $_SERVER['HTTP_HOST'] !== 'localhost:8000');

if (!IS_PRODUCTION) {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
} else {
    error_reporting(E_ALL);
    ini_set('display_errors', 0);
    ini_set('log_errors', 1);
}

// === AUTOLOAD ===
require_once __DIR__ . '/Database.php';
require_once __DIR__ . '/Cache.php';

log_activity('page_load', $_SERVER['REQUEST_URI'] ?? 'unknown');
?>
