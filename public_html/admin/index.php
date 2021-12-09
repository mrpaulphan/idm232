<?php
$page_title = 'Dashboard';
include_once __DIR___ . '../../_global/header.php';

$query = 'SELECT COUNT(*) FROM customers';
$result = mysqli_query($db_connection, $query);
$customer_count = mysqli_fetch_assoc($result)['COUNT(*)'];

$query = 'SELECT COUNT(*) FROM users';
$result = mysqli_query($db_connection, $query);
$user_count = mysqli_fetch_assoc($result)['COUNT(*)'];

$query = 'SELECT COUNT(*) FROM appointments';
$result = mysqli_query($db_connection, $query);
$appointments_count = mysqli_fetch_assoc($result)['COUNT(*)'];

?>
<div class="container">
    <h1>Dashboard</h1>
    <div class="stat">
        <p>
            Customers Total: <?php echo $customer_count; ?>
        </p>

    </div>
    <div class="stat">
        <p>
            Users Total: <?php echo $user_count; ?>
        </p>

    </div>
    <div class="stat">
        <p>
            Appointments Total: <?php echo $appointments_count; ?>
        </p>

    </div>
</div>
<?php include_once __DIR___ . '../../_global/footer.php';
