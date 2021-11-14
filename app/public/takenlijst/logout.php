<?php
session_start();
$_SESSION['logged_in'] = false;
$_SESSION['user_id'] = '';
header('Location: login.php');
exit();
