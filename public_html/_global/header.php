<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/_includes/helper.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/_includes/functions.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/_includes/database.php';

// Set Page Title
if (isset($page_title)) {
    $page_title = $page_title . ' | IDM 232';
} else {
    $page_title = 'IDM 232';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="/dist/styles/main.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $page_title; ?>
  </title>
</head>

<body>
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/_components/navigation.php';
