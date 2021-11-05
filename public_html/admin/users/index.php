<?php
$page_title = 'Users';

include_once $_SERVER['DOCUMENT_ROOT'] . '/global/header.php';

// Build Query
$query .= 'SELECT * ';
$query .= 'FROM users';
$results = mysqli_query($db_connection, $query);
?>
<div class="container">
  <h1>Users</h1>
  <a href="/admin/users/create.php">Create</a>
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/components/alert.php'; ?>
  <?php
    if ($results && $results->num_rows > 0) {
        include $_SERVER['DOCUMENT_ROOT'] . '/components/list-users.php';
    } else {
        echo '<p>There are currently no users in the database</p>';
    }
    ?>

</div>
<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/global/footer.php';
