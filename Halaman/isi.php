<?php
error_reporting(0);
$page=$_GET['page'];

switch($page)
{
	case "1";
	include "home.php";
	break;
			
	case "2";
	include "cart.php";
	break;
	
	case "3";
	include "manshirt.php";
	break;
	
	case "4";
	include "womenshirt.php";
	break;
	
	case "5";
	include "register.php";
	break;
	
	case "6";
	include "admin.php";
	break;
	
	
	default;
	include "home.php";
	break;
}

?>