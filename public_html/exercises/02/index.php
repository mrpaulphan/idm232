<?php include $_SERVER['DOCUMENT_ROOT'] . '/global/header.php'; ?>

<div class="container">

  <?php
  $question = $_GET['question'] ?? '1';
  $page =  $question < 0 ? 1 : intval($question);

  ?>


  <?php if ($question == '1'): ?>

  <h2>Task 01</h2>
  <p>Here is some text: </p>
  <pre>
    I love PHP scripting!
  </pre>
  <p>Convert this text into a PHP variable and print the string to the screen.</p>

  <pre class="solution">
    <?php
    //Your solution here.
      $text = 'I love PHP scripting!';
      echo $text;
    // end your solution

    ?>
  </pre>

  <?php elseif ($question == '2'): ?>
  <h2>Task 02</h2>
  <p>Here is some text: </p>
  <pre>
    The quick brown fox jumped.
    </pre>
  <p>Use PHP to convert that text to all uppercase, so that it reads:</p>
  <pre>
    THE QUICK BROWN FOX JUMPED.
    </pre>
  <p>Print the uppercase text to the screen.</p>

  <pre class="solution">
    <?php
    // Your solution here.
    $text = 'The quick brown fox jumped.';
    echo strtoupper($text);
    // end your solution
    ?>
    </pre>

  <?php elseif ($question == '3'): ?>
  <h2>Task 03</h2>
  <p>Here is some text: </p>
  <pre>
      The quick brown fox jumped.
      </pre>
  <p>Use PHP to convert that text so that it reads:</p>
  <pre>
      The lazy black fox slept.
      </pre>
  <p>Print the text to the screen.</p>

  <pre class="solution">
      <?php
      $string = "The quick brown fox jumped.";

      echo str_replace('quick brown fox jumped', 'lazy black fox slept', $string);
      // Your solution here.

      // end your solution
    ?>
    </pre>
  <?php elseif ($question == '4'): ?>
    <h2>Task 04</h2>
<p>Use PHP to solve this math problem:</p>
<pre>
  3 + 6 x (5 + 4) ÷ 3 - 7
</pre>
<p>Print the solution to the screen.</p>

<pre class="solution">
<?php
  // Your solution here.
  $num1 = 3;
  $num2 = 6;
  $num3 = 5;
  $num4 = 4;
  $num5 = 3;
  $num6 = 7;

  echo $num1 + $num2 * ($num3 + $num4) / $num5 - $num6;

  // end your solution
?>
</pre>
    <?php elseif ($question == '5'): ?>
      <h2>Task 05</h2>
  <p>Here's an array:</p>
  <pre>
    $numbers = array(1,6,3,8,2,5);
  </pre>
  <p>Use PHP to sort the array values into order and print the sorted array to the screen.</p>
  <p>Use var_dump($numbers); to display your results</p>
  <pre class="solution">
  <?php
    $numbers = array(1,6,3,8,2,5);
    sort($numbers);
    // Your solution here.
    var_dump($numbers);
  
    // end your solution
  ?>
  </pre>

  <?php elseif ($question == '6'): ?>
    <h2>Task 06</h2>
<p>Here's an array:</p>
<pre>
  $assoc = [
    "first_name" => "Dolores",
    "last_name" => "Abernathy"
  ];
</pre>
<p>Use PHP to change the value of the <i>last_name</i> key to "Smith". Print the array to the screen.</p>

<pre class="solution">
<?php
  $assoc = [
    "first_name" => "Dolores",
    "last_name" => "Abernathy"
  ];
  // Your solution here.

  // end your solution
?>
</pre>
  <?php elseif ($question == '7'): ?>
    <h2>Task 07</h2>
<p>Here's an array:</p>
<pre>
  $numbers = array(8,23,15,42,16,4,23,44,232,55,6,43,6,88,7,6,1,22,3);
</pre>
<p>Use PHP to count the number of values in the array. Print that value to the screen.</p>

<pre class="solution">
<?php
  $numbers = array(8,23,15,42,16,4,23,44,232,55,6,43,6,88,7,6,1,22,3);
  // Your solution here.

  // end your solution
?>
</pre>
  <?php elseif ($question == '8'): ?>
    <h2>Task 08</h2>
<p>Here's an array:</p>
<pre>
  $numbers = array(8,23,15,42,16,4);
</pre>
<p>Use PHP to determine if the number "15" is in the array. If it is, print the word "Found" to the screen. If it is not, print the word "Missing" to the screen.</p>

<pre class="solution">
<?php
  $numbers = array(8,23,15,42,16,4);
  // Your solution here.

  // end your solution
?>
</pre>
  <?php endif; ?>

  <a href="<?php echo '/exercises/02/index.php?question=' . $page - 1 ?>">Back</a>
  <a href="<?php echo '/exercises/02/index.php?question=' . $page + 1?>">Next</a>

  <?php include $_SERVER['DOCUMENT_ROOT'] . '/global/footer.php'; ?>