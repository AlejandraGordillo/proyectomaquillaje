<?php
session_start();
require_once 'config/conexion.php';
require_once 'controllers/AuthController.php';

$action = $_GET['action'] ?? 'login';
$authController = new AuthController();

switch ($action) {
    case 'register':
        $authController->register();
        break;
    case 'dashboard':
        $authController->dashboard();
        break;
    case 'logout':
        $authController->logout();
        break;
    case 'login':
    default:
        $authController->login();
        break;
}
