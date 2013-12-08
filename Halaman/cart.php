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
	<script type="text/javascript"> 
		function hapus(){
			d=document.tampil.ceklis;
			str="";
			
			for (i=0; i<d.length; i++){
				if(d[i].checked)
				str+=d[i].value+"|";
			}
			str2=str.substring(0,str.length-1)
			window.location.href="../php/edit_cart.php?mod=../Halaman/cart.php&judul="+str2+"&input=hapus"; 
		}
		
		function kosong(){
			alert("Cart Empty");
		}
	</script>
</head>

<body>
    <div id="contain1">
    	<h2 align="center">Your Cart</h2>
    	<?php 
			echo '<form name="tampil" method="post" action="halaman/submit.php"> <table id="table" align="center">
        	<tr >
        		<td>No.</td>
        	    <td>Qty</td>
        	    <td>Product</td>
        	    <td>Price</td>
        	    <td>Total</td>
				<td align="center">Remove</td>
        	</tr>
        	<tr>
        		<td style="border-bottom: 1px dotted #09F;" colspan="6"></td>
        	</tr>';
      
            
				$query1 = mysql_query("select * from keranjang where nm_pembeli='".$_SESSION['username']."'");
		
				
				$i=1;
				$b=0;
				$total=0;
				while($baris = mysql_fetch_array($query1))
				{	
					if($baris[3]=="belum submit"){
					$cari = mysql_query("select harga from baju where kode='".$baris[1]."'");
					$pilih = mysql_fetch_array($cari);
					$harga=$pilih['harga'];
					
					$cari2 = mysql_query("select nama_product from baju where kode='".$baris[1]."'");
					$pilih1 = mysql_fetch_array($cari2);
					$product=$pilih1['nama_product'];
					echo '<tr>
					
						<td>'.$i.'</td>
						<td>'.$baris[0].'</td>
						<td>'.$product.'<input type="hidden" style="width: 50px;" name="kode'.$i.'" value="'.$baris[1].'"></td>
	  				 	<td>'.$harga.'</td>
						<td>'.$harga*$baris[0].'</td>
						<td align="center"><a href="halaman/ubah.php?url=../index.php?page=2&kode='.$baris[1].'&status=hapus"><img src="images/hapus.png" alt="hapus" name="hapus"></a></td>
	 				 </tr>';
					
					 $i++;
					 $b++;
					 $total+=$harga*$baris[0];
					}
					
				}
			
         	echo '<tr>
     		   	<td style="border-bottom: 1px dotted #09F;" colspan="6"></td>
     	   </tr>
      	      <tr>
       		     	<td colspan="3">&nbsp;</td>
       		     	<td>Harga Keseluruhan</td>
         	       <td>'.$total.'</td>
         	   </tr>
       		 </table>
			  <input type="hidden" name="jumlah" value="'.($i-1).'">';
			  if($b==0){
				  echo '<input type="button" value="submit" style="margin-left:830px; margin-top:5px;" onclick="kosong()"/>';
			  }
			  else{
				  echo '<input type="submit" value="submit" style="margin-left:830px; margin-top:5px;"/>';
			  }
		
 			
        echo '<h2 align="center">Submit</h2>
        	<table id="table" align="center">
        		<tr>
        			<td>No.</td>
        		    <td>Qty</td>
        		    <td>Date Order (Y-M-D)</td>
        	  	  	<td>Price</td>
              	  	<td>Status</td>
					<td>Details</td>
        		</tr>';
				
				$query2 = mysql_query("select * from keranjang2 where nm_pembeli='".$_SESSION['username']."'");
		
				
				$j=1;
				while($baris1 = mysql_fetch_array($query2))
				{	
					
					echo '<tr>
						<td>'.$j.'</td>
						<td>'.$baris1[1].'</td>
						<td>'.$baris1[2].'</td>
	  				 	<td>'.$baris1[3].'</td>
						<td>'.$baris1[4].'</td>
						<td><a href="index.php?page=13&tanda='.$baris1[5].'">detail</a></td>
	 				 </tr>';
					
					 $j++;
				}
			echo'</table>';   
		?>    
    </div>

</body>
</html>
