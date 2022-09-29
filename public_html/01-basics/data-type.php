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
$y = 'Hello world 2!';

echo $x; // Hello world!
echo '<br>';
echo $y; // Hello world 2!

echo '<br>';
$x = 4820;
echo $x; // 4820
echo '<br>';

var_dump($x);

echo '<br>';
$x = '4820';
echo '<br>';

var_dump($x);

$x = 10.365; // float
var_dump($x);

// Arrays
$favorite_car_brands = [
    'Volvo',
    'BMW',
    'Toyota'
];
var_dump($favorite_car_brands);

// Concatenation
$greeting = 'Hello';
$target = 'World';
$phrase = $greeting . $target;
echo $phrase; // HelloWorld

$phrase = $greeting . ' ' . $target . '!';
echo $phrase; // Hello World!

// Quotes single vs double
echo "$phrase Again<br>"; // Hello World! Again
echo '$phrase Again<br>'; // $phrase Again
echo $phrase . ' Again<br>'; // Hello World! Again

echo "String's apostrophe"; // String's apostrophe
echo 'String\'s apostrophe';
