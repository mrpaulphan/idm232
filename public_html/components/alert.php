<?php
 if (isset($_GET['error'])) {
     echo '<p class="alert alert-error">' . $_GET['error'] . '</p>';
 }
 if (isset($_GET['success'])) {
     echo '<p class="alert alert-success">' . $_GET['success'] . '</p>';
 }
