<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Airsoft Aréna</title>
</head>
<body>
    <header>
        <h1>Airsoft Aréna</h1>
        <nav>
            <a href="index.php">Főoldal</a> |
            <a href="index.php?page=appointment">Időpontfoglalás</a> |
            <a href="index.php?page=weapons">Fegyverek</a> |
            <a href="index.php?page=kepek">Képek</a> |
            <a href="index.php?page=kapcsolat">Kapcsolat</a> |
            <a href="index.php?page=Uzenetek">Üzenetek</a> |
            <?php if (isLoggedIn()): ?>
                <span>Bejelentkezve: <?= htmlspecialchars($_SESSION['users']['name']) ?></span> |
                <a href="index.php?page=logout">Kijelentkezés</a>
            <?php else: ?>
                <a href="index.php?page=login">Bejelentkezés</a> |
                <a href="index.php?page=register">Regisztráció</a>
            <?php endif; ?>
        </nav>
        <hr>
    </header>
    
    <main>
    <footer style="background-color: #f1f1f1; padding: 20px 0; text-align: center; color: #333; font-family: Arial, sans-serif;">
    <p>&copy; <?php echo "Farkas Bence - OYMRJV || Cs. Nagy Dániel - FN25MA"; ?>
    </footer>