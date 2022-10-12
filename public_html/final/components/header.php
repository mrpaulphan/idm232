<?php
// Check if $page_name does not exist, if not, set it to default message
if (!isset($page_name)) {
    $page_name = '🚨 MISSING TITLE 🚨';
}

$site_name = 'IDM 232';
$document_title = $page_name . ' | ' . $site_name;
// Home | IDM 232

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Including TailwindCss Library -->
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="dist/styles/style.css">
  <title><?php echo $document_title; ?>
  </title>
</head>

<body>
  <!-- Main Content Begins -->
  <header class="px-2 py-4 bg-black">
    <div class="max-w-7xl flex justify-between mx-auto">
      <a href="/">
        <img src="dist/images/logo.png" alt="logo">
      </a>

      <nav class="text-white flex items-center">
        <a href="#" class="p-4 inline-block">Home</a>
        <a href="#" class="p-4 inline-block">Book Appointment</a>
        <nav>
    </div>
  </header>
  <main class="h-full	">