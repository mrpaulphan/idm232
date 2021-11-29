<?php
$page_title = 'Delete User';
include_once $_SERVER['DOCUMENT_ROOT'] . '/_global/header.php';

if (isset($_GET['id'])) {
    $user_id = $_GET['id'];
    $result = delete_user_by_id($user_id);
    // Check if delete was successful
    if ($results) {
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
