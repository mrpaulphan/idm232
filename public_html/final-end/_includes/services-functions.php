<?php

/**
 * Insert a services into the database
 * @param  string $name - service name of the service
 * @param  string $description - service description of the service
 * @param  string $price - service price of the service
 * @return object - mysqli_result
 */
function add_services($name, $price, $description)
{
    global $db_connection;
    $query = 'INSERT INTO services';
    $query .= ' (name, price, description)';
    $query .= " VALUES ('$name', '$price', '$description')";
    $result = mysqli_query($db_connection, $query);
    return $result;
}