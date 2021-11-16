<?php
$page_title = 'Delete Service';
include_once $_SERVER['DOCUMENT_ROOT'] . '/_global/header.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    // Build Query
    $query .= 'DELETE ';
    $query .= 'FROM services ';
    $query .= 'WHERE id=' . $id;
    // Sanity check to make sure we're only deleting a single record.

    $db_results = mysqli_query($db_connection, $query);
    if ($db_results) {
        redirectTo('/admin/services?success=Service was deleted');
    } else {
        redirectTo('admin/services/view.php?id=' . $_GET['id'] . '&error=' . mysqli_error($db_connection));
    }
} else {
    // Redirect user if no ID is passed in URL
    redirectTo('/admin/services');
}
?>

<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/../_global/footer.php';
