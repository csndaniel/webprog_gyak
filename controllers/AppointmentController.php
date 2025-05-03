<?php
require_once 'models/Appointment.php';
require_once 'helpers/auth.php';

function showAppointmentForm() {
    requireLogin();
    require 'views/appointment.php';
}

function handleAppointment() {
    requireLogin();
    global $pdo;

    $email = $_POST['email'] ?? '';
    $people = (int)($_POST['people'] ?? 0);
    $date = $_POST['date'] ?? '';

    if (!$email || !$people || !$date) {
        echo "Minden mező kitöltése kötelező!";
        return;
    }

    $appointmentModel = new Appointment($pdo);
    $appointmentModel->create($_SESSION['user']['id'], $email, $people, $date);

    echo "Időpont sikeresen lefoglalva!";
}
