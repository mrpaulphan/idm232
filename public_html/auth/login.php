<?php
include_once $_SERVER['DOCUMENT_ROOT'] .'/_global/header.php';

?>
<div class="container">
  <h1>Login</h1>
  <?php

    if (isset($_GET['errorMessage'])) {
        echo '<p class="error">'.$_GET['errorMessage'].'</p>';
    }
  ?>
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
