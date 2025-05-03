<?php include 'views/layout.php'; ?>
<h2>Elérhető airsoft fegyverek</h2>

<table border="1" cellpadding="5">
    <tr>
        <th>Név</th>
        <th>Típus</th>
        <th>Leírás</th>
    </tr>
    <?php foreach ($weapons as $fegyver): ?>
        <tr>
            <td><?= htmlspecialchars($fegyver['name']) ?></td>
            <td><?= htmlspecialchars($fegyver['type']) ?></td>
            <td><?= htmlspecialchars($fegyver['description']) ?></td>
        </tr>
    <?php endforeach; ?>
</table>
