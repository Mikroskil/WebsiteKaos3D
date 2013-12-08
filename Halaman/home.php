<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="../CSS/contoh2.css" rel="stylesheet" type="text/css" />
</head>

<body>
 <div id="contain">
	<div id="primary">
        	<div id="sliderFrame">
        		<div id="slider">
            		<a href=""><img src="images/110478_20081104173951-hot-promo-icon-1.jpg" width="200" height="500"/></a>
            		<a href=""><img src="images/code_promo.jpg"  width="200" height="500" /></a>
            		<a href=""><img src="images/promo.gif" width="200" height="500" /></a>
            		<a href=""><img src="images/promo.jpg" width="200" height="500"/></a>
            		<a href=""><img src="" width="200" height="500"/></a>   
        		</div> 
           	</div>     
        </div> 
        
        <div id="secondary">
        
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
            					<input type="password" placeholder="********" name="sandi"/>
               				</div>
							<input type="hidden" value="../Index.php" name="url">
            				<input class="submit" id="warna" type="submit" value="login" />
        				</form>
    					<p> Not yet a Member?
        				<a href="index.php?page=5">Register Now</a></p>
   			 			</div> <!-- End of login -->';
             	}
			?>
        </div> <!-- end of secondary -->
    </div>
</body>
</html>