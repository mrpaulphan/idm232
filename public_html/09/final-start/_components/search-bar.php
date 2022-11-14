<?php
$search_value = '';
// If Search exist, make that the search value
if (isset($_GET['search'])) {
    $search_value = $_GET['search'];
}
?>
<form action="<?php echo site_url(); ?>/admin/search" method="GET" class="block">
  <label for="">Search User</label>
  <input class="border-black border-2" type="text" name="search" value="<?php echo $search_value; ?>">
  <input type="submit" value="Search">
</form>