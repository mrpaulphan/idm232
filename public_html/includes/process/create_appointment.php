<?php
require_once __DIR__ . '/../../config.php';
require_once __DIR__ . '/../database.php';

//  data coming from $_POST request
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$services = $_POST['services'];
$user = $_POST['employee'];
$date = $_POST['date'];
$time = $_POST['time'];
$status = 'pending';
echo '<pre>';
    var_dump($_POST);
echo '</pre>';
// 2021-11-04 08:15:00
$current_date = date('Y-m-d H:i:s');
$appointment_time = date('Y-m-d H:i:s', strtotime($date . ' ' . $time));

// Check if user is in the database already, if not create
// $query should look like "SELECT * FROM customers WHERE email = 'paul@mrpaulphan.com'"
$query .= 'SELECT * ';
$query .= 'FROM customers ';
$query .= "WHERE email = '{$email}'";
$result = mysqli_query($db_connection, $query);

// After we store/get the customer, we want to assign the ID to this variable down the page so we can insert it into the appointments table.
$user_id = '';
// Check if our query got a user from the DB
if ($result) {
    // we got results, let's loop through that data and get the id from the customers table and assign it to the variable to use later
    while ($row = mysqli_fetch_assoc($result)) {
        $user_id = $row['id'];
    }
} else {
    // If there is no customer with that email in the DB, we assume that the customer doesn't exist so we add them in instead.
    $query = 'INSERT INTO appointments (appointment_time, customer_id, user_id, status, services, date_created, date_updated)';
    $query .= "VALUES ('{$appointment_time}', '{$customer_id}} ', '{$user_id}', '{$status}', '{$services}', '{$date_created}', '{$date_updated}')";

    echo '<pre>';
    var_dump($query);
    echo '</pre>';

    $result = mysqli_query($db_connection, $query);
    if ($result) {
        echo '<pre>';
        var_dump($result);
        echo '</pre>';
        // Success
        // redirect_to("somepage.php");
        echo 'Success!';
    } else {
        // Return to page with error
        die('Database query failed. ' . mysqli_error($db_connection));
    }
    die;
}
