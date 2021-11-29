<?php

function create_user($role, $first_name, $last_name, $email, $phone, $password)
{
    global $db_connection;

    $current_date_time = getFormattedDateTime();
    // Build Query
    $query = 'INSERT INTO users (role, first_name, last_name, email, phone, password, date_created, date_updated)';
    $query .= "VALUES ('{$role}', '{$first_name}', '{$last_name}', '{$email}', '{$phone}', '{$password}', '{$current_date_time}', '{$current_date_time}')";

    $db_results = mysqli_query($db_connection, $query);
    if ($db_results) {
        // Success
        return true;
    } else {
        // Error
        return false;
    }
}

function update_user($first_name, $last_name, $email, $phone, $role, $current_date, $user_id)
{
    global $db_connection;
    // Build Query
    $query = 'UPDATE users ';
    $query .= 'SET ';
    $query .= "first_name = '{$first_name}', ";
    $query .= "last_name = '{$last_name}', ";
    $query .= "email = '{$email}', ";
    $query .= "phone = '{$phone}', ";
    $query .= "role = '{$role}', ";
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
  function delete_user_by_id($id)
  {
      global $db_connection;
      // Build Query
      $query = 'DELETE ';
      $query .= 'FROM users ';
      $query .= 'WHERE id=' . $id;

      $results = mysqli_query($db_connection, $query);
      if ($results) {
          return true;
      } else {
          return false;
      }
  }

  function get_user_by_id($id)
  {
      global $db_connection;
      // Build Query
      $query = 'SELECT * ';
      $query .= 'FROM users ';
      $query .= 'WHERE id=' . $id;

      $results = mysqli_query($db_connection, $query);

      if ($results && $results->num_rows > 0) {
          // Get row from results and assign to $user variable;
          $user = mysqli_fetch_assoc($results);
      } else {
          // Redirect user if ID does not have a match in the DB
          $user = null;
      }
      return $user;
  }

  function get_users()
  {
      global $db_connection;
      $query = 'SELECT * ';
      $query .= 'FROM users';
      $result = mysqli_query($db_connection, $query);

      if ($result && $result->num_rows > 0) {
          $users = $result;
      } else {
          $users = null;
      }

      return $users;
  }
