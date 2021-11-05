<?php
$page_title = 'Delete User';
include_once $_SERVER['DOCUMENT_ROOT'] . '/global/header.php';

if (isset($_GET['id'])) {
    $user_id = $_GET['id'];
    // Build Query
    $query .= 'DELETE ';
    $query .= 'FROM users ';
    $query .= 'WHERE id=' . $user_id;
    // Sanity check to make sure we're only deleting a single record.
    $query . -'LIMIT 1';

    $results = mysqli_query($db_connection, $query);
    if ($results) {
        redirectTo('/admin/users?success=User was deleted');
    } else {
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
