<?php
function site_url()
{
    $protocol = 'http';
    // Checks if the server is using HTTPS
    if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
        $protocol = 'https';
    }
    // Get current domain
    $domain = $_SERVER['HTTP_HOST'];
    // Merge it with the current path
    if ($domain === 'mrpaulphan.com') {
        return $protocol . '://' . $domain . '/idm232/final';
    } else {
        return $protocol . '://' . $domain . '/final';
    }
}

function project_path()
{
    $domain = $_SERVER['HTTP_HOST'];
    if ($domain === 'mrpaulphan.com') {
        return $_SERVER['DOCUMENT_ROOT'] . '/idm232/final';
    } else {
        return $_SERVER['DOCUMENT_ROOT'] . '/final';
    }
}
// Step 1: Create Database Connection
$db_host = 'localhost';
$db_user = 'root';
$db_pass = 'root';
$db_name = 'local_idm232_01';
$db_connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

// Check the connection is good with no errors
if (mysqli_connect_errno()) {
    die('Database connection failed: ' .
      mysqli_connect_error() .
      ' (' . mysqli_connect_errno() . ')'
    );
}
$page_title = 'Home';
include_once project_path() . '/components/header.php';
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


  <h2>Create a user</h2>
  <form action="<?php echo site_url(); ?>/includes/process_users.php" method="POST">
    <label for="">First Name</label>
    <input class="border-black border-2" type="text" name="first_name">

    <label for="">Last Name</label>
    <input class="border-black border-2" type="text" name="last_name">

    <label for="">Email</label>
    <input class="border-black border-2" type="email" name="email">

    <label for="">Phone Number</label>
    <input class="border-black border-2" type="text" name="phone">
    <input type="submit" value="submit">
  </form>

  <h2>Users</h2>
  <?php
  $query = 'SELECT * FROM users';
$query_results = mysqli_query($db_connection, $query);

while ($user = mysqli_fetch_array($query_results)) {
    echo '<h2>' . $user['first_name'] . ' ' . $user['last_name'] . ' ' . $user['email'] . ' ' . $user['phone'] . '</h2>';
    echo '<hr>';
}

?>

</div>

<?php include_once project_path() . '/components/footer.php';