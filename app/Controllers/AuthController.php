<?php

namespace Controllers;

use Models\User;

class AuthController
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function showLogin()
    {
        require __DIR__ . '/../Views/login.php';
    }

    public function login()
    {
        $username = $_POST['username'] ?? '';
        $password = $_POST['password'] ?? '';

        $userModel = new User($this->pdo);
        $user = $userModel->findByUsername($username);
        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user'] = ['id' => $user['id'], 'role' => $user['role'], 'username' => $user['username']];
            header('Location: /');
            exit;
        }
        $error = 'Invalid credentials';
        require __DIR__ . '/../Views/login.php';
    }

    public function logout()
    {
        session_destroy();
        header('Location: /login');
    }
}
