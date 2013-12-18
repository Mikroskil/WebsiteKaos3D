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
        <img src="images/women.png" />
        </div>
        <div id="secondary1">
       
        	<?php
            $query1 = mysql_query("select * from baju");
				while($baris = mysql_fetch_array($query1))
				{	
					if($baris[2]=="perempuan"){
					$gambar = substr($baris[4], 3);
					
					
					$total= $baris[3];
					$rupiah = "";
					$jml = strlen($total);
				 	while($jml > 3)
				 	{
						$rupiah = "." . substr($total,-3) . $rupiah;
						$l = strlen($total) - 3;
						$total = substr($total,0,$l);
						$jml = strlen($total);
					}
				 	$rupiah = "Rp " . $total . $rupiah . ",-";
					
					echo'<div id="product">
            				<img src="'.$gambar.'" width="100px" height="100px"><br>
							Harga : '.$rupiah.'
							<a href="halaman/tambah_cart.php?url=../index.php?page=4&no='.$baris[0].'"><img src="images/add to cart.png" id="gbr_add"/></a>
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
