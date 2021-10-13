<?php include '../../global/header.php'   ?>

<div class="container">
  <h1 class="">Local & Global Scope & Super Globals</h1>
  <?php
    $name = 'Paul';

    function sayName()
    {
        $name = 'John';
        return $name;
    }

    $name = 'New Paul';
    echo $name;

    // $_cookie

    // $_SESSION









  ?>

</div>

<?php include '../../global/footer.php'   ?>
