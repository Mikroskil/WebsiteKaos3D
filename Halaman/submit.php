<?php 
	session_start();
	require('koneksi.php');
	$username=$_SESSION['username'];
	$jumlah=$_POST['jumlah'];
	$total_harga=0;
	$qty=0;
	
	do{
		$a=rand(100,10000);
		$q = mysql_query("select * from keranjang2 where tanda='$a'");
	
	}while(mysql_num_rows($q)>0);
	
	for($i=1; $i<=$jumlah; $i++){
		$kode=$_POST['kode'.$i];
		$cek=mysql_query("select * from keranjang where kode='".$kode."' && nm_pembeli='$username' && tanda='belum submit'");
		$pilih = mysql_fetch_array($cek);
		$pilih1=$pilih['jumlah'];
		
		$cek1=mysql_query("select harga from baju where kode=$kode");
		$pilih2 = mysql_fetch_array($cek1);
		$pilih3=$pilih2['harga'];
		
		mysql_query("update keranjang set tanda='$a' where nm_pembeli='$username' && kode='$kode' && tanda='belum submit'");
	//	echo $a."<br>";
		$qty+=$pilih1;
		$total_harga+=($pilih1*$pilih3);
	/*	echo $kode."<br>";
		echo $qty."<br>";
		echo $total_harga."<br>";
		*/
	}
	$tgl=date('y-m-d');
	mysql_query("INSERT INTO keranjang2(nm_pembeli,qty,tanggal_pesan,total,tanda)
										VALUES	('$username',$qty,'$tgl',$total_harga,'$a')");
	header("location:../index.php?page=2");
?>