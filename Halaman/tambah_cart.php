<?php
	session_start();
	require("koneksi.php");

	$no = $_GET['no'];
	$url = $_GET['url'];
	if(isset($_SESSION['username']))
	{
		$username=$_SESSION['username'];
	
	
		$cek = mysql_query("SELECT * FROM keranjang WHERE kode='$no' AND nm_pembeli='$username '");
		$isi = mysql_num_rows($cek);
		
		if ($isi==0 ){
			mysql_query("INSERT INTO keranjang(jumlah,kode,nm_pembeli)
										VALUES	(1,'$no','$username')");
			
		}
		else {
			$cek1 = mysql_query("SELECT * FROM keranjang WHERE kode='$no' AND nm_pembeli='$username ' AND tanda='belum submit'");
			$isi1 = mysql_num_rows($cek1);
			if($isi1>0){
				mysql_query("UPDATE keranjang SET jumlah = jumlah + 1 WHERE nm_pembeli= '$username' AND kode='$no' AND tanda='belum submit'");
			}
			
			else{
				mysql_query("INSERT INTO keranjang(jumlah,kode,nm_pembeli)
										VALUES	(1,'$no','$username')");
			}
		}	
	}
	header("location:".$url);
?>