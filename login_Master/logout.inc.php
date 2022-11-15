<?php 
include '../indexFunction.inc.php';

session_unset($_SESSION['login_id']); 
session_destroy();
header("location: login.inc.php");

?>