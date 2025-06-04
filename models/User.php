<?php
require_once __DIR__ . 'config/conexion.php';

class User {
    private $db;

    public function __construct() {
        $this->db = Database::connect();
    }

    public function create($nombre, $correo, $password) {
        $stmt = $this->db->prepare("INSERT INTO users (nombre, correo, password) VALUES (?, ?, ?)");
        return $stmt->execute([$nombre, $correo, password($password, PASSWORD_BCRYPT)]);
    }

    public function findByEmail($correo) {
        $stmt = $this->db->prepare("SELECT * FROM users WHERE correo = ?");
        $stmt->execute([$correo]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
