<?php
$host = 'localhost';
$db = 'weapon';
$user = 'root';
$pass = ''; // ha van jelszó, ide írd be

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Adatbázis hiba: " . $e->getMessage());
}
?>
