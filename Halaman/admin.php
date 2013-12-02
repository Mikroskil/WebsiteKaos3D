<?php 
	session_start();
	require('Halaman/koneksi.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Administrator</title>
	<link href="../CSS/contoh2.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript">
    	function pindah(url)
		{
			window.location = url;
		}
    </script>
</head>
 
<body>
    <h2 align="center">Welcome Master</h2>
    <div id="contain2">
    	<div id="right">
        	<div id="right1">
            <h3>Data</h3>
            </div>
        Total Penjualan<br />
        Total Pesanan<br />
        Jumlah Member<br />
        </div>
        
        <div id="left">
        	<div id="left1">
            	<h3>File</h3>
            </div>
            <form name="tambah" action="halaman/upload_gambar.php" method="post" enctype="multipart/form-data">
           	 <table>
             	<tr>
                	<td>
                    	<label for="kode">Kode Product </label>
                    </td>
                    <td>
                   	 	: <input type="text"  name="kode"/>
                    </td>
                </tr>
             	<tr>
                	<td>
                    	<label for="nm_product">Nama Product </label>
                    </td>
                    <td>
                   	 	: <input type="text"  name="nm_product"/>
                    </td>
                </tr>
                <tr>
                	<td>
                    	<label for="jenis_product">Jenis Product </label>
                    </td>
                    <td>
                   	 	: <input type="radio"  name="jenis_product" value="laki"/>Laki-Laki <input type="radio"  name="jenis_product" value="perempuan"/>Perempuan
                    </td>
                </tr
                ><tr>
                	<td>
                    	<label for="harga">Harga </label>
                    </td>
                    <td>
                   	 	: <input type="text" name="harga"/>
                    </td>
                </tr>
                 <tr>
                	<td>
                    	<label for="lokasi">Gambar </label>
                    </td>
                    <td>
                   	 	: <input name="lokasi" type="file" id="lokasi" size="30" />
                    </td>
                </tr>
            	<tr>
                	<td colspan="2">
                    	<input class="submit" type="submit" value="Tambah" />
                    </td>
                </tr>
            </table>
            </form>
          <div id="left1">
        <h3>Member</h3>
        View Member <input name="Submit" type="button" value="View" onclick="pindah('index.php?page=12')"/>
        </div>    
        </div> 
        
    </div>
    
    <div id="list1">
		<table class="list">
 
        <tr style="background: -moz-linear-gradient(left bottom , rgba(0, 0, 0, 0.2) 0px, transparent 0.2%, transparent 99.8%, rgba(0, 0, 0, 0.2) 100%) repeat scroll 0% 0%, no-repeat scroll 50% 50%, -moz-linear-gradient(center bottom , rgb(552, 152, 102) 0px, rgb(594, 94, 94) 80%, rgb(594, 94, 94) 81%, rgb(552, 152, 102) 100%) repeat scroll 0% 0% transparent;">
        <td>No</td>
        <td>Nama</td>
        <td>Status</td>
        <td>Tanggal Pemesanan</td>
        <td>Harga Total</td>
        <td>Aksi</td>
        </tr>
       <tr>
       	<td style="border-bottom: 1px dotted #9FF;" colspan="6"></td>
       </tr>
        <tr>
       <?php  
	   	$query2 = mysql_query("select * from keranjang2 ");
		
				
				$j=1;
				while($baris1 = mysql_fetch_array($query2))
				{	
					
					echo '<tr>
						<td>'.$j.'</td>
						<td>'.$baris1[0].'</td>
						<td>'.$baris1[4].'</td>
	  				 	<td>'.$baris1[2].'</td>
						<td>'.$baris1[3].'</td>
						<td><a href="index.php?page=13&tanda='.$baris1[5].'">detail</a> | <a href="halaman/ubah.php?url=../index.php?page=7&kode='.$baris1[5].'&status=hapussubmit">hapus</a></td>
	 				 </tr>';
					
					 $j++;
				}
		?>
        </table>
    </div>
    

</body>
</html>
