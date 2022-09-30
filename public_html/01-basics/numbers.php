<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Number Functions</title>
</head>

<body>

  <?php
  $var1 = 3;
  $var2 = 4;
  // PEMDAS still applies in math
  $basic_math_value = ((1 + 2 + $var1) * $var2) / 2 - 5;
  // (6 * $var2) / 2 - 5;
  // 24 / 2 - 5;
  // 12 - 5;
  // 7;
  ?>

  <hr>

  Basic math: <?php echo $basic_math_value; //7?>
  Basic math: <?php echo 2 + 4 - 2; // 4?>
  Basic math with string: <?php echo $var1 + 4 - '2'; // 7?>
  Basic math with string: <?php echo 4 . '2'; // 42?>
  <hr>

  <?php
    $var2++; // 4++
  echo 'Increment $var2: ' . $var2; // 5
  $var2++;
  echo 'Increment $var2: ' . $var2; // 6
  echo '<br>';

  $var2 = 4;
  $var2--; // 3
  echo 'Decrement $var2: ' . $var2; // 3
  ?>

  <hr>

  <?php $float = 3.4273; ?>
  <?php echo round($float, 1); // 3.4?><br>
  <?php echo round($float, 2); // 3.43?><br>
  <?php echo ceil($float); // 4?><br>
  <?php echo floor($float); // 3?>

  <hr>

  <?php
    $integer = 3;
  $float = 3.14;

  echo "Is $integer integer? " . is_int($float);
  echo '<br>';
  echo "Is $integer float? " . is_float($float);
  echo '<br>';
  echo "Is $integer numeric? " . is_numeric($integer);
  echo '<br>';
  echo "Is $float numeric? " . is_numeric($float);
  ?>
</body>

</html>