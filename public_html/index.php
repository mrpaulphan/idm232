<?php
$page_title = 'Home';
include_once __DIR__ .'/global/header.php';
?>
<div class="container">
    <h1>Home</h1>
    <a href="<?php echo $app['url']; ?>/appointments/create.php">Create</a>
</div>
<?php include_once __DIR__ .'/global/footer.php';   ?>
