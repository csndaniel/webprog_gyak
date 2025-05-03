<?php include 'views/layout.php'; ?>
<h2>Elérhető airsoft fegyverek</h2>

<table border="1" cellpadding="5">
    <tr>
        <th>Név</th>
        <th>Típus</th>
        <th>Leírás</th>
    </tr>
    <?php foreach ($weapons as $weapon): ?>
        <tr>
            <td><?= htmlspecialchars($weapon['name']) ?></td>
            <td><?= htmlspecialchars($weapon['type']) ?></td>
            <td><?= htmlspecialchars($weapon['description']) ?></td>
        </tr>
    <?php endforeach; ?>
</table>
