<?php
include __DIR__ . '/../app.php';

if (!$_POST) {
    die('Unauthorized');
}

// Store $_POST data to variables for readability
$name_value = $_POST['name'];
$price_value = $_POST['price'];
$description_value = $_POST['description'];
$id_value = $_POST['id'];

$result = edit_service($name_value, $price_value, $description_value, $id_value);

// Check there are no errors with our SQL statement
if ($result) {
    redirect_to('/admin/services');
} else {
    $error_message = 'User was not updated: ' . mysqli_error($db_connection);
    redirect_to('/admin/services?error=' . $error_message);
}