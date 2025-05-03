<?php include 'views/layout.php'; ?>
<h2>Bejelentkezés</h2>
<form method="POST" action="index.php?page=login_post">
    <label>Email: <input type="email" name="email" required></label><br>
    <label>Jelszó: <input type="password" name="password" required></label><br>
    <button type="submit">Bejelentkezem</button>
</form>
