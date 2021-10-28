<?php
require_once __DIR__ . '/../../config.php';
require_once __DIR__ . '/../database.php';


//  data coming from $_POST request
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$phone_number = $_POST['phone_number'];
$services = $_POST['services'];
$date = $_POST['date'];
$time = $_POST['time'];
$status = 'pending';
$date_updated = date('Y-m-d H:i:s');

$date = date("Y-m-d H:i:s", strtotime($date . ' ' . $time));

// INSERT INTO 'appointments'('first_name', 'last_name', 'email', 'phone_number', 'service', 'status', 'date', 'date_updated')
// VALUES ('Joh', 'Doe', 'email@emailc.om', 'slajsfd', 'lkjl', 'pending', '2018-01-01 23:30:00', '2018-01-01 23:30:00')
$query = "INSERT INTO appointments (first_name, last_name, email, phone_number, service, status, date, date_updated)";
$query .= "VALUES ('{$first_name}', '{$last_name}} ', '{$email}', '{$phone_number}', '{$services}', '{$status}', '{$date}', '{$date_updated}')";

$result = mysqli_query($db_connection, $query);

if ($result) {
    // Success
    // redirect_to("somepage.php");
    echo "Success!";
} else {
    die("Database query failed. " . mysqli_error($db_connection));
}
