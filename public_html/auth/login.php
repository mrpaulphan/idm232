<?php
include_once $_SERVER['DOCUMENT_ROOT'] .'/_global/header.php';

if (isset($_POST['submit'])) {
    // check if the username and password is valid
    $email = mysqli_real_escape_string($db_connection, $_POST['email']);
    $password = mysqli_real_escape_string($db_connection, $_POST['password']);

    // Build Query
    $query = 'SELECT * ';
    $query .= 'FROM users ';
    $query .= "WHERE email='{$email}'";

    $results = mysqli_query($db_connection, $query);

    if ($results && $results->num_rows > 0) {
        // Get row from results and assign to $user variable;
        $user = mysqli_fetch_assoc($results);
        // Verify that the submitted password matches the password from the users db
        if (password_verify($password, $user['password'])) {
            // email + password exist
    
            // Create a user array in the SESSION variable and assign values to it
            $_SESSION['user'] = [
                'id' => $user['id'],
                'first_name' => $user['first_name'],
                'last_name' => $user['last_name'],
                'role' => $user['role'],
            ];

            redirectTo('/admin');
        } else {
            // Correct email but wrong password
            redirectTo('/auth/login.php?error=Email or Password doest not exist.');
        }
    } else {
        // Wrong Email + Password
        redirectTo('/auth/login.php?error=Email or Password doest not exist.');
    }

    // get form data
  // get that email and check the database if they exist
  // redirect to the admin
}

?>
<div class="container">
  <h1>Login</h1>
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/_components/alert.php'; ?>
  <form action="" method="post">
    <label for="emailField">Email</label>
    <input type="email" name="email" id="emailField" value="" required>

    <label for="passwordField">Password</label>
    <input type="password" name="password" id="passwordField" value="" >

    <label for="rememberMeField">Remember Me</label>
    <input type="checkbox" name="remember_me" id="rememberMeField">
    <br>
    <br>
    <input type="submit" value="Log in" name="submit" class="btn btn-primary">
  </form>
</div>
<?php include_once $_SERVER['DOCUMENT_ROOT'] .'/_global/footer.php'   ?>
