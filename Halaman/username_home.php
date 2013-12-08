<html>
<head>
<link type="text/css" rel="stylesheet" href="../CSS/tes.css"/>
</head>
<body>
<?php 
	if(isset($_SESSION['username']))
				{
					echo "<div id='posisi'>Welcome: <a href='Halaman/profil.php'>".$_SESSION['username']."</a> <a href='Halaman/logout.php'>(Logout)</a></div>";
				}
?>
</body>
</html>