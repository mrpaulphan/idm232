<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Function Scope</title>
</head>

<body>
  <?php
    $bar = 'outside'; // global scope

  function bar()
  {
      $bar = 'inside';
      echo $bar;
  }
  function foo()
  {
      global $bar;     // declare `$bar` as global
      echo $bar; // outside
  }

  $count = 0;
  function counter()
  {
      global $count;     // declare `$bar` as global
      $count++;
  }

  function newCounter($count)
  {
      $count = 'hello ur a string now';
  }

  newCounter($count);
  ?>
</body>

</html>