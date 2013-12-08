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
         <img src="images/2.jpg" align="right" width="800" height="150" style="box-shadow: 3px 3px 8px 5px rgba(0, 0, 0, 0.3);"/>
        </div>   
</div>
    <div style="width:1100px;">
    
        	<ul class="menuTemplate1" > 
            <li style="width:290px;">&nbsp;</li>
            <li class="separator"></li>
        	<li><a href="index.php?page=1">Home</a></li> <li class="separator"></li> 
            <li><a href="index.php?page=2">Cart</a></li><li class="separator"></li> 
            <li><a href="index.php?page=3">Male T-Shirt</a></li> <li class="separator"></li> 
            <li><a href="index.php?page=4">Female T-Shirt</a></li> <li class="separator"></li> 
            <li>
            <span class="topLink2" hasub="1">
            <a href="">About</a> 
            <span class="sub">
            <div style="width:125px;">
            <a href="index.php?page=9" style="width:65px;">About Us</a><hr />
            <a href="index.php?page=10" style="width:65px;">Contact Us</a><hr />
            <a href="index.php?page=11">How To Buy</a>
            </div>
            </li> <li class="separator"></li> 
            <li>
            <span class="topLink2" hasub="1">
            <a class="mlink" href="">Login</a> 
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
                            <a href="index.php?page=8">Register Now</a></p>
                            </div> <!-- End of login -->';
                    }
                ?>
        
            </table>
            </span>
            </span>
            </li> <li class="separator"></li> 
             <?php
				if(isset($_SESSION['username']))
				{
					if($_SESSION['username']=="admin")
					echo '<li><a href="index.php?page=7">Admin</a></li><li class="separator"></li> ';
				}
			?>
            
            </ul>     
        </div>  
    <div>
    	<? include "Halaman/isi.php"; ?>
    </div> <!-- end of contain -->
    
    
    <div id="footer"> 
    &nbsp;
    	<h3 align="center">We Accept</h3>
    	<hr width="700px"/>
    	<img src="images/bca1.png" />
        <img src="images/bii.png" width="141" height="50"/>
        <img src="images/mandiri1.png" />
        <img src="images/niaga.png" width="141" height="50"/>
		<br />

		<p>&copy; Copyright 2013 Mighty Shirt All Rights Reserved. </p>
		&nbsp;
    </div> 
</body>
</html>
