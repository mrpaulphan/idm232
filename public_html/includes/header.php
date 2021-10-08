<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo  $site_title;?> Page | IDM 232</title>
  <style>
    .is-active {
      color: red;
    }
  </style>
</head>
<body>
  <nav aria-labelledby="">
    <ul>
      <li><a class="<?php if ($is_active_page =='home') {
    echo 'is-active';
}?>" href="/index.php">Home</a></li>
      <li><a class="<?php if ($is_active_page =='about') {
    echo 'is-active';
}?>" href="/about.php">About</a></li>
      <li><a class="<?php if ($is_active_page =='contact') {
    echo 'is-active';
}?>" href="/contact.php">Contact</a></li>
    </ul>
  <nav>