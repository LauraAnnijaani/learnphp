<?php
require __DIR__ . '/../DB.php';

use App\DB;

$db = new DB();
$id = $_GET['id'] ?? null;

if (!$id) {
    die('User ID not specified.');
}

$db->delete('users', $id);
header('Location: users/index.php');
exit;
