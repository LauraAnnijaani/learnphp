<?php
require __DIR__ . '/../DB.php';

use App\DB;

$db = new DB();
$id = $_GET['id'] ?? null;

if (!$id) {
    die('User ID not specified.');
}

$user = $db->find('users', stdClass::class, $id);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fields = ['email' => $_POST['email']];

    if (!empty($_POST['password'])) {
        $fields['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
    }

    $db->update('users', $fields, $id);
    header('Location: users/index.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
</head>
<body>
    <h1>Edit User</h1>
    <form method="POST">
        <label>Email:</label>
        <input type="email" name="email" value="<?= $user->email ?>" required><br><br>

        <label>Password (leave blank to keep current):</label>
        <input type="password" name="password"><br><br>

        <button type="submit">Update User</button>
    </form>
    <br>
    <a href="index.php">Back to Users List</a>
</body>
</html>
