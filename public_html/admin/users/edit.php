<?php
$page_title = 'Create User';
include_once $_SERVER['DOCUMENT_ROOT'] . '/global/header.php';

if (isset($_POST['update'])) {
    //  Parse Data
    $user_id = $_POST['user_id'];
    $first_name = mysqli_real_escape_string($db_connection, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($db_connection, $_POST['last_name']);
    $email = mysqli_real_escape_string($db_connection, $_POST['email']);
    $phone = mysqli_real_escape_string($db_connection, $_POST['phone']);
    $role = mysqli_real_escape_string($db_connection, $_POST['role']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $current_date = getFormattedDateTime();

    // Build Query
    $query = 'UPDATE users SET ';

    $query .= "first_name = '{$first_name}', ";
    $query .= "last_name = '{$last_name}', ";
    $query .= "email = '{$email}', ";
    $query .= "phone = '{$phone}', ";
    $query .= "role = '{$role}', ";
    $query .= "date_updated = '{$current_date}' ";
    $query .= "WHERE id = {$user_id}";
    // Execute Query
    $results = mysqli_query($db_connection, $query);

    if ($results) {
        // Success
        redirectTo('/admin/users?success=User Updated');
    } else {
        // Error
        redirectTo('/admin/users/edit.php?id=' . $user_id . '&error=' . mysqli_error($db_connection));
    }
} elseif (isset($_GET['id'])) {
    $user_id = $_GET['id'];
    // Build Query
    $query .= 'SELECT * ';
    $query .= 'FROM users ';
    $query .= 'WHERE id=' . $user_id;

    $results = mysqli_query($db_connection, $query);
    if ($results) {
        $user = $row = mysqli_fetch_assoc($results);
    } else {
        // Redirect user if ID does not have a match in the DB
        redirectTo('/admin/users?error=' . mysqli_error($db_connection));
    }
} else {
    // Redirect user if no ID is passed in URL
    redirectTo('/admin/users');
}
?>
<div class="container">
  <h1>Create User</h1>
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/components/alert.php'; ?>
  <form action="" method="POST">

    <label for="">First Name</label>
    <input type="text"
      value="<?php echo $user['first_name']; ?>"
      name="first_name">

    <label for="">Last Name</label>
    <input type="text"
      value="<?php echo $user['last_name']; ?>"
      name="last_name">


    <label for="">Email</label>
    <input type="email"
      value="<?php echo $user['email']; ?>"
      name="email">


    <label for="">Phone</label>
    <input type="text"
      value="<?php echo $user['phone']; ?>"
      name="phone">


    <label for="">Role</label>
    <select name="role" id="">
      <option selected value="employee">Employee</option>
      <option value="admin">Admin</option>
    </select>



    <input type="hidden"
      value="<?php echo $user['id']; ?>"
      name="user_id">

    <br>
    <br>
    <input class="btn btn-primary" name="update" type="submit" value="Update">

  </form>
</div>
<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/../global/footer.php';
