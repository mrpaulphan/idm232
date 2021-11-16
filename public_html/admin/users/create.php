<?php
$page_title = 'Create User';
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
    if ($db_results && $db_results->num_rows > 0) {
        // Success
        redirectTo('/admin/users/');
    } else {
        // Error
        redirectTo('/admin/users/create.php?error=' . mysqli_error($db_connection));
    }
}
?>
<div class="container">
  <h1>Create User</h1>
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/_components/alert.php'; ?>
  <form action="" method="POST">

    <label for="">First Name</label>
    <input type="text" value="" name="first_name">

    <label for="">Last Name</label>
    <input type="text" value="" name="last_name">


    <label for="">Email</label>
    <input type="email" value="" name="email">


    <label for="">Phone</label>
    <input type="text" value="" name="phone">


    <label for="">Role</label>
    <select name="role" id="">
      <option selected value="employee">Employee</option>
      <option value="admin">Admin</option>
    </select>



    <label for="">Password</label>
    <input type="password" value="" name="password">


    <br>
    <br>
    <input class="btn btn-primary" name="submit" type="submit">

  </form>
</div>
<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/../_global/footer.php';
