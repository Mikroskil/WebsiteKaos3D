<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Register</title>
	<link href="../CSS/contoh2.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="../Javascript/reqex_register.js"> </script>
</head>

<body>
    
    <div id="form" align="center">
    	
    <form name="daftar" method="post" action="Halaman/register2.php" onSubmit="return validasi()">
		<fieldset>
        <legend><h2><font color="#FFFF66">Register Form</font></h2></legend>
     				<div id="regis">
                    <label for="gender">Title</label>  
                    <input type="radio" name="gender" id="gender1" value="Mr.">Mr.
						
                    <input type="radio" name="gender" id="gender2" value="Ms.">Ms.
                    </div>
					<div id="regis">
					<label for="firstname">First name</label>
                	<input type="text" class="text" id="firstname" name="firstname">
					<sup>*</sup>
               		</div>
                    <div id="regis">
        			<label for="lastname">Last name</label>
                    <input type="text" class="text" id="lastname" name="lastname">
					<sup>*</sup>
               		</div>
                    <div id="regis">
        			<label for="email">E-mail</label>
                    <input type="text" class="text" id="email" name="email">
					<sup>*</sup>
					</div>
                    <div id="regis">
                	<label for="username">UserName</label>
                	<input type="text" name="username">
                    <sup>*</sup>
                    </div>
                    <div id="regis">
					<label for="passwd">Password</label>
                	<input type="password" class="text" name="passwd1" id="passwd">
					<sup>*</sup>
				  	</div>
                    <div id="regis">
					<label for="passwd">Confirm Password</label>
                	<input type="password" class="text" name="passwd2" id="passwd">
                    <sup>*</sup>
					</div>
                    <div id="regis">
        			<label for="days">Date of Birth</label>
            		<input type="date" name="days" placeholder="           yyyy/mm/dd" />
                	<sup>*</sup>
                    </div>
                    <div id="regis">
					<label for="address1">Address</label>			
                    <input type="text" name="address" id="address">
					<sup>*</sup>
					</div>
                    <div id="regis">
                    <label for="pnum">Phone Number</label>			
                    <input type="text" name="pnum" id="pnum">
                    <sup>*</sup>
                    </div>
                    <div id="regis">
					<label for="country">Province</label>	
                    <input type="text" name="country" id="country">
					<sup>*</sup>
                	</div>
                    <div id="regis">
                    <label for="city">Country</label>			
                    <input type="text" name="city" id="city">
					<sup>*</sup>
               		</div>
                    <div id="regis">
                	<label for="postcode">Zip / Postal Code</label>   	
					<input type="text" name="postcode" id="postcode">
					<sup>*</sup>
               		</div>
      	
        <center>
        	<input id="warna" type="submit" value="submit" name="kirim">
        	<input id="warna" type="reset" value="reset" name="reset">
        </center>
        </fieldset>
 	</form>
    <p>*All information above shall be accurate because the data will be used for transaction</p>

   
    </div> 



</body>
</html>
