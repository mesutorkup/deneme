<?php
require __DIR__ . '/../app/init.php';

use Controllers\AuthController;
use Controllers\DashboardController;
use Controllers\UserController;

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$auth = new AuthController($pdo);
$dashboard = new DashboardController();
$userController = new UserController($pdo);

switch ($path) {
    case '/login':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $auth->login();
        } else {
            $auth->showLogin();
        }
        break;
    case '/logout':
        $auth->logout();
        break;
    case '/users/create':
        $userController->create();
        break;
    case '/users':
        $userController->index();
        break;
    case '/':
    default:
        $dashboard->index();
        break;
}
