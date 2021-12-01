<?php
  // Step 1: Create Database Connection
  $dbhost = "localhost";
  $dbuser = "root";
  $dbpass = "root";
  $dbname = "local_idm232";
  $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
  $recipes = [];
  // Check the connection is good with no errors
  if (mysqli_connect_errno()) {
      die("Database connection failed: " .
      mysqli_connect_error() .
      " (" . mysqli_connect_errno() . ")"
    );
  }

  if (isset($_POST['submit'])) {
      $title       = mysqli_real_escape_string($connection, $_POST['title']);
      $ingredients = mysqli_real_escape_string($connection, $_POST['ingredients']);
      $instructions = mysqli_real_escape_string($connection, $_POST['instructions']);

      // Step 2: Preform Database Query
      $query = "INSERT INTO recipes (title, ingredients, instructions)
            VALUES ('{$title}', '{$ingredients}', '{$instructions}')";
      $result = mysqli_query($connection, $query);
      if ($result) {
          echo 'success';
      }
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <script src="https://cdn.tiny.cloud/1/7rpnj47it93x8jhvzo8vbgdulo0j4qdj5xdmud6xc46gy8fb/tinymce/5/tinymce.min.js"
    referrerpolicy="origin"></script>
  <title>Databases</title>
</head>

<body>
  <h1>Recipes</h1>
  <form action="" method="post">
    <input type="text" name="title" placeholder="Title">
    <br>
    <label for="">Ingredients</label>
    <br>
    <textarea class="js-content-editor" name="ingredients" id="" cols="30" rows="10"></textarea>
    <br>
    <label for="">Instructions</label>
    <br>
    <textarea class="js-content-editor" name="instructions" id="" cols="30" rows="10"></textarea>
    <input type="submit" name="submit">
  </form>
  <?php
    // Step 5: Close Database Connection
    mysqli_close($connection);
  ?>

  <script>
    tinymce.init({
      selector: '.js-content-editor',
      plugins: 'advlist autolink lists bullist link hr anchor pagebreak',
      toolbar_mode: 'floating',
    });
  </script>
</body>

</html>