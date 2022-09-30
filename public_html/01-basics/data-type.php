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

echo '<br>';
$x = 10.365; // float
var_dump($x);

echo '<br>';
$favorite_car_brands = [
    'Volvo',
    'BMW',
    'Toyota',
    0,
    false,
    2.34,
];
var_dump($favorite_car_brands);

// Concatenation
$first_name = 'Paul';
$last_name = 'Phan';
$full_name = $first_name . $last_name;
echo $full_name; // PaulPhan

$full_name = $first_name . ' ' . $last_name;
echo $full_name; // Paul Phan

$phrase = 'Hello my name is' . $first_name . ' ' . $last_name;
echo $phrase; // Hello my name is Paul Phan

// Quotes single vs double
$phrase = 'Hello World';
echo '$phrase Again<br>'; // $phrase Again
echo "$phrase Again<br>"; // Hello World! Again
echo $phrase . ' Again<br>'; // Hello World! Again

echo "String's apostrophe"; // String's apostrophe
// echo 'String's apostrophe';
echo 'String\'s apostrophe';
