<html>
<head>
<link type="text/css" rel="stylesheet" href="../CSS/tes.css"/>
<link rel="stylesheet" href="CSS/menubar.css" type="text/css">
</head>
<body>
<?php 
	if(isset($_SESSION['username']))
				{
					echo "<div id='posisi'><h3 align='center'><font color='#FF6600'>Welcome</font> &nbsp;</h3> <a href='Halaman/profil.php'>Profile&nbsp;".$_SESSION['username']."</a><hr> <a href='Halaman/logout.php' style='width:75px;'>(Logout)</a></div>";
				}
?>


</body>
</html>