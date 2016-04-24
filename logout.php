<?php
session_start();
$_SESSION['value'] = 1;
echo "<script>window.open('index1.php','_self')</script>";
?>