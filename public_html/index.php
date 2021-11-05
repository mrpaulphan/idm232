<?php
$page_title = 'Users';
include_once __DIR__ . '/global/header.php';

// Build Query
$query .= 'SELECT * ';
$query .= 'FROM users';
$results = mysqli_query($db_connection, $query);
echo '<pre>';
    var_dump($results);
echo '</pre>';
?>
<div class="container">
    <h1>Home</h1>
    <a
        href="<?php echo $app['url']; ?>/appointments/create.php">Create</a>
    <?php if ($results) {  ?>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Role</th>
                <th>Name</th>
                <th>Column 5</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php 
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<td>'.$row['id'].'</td>';
                        echo '<td>'.$row['role'].'</td>';
                        echo '<td>'.$row['first_name']. ' ' .$row['last_name'] .  '</td>';
                    }
                ?>
            </tr>
        </tbody>
    </table>
    <?php } else { ?>
    <h2>Currently no Users</h2>
    <?php  { ?>


</div>
<?php include_once __DIR__ . '/global/footer.php';
