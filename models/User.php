<?php
require_once __DIR__ . '/../config/conexion.php';

class User {
    private $db;

    public function __construct() {
        $this->db = Database::connect();
    }

    public function create($nombre, $correo, $contraseña) {
        $stmt = $this->db->prepare("INSERT INTO username (nombre, correo, contraseña) VALUES (?, ?, ?)");
        return $stmt->execute([$nombre, $correo, password_hash($contraseña, PASSWORD_BCRYPT)]);
    }

    public function findByEmail($correo) {
        $stmt = $this->db->prepare("SELECT * FROM username WHERE correo = ?");
        $stmt->execute([$correo]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
