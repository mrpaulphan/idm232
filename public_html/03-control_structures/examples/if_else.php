<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>If / Else</title>
</head>

<body>
  <?php
    $a = 4;
  $b = 4;
  if ($a > $b) {
      echo 'a is larger than b';
  } elseif ($a < $b) {
      echo 'a is smaller than b';
  } else {
      echo 'a is equal to b';
  }

  $a = 4;
  $b = 4;
  if ($a >= $b) {
      echo 'a is larger than b';
  } elseif ($a < $b) {
      echo 'a is smaller than b';
  } else {
      echo 'a is equal to b';
  }

  $user_logged_in = true;
  if ($user_logged_in) {
      echo 'Hello, user';
  } else {
      echo 'Hello, guest';
  }

  if ($a >= $b) {
      echo 'a is larger than b';
  } elseif ($a < $b) {
      echo 'a is larger than b';
  } elseif ($a === 0) {
      echo 'a is smaller than b';
  } else {
      echo 'a is equal to b';
  }
  ?>
</body>

</html>