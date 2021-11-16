<?php
$page_title = 'Create Service';
include_once $_SERVER['DOCUMENT_ROOT'] . '/_global/header.php';

// Form has been submitted
if (isset($_POST['submit'])) {
    //  Parse Data
    $title = mysqli_real_escape_string($db_connection, $_POST['title']);

    // Convert string to a float since the database expect this value to be a float
    $price =(float) $_POST['price'];

    $current_date = getFormattedDateTime();

    $file_name = slugify($_FILES['image']["name"]);
    $temp_name = $_FILES['image']["tmp_name"];
    $file_path =   $app['asset_url']. $file_name;
    $file_destination = $_SERVER['DOCUMENT_ROOT'] . $file_path;
    $current_date = getFormattedDateTime();

    // Build Query
    $query = 'INSERT INTO files (file_path, file_title, date_created)';
    $query .= "VALUES ('{$file_path}', '{$file_name}', '{$current_date}')";

    echo '<pre>';
    var_dump($query);
    echo '</pre>';
    // Execute Query
    $db_results = mysqli_query($db_connection, $query);
    if ($db_results && $db_results->num_rows > 0) {
        // Success
        if (move_uploaded_file($temp_name, $file_destination)) {
            // $file = mysqli_fetch_assoc($db_results);
            $user = mysqli_fetch_assoc($db_results);
            return $file;
        } else {
            return false;
        }
    } else {
        // Error
        return false;
    }

    // // Build Query
    // $query = 'INSERT INTO users (role, first_name, last_name, email, phone, password, date_created, date_updated)';
    // $query .= "VALUES ('{$role}', '{$first_name}', '{$last_name}', '{$email}', '{$phone}', '{$password}', '{$current_date}', '{$current_date}')";

    // // Execute Query
    // $db_results = mysqli_query($db_connection, $query);
    // if ($db_results) {
    //     // Success
    //     redirectTo('/admin/users/');
    // } else {
    //     // Error
    //     redirectTo('/admin/users/create.php?error=' . mysqli_error($db_connection));
    // }
}
?>
<div class="container">
  <h1>Create Service</h1>
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/_components/alert.php'; ?>
  <?php // Need to add enctype="multipart/form-data" to the form when dealing with file uploads?>
  <form action="" method="POST" enctype="multipart/form-data">
>

    <label for="">Title</label>
    <input type="text" value="" name="title">

    <label for="">Price</label>
    <input type="text" value="" name="price">

    <label for="">Image</label>
    <input type="file" value="" name="image">

    <br>
    <br>
    <input class="btn btn-primary" name="submit" type="submit">

  </form>
</div>
<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/_global/footer.php';
