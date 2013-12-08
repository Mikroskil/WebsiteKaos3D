<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Register</title>
	<link href="../CSS/contoh2.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="../Javascript/reqex_register.js"> </script>
</head>

<body>
    
    <div style="height:500px;">
    	<h1 align="center"><font face="Lucida Sans Unicode, Lucida Grande, sans-serif" >Member List</font></h1>
    	<div id="list1">
        <table class="list">
 
        <tr style="background: -moz-linear-gradient(left bottom , rgba(0, 0, 0, 0.2) 0px, transparent 0.2%, transparent 99.8%, rgba(0, 0, 0, 0.2) 100%) repeat scroll 0% 0%, no-repeat scroll 50% 50%, -moz-linear-gradient(center bottom , rgb(552, 152, 102) 0px, rgb(594, 94, 94) 80%, rgb(594, 94, 94) 81%, rgb(552, 152, 102) 100%) repeat scroll 0% 0% transparent;">
        <td>No</td>
        <td>Username</td>
        <td>Full Name</td>
        <td>Register Date</td>
        <td>Member Profile</td>
        <td>Delete</td>
        </tr>
       <tr>
       	<td style="border-bottom: 1px dotted #9FF;" colspan="6"></td>
       </tr>
        <?php
			$query = mysql_query("select * from user ");
		
				
			$j=1;
			while($baris = mysql_fetch_array($query))
			{	
					
				echo '<tr>
					<td>'.$j.'</td>
					<td>'.$baris[4].'</td>
					<td>'.$baris[1].' '.$baris[2].'</td>
	  			 	<td>'.$baris[12].'</td>
					<td>[<a href="index.php?page=14">View</a>]</td>
					<td><a href="halaman/ubah.php?url=../index.php?page=12&kode='.$baris[4].'&status=hapususer"><img src="images/hapus.png" alt="Ubah" name="hapus"></a></td>
	 			 </tr>';
					
				 $j++;
			}
		?>
        </table>
	</div>
   
    </div> 



</body>
</html>
