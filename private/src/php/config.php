<?php
ini_set('display_errors', '0'); # Empêche d'afficher les erreurs php
ini_set('log_errors', '1'); # Enregistre les erreurs dans les logs du serveur
date_default_timezone_set('Europe/Paris'); # Changez cette ligne celon votre horraire

# Chemin d'importation des identifiants de la base de données
$local = __DIR__ . '/../../config.local.php';
if (!is_file($local)) {
    throw new RuntimeException('Missing config.local.php (copy ex.config.local.php)');
}
$db = require $local;

$dsn = sprintf('mysql:host=%s;port=%d;dbname=%s;charset=utf8mb4',
    $db['host'], $db['port'], $db['name']);

# Connexion à la base de données
$pdo = new PDO($dsn, $db['user'], $db['pass'], [
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_TIMEOUT            => 5,
]);