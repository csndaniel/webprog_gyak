<?php include 'views/layout.php'; ?>
<h2>Időpontfoglalás</h2>
<form method="POST" action="index.php?page=appointment_post">
    <label>Email: <input type="email" name="email" required></label><br>
    <label>Létszám: <input type="number" name="people" min="1" required></label><br>
    <label>Dátum: <input type="date" name="date" required></label><br>
    <button type="submit">Lefoglalom</button>
</form>
