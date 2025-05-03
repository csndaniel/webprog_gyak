<?php
class Appointment {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function create($userId, $email, $people, $date) {
        $stmt = $this->pdo->prepare("INSERT INTO appointments (user_id, email, people_count, date) VALUES (?, ?, ?, ?)");
        return $stmt->execute([$userId, $email, $people, $date]);
    }
}
