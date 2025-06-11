<?php

namespace Controllers;

use Models\User;

class UserController
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function index()
    {
        $this->authorize('admin');
        $stmt = $this->pdo->query('SELECT id, username, role FROM users');
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
        require __DIR__ . '/../Views/users/index.php';
    }

    public function create()
    {
        $this->authorize('admin');
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'username' => $_POST['username'],
                'password' => $_POST['password'],
                'role' => $_POST['role'],
            ];
            $userModel = new User($this->pdo);
            $userModel->create($data);
            header('Location: /users');
            return;
        }
        require __DIR__ . '/../Views/users/create.php';
    }

    private function authorize($role)
    {
        if (!isset($_SESSION['user']) || $_SESSION['user']['role'] !== $role) {
            header('HTTP/1.1 403 Forbidden');
            echo 'Unauthorized';
            exit;
        }
    }
}
