<?php

// $cars = ['car1', 'car2', 'car3'];
// echo '<pre>';
// var_dump($cars);
// echo '</pre>';

// echo $cars[0]; // car1
// echo $cars[1]; // car2
// echo $cars[2]; // car3

// echo '<pre>';
// var_dump($_POST);
// echo '</pre>';

// echo $_POST['first_name'];
// echo $_POST['last_name'];
// echo $_POST['password'];

function redirect_to($location)
{
    header('Location: ' . $location);
    exit;
}