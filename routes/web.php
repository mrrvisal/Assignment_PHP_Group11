<?php
require_once '../controllers/AuthController.php';

$controller = new AuthController();

if ($_SERVER['REQUEST_URI'] == '/register' && $_SERVER['REQUEST_METHOD'] == 'POST') {
    $controller->register();
}

if ($_SERVER['REQUEST_URI'] == '/login' && $_SERVER['REQUEST_METHOD'] == 'POST') {
    $controller->login();
}