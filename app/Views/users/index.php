<!DOCTYPE html>
<html>
<head>
    <title>Users</title>
    <meta charset="utf-8">
</head>
<body>
    <h1>User List</h1>
    <a href="/users/create">Create User</a> | <a href="/">Back</a>
    <table border="1" cellpadding="5">
        <tr><th>ID</th><th>Username</th><th>Role</th></tr>
        <?php foreach ($users as $u): ?>
            <tr>
                <td><?= $u['id'] ?></td>
                <td><?= htmlspecialchars($u['username']) ?></td>
                <td><?= htmlspecialchars($u['role']) ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
