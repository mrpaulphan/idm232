<?php
  $site_title = 'Home';
  $is_active_page = 'home';
?>
<?php include 'includes/header.php'   ?>


<?php
$score = 10;
$score_2 = 20;

if ($score > $score_2) {
    echo 'Hey. You scored';
} else {
    echo 'It is not';
}


$can_drive = false; // true or false

if ($can_drive) {
    echo 'Can Drive';
} else {
    echo 'Can not drive';
}

$total = 300;
echo '<br>';

if ($total > 200 && $total < 230) {
    echo 'Total is  > 200';
} elseif ($total > 250) {
    echo 'Total is  > 250';
} else {
    echo 'Total is under 250';
}

echo '<br>';
echo '<br>';

$is_hungry = false;
if (!$is_hungry) {
    echo 'I am hungry';
}

echo '<br>';
echo '<br>';

// Functions

function canDrink($persons_age, $age_limit = 21)
{
    if ($persons_age >= $age_limit) {
        return 'Yes you can drink';
    } else {
        return 'Sorry';
    }
}

echo canDrink(14, 10);
echo '<br>';

echo canDrink(23, 10);
echo '<br>';

echo canDrink(12, 10);
echo '<br>';

echo canDrink(32, 10);
echo '<br>';

echo canDrink(21, 10);
echo '<br>';


echo '<br>';
echo '<br>';

$count = 11;

while ($count <= 10) {
    echo '<br>';
    echo $count;
    $count++;
}

// while ($count <= 10) {
//     echo '<br>';
//     echo $count;
// }

// do {
//   code to be executed;
// } while (condition is true);

$i = 5;
do {
    $i++;
    // $i == 2
    echo "The number is " . $i . "<br>";
} while ($i <= 3);

// for(initialization; condition; increment){
//   // Code to be executed
// }

for ($i=1; $i<=3; $i++) {
    echo "The number is " . $i . "<br>";
}

// foreach ($array as $value) {
//     // Code to be executed
// }

$colors = ["Red", "Green", "Blue"];

foreach ($colors as $color) {
    if ($color == 'Green') {
        echo '<br>';
        echo $color;
    }
}

$person = [
  "name" => 'Paul Phan',
  "email" => 'paul@mrpaulphan.com',
  "age" => 28
];

foreach ($person as $key => $value) {
    if ($key == 'age' && $value > 21) {
        echo '<br>';
        echo 'They can drink';
    }
}







?>
  
<?php include 'includes/footer.php'   ?>
