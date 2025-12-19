<?php
// Activation de l'affichage des erreurs
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Configuration du type de contenu
header('Content-Type: text/html; charset=utf-8');

// Chargement de l'autoloader de Composer
require 'vendor/autoload.php';

// Chargement des variables d'environnement
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Fonction de journalisation
function logError($message) {
    $logFile = __DIR__ . '/email_errors.log';
    $timestamp = date('Y-m-d H:i:s');
    file_put_contents($logFile, "[$timestamp] $message\n", FILE_APPEND);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données du formulaire
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_STRING) ?: 'Nouveau message depuis le site';
    $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);
    
    // Vérification des champs obligatoires
    if (empty($name) || empty($email) || empty($message)) {
        die('Tous les champs obligatoires doivent être remplis.');
    }
    
    // Validation de l'email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die('L\'adresse email n\'est pas valide.');
    }
    
    // Destinataire
    $to = 'episoldumans@gmail.com';
    
    try {
        // Création d'une nouvelle instance de PHPMailer
        $mail = new PHPMailer\PHPMailer\PHPMailer(true);
        
        // Configuration du serveur SMTP depuis les variables d'environnement
        $mail->isSMTP();
        $mail->Host = $_ENV['SMTP_HOST'];
        $mail->SMTPAuth = true;
        $mail->Username = $_ENV['SMTP_USER'];
        $mail->Password = $_ENV['SMTP_PASS'];
        $mail->SMTPSecure = $_ENV['SMTP_SECURE'] === 'tls' ? 
            PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS : 
            PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = (int)$_ENV['SMTP_PORT'];
        $mail->CharSet = 'UTF-8';
        
        // Destinataires
        $mail->setFrom(
            $_ENV['SMTP_FROM'], 
            $_ENV['SMTP_FROM_NAME'] ?? 'Épicerie Solidaire'
        );
        $mail->addAddress($to);
        $mail->addReplyTo($email, $name);
        
        // Contenu de l'email
        $mail->isHTML(false);
        $mail->Subject = $subject;
        $mail->Body = "Nom: $name\nEmail: $email\n\nMessage:\n$message";
        
        // Journalisation avant envoi
        logError("Tentative d'envoi d'email à: $to");
        logError("Sujet: $subject");
        
        // Envoi de l'email
        $mail->send();
        logError("Email envoyé avec succès à: $to");
        header('Location: index.php?status=success#contact');
        
    } catch (Exception $e) {
        $errorMsg = "Erreur d'envoi d'email: " . $e->getMessage();
        logError($errorMsg);
        header('Location: index.php?status=error#contact');
    }
    exit;
} else {
    // Redirection si l'accès est direct au fichier
    header('Location: index.php');
    exit;
}
?>
