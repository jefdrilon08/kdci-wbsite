<?php
session_start();
unset($_SESSION['admin_username']);
unset($_SESSION['admin_Id']);

echo "<script language='javascript' type='text/javascript'>window.open('../login.php','_self')</script>";

?>