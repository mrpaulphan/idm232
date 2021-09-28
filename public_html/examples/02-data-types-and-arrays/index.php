<?php include $_SERVER['DOCUMENT_ROOT'] . '/global/header.php'; ?>

<div class="container">
  <h1>Data Types and Arrays</h1>
  <h2>PHP</h2>
  <?php echo 'inline PHP'; ?>
  <h1><?php echo 'Heading'; ?></h1>
  <p class="<?php echo 'h1'; ?>">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo velit possimus soluta saepe in nisi ut. Possimus laborum blanditiis recusandae commodi delectus ducimus perferendis autem necessitatibus maxime suscipit, qui expedita.</p>
  <?php echo '<p>Hi this is a p tag</p>'; ?>
  <hr>
  <h2>Casing</h2>
  <p>Camel Case</p>
  <?php
    $fullName = 'Paul Phan';
  ?>
  <p>Under scores</p>
  <?php
    $full_name = 'Paul Phan';
  ?>
  <p>Kebab Case</p>
  <?php
    // $full-name = 'Paul Phan';
  ?>

  <h2>Variables</h2>
  <p>Numbers</p>
  <?php 
    $age = 18;
  ?>
  <p>String</p>
  <?php
    $age = 'This can be any type of text';
    $age = '<h1 clas="h1">This can be any type of text<h1>';
  ?>
  <p>Quotes</p>
  <?php
  $extraText = 'this is extra text';
  $var1 = 'Var 1 ' . $extraText ;
  $var2 = "Var 2 $extraText";

  // echo $var1;
  // echo $var2;

?>

<p>Quotes</p>
  <?php
  $extraText = 'this is extra text';
  $var1 = 'Var 1 ' . $extraText ;
  $var2 = "Var 2 $extraText";

  $firstName = 'Paul';
  $lastName = 'Phan';

  // $fullName = $firstName . ' ' . $lastName;
  // echo $fullName;

  $fullName .= $firstName;
  // Paul
  $fullName .= $lastName;
  // Paul Phan

  



  // echo $var1;
  // echo $var2;

?>

<?php
  $email = 'PauL.PhAN@DREXELEDU';
?>

Normal: <?php echo $email; ?>;
<br>
Lowercase: <?php echo strtolower($email); ?><br>
Uppercase: <?php echo strtoupper($email); ?><br>

<?php
  $dogName = 'koda';
?>
Uppercase first: <?php echo ucfirst($dogName); ?><br>

<?php
  $phrase = 'my dad forgot to pick me up.';
?>
Uppercase words: <?php echo ucwords($phrase); ?>

<?php
  $password = 'pas';
?>
Length: <?php echo strlen($password); ?>

<?php
  $email = 'paul.phan@drexel.edu';
  // To find the word drexel in the email.
?>
<br>
Find: <?php echo strstr($email, 'drexel'); ?>

<?php
  $email = 'paul.phan@drexel.edu';
// To find the word drexel and you want to replace it with penn.edu
?>
<br>
Replace: <?php echo str_replace('drexel.edu', 'penn.edu', $email); ?>

 <br>
<?php
  $favColors = 'My favorite color is blue and sometimes green.';
  echo "Find position: " . strpos($favColors, "blue");
?>
<br>

<?php
$total = 100;
$tip = '20';
// Convert string to Int
$tipInt = intval($tip);
// returns 20 not '20'
?>

Basic Math: Total = <?php echo $total + $tipInt ?>
<br>
Basic Math: Subtract <?php echo $total - $tipInt ?>
<br>
Basic Math: Division <?php echo $total / $tipInt ?>
<br>
Basic Math: Multiply <?php echo $total * $tipInt ?>

PEDMAS
<?php
$num1 = 2;
$num2 = 30;
$num3 = 5;
$num4 = 1;
?>
Basic Math: PEDMAS <?php echo $num1 + $num3 * $num4 - $num2 ?>
<?php
$num1 = 2.29;
?>
<br>
Basic Math: Round <?php echo round($num1, 2) ?>
<br>
<?php
$integer = 3;
$float = 3.14;

// echo "Is $integer integer? " . is_int($integer);
echo "Is $float float? " . is_float($float);
?>



  <h2>Math</h2>
  <h2>Arrays & Associative Arrays</h2>
  <br>
  <?php
    // $colors = array();
    // // PHP 5.4
    // $colors = [];

    // Example of an array
    $colors = ['red', 'blue', 'green', 'pink'];
    echo '<pre>';
    var_dump($colors);
    echo '<pre>';

    // can be mixed
    $arrayExample = ['red', 2, 2.3, 'pink'];

    // Return Green
    echo $colors[2];
    echo '<br>';
    // Return Blue
    echo $colors[1];
    echo '<br>';
    // Return Red
    echo $colors[0];

    echo '<br>';
    echo '<br>';
    echo '<br>';

    $person = [
      'firstName' => 'Paul',
      'lastName' => 'Phan',
      'email' => 'paul.phan@drexel.edu',
    ];

    echo '<pre>';
    var_dump($person);
    echo '<pre>';

    echo '<br>';
    echo $person['email'];

  ?>
  


  <h2><a href="/exercises/02/index.php">Exercise</a></h2>
</div>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/global/footer.php'; ?>
