<?php
$page_title = 'Book Appointments';
include_once __DIR___ . '/../_global/header.php';

if (isset($_POST['submit'])) {
    // First create / get customer based on email address
    $first_name = mysqli_real_escape_string($db_connection, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($db_connection, $_POST['last_name']);
    $email = mysqli_real_escape_string($db_connection, $_POST['email']);
    $phone = mysqli_real_escape_string($db_connection, $_POST['phone']);
    $service_id = $_POST['services'];
    $date = $_POST['date'];
    $time = $_POST['time'];

    //  Setting time input field to match the correct format to match mysql datatime column
    $appointment_time = date('Y-m-d H:i:s', strtotime($date . ' ' . $time));
    // Let's check if customer exist in the DB already before adding a new one with the same info.
    $customer = get_customer_by_email($email);

    // customer doesn't exist
    if (!$customer) {
        // save customer
        $customer = create_customer($first_name, $last_name, $email, $phone);
        // error saving customer, let's redirect them.
        if (!$customer) {
            redirectTo('/appointments/create.php?error="Error storing customer."');
        }
    }

    // If it failed to save, let's redirect with errors.
    $appointment = create_appointments($appointment_time, $customer['id'], $service_id);
    if (!$appointment) {
        redirectTo('/appointments/create.php?error=' . mysqli_error($db_connection));
    } else {
        redirectTo('/appointments/thank-you.php');
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
            echo '<option value="' . $row['id'] . '">' . $row['title'] . ' - $' . $row['price'] . '</option>';
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
<?php include_once __DIR___ . '/../_global/footer.php';
