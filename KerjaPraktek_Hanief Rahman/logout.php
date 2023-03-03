<?php
session_start();  
if(isset($_SESSION['user_login_invoice'])){
	session_destroy();
    unset($_SESSION['user_login_invoice']);
	header("Location: login.php");
    die();
}
?>