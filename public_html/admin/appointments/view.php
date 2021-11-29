<?php
$page_title = 'Book Appointments';
include_once __DIR__ . '../../../_global/header.php';
if ($_POST['submit']) {
    $id = $_GET['id'];
    $status = update_appointment_status($id, $_POST['status']);
    if ($status) {
        redirectTo('/admin/appointments?success=Appointment updated.');
    } else {
        redirectTo('/admin/appointments?error=Appointment was not updated.');
    }
} elseif (isset($_GET['id'])) {
    $id = $_GET['id'];
    $appointment = get_appointments_by_id($id);
} else {
    // Redirect user if no ID is passed in URL
    redirectTo('/admin/appointments');
}

?>
<div class="container">
  <h1>Book Appointments</h1>
  <form action="" method="POST">

    <a
      href="<?php siteUrl('/admin/customers/view.php?id=' . $appointment['id']); ?>">Customer
      #<?php echo $appointment['id']; ?></a>

    <br>
    <br>
    <br>
    <label for="">Status</label>
    <select name="status" id="">
      <option <?php $appointment['status'] == 'approved' ? 'selected' : '' ; ?>value="approved">Approved
      </option>
      <option <?php $appointment['status'] == 'pending' ? 'selected' : '' ; ?>value="pending">Pending
      </option>
      <option <?php $appointment['status'] == 'deleted' ? 'selected' : '' ; ?>value="deleted">Deleted
      </option>
    </select>

    <br>
    <br>
    <input class="btn btn-primary" name="submit" type="submit">

  </form>
</div>
<?php include_once __DIR__ . '../../../_global/footer.php';
