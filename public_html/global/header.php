<?php
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
  <link rel="stylesheet" href="/dist/styles/main.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $page_title; ?></title>
</head>
<body>