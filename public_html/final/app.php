<?php
/**
 * This file is used store all the business
 * logic for the application.
 */

// check if .env.php exists
if (file_exists(__DIR__ . '/.env.php')) {
    // holds global variables for the entire application
    include_once __DIR__ . '/.env.php';
} else {
    // if the file does not exist, throw an error
    die('Please copy the .env.example.php file to .env.php and update the values');
}

// Include the database connection. Order matters and should always be first
include_once __DIR__ . '/_includes/database.php';
include_once __DIR__ . '/_includes/helper-functions.php';