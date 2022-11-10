<?php

/**
 * get all users from the database
 * @return object - mysqli_result
 */
function get_users()
{
    global $db_connection;
    $query = 'SELECT * FROM users';
    $result = mysqli_query($db_connection, $query);
    return $result;
}

/**
 * Insert a user into the database
 * @param  string $first_name - first name of the user
 * @param  string $last_name - last name of the user
 * @param  string $email - email of the user
 * @param  string $phone - phone number of the user
 * @return object - mysqli_result
 */
function add_user($first_name, $last_name, $email, $phone)
{
    global $db_connection;
    $query = 'INSERT INTO users';
    $query .= ' (first_name, last_name, password, email, phone)';
    $query .= " VALUES ('$first_name', '$last_name', 'password', '$email', '$phone')";

    $result = mysqli_query($db_connection, $query);
    return $result;
}