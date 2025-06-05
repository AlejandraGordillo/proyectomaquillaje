<?php
require_once __DIR__ . '/../models/User.php';

class AuthController {
    public function register() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = $_POST['nombre'] ?? '';
            $correo = $_POST['correo'] ?? '';
            $contraseña = $_POST['contraseña'] ?? '';
            $repetir = $_POST['repetir'] ?? '';

            if ($contraseña !== $repetir) {
                echo "❌ Las contraseñas no coinciden.";
                return;
            }

            $user = new User();

            // Verificar si ya existe un usuario con ese correo
            if ($user->findByEmail($correo)) {
                echo "❌ El correo ya está registrado.";
                return;
            }

            if ($user->create($nombre, $correo, $contraseña)) {
                header('Location: index.php?action=login');
                exit;
            } else {
                echo "❌ Error al registrar usuario.";
            }
        } else {
            include __DIR__ . '/../views/register.php';
        }
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $correo = $_POST['correo'] ?? '';
            $contraseña = $_POST['contraseña'] ?? '';

            $user = new User();
            $usuario = $user->findByEmail($correo);

            if ($usuario && password_verify($contraseña, $usuario['contraseña'])) {
                session_start();
                $_SESSION['user'] = $usuario;
                header('Location: views/home/index.php'); // Ruta corregida
                exit;
            } else {
                echo "❌ Credenciales inválidas.";
            }
        } else {
            include __DIR__ . '/../views/login/login.php';
        }
    }

    public function dashboard() {
        session_start();
        if (!isset($_SESSION['user'])) {
            header('Location: index.php?action=login');
            exit;
        }

        include __DIR__ . '/../views/home/index.php'; // Ruta corregida
    }

    public function logout() {
        session_start();
        session_destroy();
        header('Location: index.php?action=login');
        exit;
    }
}
