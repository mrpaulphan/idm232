<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Form</title>
  <style media="screen">
  body {
    font: 100%/1.5 sans-serif;
  }
  </style>
</head>

<body>

  <!-- https://www.w3schools.com/tags/att_form_method.asp -->

  <form action="path-to-file-OR-full-URL-to-file" method="either-POST-or-GET-defaults-to-GET">

  </form>


  <!-- https://www.w3schools.com/tags/tag_input.asp -->
  <form action="" method="GET">
    <?php
    echo '<pre>';
    var_dump($_GET);
    echo '</pre>';

    if (isset($_GET['first_name'])) {
        // First Name Exist
        echo $_GET['first_name'];
    }
    ?>

    <br>
    <label for="firstName">First Name</label>
    <input type="text" name="firstName" value="<?php echo $_GET['firstName']; ?>" id="firstName"
      placeholder="first name">
    <br>
    <label for="lastName">Last Name</label>
    <input type="text" name="lastName" value="" id="lastName">
    <br>

    <label for="password">Password</label>
    <input type="password" name="password" value="" id="password">

    <input type="submit" value="Submit">
  </form>
  <br><br><br><br>
  <hr>
  <form action="process.php" method="POST">
    <label for="firstName">First Name</label>
    <input type="text" name="first_name" value="" id="firstName">
    <br>
    <label for="lastName">Last Name</label>
    <input type="text" name="last_name" value="" id="lastName">
    <br>
    <label for="password">Password</label>
    <input type="password" name="password" value="" id="password">

    <input type="submit" value="Submit">
  </form>




  <!--
  So I've got my form with its action, which is form_processing.php. That's the page that doesn't exist yet, but it's where we're going to send this data, so this is going to post the data to form_processing.php. And the method that it will use is post, and that's common, and we're going to do that with almost all forms, send them as post data.

  And then we've got our user name, where I'm going to have an input field. It's going to be a text field, and the `name` of that is going to be `username`. Now, this is important because this is the key in the associative array on the processing page that I'm going to look for. So inside post, there will be a value for `username`, and it'll be exactly the name that's here. Now, there is no value for it, it's just going to be a blank field. Then on the next line, I've got password. Everything's the same, except that it's of type password, which just means that it doesn't show the text as I've typed it. It puts bullets instead. And then last of all, I've got a submit button down here, that's what this is. And it's going to have the text submit on it, the type is submit. I've also got a name attribute for submit.

  If we click submit, the form is submitted to `form_processing.php` (which doesn't exist yet). Let's build that page. (form_processing.php)
  -->

</body>

</html>