<?php
// Step 1: Create Database Connection
$db_host = 'localhost';
$db_user = 'root';
$db_pass = 'root';
$db_name = 'local_idm232_01';
$connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

// Check the connection is good with no errors
if (mysqli_connect_errno()) {
    die('Database connection failed: ' .
      mysqli_connect_error() .
      ' (' . mysqli_connect_errno() . ')'
    );
}

// Get values from $_POST and insert into database

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$query = "INSERT INTO users (first_name, last_name, email, phone) VALUES ('$first_name', '$last_name', '$email', '$phone')";
$query_results = mysqli_query($connection, $query);

if ($query_results) {
    // Success
    echo 'IT WORKED';
} else {
    // Error
    echo 'NO WORK';
}