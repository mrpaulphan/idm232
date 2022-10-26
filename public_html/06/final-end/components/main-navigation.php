<?php
$main_navigation = [
    [
        'title' => 'Home',
        'url' => 'index.php',
    ],
    [
        'title' => 'About',
        'url' => 'about.php',
    ],
    [
        'title' => 'Services',
        'url' => 'services.php',
    ],
    [
        'title' => 'Contact',
        'url' => 'contact.php',
    ],
    [
        'title' => 'Create User',
        'url' => 'dashboard/users/create.php',
    ],
];

?>
<!-- Main Content Begins -->
<header class="px-2 py-4 bg-black">
  <div class="max-w-7xl flex justify-between mx-auto">
    <a href="/">
      <img src="dist/images/logo.png" alt="logo">
    </a>

    <nav class="text-white flex items-center">
      <?php
      // Check if $main_navigation exist
      if (isset($main_navigation)) {
          // Loop through the $main_navigation array and output the html
          foreach ($main_navigation as $item_array) {
              echo "<a href='$item_array[url]' class='p-4 inline-block'>$item_array[title]</a>";
          }
      }
?>
    </nav>
  </div>
</header>