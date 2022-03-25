<?php
session_start();
unset($_SESSION['user_id']);
$_SESSION = array();
session_destroy();
header('location: login.php');