<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <meta charset="utf-8">
</head>
<body>
    <h1>Welcome, <?= htmlspecialchars($user['username']) ?></h1>
    <p>Your role: <?= htmlspecialchars($user['role']) ?></p>
    <nav>
        <a href="/logout">Logout</a>
        <?php if ($user['role'] === 'admin'): ?>
            | <a href="/users">Manage Users</a>
        <?php endif; ?>
    </nav>
</body>
</html>
