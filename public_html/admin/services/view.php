<?php
$page_title = 'View Service';
include_once $_SERVER['DOCUMENT_ROOT'] . '/_global/header.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Build Query
    $query = 'SELECT service.id, service.title, service.price, file.file_path ';
    $query .= 'FROM services AS service ';
    $query .= 'INNER JOIN files AS file ';
    $query .= 'ON service.file_id = file.id ';
    $query .= 'WHERE service.id = ' . $id;

    $db_results = mysqli_query($db_connection, $query);
    if ($db_results && $db_results->num_rows > 0) {
        // Get row from results and assign to $data variable;
        $data = mysqli_fetch_assoc($db_results);
    } else {
        // Redirect user if ID does not have a match in the DB
        redirectTo('/admin/services?error=' . mysqli_error($db_connection));
    }
} else {
    // Redirect user if no ID is passed in URL
    redirectTo('/admin/services');
}
?>
<div class="container">
  <h1><?php echo $data['title']; ?>
  </h1>
  <p>Price: <?php echo $data['price']; ?>
  </p>
  <p><img
      src=" <?php echo $data['file_path']; ?>"
      alt=""></p>

  <p><a class="btn btn-primary"
      href="/admin/services/edit.php?id=<?php echo $data['id']; ?>">Edit</a>
    <a class="btn btn-secondary"
      href="/admin/services/delete.php?id=<?php echo $data['id']; ?>">Delete</a>
  </p>
</div>
<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/_global/footer.php';
