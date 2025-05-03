<?php include 'views/layout.php'; ?>
<h2>Regisztráció</h2>
<form method="POST" action="index.php?page=register_post">
    <label>Név: <input type="text" name="name" required></label><br>
    <label>Email: <input type="email" name="email" required></label><br>
    <label>Jelszó: <input type="password" name="password" required></label><br>
    <button type="submit">Regisztrálok</button>
</form>
