<?php
  // Step 1: Create Database Connection
  $db_host = 'localhost';
  $db_user = 'root';
  $db_pass = 'root';
  $db_name = 'local_idm232_01';
  $connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

  // Check the connection is good with no errors
  if (mysqli_connect_errno()) {
      die('Database connection failed: ' .
        mysqli_connect_error() .
        ' (' . mysqli_connect_errno() . ')'
      );
  }

  //  Read the data from the database form the users table
  $query = 'SELECT * FROM users';
  $result = mysqli_query($connection, $query);

  // Check there are no errors with our SQL statement
  if (!$result) {
      die('Database query failed.');
  }

  while ($user = mysqli_fetch_array($result)) {
      // echo '<h2>' . $user['first_name'] . ' ' . $user['last_name'] . '</h2>';
      // echo '<hr>';
  }

  $page_title = 'Home';
  include_once 'components/header.php';
  ?>

<div class="mx-auto my-16 max-w-7xl px-4">
  <div class="text-center">
    <h1 class="font-bold tracking-tight text-gray-900  text-6xl">
      Welcome to <span class="text-indigo-600">JAWN</span> Barber
    </h1>
    <p class="mx-auto mt-3 max-w-md text-base text-gray-500 max-w-3xl text-xl">Anim aute id
      The best place to get your haircut in Phildelphia!</p>
    <a href="#"
      class="my-6 inline-flex items-center rounded border border-transparent bg-indigo-600 px-4 py-2 text-xs font-lg text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Book
      an Appointment</a>
  </div>
</div>

<?php include_once 'components/footer.php';