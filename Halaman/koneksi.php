<?php
	$con = mysql_connect("localhost","root","");
	if(!$con) die("Koneksi ke SQL Gagal.");
	
	$db= mysql_select_db("web3d",$con);
	if(!$db) die("Database tidak ditemukan.");
?>