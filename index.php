<?php
require_once 'config/database.php';
require_once 'helpers/auth.php';

$page = $_GET['page'] ?? 'home';

switch ($page) {
    case 'register':
        require 'controllers/AuthController.php';
        showRegisterForm();
        break;
    case 'register_post':
        require 'controllers/AuthController.php';
        handleRegister();
        break;
    case 'login':
        require 'controllers/AuthController.php';
        showLoginForm();
        break;
    case 'login_post':
        require 'controllers/AuthController.php';
        handleLogin();
        break;
    case 'logout':
        session_destroy();
        header('Location: index.php');
        break;
    case 'appointment':
        require 'controllers/AppointmentController.php';
        showAppointmentForm();
        break;
    case 'appointment_post':
        require 'controllers/AppointmentController.php';
        handleAppointment();
        break;
    case 'weapons':
        require 'controllers/WeaponController.php';
        showWeaponList();
        break;
    case 'home':
    default:
        require 'views/home.php';
        break;
}
