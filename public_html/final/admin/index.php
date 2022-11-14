<?php
include __DIR__ . '/../app.php';
// If someone lands on /admin, redirect them to /admin/users as the default page
redirect_to('/admin/users.php');