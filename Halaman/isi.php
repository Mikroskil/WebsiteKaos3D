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
	include "orderlist.php";
	break;
	
	case "6";
	include "login.php";
	break;
	
	case "7";
	include "admin.php";
	break;
	
	case "8";
	include "register.php";
	break;
	
	case "9";
	include "about_us.php";
	break;
	
	case "10";
	include "contact_us.php";
	break;
	
	case "11";
	include "htb.php";
	break;
	
	
	default;
	include "home.php";
	break;
}

?>