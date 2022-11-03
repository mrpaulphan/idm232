<?php
include_once __DIR__ . '/../../app.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    die('ID is needed in URL');
}

// get users data from database
$query = "DELETE FROM users WHERE id = {$id}";
$result = mysqli_query($db_connection, $query);

// Check there are no errors with our SQL statement
if ($result) {
    redirect_to('/admin/users');
} else {
    $error_message = 'Could Not Delete User';
    redirect_to('/admin/users?error=' . $error_message);
}