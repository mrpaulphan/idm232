<?php

// establish DB connection
require_once __DIR__ . '/../../config.php';
require_once __DIR__ . '/../database.php';

// now have access to $db_connection;


// go through the submited data
$title = $_POST['title'];
$body = $_POST['body'];


// insert that info into the db

// INSERT INTO `recipes`(`title`, `body`) VALUES ('[value-2]','[value-3]')

$query = "INSERT INTO `recipes`(`title`, `body`) VALUES ('$title','$body')";

$result = mysqli_query($db_connection, $query);

if ($result) {
    // Success
    // redirect_to("somepage.php");
    echo "Success!";
} else {
    die("Database query failed. " . mysqli_error($db_connection));
}
