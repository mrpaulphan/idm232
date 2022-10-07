<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Functions</title>
</head>

<body>
    <?php
    // A user-defined function declaration starts with the word function:
    function functionName()
    {
        //code to be executed;
    }

  function say_hello()
  {
      echo 'Hello World!<br>';
  }

    say_hello(); // Hello World!
    say_hello(); // Hello World!
    say_hello(); // Hello World!

    function say_something($word)
    {
        echo "Hello {$word}<br>";
    }

    say_something('Cowboy!'); // Hello Cowboy!
    say_something('Dog!'); // Hello Dog!
    say_something('Cat!'); // Hello Cat!

    function full_name($first_name, $last_name)
    {
        echo "{$first_name} {$last_name}<br>";
    }

    full_name('Paul', 'Phan'); // Paul Phan
    full_name('John', 'Doe'); // John Doe
    full_name('Jane', 'Doe'); // Jane Doe

    function full_name2($first_name, $last_name = '')
    {
        if ($first_name && $last_name) {
            echo "{$first_name} {$last_name}<br>";
        } else {
            echo "{$first_name}<br>";
        }
    }

    full_name2('Paul2', 'Phan2'); // Paul Phan
    full_name2('Jane'); // Jane

    $name = 'John Doe';
    function better_hello($greeting, $target, $punct)
    {
        echo $greeting . ' ' . $target . $punct . '<br>';
    }

    better_hello('Hello', $name, '!'); // Hello John Doe!
    better_hello('Greetings', $name, '!!!'); // Greetings John Doe!!!

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