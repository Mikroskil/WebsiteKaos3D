<?php 
	require('koneksi.php');
	$title =$_POST['gender'];
	$nama1 = $_POST['firstname'];
	$nama2 = $_POST['lastname'];
	$email = $_POST['email'];
	$username =$_POST['username'];
	$password = $_POST['passwd1'];
	$tanggal = $_POST['days'];
	$alamat = $_POST['address'];
	$provinsi = $_POST['country'];
	$telp = $_POST['pnum'];
	$kota = $_POST['city'];
	$kodepos = $_POST['postcode'];
	$password2=md5($password);
	$cek = mysql_query("select * from user where username='$username'");
			if(mysql_num_rows($cek)>0) die("Username $username sudah ada.");
	else {
	$input = mysql_query("insert into user values('$title','$nama1','$nama2','$email','$username','$password2','$tanggal','$alamat','$telp','$provinsi','$kota','$kodepos')");
	}
	header('location:Halaman/register.php');
?>