<?php 
	session_start();
	require('Halaman/koneksi.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
	<link rel="stylesheet" href="CSS/menubar.css" type="text/css">
	<link href="CSS/contoh2.css" rel="stylesheet" type="text/css" />
	<link href="Javascript/js-image-slider.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="javascript/js-image-slider.js"></script>
</head>

<body>
<div id="header">
	<div id="container">
    
    	<img id="logo" src="images/logo_300.png" alt="Mighty Shirt" />
		
    <div style="margin-left:1000px; font-size:24px; padding-top:20px;">
	<span class="topLink2" hasub="1">
	<a class="mlink">Login</a>
		<span class="sub">
		
		<table cellspacing="2" cellpadding="2">
		<?php
				require('Halaman/username_home.php');
              	if(!isset($_SESSION['username']))
				{		
                	echo'<div id="login">
    					<h3>User Login</h3>
                   		<form name="login" action="halaman/login.php" method="post">
                    		<div id="a">
                    			<label for="id">User Name:</label><br /><br />
								<label for="sandi">Password:</label>
                    		</div>
        		
                			<div id="b">
            					<input type="text" placeholder="enter your username" name="id"/><br />	
            					<input type="password" placeholder="********" name="sandi"/><br /> 
								
               				</div>
							
							<input class="submit" id="warna" type="submit" value="login"/>
							<input type="hidden" value="../Index.php" name="url">
							
							
            				
        				</form>
						
    					<p> Not yet a Member?
        				<a href="index.php?page=5">Register Now</a></p>
   			 			</div> <!-- End of login -->';
             	}
			?>
	
	</table>
		</form>
		</span>
	</span>
	</div>  
	
	
	  
        <ul id="nav">
        	<li><a href="index.php?page=1">Home</a></li>
            <li><a href="index.php?page=2">Cart</a></li>
            <li><a href="index.php?page=3">Male<br />T-Shirt</a></li>
            <li><a href="index.php?page=4">Female T-Shirt</a></li>
            <li><a href="">Contact</a></li>
            <?php
				if(isset($_SESSION['username']))
				{
					if($_SESSION['username']=="admin")
					echo '<li><a href="index.php?page=6">Admin</a></li>';
				}
			?>
        </ul>
        </div>
        </div>
		
    <div align="center">
	<div align="center">
    	<ul class="menuTemplate1 decor1_1" > 
        	<li><a href="index.php?page=1">Home</a></li> <li class="separator"></li> 
            <li><a href="index.php?page=2">Cart</a><li class="separator"></li> 
            <li><a href="index.php?page=3">Male<br />T-Shirt</a></li> <li class="separator"></li> 
            <li><a href="index.php?page=4">Female T-Shirt</a></li> <li class="separator"></li> 
            <li><a href="#Web-Menu">Shipping</a> </li> <li class="separator"></li> 
            <li><a href="#Web-Menus">About Us</a> </li> <li class="separator"></li>
            <li><a href="#Web-Menus">Contact Us</a> </li
            </li>
            </ul>
    	</div>
	</div>
    
    <div>
    	<? include "Halaman/isi.php"; ?>
    </div> <!-- end of contain -->
    
    <div id="footer">
    	<ul id="footer-nav">
			<li id="home"><a href="">Home</a></li>
    		<li><a href="">Cart</a></li>
    		<li><a href="">Male T-Shirt</a></li>
    		<li><a href="">Female T-Shirt</a></li>
    		<li><a href="">Contact Us</a></li>
    	</ul> <!-- end of footer-nav -->
		<br />

		<p>&copy; Copyright All Rights Reserved. </p>
		
    </div> 
</body>
</html>
