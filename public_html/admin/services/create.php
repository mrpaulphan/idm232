<?php
$page_title = 'Create Service';
include_once __DIR__ . '../../../_global/header.php';

// Form has been submitted. First upload image first then upload service
if (isset($_POST['submit'])) {
    // Parse Data
    $files_array = explode('.', $_FILES['image']['name']);
    $file_title = slugify($files_array[0]);
    $extension = $files_array[1];
    $final_file_name = $file_title . '.' . $extension;
    $temp_name = $_FILES['image']['tmp_name'];

    // dist/uploads/image-name.png
    $file_path = $app['asset_url'] . $file_title;

    // idm232/public_html/admin/services/../../dist/uploads/image-name.png
    // Which is the same as idm232/public_html/admin/services/dist/uploads/image-name.png
    $file_destination = __DIR__ . '/../../' . $file_path;
    $current_date = getFormattedDateTime();

    // Build Query
    $query = 'INSERT INTO files (file_path, file_title, date_created)';
    $query .= "VALUES ('{$file_path}', '{$file_title}', '{$current_date}')";

    // Execute Query
    $db_results = mysqli_query($db_connection, $query);
    $new_uploaded_file_id = null;
    if ($db_results) {
        // file was inserted into the db
        if (move_uploaded_file($temp_name, $file_destination)) {
            // File was uploaded successfully

            // Build Query to get the recently uploaded image and get that ID
            $query = 'SELECT * ';
            $query .= 'FROM files ';
            $query .= "WHERE file_path='{$file_path}'";

            $db_results = mysqli_query($db_connection, $query);
            if ($db_results) {
                // Get row from results and assign to $user variable;
                $new_uploaded_file_id = mysqli_fetch_assoc($db_results)['id'];
            } else {
                redirectTo('/admin/services/create.php?error=Could not find image in database');
            }
        } else {
            redirectTo('/admin/services/create.php?error=Error moving file');
        }
    } else {
        // Error
        redirectTo('/admin/services/create.php?error=' . mysqli_error($db_connection));
    }

    // Continue submiting rest of the form
    $title = mysqli_real_escape_string($db_connection, $_POST['title']);
    // Convert string to a float since the database expect this value to be a float
    $price = (float) $_POST['price'];
    $current_date = getFormattedDateTime();

    $file_id = (float)$new_uploaded_file_id;
    // Build Query
    $query = 'INSERT INTO services (title, price, file_id, date_created, date_updated)';
    $query .= "VALUES ('{$title}', '{$price}', '{$file_id}', '{$current_date}', '{$current_date}')";
    // Execute Query
    $db_results = mysqli_query($db_connection, $query);
    if ($db_results) {
        // Success
        redirectTo('/admin/services/');
    } else {
        // Error
        redirectTo('/admin/services/create.php?error=' . mysqli_error($db_connection));
    }
}
?>
<div class="container">
    <h1>Create Service</h1>
    <?php include __DIR__ . '../../../_components/alert.php'; ?>
    <?php // Need to add enctype="multipart/form-data" to the form when dealing with file uploads?>
    <form action="" method="POST" enctype="multipart/form-data">

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
<?php include_once __DIR__ . '../../../_global/footer.php';
