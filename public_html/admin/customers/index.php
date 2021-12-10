<?php
$page_title = 'Staff';
include_once __DIR__ . '../../../_global/header.php';

// If Keyword param exist, update query to show search results instead of everything
if (isset($_GET['keyword'])) {
    $keyword = $_GET['keyword'];
    $customers = search_customer_with_keyword($keyword);
} else {
    // Build Query
    $customers = get_customers();
}

?>
<div class="container">
    <h1>Customers</h1>
    <a class="btn btn-primary"
        href="<?php siteUrl('/admin/customers/create.php') ?>">Create</a>
    <?php include __DIR__ . '../../../_components/alert.php'; ?>

    <form class="search-form" action="" method="GET">
        <label for="">Search</label>
        <input type="text" name="keyword" placeholder="John Doe"
            value="<?php echo @$_GET['keyword']; ?>">
        <input type="submit" value="submit">
    </form>

    <?php
    // Check if the results returned anything
    if ($customers) {
        include __DIR__ . '../../../_components/list-customers.php';
    } else {
        echo '<p>There are currently no customers in the database</p>';
    }
    ?>
</div>
<?php include_once __DIR__ . '../../../_global/footer.php';
