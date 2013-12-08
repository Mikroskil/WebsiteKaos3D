<?php
	session_start();
	require("koneksi.php");

	$no = $_GET['no'];
	$url = $_GET['url'];
	if(isset($_SESSION['username']))
	{
		$username=$_SESSION['username'];
		$cek = mysql_query("select nama_product from baju where kode='".$no."'");
		$pil = mysql_fetch_array($cek);
		$pil1=$pil['nama_product'];
	
		$cek = mysql_query("SELECT product FROM keranjang WHERE product='$pil1' AND nm_pembeli='$username'");
		$isi = mysql_num_rows($cek);
		if ($isi==0){
			mysql_query("INSERT INTO keranjang(jumlah,product,nm_pembeli)
										VALUES	(1,'$pil1','$username')");
			echo '1';
			echo $pil1;
			echo $username;
		}
		else {
			mysql_query("UPDATE keranjang SET jumlah = jumlah + 1 WHERE nm_pembeli= '$username' AND product='$pil1'");
		}	
	}
	//header("location:".$url);
?>