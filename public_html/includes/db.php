<?php
// include_once this on the pages that require a database connection

// This information is specific to your current environment. This should not be committed
$db_hostname = 'localhost';
$db_username = 'localhost';
$db_password = 'localhost';
$db_port = 'localhost';
$db_database_name = 'localhost';

$db_connection = mysqli_connect($db_hostname, $db_username, $db_password, $db_database_name);
