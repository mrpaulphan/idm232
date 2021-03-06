<?php
$page_title = 'Dashboard';
include_once __DIR__ . '../../../_global/header.php';
?>
<div class="container">
  <h1>Appointments</h1>

  <?php include __DIR__ . '../../../_components/alert.php';

    $appointments = get_appointments('approved');
    if ($appointments) {
        include __DIR__ . '../../../_components/list-appointments.php';
    } else {
        echo '<p>There are currently no appointments in the database set as approved</p>';
    }

    $appointments = get_appointments('pending');
    if ($appointments) {
        include __DIR__ . '../../../_components/list-appointments.php';
    } else {
        echo '<p>There are currently no appointments in the database set as approved</p>';
    }

  ?>

</div>
<?php include_once __DIR__ . '../../../_global/footer.php';
