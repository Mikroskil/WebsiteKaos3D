<?php 
	session_start();
	require('Halaman/koneksi.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Register</title>
	<link href="../CSS/contoh2.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="../Javascript/reqex_register.js"> </script>
</head>

<body>
    
    <div style="height:500px;">
    	<h1 align="center"><font face="Lucida Sans Unicode, Lucida Grande, sans-serif" >Order Detail</font></h1>
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
				$tanda=$_GET['tanda'];
				$query1 = mysql_query("select * from keranjang where nm_pembeli='".$_SESSION['username']."' && tanda=$tanda");
		
				$total=0;
				$i=1;
				while($baris = mysql_fetch_array($query1))
				{
					$cari = mysql_query("select harga from baju where kode='".$baris[1]."'");
					$pilih = mysql_fetch_array($cari);
					$harga=$pilih['harga'];
					
					$cari2 = mysql_query("select nama_product from baju where kode='".$baris[1]."'");
					$pilih1 = mysql_fetch_array($cari2);
					$product=$pilih1['nama_product'];
					echo '<tr>
						<td>'.$i.'</td>
						<td>'.$baris[0].'</td>
						<td>'.$product.'</td>
	  				 	<td>'.$harga.'</td>
						<td>'.$harga*$baris[0].'</td>
	 				 </tr>';
					 $i++;
					 $total+=$harga*$baris[0];
				}
			?>
         <tr>
        	<td style="border-bottom: 1px dotted #09F;" colspan="5"></td>
        </tr>
            <tr>
            	<td colspan="3">&nbsp;</td>
            	<td>Harga Keseluruhan</td>
                <td><?php echo $total;?></td>
            </tr>
        </table>
        <?php
		if($_SESSION['username']=="admin"){
	        echo '<div style="margin:10px 0px 0px 250px;">
    	    	Status
        		<select>
        			<option>None</option>
        			<option>Pending</option>
       				<option>Processing</option>
        			<option>Shipping</option>
        		</select>
				</div>';
		}
   		?>
    </div> 



</body>
</html>
