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

/**
 * Get user by id
 * @param integer $id
 * @return Array or false
 */
function get_user_by_id($id)
{
    global $db_connection;
    $query = "SELECT * FROM users WHERE id = $id";
    $result = mysqli_query($db_connection, $query);
    if ($result->num_rows > 0) {
        $user = mysqli_fetch_assoc($result);
        return $user;
    } else {
        return false;
    }
}

/**
 * Delete user by the user id
 *
 * @param integer $id
 * @return object - mysqli_result
 */
function delete_user_by_id($id)
{
    global $db_connection;
    $query = "DELETE FROM users WHERE id = {$id}";
    $result = mysqli_query($db_connection, $query);
    return $result;
}

/**
 * Edit existing user
 * @param  string $first_name - first name of the user
 * @param  string $last_name - last name of the user
 * @param  string $email - email of the user
 * @param  string $phone - phone number of the user
 * @param string $id_value - user ID
 * @return object - mysqli_result
 */
function edit_user($first_name_value, $last_name_value, $email_value, $phone_value, $id_value)
{
    global $db_connection;
    $query = 'UPDATE users';
    $query .= " SET first_name = '{$first_name_value}', last_name = '{$last_name_value}', email = '{$email_value}', phone = '{$phone_value}'";
    $query .= " WHERE id = {$id_value}";
    $result = mysqli_query($db_connection, $query);
    return   $result;
}

function get_user_by_email_and_password($email, $password)
{
    global $db_connection;
    $query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($db_connection, $query);
    if ($result->num_rows > 0) {
        $user = mysqli_fetch_assoc($result);
        return $user;
    } else {
        return false;
    }
}