<?php
require_once '../controllers/auth_controller.php';

$controller = new AuthController();

// API Routes
if (strpos($_SERVER['REQUEST_URI'], '/api/get_category_types') !== false && $_SERVER['REQUEST_METHOD'] == 'GET') {
    require_once '../api/get_category_types.php';
    exit();
}

if ($_SERVER['REQUEST_URI'] == '/register' && $_SERVER['REQUEST_METHOD'] == 'POST') {
    $controller->register();
}

if ($_SERVER['REQUEST_URI'] == '/login' && $_SERVER['REQUEST_METHOD'] == 'POST') {
    $controller->login();
}