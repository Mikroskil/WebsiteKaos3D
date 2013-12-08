<?php 
	session_start();
	require('koneksi.php');
	$namafolder="../images/"; //tempat menyimpan file 
	
	if(isset($_POST['kode'])&& isset($_POST['nm_product']) && isset($_POST['harga']) && !empty($_FILES["lokasi"]["tmp_name"])) {     
		$jenis_gambar=$_FILES['lokasi']['type'];     
		$nama_product=$_POST['nm_product'];     
		$harga=$_POST['harga'];
		$kode =$_POST['kode'];
		echo $nama_product;
				echo $jenis_gambar;
				echo $harga;    
		if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/png")     {                    
			$gambar = $namafolder . basename($_FILES['lokasi']['name']);                
			if (move_uploaded_file($_FILES['lokasi']['tmp_name'], $gambar)) {             
				echo "Gambar berhasil dikirim ".$gambar;             
				$sql="INSERT INTO baju VALUES ('$kode','$nama_product',$harga,'$gambar')";             
				$res=mysql_query($sql) or die (mysql_error());  
				echo $nama_product;
				echo $jenis_gambar;
				echo $harga;       
			} 
			else {            
				echo "Gambar gagal dikirim";         
			}   
		} 
		else {         
			echo "Jenis gambar yang anda kirim salah. Harus .jpg .gif .png";   
		} 
	} 
?>