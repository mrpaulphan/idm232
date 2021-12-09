<?php
$page_title = 'Staff';
include_once __DIR___ . '../../../_global/header.php';

// Build Query
$users = get_users();

?>
<div class="container">
    <h1>Staff</h1>
    <a class="btn btn-primary"
        href="<?php siteUrl('/admin/users/create.php') ?>">Create</a>
    <?php include __DIR___ . '../../../_components/alert.php'; ?>

    <?php
    // Check if the results returned anything
    if ($users) {
        include __DIR___ . '../../../_components/list-users.php';
    } else {
        echo '<p>There are currently no users in the database</p>';
    }
    ?>
</div>
<?php include_once __DIR___ . '../../../_global/footer.php';
