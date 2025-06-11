<!DOCTYPE html>
<html>
<head>
    <title>Create User</title>
    <meta charset="utf-8">
</head>
<body>
    <h1>Create User</h1>
    <form method="POST" action="/users/create">
        <label>Username:</label>
        <input type="text" name="username" required><br>
        <label>Password:</label>
        <input type="password" name="password" required><br>
        <label>Role:</label>
        <select name="role">
            <option value="admin">Admin</option>
            <option value="muhasebe">Muhasebe</option>
            <option value="modelhane">Modelhane</option>
            <option value="dikimhane">Dikimhane</option>
            <option value="patron">Patron</option>
        </select><br>
        <button type="submit">Create</button>
    </form>
    <a href="/users">Back</a>
</body>
</html>
