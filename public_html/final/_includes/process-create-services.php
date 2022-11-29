<?php
include __DIR__ . '/../app.php';

if (!$_POST) {
    die('Unauthorized');
}

// Store $_POST data to variables for readability
$name = sanitize_value($_POST['name']);
$price = sanitize_value($_POST['price']);
$description = sanitize_value($_POST['description']);
$image_path = sanitize_value($_POST['image_path']);

$result = add_services($name, $price, $description, $image_path);

// Check there are no errors with our SQL statement
if ($result) {
    redirect_to('/admin/services');
} else {
    $error_message = 'Sorry there was an error creating the user: ' . mysqli_error($db_connection);
    redirect_to('/admin/services?error=' . $error_message);
}