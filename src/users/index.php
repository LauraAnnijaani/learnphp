<?php
require __DIR__ . '/../DB.php';

use App\DB;

$db = new DB();
$users = $db->all('users', stdClass::class);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Users List</title>
</head>
<body>
    <h1>Users</h1>
    <a href="create_user.php">Add New User</a><br><br>
    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($users as $user): ?>
        <tr>
            <td><?= $user->id ?></td>
            <td><?= $user->email ?></td>
            <td>
                <a href="edit_user.php?id=<?= $user->id ?>">Edit</a> |
                <a href="delete_user.php?id=<?= $user->id ?>" onclick="return confirm('Are you sure?')">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
