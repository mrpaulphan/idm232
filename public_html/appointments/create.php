<?php
$page_title = 'Book Appointments';
include_once __DIR__ . '/../_global/header.php';

if (isset($_POST['submit'])) {
    // First create / get customer based on email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $service_id = $_POST['services'];
    $user = $_POST['employee'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $status = 'pending';
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
        $query = 'INSERT INTO appointments (appointment_time, customer_id, user_id, status, service_id, date_created, date_updated)';
        $query .= "VALUES ('{$appointment_time}', '{$customer_id}} ', '{$user_id}', '{$status}', '{$service_id}', '{$date_created}', '{$date_updated}')";


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
}
// Get Services to add to dropdown
// Build Query
$query = 'SELECT service.id, service.title, service.price, file.file_path ';
$query .= 'FROM services AS service ';
$query .= 'INNER JOIN files AS file ';
$query .= 'ON service.file_id = file.id ';
$get_services_results = mysqli_query($db_connection, $query);

?>
<div class="container">
  <h1>Book Appointments</h1>
  <form action="" method="POST">

    <label for="">First Name</label>
    <input type="text" value="" name="first_name">

    <label for="">Last Name</label>
    <input type="text" value="" name="last_name">


    <label for="">Email</label>
    <input type="email" value="" name="email">


    <label for="">Phone</label>
    <input type="text" value="" name="phone">


    <label for="">Services</label>
    <?php
    if ($get_services_results && $get_services_results->num_rows > 0) {
        echo '<select name="services" >';
        echo '<option disabled>Select a Service</option>';
        while ($row = mysqli_fetch_assoc($get_services_results)) {
            echo '<option value="'.$row['id'].'">' . $row['title'] . ' - $' .$row['price']. '</option>';
        }
        echo '</select>';
    } else {
        $services = null;
    }
    ?>

    <label for="">Date</label>
    <input type="date" name="date"
      value="<?php echo date('Y-m-d'); ?>">


    <label for="">Time</label>
    <input type="time" name="time" value="">

    <br>
    <br>
    <input class="btn btn-primary" name="submit" type="submit">

  </form>
</div>
<?php include_once __DIR__ . '/../_global/footer.php';
