<?php
$page_title = 'Create Service';
include_once $_SERVER['DOCUMENT_ROOT'] . '/_global/header.php';

// Form has been submitted
if (isset($_POST['submit'])) {
    //  Parse Data
    $first_name = mysqli_real_escape_string($db_connection, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($db_connection, $_POST['last_name']);
    $email = mysqli_real_escape_string($db_connection, $_POST['email']);
    $phone = mysqli_real_escape_string($db_connection, $_POST['phone']);
    $role = mysqli_real_escape_string($db_connection, $_POST['role']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $current_date = getFormattedDateTime();

    // Build Query
    $query = 'INSERT INTO users (role, first_name, last_name, email, phone, password, date_created, date_updated)';
    $query .= "VALUES ('{$role}', '{$first_name}', '{$last_name}', '{$email}', '{$phone}', '{$password}', '{$current_date}', '{$current_date}')";

    // Execute Query
    $db_results = mysqli_query($db_connection, $query);
    if ($db_results) {
        // Success
        redirectTo('/admin/users/');
    } else {
        // Error
        redirectTo('/admin/users/create.php?error=' . mysqli_error($db_connection));
    }
}
?>
<div class="container">
  <h1>Create Service</h1>
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/_components/alert.php'; ?>
  <form action="" method="POST">

    <label for="">Title</label>
    <input type="text" value="" name="title">

    <label for="">Price</label>
    <input type="text" value="" name="price">


    <label for="">Image</label>
    <input type="file" value="" name="image">

    <br>
    <br>
    <input class="btn btn-primary" name="submit" type="submit">

  </form>
</div>
<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/../_global/footer.php';
