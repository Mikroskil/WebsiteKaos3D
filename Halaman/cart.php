<?php 
	session_start();
	require('Halaman/koneksi.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cart</title>
	<link href="../CSS/contoh2.css" rel="stylesheet" type="text/css" />
	
</head>

<body>
    <div id="contain1">
    	<h2 align="center">Your Cart</h2>
    	<table id="table" align="center">
        <tr >
        	<td>No.</td>
            <td>Qty</td>
            <td>Product</td>
            <td>Price</td>
            <td>Total</td>
        </tr>
        <tr>
        	<td style="border-bottom: 1px dotted #09F;" colspan="5"></td>
        </tr>
      
            <?php
				$query1 = mysql_query("select * from keranjang where nm_pembeli='".$_SESSION['username']."'");
		
				;
				$i=1;
				while($baris = mysql_fetch_array($query1))
				{
					$cari = mysql_query("select harga from baju where nama_product='".$baris[1]."'");
					$pilih = mysql_fetch_array($cari);
					$harga=$pilih['harga'];
					echo '<tr>
						<td>'.$i.'</td>
						<td>'.$baris[0].'</td>
						<td>'.$baris[1].'</td>
	  				 	<td>'.$harga.'</td>
						<td>'.$harga*$baris[0].'</td>
	 				 </tr>';
					 $i++;
				}
			?>
         <tr>
        	<td style="border-bottom: 1px dotted #09F;" colspan="5"></td>
        </tr>
            <tr>
            	<td colspan="3">&nbsp;</td>
            	<td>Harga Keseluruhan</td>
                <td>5000</td>
            </tr>
        </table>
        <input type="button" value="submit" style="margin-left:830px; margin-top:5px;"/>
 			
        <h2 align="center">Submit</h2>
        <table id="table" align="center">
        	<tr>
        		<td>No.</td>
        	    <td>Qty</td>
        	    <td>Date</td>
        	    <td>Price</td>
        	    <td>Total</td>
                <td>Status</td>
        	</tr>
        </table>       
    </div>

</body>
</html>
