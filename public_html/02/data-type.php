<?php
// Link https://www.w3schools.com/php/php_datatypes.asp

// PHP supports the following data types:
// String
// Integer
// Float (floating point numbers - also called double)
// Boolean
// Array
// Object
// NULL

$x = 'Hello world!';
$y = 'Hello world!';

echo $x;
echo '<br>';
echo $y;

$x = 5985;
var_dump($x);

$x = 10.365;
var_dump($x);

$x = true;
$y = false;

// $cars2 = array('Volvo', 'BMW', 'Toyota');
$cars = ['Volvo', 'BMW', 'Toyota'];
var_dump($cars);

// A variable of data type NULL is a variable that has no value assigned to it.
// Tip: If a variable is created without a value, it is automatically assigned a value of NULL.

$x = 'Hello world!';
$x = null;
var_dump($x);

// Concatenation
$greeting = 'Hello';
$target = 'World';
$phrase = $greeting . ' ' . $target;

echo $phrase; // Hello World

$phrase = $greeting . ' ' . $target;

echo "$phrase Again<br>"; // Hello World Again
echo '$phrase Again<br>'; // $phrase Again

echo 'Start with a simple string';
echo 'String\'s apostrophe';
echo 'String with a php variable' . $name;

// Double quotes
// Double quotes are more powerful than single quotes. Double quotes allow you to use variables inside a string, and also allow you to use escape characters. Double quotes are slower than single quotes.

// echo "Start with a simple string";
echo "String's apostrophe";
echo "String with a php variable {$name}";
