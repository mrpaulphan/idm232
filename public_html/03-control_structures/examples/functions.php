<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Functions</title>
</head>

<body>
  <?php
  function say_hello()
  {
      echo 'Hello World!<br>';
  }

  function say_something($word)
  {
      echo "Hello {$word}<br>";
  }

  say_hello();
  say_something('Cowboy!');

  $name = 'John Doe';
  function better_hello($greeting, $target, $punct)
  {
      echo $greeting . ' ' . $target . $punct . '<br>';
  }

  better_hello('Hello', $name, '!');
  better_hello('Greetings', $name, '!!!');

  function better_hello_return($greeting, $target, $punct)
  {
      return $greeting . ' ' . $target . $punct . '<br>';
  }

  $result = better_hello_return('Howdy', $name, ':)');
  echo $result;

  function add_subt($val1, $val2)
  {
      $add = $val1 + $val2;
      $subt = $val1 - $val2;
      return [$add, $subt];
  }

  $result_array = add_subt(10, 5); // an array

  echo '<pre>';
  var_dump($result_array);
  echo '</pre>';

  function paint($color = 'red')
  {
      return "The color of the room is {$color}.<br>";
  }

  echo paint();
  ?>
</body>

</html>