<?php
$page_title = 'Delete User';
include_once $_SERVER['DOCUMENT_ROOT'] . '/_global/header.php';

if (isset($_GET['id'])) {
    $user_id = $_GET['id'];
    // Build Query
    $query .= 'DELETE ';
    $query .= 'FROM users ';
    $query .= 'WHERE id=' . $user_id;
    // Sanity check to make sure we're only deleting a single record.
    $query . -'LIMIT 1';

    $db_results = mysqli_query($db_connection, $query);
    if ($db_results) {
        redirectTo('/admin/users?success=User was deleted');
    } else {
        redirectTo('admin/users/view.php?id=' . $_GET['id'] . '&error=' . mysqli_error($db_connection));
    }
} else {
    // Redirect user if no ID is passed in URL
    redirectTo('/admin/users');
}
?>

<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/../_global/footer.php';
