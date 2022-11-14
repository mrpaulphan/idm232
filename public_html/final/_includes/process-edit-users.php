<?php
include __DIR__ . '/../app.php';

if (!$_POST) {
    die('Unauthorized');
}

// Store $_POST data to variables for readability
$first_name_value = $_POST['first_name'];
$last_name_value = $_POST['last_name'];
$email_value = $_POST['email'];
$phone_value = $_POST['phone'];
$id_value = $_POST['id'];

$result = edit_user($first_name_value, $last_name_value, $email_value, $phone_value, $id_value);

// Check there are no errors with our SQL statement
if ($result) {
    redirect_to('/admin/users');
} else {
    $error_message = 'User was not updated: ' . mysqli_error($db_connection);
    redirect_to('/admin/users?error=' . $error_message);
}
