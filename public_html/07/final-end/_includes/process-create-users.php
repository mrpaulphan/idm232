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

// Create a SQL statement to insert the data into the database
$query = "INSERT INTO users (first_name, last_name, email, phone) VALUES ('$first_name_value', '$last_name_value', '$email_value', '$phone_value')";

// Run the SQL statement
$result = mysqli_query($db_connection, $query);

// Check there are no errors with our SQL statement
if ($result) {
    redirect_to('/admin/users');
} else {
    $error_message = 'Could Not Create User';
    redirect_to('/admin/users?error=' . $error_message);
}