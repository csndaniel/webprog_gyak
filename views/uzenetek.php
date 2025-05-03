<?php include 'views/layout.php'; ?>
<?php
require_once 'config/database.php';

$conn = Database::connect();
$result = $conn->query("SELECT * FROM messages ORDER BY created_at DESC");

echo "<h2>Beérkezett üzenetek</h2>";
echo "<table border='1' cellpadding='5'><tr><th>Név</th><th>Email</th><th>Üzenet</th><th>Időpont</th></tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . htmlspecialchars($row['name']) . "</td>";
    echo "<td>" . htmlspecialchars($row['email']) . "</td>";
    echo "<td>" . nl2br(htmlspecialchars($row['message'])) . "</td>";
    echo "<td>" . $row['created_at'] . "</td>";
    echo "</tr>";
}

echo "</table>";
?>
