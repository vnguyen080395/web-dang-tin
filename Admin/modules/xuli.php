<?php 
session_start();
unset($_SESSION["nameadmin"]);
header("Location: ../login.php");
?>