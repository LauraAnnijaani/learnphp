<?php
require __DIR__ . '/../DB.php';

use App\DB;

$db = new DB();

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Insert the new user into the database
    $db->insert('users', [
        'email' => $_POST['email'],
        'password' => password_hash($_POST['password'], PASSWORD_DEFAULT)
    ]);

    // Redirect to the users list after adding
    header('Location: users/index.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add User</title>
</head>
<body>
    <h1>Add User</h1>
    <form method="POST">
        <label>Email:</label>
        <input type="email" name="email" required><br><br>

        <label>Password:</label>
        <input type="password" name="password" required><br><br>

        <button type="submit">Add User</button>
    </form>
    <br>
    <a href="index.php">Back to Users List</a>
</body>
</html>
