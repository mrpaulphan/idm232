<?php
$page_title = 'Services';
include_once $_SERVER['DOCUMENT_ROOT'] . '/_global/header.php';

// Build Query
$query = 'SELECT service.id, service.title, service.price, file.file_path ';
$query .= 'FROM services AS service ';
$query .= 'INNER JOIN files AS file ';
$query .= 'ON service.file_id = file.id ';
$db_results = mysqli_query($db_connection, $query);

?>
<div class="container">
    <h1>Services</h1>
    <a class="btn btn-primary"
        href="<?php siteUrl('/admin/services/create.php') ?>">Create</a>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/_components/alert.php'; ?>

    <?php
    // Check if the results returned anything
    if ($db_results && $db_results->num_rows > 0) {
        include $_SERVER['DOCUMENT_ROOT'] . '/_components/list-services.php';
    } else {
        echo '<p>There are currently no services in the database</p>';
    }
    ?>
</div>
<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/_global/footer.php';
