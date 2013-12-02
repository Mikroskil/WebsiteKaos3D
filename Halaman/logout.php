<?php
	session_start();
//	setcookie("userid","",time());
	
//	unset()$_SESSION['userid'];
	session_destroy();	
	header("location:../index.php");
?>