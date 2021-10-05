<?php include $_SERVER['DOCUMENT_ROOT'] . '/global/header.php'; ?>

<div class="container">
<?php

  // Variables
  $fullName = 'Paul Jasper';
  echo $fullName;

  echo '</br>';

  $fullName = 'Koda Phan';
  echo $fullName;

  $string = 'Paul Phan';
  $number = 10;
  $number = 20;
  $number = 20.18;
  $bool = true;
  $bool = false;

  // Type of quotes
  $string = 'This is cool';
  $string2 = "This is cool";

  $email = 'paul@drexel.edu';

  $phrase = 'This Persons email is ' . $email;
  $phrase2 = "This Persons email is $email";

  echo '</br>';
  echo $phrase;
  echo '</br>';
  echo $phrase2;

  $firstName = 'Paul';
  $lastName = 'Phan';
  echo '</br>';

  echo $firstName . ' ' . $lastName;
  // Paul Phan

  // PAUL@DREXEL.EDU
  // PaulPhan@drexel.edu
  // PaULPhaN@drexel.
  
  $email = 'PaulPhanPOOL@mrpaulphan.com';
  echo '</br>';
  echo  $email;
  echo '</br>';


?>
  Lower: <?php echo strtolower($email); ?>
  <br>
  Uppercase: <?php echo strtoupper($email); ?>
  <br>
  Uppercase first: <?php echo ucfirst($email); ?><br>
  Uppercase words: <?php echo ucwords($email); ?>
  <br>
  <br>

  <?php 

    $bodyText = 'My name is John Doe. I like Drexel';
    echo $bodyText;
    echo '</br>';


  ?>
  Replace by string: <?php echo str_replace('John Doe', 'Kevin Murphy', $bodyText); ?>
    <br>

    <?php 
    // Math

    $total = 100;
    $tip = 20;
    $finalPrice = $total / $tip;

    echo $finalPrice;
    echo '</br>';
    // PEDMAS

    $num1 = 10;
    $num2 = 20;
    $num3 = 50;
    $num4 = 5;

    $total = ($num1 + $num2) * $num3 - $num4;
    
    echo  $total;
    echo '</br>';

    $count = 10;
    echo $count;
    echo '</br>';

    $count--;
    echo $count;
    echo '</br>';

    $count++;
    echo $count;
    echo '</br>';

    // Rounding
    $pie = 3.1493849030239200293202023;

    echo round($pie, 2);

    // Arrays & associative arrays
    $array = array();

    // PHP 5.4 +
    $array = [];

    $students = ['ally', 'casey', 'megan', 'john', 'Amy'];
    echo '</br>';
    echo '</br>';
    echo '</br>';

    print_r($students);

    echo '</br>';

    echo $students[1];
    echo '</br>';
    echo $students[4];
    echo '</br>';

    $students = [
      'firstPerson' => 'ally',
      'secondPerson' => 'casey',
      2 =>'megan',
      'john',
      'Amy'
    ];

  echo '<pre>';
    var_dump(  $students );
  echo '</pre>';




    echo '</br>';
    echo '</br>';
    echo '</br>';
    echo '</br>';

    $customer = [
      'firstName' => 'Paul',
      'lastName' => 'Phan',
      'email' => 'paul@paulphan.com',
      'phone' => '232-233-4233',
    ];

    echo '<pre>';
      var_dump( $customer );
    echo '</pre>';


    echo '</br>';
    echo '</br>';
    echo 'Welcome ' . $customer['firstName'] . ' your email is ' . $customer['email'];
    echo '</br>';

    ?>
    


</div>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/global/footer.php'; ?>
