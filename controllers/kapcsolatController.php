<?php
require_once 'config/database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"] ?? '');
    $email = trim($_POST["email"] ?? '');
    $message = trim($_POST["message"] ?? '');

    $errors = [];

    if (strlen($name) < 2) $errors[] = "A név túl rövid.";
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = "Érvénytelen email.";
    if (strlen($message) < 5) $errors[] = "Az üzenet túl rövid.";

    if (count($errors) == 0) {
        $conn = Database::connect();
        $stmt = $conn->prepare("INSERT INTO messages (name, email, message) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $email, $message);
        $stmt->execute();
        $stmt->close();
        header("Location: views/kapcsolat.php?success=1");
    } else {
        echo "<h3>Hibák:</h3><ul>";
        foreach ($errors as $e) {
            echo "<li>$e</li>";
        }
        echo "</ul><a href='javascript:history.back()'>Vissza</a>";
    }
}
?>
