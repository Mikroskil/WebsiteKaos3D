<?php 
	session_start();
	require('Halaman/koneksi.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Man T-shirt</title>
	<link href="../CSS/contoh2.css" rel="stylesheet" type="text/css" />
	
</head>

<body>
    
    <div id="contain1">
    
    	<div id="primary">
        <img src="images/man.png" />
        </div>
        <div id="secondary">
       
        	<?php
            $query1 = mysql_query("select * from baju");
				while($baris = mysql_fetch_array($query1))
				{	
					if($baris[2]=="laki"){
					$gambar = substr($baris[4], 3);
					echo'<div id="product">
            				<img src="'.$gambar.'">
							<a href="halaman/tambah_cart.php?url=../index.php?page=3&no='.$baris[0].'"><img src="images/add to cart.png" id="gbr_add"/></a>
            			</div>';
					}
				}
			?> 
        </div>
    
    <div id="list">
    	 <img src="images/men.png" />
    </div>
    </div>

</body>
</html>
