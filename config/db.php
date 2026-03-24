<?php
/**
 * Armitech International – Database Configuration
 * Optional: Enable if you want to store contact form submissions in a DB.
 *
 * Usage: require_once 'config/db.php';
 *        then use $pdo for queries.
 */

define('DB_HOST', 'localhost');
define('DB_PORT', '3306');
define('DB_NAME', 'armitech_db');
define('DB_USER', 'root');         // Change in production
define('DB_PASS', '');             // Change in production
define('DB_CHARSET', 'utf8mb4');

$pdo = null;

try {
    $dsn = sprintf('mysql:host=%s;port=%s;dbname=%s;charset=%s',
        DB_HOST, DB_PORT, DB_NAME, DB_CHARSET
    );

    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];

    $pdo = new PDO($dsn, DB_USER, DB_PASS, $options);

} catch (PDOException $e) {
    // Log error — never expose credentials or stack traces in production
    error_log('DB Connection failed: ' . $e->getMessage());
    // $pdo remains null; calling code should check before using
}

/* ──────────────────────────────────────────────────────────────────────────────
   OPTIONAL: Create tables on first run (run once, then remove or gate behind a flag)
──────────────────────────────────────────────────────────────────────────────── */
/*
if ($pdo) {
    $pdo->exec("
        CREATE TABLE IF NOT EXISTS contact_submissions (
            id          INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            first_name  VARCHAR(100) NOT NULL,
            last_name   VARCHAR(100) NOT NULL,
            email       VARCHAR(255) NOT NULL,
            phone       VARCHAR(50)  DEFAULT NULL,
            company     VARCHAR(200) DEFAULT NULL,
            service     VARCHAR(100) DEFAULT NULL,
            message     TEXT         NOT NULL,
            ip_address  VARCHAR(45)  DEFAULT NULL,
            created_at  DATETIME     DEFAULT CURRENT_TIMESTAMP
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
    ");
}
*/
