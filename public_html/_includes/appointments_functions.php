<?php

 /**
  * Save data from form into the appointments table
  *
  * @param array $request - $_POST array from form
  * @return bool
  */
  function create_appointments($appointment_time, $customer_id, $service_id)
  {
      global $db_connection;

      $current_date_time = getFormattedDateTime();
      $status = 'pending'; // Set this manually. Every new appointment will be pending

      // If there is no customer with that email in the DB, we assume that the customer doesn't exist so we add them in instead.
      $query = 'INSERT INTO appointments (appointment_time, customer_id, status, service_id, date_created, date_updated) ';
      $query .= "VALUES ('{$appointment_time}', '{$customer_id} ', '{$status}', '{$service_id}', '{$current_date_time}', '{$current_date_time}')";

      $result = mysqli_query($db_connection, $query);
      if (!$result) {
          return false;
      }
      return true;
  }

   /**
   * get all appointments
   *
   * @return mysqli_result
   */
  function get_appointments($status = false)
  {
      global $db_connection;
      $query = 'SELECT appointments.id, appointments.appointment_time, appointments.status, customers.first_name, customers.last_name, customers.phone, customers.email, services.title, services.price, appointments.date_created, appointments.date_updated ';
      $query .= 'FROM appointments ';
      $query .= 'INNER JOIN customers on customers.id = appointments.customer_id ';
      $query .= 'INNER JOIN services on services.id = appointments.service_id ';
      //  Only add this condition if $status is passed through
      if ($status) {
          $query .= "WHERE status = '{$status}' ";
      }
      /* @var $result mysqli_result */
      $result = mysqli_query($db_connection, $query);
      // if $result is valid and the query returns a results of more than 0

      if ($result && $result->num_rows > 0) {
          $appointments = $result;
      } else {
          $appointments = null;
      }

      return $appointments;
  }

  /**
   * Get appointments by id
   *
   * @param int $id
   * @return mysqli_result
   */
  function get_appointments_by_id($id)
  {
      global $db_connection;
      $query = 'SELECT * ';
      $query .= 'FROM appointments ';
      $query .= "WHERE id = '{$id}' ";
      /* @var $result mysqli_result */
      $result = mysqli_query($db_connection, $query);

      // if $result is valid and the query returns a results of more than 0
      if ($result && $result->num_rows > 0) {
          $appointments = mysqli_fetch_assoc($result);
      } else {
          $appointments = null;
      }
      return $appointments;
  }

  /**
   * Update appointment status
   *
   * @param int $id - appointment id
   * @param string $status - valid responses are pending / approved / deleted
   * @return bool
   */
  function update_appointment_status($id, $status)
  {
      global $db_connection;

      $query = 'UPDATE  appointments ';
      $query .= "SET status = '{$status}' ";
      $query .= "WHERE id = '{$id}' ";

      /* @var $result mysqli_result */
      $result = mysqli_query($db_connection, $query);

      if ($result) {
          $update = true;
      } else {
          $update = false;
      }
      return $update;
  }
