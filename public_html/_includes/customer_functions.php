<?php

/**
 * Insert customer into db
 *
 * @param string $first_name
 * @param string $last_name
 * @param string $email
 * @param string $phone
 * @return bool
 */
function create_customers($first_name, $last_name, $email, $phone)
{
    global $db_connection;

    $current_date_time = getFormattedDateTime();
    // Build Query
    $query = 'INSERT INTO customers (first_name, last_name, email, phone,  date_created, date_updated)';
    $query .= "VALUES ('{$first_name}', '{$last_name}', '{$email}', '{$phone}', '{$current_date_time}', '{$current_date_time}')";

    $db_results = mysqli_query($db_connection, $query);
    if ($db_results) {
        // Success
        return true;
    } else {
        // Error
        return false;
    }
}

/**
 * Update customer info
 *
 * @param string $first_name
 * @param string $last_name
 * @param string $email
 * @param string $phone
 * @param string $current_date
 * @param string $user_id
 * @return void
 */
function update_customer($first_name, $last_name, $email, $phone, $current_date, $user_id)
{
    global $db_connection;
    // Build Query
    $query = 'UPDATE customers ';
    $query .= 'SET ';
    $query .= "first_name = '{$first_name}', ";
    $query .= "last_name = '{$last_name}', ";
    $query .= "email = '{$email}', ";
    $query .= "phone = '{$phone}', ";
    $query .= "date_updated = '{$current_date}' ";
    $query .= "WHERE id = {$user_id}";
    // Execute Query
    $db_results = mysqli_query($db_connection, $query);
    if ($db_results) {
        return true;
    } else {
        return false;
    }
}

  /**
   * Delete user by ID
   *
   * @param int $id user id
   * @return bool
   */
  function delete_customers_by_id($id)
  {
      global $db_connection;
      // Build Query
      $query = 'DELETE ';
      $query .= 'FROM customers ';
      $query .= 'WHERE id=' . $id;

      $results = mysqli_query($db_connection, $query);
      if ($results) {
          return true;
      } else {
          return false;
      }
  }

  /**
   * Get customer by ID
   *
   * @param int $id
   * @return void
   */
  function get_customer_by_id($id)
  {
      global $db_connection;
      // Build Query
      $query = 'SELECT * ';
      $query .= 'FROM customers ';
      $query .= 'WHERE id=' . $id;

      $results = mysqli_query($db_connection, $query);

      if ($results && $results->num_rows > 0) {
          // Get row from results and assign to $user variable;
          $customer = mysqli_fetch_assoc($results);
      } else {
          // Redirect customer if ID does not have a match in the DB
          $customer = null;
      }
      return $customer;
  }

  /**
   * get all customers
   *
   * @return mysqli_result
   */
  function get_customers()
  {
      global $db_connection;
      $query = 'SELECT * ';
      $query .= 'FROM customers';
      $result = mysqli_query($db_connection, $query);

      if ($result && $result->num_rows > 0) {
          $customers = $result;
      } else {
          $customers = null;
      }

      return $customers;
  }

  /**
   * Search customers
   *
   * @param string $keyword search word
   * @return mysqli_result
   */
  function search_customer_with_keyword($keyword)
  {
      global $db_connection;
      // Learn more here https://www.w3schools.com/mysql/mysql_like.asp
      $query = 'SELECT * ';
      $query .= 'FROM customers ';
      $query .= ' WHERE ';
      $query .= "first_name LIKE '%" . $keyword . "%'";
      $query .= "OR last_name LIKE '%" . $keyword . "%' ";
      $query .= "OR email LIKE '%" . $keyword . "%' ";
      $query .= "OR phone LIKE '%" . $keyword . "%'";

      $result = mysqli_query($db_connection, $query);
      if ($result && $result->num_rows > 0) {
          $results = $result;
      } else {
          $results = null;
      }
      return $results;
  }
