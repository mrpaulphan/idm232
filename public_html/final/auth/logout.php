<?php
include __DIR__ . '/../app.php';
// Destroy any current session
session_start() ;
session_destroy();
redirect_to('/');
