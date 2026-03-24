<?php
/**
 * Armitech International – Contact Form Processor
 * Handles form submissions: validates, sanitizes, and sends email.
 */

header('Content-Type: application/json');
header('X-Content-Type-Options: nosniff');

// Only accept POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed.']);
    exit;
}

// ── SANITIZE ──────────────────────────────────────────────────────────────────
function clean(string $input): string {
    return htmlspecialchars(strip_tags(trim($input)), ENT_QUOTES, 'UTF-8');
}

$first_name = clean($_POST['first_name'] ?? '');
$last_name  = clean($_POST['last_name']  ?? '');
$email      = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
$phone      = clean($_POST['phone']      ?? '');
$company    = clean($_POST['company']    ?? '');
$service    = clean($_POST['service']    ?? '');
$message    = clean($_POST['message']   ?? '');

// ── VALIDATE ──────────────────────────────────────────────────────────────────
$errors = [];
if (empty($first_name)) $errors[] = 'First name is required.';
if (empty($last_name))  $errors[] = 'Last name is required.';
if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'A valid email address is required.';
if (empty($message) || strlen($message) < 10) $errors[] = 'Please enter a message (minimum 10 characters).';

if (!empty($errors)) {
    http_response_code(422);
    echo json_encode(['success' => false, 'message' => implode(' ', $errors)]);
    exit;
}

// ── SEND EMAIL ────────────────────────────────────────────────────────────────
$to      = 'armitechinternational@gmail.com';
$subject = "New Contact Form Submission – Armitech International";

$body  = "=== NEW ENQUIRY from Armitech International Website ===\n\n";
$body .= "Name:     {$first_name} {$last_name}\n";
$body .= "Email:    {$email}\n";
$body .= "Phone:    " . ($phone ?: 'Not provided') . "\n";
$body .= "Company:  " . ($company ?: 'Not provided') . "\n";
$body .= "Service:  " . ($service ?: 'Not specified') . "\n";
$body .= "Date:     " . date('Y-m-d H:i:s T') . "\n";
$body .= "\n--- MESSAGE ---\n{$message}\n\n";
$body .= "=== END OF SUBMISSION ===\n";

$headers  = "From: Armitech Website <noreply@armitechinternational.com>\r\n";
$headers .= "Reply-To: {$email}\r\n";
$headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

$sent = mail($to, $subject, $body, $headers);

// ── OPTIONAL: LOG TO FILE ─────────────────────────────────────────────────────
// Uncomment to log submissions (useful when mail() is unavailable on localhost)
/*
$log_entry = date('Y-m-d H:i:s') . " | {$first_name} {$last_name} | {$email} | {$service}\n";
file_put_contents(__DIR__ . '/../logs/contact_submissions.log', $log_entry, FILE_APPEND | LOCK_EX);
*/

// ── RESPOND ───────────────────────────────────────────────────────────────────
if ($sent) {
    echo json_encode([
        'success' => true,
        'message' => 'Thank you! Your message has been received. We will get back to you within 24 hours.'
    ]);
} else {
    // email() failed (common on localhost) — treat as success for UX, log server-side
    // In production, replace mail() with PHPMailer + SMTP for reliability
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'message' => 'Sorry, we could not send your message at this time. Please email us directly at armitechinternational@gmail.com or reach us on WhatsApp.'
    ]);
}
