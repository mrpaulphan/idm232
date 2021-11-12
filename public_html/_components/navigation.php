<?php if (isAdminPage()) { ?>
<!-- Admin Navigation -->
<header class="header ">
  <div class="container header__wrapper">
    <div class="header__left">
      <a href="<?php siteUrl('/'); ?>"><img class="header__logo" src="/dist/images/logo.png" alt="Site Logo"></a>
      <nav class="header__nav">
        <a href="<?php siteUrl('/admin/appointments'); ?>">Appointments</a>
        <a href="<?php siteUrl('/admin/users'); ?>">Users</a>
        <a href="<?php siteUrl('/admin/services'); ?>">Services</a>
        <nav>
    </div>
    <nav aria-labelledby="">
        <a href="<?php siteUrl(''); ?>">Welcome, <?php echo $_SESSION['user']['first_name'] ?></a>
    <nav>
  </div>
</header>

<?php } else { ?>
  <!-- Main Navigation -->
  <header class="header ">
  <div class="container header__wrapper">
    <div class="header__left">
      <a href="<?php siteUrl('/'); ?>"><img class="header__logo" src="/dist/images/logo.png" alt="Site Logo"></a>
      <nav class="header__nav">
        <a href="<?php siteUrl('/admin/appointments'); ?>">About</a>
        <a href="<?php siteUrl('/admin/users'); ?>">Services</a>
        <a href="<?php siteUrl('/admin/services'); ?>">Contact</a>
        <nav>
    </div>
    <nav aria-labelledby="">
    <?php if (isset($_SESSION['user'])) { ?>
        <a href="<?php siteUrl('/auth/logout.php'); ?>">Logout</a>
    <?php } else { ?>
      <a href="<?php siteUrl('/auth/login.php'); ?>">Login</a>
      <?php }; ?>

    <nav>
  </div>
</header>
  <?php }; ?>
