<?php 
	session_start();
	require('koneksi.php');
	$namafolder="../images/"; //tempat menyimpan file 
	
	if(isset($_POST['kode'])&& isset($_POST['nm_product']) && isset($_POST['harga']) && isset($_POST['jenis_product']) && !empty($_FILES["lokasi"]["tmp_name"])) {     
		$jenis_gambar=$_FILES['lokasi']['type'];     
		$nama_product=$_POST['nm_product'];     
		$harga=$_POST['harga'];
		$kode =$_POST['kode'];
		$tipe =$_POST['jenis_product'];
  
		if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/png")     {                    
			$gambar = $namafolder . basename($_FILES['lokasi']['name']);                
			if (move_uploaded_file($_FILES['lokasi']['tmp_name'], $gambar)) {             
				echo '<script>alert("Gambar berhasil dikirim")</script> ';             
				$sql="INSERT INTO baju VALUES ('$kode','$nama_product','$tipe',$harga,'$gambar')";             
				$res=mysql_query($sql) or die (mysql_error());  
			} 
			else {            
				echo '<script>alert("Gambar gagal dikirim")</script>';         
			}   
		} 
		else {         
			echo '<script>alert("Jenis gambar yang anda kirim salah. Harus .jpg .gif .png")</script>';   
		} 
	} 
	header('location:../index.php?page=7');
?>