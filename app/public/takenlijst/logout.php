<?php
unset($_SESSION['logged_in']);
unset($_SESSION['username']);
header('Location: login.php');
exit();
