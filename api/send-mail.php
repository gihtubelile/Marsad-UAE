<?php
// Contact form handler - mirrors the Elile UAE flow (Office 365 SMTP).
// Required env vars (set in Vercel): SMTP_USERNAME, SMTP_PASSWORD,
// CONTACT_RECEIVER_ADDRESS (falls back to MAIL_RECEIVER_ADDRESS).

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/../vendor/autoload.php';

// Local dev: load ../.env (gitignored). On Vercel the vars come from project settings.
$envFile = __DIR__ . '/../.env';
if (is_file($envFile)) {
    foreach (file($envFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) as $line) {
        if ($line[0] === '#' || strpos($line, '=') === false) continue;
        [$key, $value] = explode('=', $line, 2);
        if (getenv(trim($key)) === false) putenv(trim($key) . '=' . trim($value));
    }
}

header('Content-Type: application/json');

function respond($status, $payload)
{
    http_response_code($status);
    echo json_encode($payload);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    respond(405, ['success' => false, 'message' => 'Method not allowed']);
}

// Strip CR/LF so header-bound fields can't inject extra headers
$clean = function ($key) {
    return trim(str_replace(["\r", "\n"], ' ', $_POST[$key] ?? ''));
};

$name = $clean('name');
$email = $clean('email');
$phone = $clean('phone');
$comments = trim($_POST['comments'] ?? '');

if ($name === '' || $comments === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    respond(422, ['success' => false, 'message' => 'Please fill in your name, a valid email and your message.']);
}

$receiver = getenv('CONTACT_RECEIVER_ADDRESS') ?: getenv('MAIL_RECEIVER_ADDRESS');

$mail = new PHPMailer(true);
try {
    $mail->isSMTP();
    $mail->Host = 'smtp.office365.com';
    $mail->Port = 587;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->SMTPAuth = true;
    $mail->Username = getenv('SMTP_USERNAME');
    $mail->Password = getenv('SMTP_PASSWORD');

    $mail->setFrom(getenv('SMTP_USERNAME'), 'Marsad Website');
    $mail->addAddress($receiver);
    $mail->addReplyTo($email, $name);

    $mail->Subject = "Marsad Contact Form: $name";
    $mail->Body = "Name: $name\nEmail: $email\nPhone: $phone\n\nMessage:\n$comments\n";

    $mail->send();
} catch (Exception $e) {
    error_log('Contact email failed: ' . $mail->ErrorInfo);
    respond(500, ['success' => false, 'message' => 'Ooops! There was a problem sending your message. Please try again.']);
}

respond(200, ['success' => true, 'message' => 'Thank you! Your message has been sent. We will get back to you shortly.']);
