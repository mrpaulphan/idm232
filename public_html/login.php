<?php include 'global/header.php'   ?>
<div class="container">
  <h1>Login</h1>
  <?php

    if (isset($_GET['errorMessage']) ) {
      echo '<p class="error">'.$_GET['errorMessage'].'</p>';
    }
  ?>
  <form action="/includes/process_login_form.php" method="post">
    <label for="emailField">Email</label>
    <input type="email" name="email" id="emailField" value="" required>

    <label for="passwordField">Password</label>
    <input type="password" name="password" id="passwordField" value="" >

    <label for="rememberMeField">Remember Me</label>
    <input type="checkbox" name="remember_me" id="rememberMeField">
    <br>
    <br>
    <input type="submit" value="Log in" class="btn btn-primary">
  </form>
</div>
<?php include 'global/footer.php'   ?>
