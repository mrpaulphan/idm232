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

// Create a SQL statement to insert the data into the database
$query = "UPDATE users SET first_name = '{$first_name_value}', last_name = '{$last_name_value}', email = '{$email_value}', phone = '{$phone_value}' WHERE id = {$id_value}";

// Run the SQL statement
$result = mysqli_query($db_connection, $query);

// Check there are no errors with our SQL statement
if ($result) {
    redirect_to('/admin/users');
} else {
    $error_message = 'User was not updated';
    redirect_to('/admin/users?error=' . $error_message);
}