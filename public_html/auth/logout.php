<?php
include_once $_SERVER['DOCUMENT_ROOT'] .'/_global/header.php';
// Destroy any current session
session_destroy();
// redirect to homepage
redirectTo('/');
