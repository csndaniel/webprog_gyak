<?php include 'views/layout.php'; ?>
<h2>Kapcsolat</h2>
<form id="contactForm" action="/controllers/kapcsolatController.php" method="POST">
    <label for="name">Név:</label><br>
    <input type="text" id="name" name="name"><br>

    <label for="email">Email:</label><br>
    <input type="text" id="email" name="email"><br>

    <label for="message">Üzenet:</label><br>
    <textarea id="message" name="message"></textarea><br>

    <input type="submit" value="Küldés">
</form>

<script>
document.getElementById('contactForm').addEventListener('submit', function(e) {
    let name = document.getElementById('name').value.trim();
    let email = document.getElementById('email').value.trim();
    let message = document.getElementById('message').value.trim();
    let errors = [];

    if (name.length < 2) errors.push("A név túl rövid.");
    if (!email.match(/^\S+@\S+\.\S+$/)) errors.push("Érvénytelen email.");
    if (message.length < 5) errors.push("Az üzenet túl rövid.");

    if (errors.length > 0) {
        e.preventDefault();
        alert(errors.join("\n"));
    }
});
</script>
