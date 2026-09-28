<?php
declare(strict_types=1);

define('DB_HOST', '127.0.0.1');
define('DB_PORT', '3306');
define('DB_NAME', 'amlo_dashboard');
define('DB_USER', 'root');
define('DB_PASS', '');

function getDbConnection(): PDO {
    static $pdo = null;

    if ($pdo !== null) {
        return $pdo;
    }

    $dsn = sprintf('mysql:host=%s;port=%s;charset=utf8mb4', DB_HOST, DB_PORT);
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ];

    try {
        $rootPdo = new PDO($dsn, DB_USER, DB_PASS, $options);
        $rootPdo->exec("CREATE DATABASE IF NOT EXISTS `" . DB_NAME . "` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci");
        
        $dbDsn = sprintf('mysql:host=%s;port=%s;dbname=%s;charset=utf8mb4', DB_HOST, DB_PORT, DB_NAME);
        $pdo = new PDO($dbDsn, DB_USER, DB_PASS, $options);
        
        ensureSchemaExists($pdo);
        return $pdo;
    } catch (PDOException $e) {
        http_response_code(500);
        die("Database connection failed: " . htmlspecialchars($e->getMessage()));
    }
}

function ensureSchemaExists(PDO $pdo): void {
    $tableCheck = $pdo->query("SHOW TABLES LIKE 'str_alerts'");
    if ($tableCheck->rowCount() === 0) {
        $schemaFile = __DIR__ . '/../database/schema.sql';
        if (file_exists($schemaFile)) {
            $sql = file_get_contents($schemaFile);
            $pdo->exec($sql);
        }
    }

    $pepCheck = $pdo->query("SHOW TABLES LIKE 'pep_alerts'");
    if ($pepCheck->rowCount() === 0) {
        $pepMigration = __DIR__ . '/../database/migrations/create_pep_alerts.sql';
        if (file_exists($pepMigration)) {
            $sql = file_get_contents($pepMigration);
            $pdo->exec($sql);
        }
    }
}
