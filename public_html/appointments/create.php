<?php
$page_title = 'Book Appointments';
include_once __DIR__ .'/../global/header.php';
?>
<div class="container">
    <h1>Book Appointments</h1>
    <form action="/includes/process/create_appointment.php" method="POST">  

      <label for="">First Name</label>
      <input type="text" value="" name="first_name">

      <label for="">Last Name</label>
      <input type="text" value="" name="last_name">


      <label for="">Email</label>
      <input type="email" value="" name="email">


      <label for="">Phone</label>
      <input type="text" value="" name="phone_number">

      
      <label for="">Services</label>
      <input type="text" value="" name="services">

      
      <label for="">Date</label>
      <input type="date" 
       name="date" value="<?php echo date('Y-m-d');?>">

       
      <label for="">Time</label>
      <input type="time" 
       name="time" value="">

       <br>
       <br>
      <input class="btn btn-primary" type="submit">

    </form>
</div>
<?php include_once __DIR__ .'/../global/footer.php';   ?>
