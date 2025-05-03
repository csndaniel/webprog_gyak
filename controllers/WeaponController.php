<?php
require_once 'models/Weapon.php';

function showWeaponList() {
    global $pdo;
    $weaponModel = new Weapon($pdo);
    $weapons = $weaponModel->getAll();

    require 'views/weapons.php';
}
