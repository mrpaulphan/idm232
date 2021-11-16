<?php
$page_title = 'Book Appointments';
include_once __DIR__ . '/../_global/header.php';

// Get Services to add to dropdown
// Build Query
$query = 'SELECT service.id, service.title, service.price, file.file_path ';
$query .= 'FROM services AS service ';
$query .= 'INNER JOIN files AS file ';
$query .= 'ON service.file_id = file.id ';
$db_results = mysqli_query($db_connection, $query);

?>
<div class="container">
  <h1>Book Appointments</h1>
  <form action="/_includes/process/create_appointment.php" method="POST">

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
    if ($db_results && $db_results->num_rows > 0) {
        echo '<select name="services" >';
        echo '<option disabled>Select a Service</option>';
        while ($row = mysqli_fetch_assoc($db_results)) {
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
    <input class="btn btn-primary" type="submit">

  </form>
</div>
<?php include_once __DIR__ . '/../_global/footer.php';
