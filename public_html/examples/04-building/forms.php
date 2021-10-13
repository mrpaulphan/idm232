<?php include '../../global/header.php';?>

<div class="container">
  <h1 class="">Forms</h1>
  <form action="" method="post" >
      <label for="exampleOneField">Text Field</label>
      <input id="exampleOneField" type="text" name="text_field" value="">

      <label for="exampleOneField">Email Field</label>
      <input id="exampleOneField" type="email"  name="email_field" value="" required>

      <label for="exampleOneField">Number Field</label>
      <input id="exampleOneField" type="number"  name="number_field" value="">

      <label for="exampleOneField">Password Field</label>
      <input id="exampleOneField" type="password"  name="password_field" value="">

      <label for="exampleOneField">Hidden Field</label>
      <input id="exampleOneField" type="hidden"  name="hidden_field" value="">

      <input class="btn btn-primary" type="submit" value="Submit Button Here">
  </form>

</div>

<?php include '../../global/footer.php'   ?>
