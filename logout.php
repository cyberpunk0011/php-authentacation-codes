<?php
session_start();
session_destroy();
// Redirect to login page or home page
header("Location: login.php");
exit();
?>
