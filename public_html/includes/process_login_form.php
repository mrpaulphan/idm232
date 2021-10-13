<?php
include 'helper.php';

// Redirect User if post is empty
if ( empty($_POST) && isset($_POST) ) {
  redirectTo('/login.php');
}

$emailField = isset($_POST['email']);
$passwordField = isset($_POST['password']);
$rememberField = isset($_POST['remember_me']);

// Make sure required fields have values
if ( empty($emailField) || empty($passwordField) ) {
  redirectTo('/login.php?errorMessage=Email or Password is empty');
}


// check with my database and see if that email exist
// If they do exist, redirect to admin page







?>