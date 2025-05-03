<?php
require_once 'models/User.php';

function showRegisterForm() {
    require 'views/register.php';
}

function handleRegister() {
    global $pdo;
    $userModel = new User($pdo);

    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($userModel->findByEmail($email)) {
        echo "Ez az email már foglalt!";
        return;
    }

    $userModel->create($name, $email, $password);
    header("Location: index.php?page=login");
}

function showLoginForm() {
    require 'views/login.php';
}

function handleLogin() {
    global $pdo;
    $userModel = new User($pdo);

    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    $user = $userModel->authenticate($email, $password);

    if ($user) {
        $_SESSION['user'] = $user;
        header("Location: index.php");
    } else {
        echo "Hibás email vagy jelszó!";
    }
}
