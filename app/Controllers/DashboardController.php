<?php

namespace Controllers;

class DashboardController
{
    public function index()
    {
        if (!isset($_SESSION['user'])) {
            header('Location: /login');
            exit;
        }
        $user = $_SESSION['user'];
        require __DIR__ . '/../Views/dashboard.php';
    }
}
