<?php
include_once __DIR__ . '/../../app.php';
$page_title = 'Services';
include_once __DIR__ . '/../../_components/header.php';
$services = get_services();

// Check if search exist in query
if (isset($_GET['search'])) {
    $search = $_GET['search'];
} else {
    $search = '';
}

$query = 'SELECT *';
$query .= ' FROM users';
$query .= " WHERE first_name LIKE '%{$search}%'";
$query .= " OR last_name LIKE '%{$search}%'";
$query .= " OR email LIKE '%{$search}%'";
$query .= " OR phone LIKE '%{$search}%'";

$results = mysqli_query($db_connection, $query);
if ($results->num_rows > 0) {
    $users_results = true;
} else {
    $users_results = false;
}

?>

<div class="mx-auto my-16 max-w-7xl px-4">
  <div class="px-4 sm:px-6 lg:px-8">
    <?php include __DIR__ . '/../../_components/navigation-admin.php'; ?>
    <div class="sm:flex sm:items-center">
      <div class="sm:flex-auto">
        <h1 class="text-xl font-semibold text-gray-900">Search Results</h1>
        <form action="<?php echo site_url(); ?>/admin/search" method="GET">
          <input class=" border-black border-2" type="text" name="search" id="search" placeholder="Search"
            value="<?php echo $search; ?>">
          <button type="submit">Search</button>
        </form>
        <h2>You searched for "<?php echo $search; ?>"</h2>
        <?php
        // If no results, echo no results
        if (!$users_results) {
            echo '<p>No results found</p>';
        }
?>
        <?php
// If error query param exist, show error message
  if (isset($_GET['error'])) {
      echo '<p class="text-red-500">' . $_GET['error'] . '</p>';
  }?>
      </div>
      <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
        <button type="button"
          class="inline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto">
          <a href="<?php echo site_url() . '/admin/services/create.php' ?>">
            Add service</a></button>
      </div>
    </div>

    <?php
      if ($users_results) {
          while ($users_results = mysqli_fetch_assoc($results)) {
              echo '<div class="flex flex-row justify-center items-center">';
              echo '<h2>' . $users_results['first_name'] . ' ' . $users_results['last_name'] . '</h2>';
              echo '</div>';
          }
      }
?>

  </div>
</div>



<?php include_once __DIR__ . '/../../_components/footer.php';
?>