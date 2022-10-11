<?php

$cars = ['car1', 'car2', 'car3'];
echo '<pre>';
var_dump($cars);
echo '</pre>';

echo $cars[0];
echo $cars[1];
echo $cars[2];

echo '<pre>';
var_dump($_POST);
echo '</pre>';

echo $_POST['firstName'];
echo $_POST['lastName'];
echo $_POST['password'];

function redirect_to($location)
{
    header('Location: ' . $location);
    exit;
}
