<?php
$page_title = 'Create User';
include_once __DIR___ . '../../../_global/header.php';

if (isset($_GET['id'])) {
    $user_id = $_GET['id'];
    $user = get_customer_by_id($user_id);
    // User doesn't exist with that ID
    if (!$user) {
        redirectTo('/admin/customers?error=' . mysqli_error($db_connection));
    }
} else {
    // Redirect user if no ID is passed in URL
    redirectTo('/admin/customers');
}
?>
<div class="container">
    <h1><?php echo $user['first_name'] . ' ' . $user['last_name']; ; ?>
    </h1>
    <p>Email: <?php echo $user['email']; ?>
    </p>
    <p>Phone: <?php echo $user['phone']; ?>
    </p>
    <p>Date Created: <?php echo $user['date_created']; ?>
    </p>
    <p>Last Updated: <?php echo $user['date_updated']; ?>
    </p>
    <p><a class="btn btn-primary"
            href="/admin/customers/edit.php?id=<?php echo $user['id']; ?>">Edit</a>
        <a class="btn btn-secondary"
            href="/admin/customers/delete.php?id=<?php echo $user['id']; ?>">Delete</a>
    </p>
</div>
<?php include_once __DIR___ . '../../../_global/footer.php';
