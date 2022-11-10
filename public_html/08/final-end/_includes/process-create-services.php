<?php
include __DIR__ . '/../app.php';

if (!$_POST) {
    die('Unauthorized');
}

// Store $_POST data to variables for readability
$name = $_POST['name'];
$price = $_POST['price'];
$description = $_POST['description'];

$result = add_services($name, $price, $description);

// Check there are no errors with our SQL statement
if ($result) {
    redirect_to('/admin/services');
} else {
    $error_message = 'Sorry there was an error creating the user';
    redirect_to('/admin/services?error=' . $error_message);
}