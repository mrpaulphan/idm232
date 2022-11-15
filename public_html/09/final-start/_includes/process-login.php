<?php
include __DIR__ . '/../app.php';

if (!$_POST) {
    die('Unauthorized');
}

// Store $_POST data to variables for readability
$email = sanitize_value($_POST['email']);
$password = sanitize_value($_POST['password']);
$user = get_user_by_email_and_password($email, $password);

// Check there are no errors with our SQL statement
if ($user) {
    // Create a user array in the SESSION variable and assign values to it
    $_SESSION['user'] = [
        'id' => $user['id'],
        'first_name' => $user['first_name'],
        'last_name' => $user['last_name'],
    ];
    redirect_to('/');
} else {
    $error_message = 'User was not updated: ' . mysqli_error($db_connection);
    redirect_to('/auth/login?error=' . $error_message);
}