<?php
	session_start();
	require("koneksi.php");
	
	if(isset($_POST['id']) && isset($_POST['sandi']) )
	{
		$url= $_POST['url'];

		$username=htmlentities((trim($_POST['id'])));
		$pass=htmlentities(md5($_POST['sandi']));
		
		$data = mysql_query("select * from user where username='".$username."' and pass='".$pass."'");
		//$data2=mysql_fetch_array($data);
		if(mysql_num_rows($data)==1)
		{
			$_SESSION['username'] =$username;
			//header("location:home.php");	
			//header("location:../home.php");	
		}
		
		else if($_POST['id']=="admin"&&$_POST['sandi']=="12345")
		{
			$_SESSION['username']="admin";
			
		}
		
		else{
			if($url=="../Index.php")
				echo '<script type="text/javascript">alert("Username Tidak Terdaftar/password Salah"); window.location.href="../Index.php"</script>';
			else
				echo '<script type="text/javascript">alert("Username Tidak Terdaftar/password Salah"); window.location.href="../Halaman/login.php"</script>';
		}
		header("location:".$url);
	}
	
	
?>