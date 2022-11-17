<?php

/**
 * Insert a services into the database
 * @param  string $name - service name of the service
 * @param  string $description - service description of the service
 * @param  string $price - service price of the service
 * @return object - mysqli_result
 */
function add_services($name, $price, $description, $image_path)
{
    global $db_connection;
    $query = 'INSERT INTO services';
    $query .= ' (name, price, description, image_path)';
    $query .= " VALUES ('$name', '$price', '$description', '$image_path')";
    $result = mysqli_query($db_connection, $query);
    return $result;
}

function get_services()
{
    global $db_connection;
    $query = 'SELECT * FROM services';
    $result = mysqli_query($db_connection, $query);
    return $result;
}

function get_service_by_id($id)
{
    global $db_connection;
    $query = "SELECT * FROM services WHERE id = $id";
    $result = mysqli_query($db_connection, $query);
    if ($result->num_rows > 0) {
        $service = mysqli_fetch_assoc($result);
        return $service;
    } else {
        return false;
    }
}

function edit_service($name, $price, $description, $id)
{
    global $db_connection;
    $query = 'UPDATE services';
    $query .= " SET name = '{$name}', price = '{$price}', description = '{$description}'";
    $query .= " WHERE id = $id";
    $result = mysqli_query($db_connection, $query);
    return $result;
}

function delete_service_by_id($id)
{
    global $db_connection;
    $query = "DELETE FROM services WHERE id = $id";
    $result = mysqli_query($db_connection, $query);
    return $result;
}