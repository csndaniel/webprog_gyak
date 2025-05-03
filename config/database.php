<?php
$host = 'localhost';
$db = 'weapons';
$user = 'benidani';
$pass = '_Sajtoskifli18_';

try {
    //$pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4", $user, $pass);
    //$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $dbh = new PDO('mysql:host=localhost;dbname=weapon', 'weapon', 'weapon', 
    [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
} catch (PDOException $e) {
    die("Adatbázis hiba: " . $e->getMessage());
}
?>
