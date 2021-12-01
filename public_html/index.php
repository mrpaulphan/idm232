<?php
include_once $_SERVER['DOCUMENT_ROOT'] .'/_global/header.php';
?>
<div class="container">
  <h1>Welcome to Jawn Clips</h1>
  <p>Professionally cutting hair for over 100 years.</p>
  <a href="<?php echo siteUrl('/appointments/create.php');?>"
    class="btn btn-primary">Book an appointment</a>
</div>
<?php include_once $_SERVER['DOCUMENT_ROOT'] .'/_global/footer.php' ;
