<?php
include __DIR__ . '/../app.php';
// Destroy any current session
session_destroy();
// redirect to homepage
redirect_to('/');