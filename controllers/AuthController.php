<?php
require_once __DIR__ . 'models/User.php';

class AuthController {
    public function register() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = $_POST['nombre'];
            $correo = $_POST['correo'];
            $password = $_POST['password'];
            $repetir = $_POST['repetir'];

            if ($password !== $repetir) {
                echo "Las contraseñas no coinciden.";
                return;
            }

            $user = new User();
            if ($user->create($nombre, $correo, $password)) {
                echo "Usuario registrado. <a href='?action=login'>Inicia sesión</a>";
            } else {
                echo "Error al registrar.";
            }
        } else {
            include '../views/register.php';
        }
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $correo = $_POST['correo'];
            $password = $_POST['password'];

            $user = new User();
            $usuario = $user->findByEmail($correo);

            if ($usuario && password_verify($password, $usuario['password'])) {
                session_start();
                $_SESSION['user'] = $usuario;
                echo "Bienvenido, " . htmlspecialchars($usuario['nombre']);
            } else {
                echo "Credenciales inválidas.";
            }
        } else {
            include '../views/login/login.php';
        }
    }
}
