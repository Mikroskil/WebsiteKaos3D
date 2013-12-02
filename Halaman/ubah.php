<?php 
	session_start();
	require('koneksi.php');
	$username=$_SESSION['username'];
	
	$url=$_GET['url'];
	$kode=$_GET['kode'];
	$status=$_GET['status'];

	if($status=="hapus"){
		$hapus=mysql_query("delete from keranjang where kode='".$kode."' && nm_pembeli='$username' && tanda='belum submit'"); 	
			if(!$hapus) die("Remove gagal.");
	}
	
	else if($status=="hapussubmit")
	{
		$hapus=mysql_query("delete from keranjang2 where tanda='".$kode."' && nm_pembeli='$username'"); 	
			if(!$hapus) die("Remove gagal.");
		$hapus2=mysql_query("delete from keranjang where tanda='".$kode."' && nm_pembeli='$username'"); 	
			if(!$hapus2) die("Remove gagal.");
	}
	
	else if($status=="hapususer");
	{
		$hapus=mysql_query("delete from user where username='$kode'"); 	
			if(!$hapus) die("Remove1 gagal.");
			
		$hapus1=mysql_query("delete from keranjang where username='$kode'"); 	
			
			
		$hapu2=mysql_query("delete from keranjang2 where username='$kode'"); 	
			
			
	}
	header("location:".$url);
?>