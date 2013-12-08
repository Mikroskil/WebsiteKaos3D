<?php 
	session_start();
	require('Halaman/koneksi.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mighty Shirt</title>
	<link rel="stylesheet" href="CSS/menubar.css" type="text/css">
	<link href="CSS/contoh2.css" rel="stylesheet" type="text/css" />
	<link href="Javascript/js-image-slider.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="javascript/js-image-slider.js"></script>
</head>

<body>
<div id="header">
	<div id="container">
    
    	<img id="logo" src="images/logo_300.png" alt="Mighty Shirt" />
         <img src="images/2.jpg" align="right" width="700" height="100" style="box-shadow: 3px 3px 8px 5px rgba(0, 0, 0, 0.3);"/>
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
            <a class="mlink" href="">
             <?php
                   	echo $_SESSION['username'];
					if(!isset($_SESSION['username']))
				{
					echo ' Login';
				}
			?>
            </a> 
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
            
            </ul>     
        </div>  
    <div>
    	<? include "Halaman/isi.php"; ?>
    </div> <!-- end of contain -->
    
    
    <div id="footer"> 
    <div style="width:1100px; height:auto;">
        <div align="left" style="margin-left:300px; padding-top:20px; float:left;">
        <h4>Mighty Shirt</h4>
        <p><a href="index.php?page=9">About Us</a></p>
        <p><a href="index.php?page=10">Contact Us</a></p>
        <p><a href="index.php?page=16">FAQ</a></p>
        </div>
        
        <div style="margin:0 0 0px 50px; padding-top:20px; float:left; ">
        <h4>Other</h4>
        <p><a href="index.php?page=15">Privacy Policy</a></p>
        <p><a href="index.php?page=11">How To Buy</a></p>
        </div>
    </div>
    
    <div style=" padding-top:150px;">
    	<h3 align="center">We Accept</h3>
    	<hr width="700px"/>
    	<img src="images/bca1.png" />
        <img src="images/bii.png" width="141" height="50"/>
        <img src="images/mandiri1.png" />
        <img src="images/niaga.png" width="141" height="50"/>
		<br />
	</div>
		<p>&copy; Copyright 2013 Mighty Shirt All Rights Reserved. </p>
		&nbsp;
    </div> 
</body>
</html>
