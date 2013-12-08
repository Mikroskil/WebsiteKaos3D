<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Administrator</title>
	<link href="../CSS/contoh2.css" rel="stylesheet" type="text/css" />
	
</head>

<body>
    <h2 align="center">Welcome Master</h2>
    <div id="contain1">
    	<div id="right">
        	<div id="right1">
            <h3>Data</h3>
            </div>
        Total Penjualan<br />
        Total Pesanan<br />
        Jumlah Member<br />
        </div>
        
        <div id="left">
        	<div id="left1">
            	<h3>File</h3>
            </div>
            <form name="tambah" action="halaman/tambah.php" method="post">
            <div id="a">
            	<label for="id">Nama Product </label><br /><br />
				<label for="sandi">Harga </label><br /><br />
                <label for="sandi">Harga </label>
          	</div>
        		
            <div id="b">
            	: <input type="text" placeholder="enter your username" name="id"/><br />	
            	: <input type="password" placeholder="********" name="sandi"/>
                : <input name="nama_file" type="file" id="nama_file" size="30" />
            </div>
			<input class="submit" id="warna" type="submit" value="login" />
            </form>
        </div>      
    </div> <!-- end of contain -->
    
    <div id="list">
		<table class="list">
        <thead>
        <tr>
        <td>ID Member</td>
        <td>Nama</td>
        <td>Status</td>
        <td>Tanggal Pemesanan</td>
        <td>Harga Total</td>
        <td>Aksi</td>
        </tr>
        </thead>
        <tr>
        <td>11.111.2727</td>
        <td>Warrick</td>
        <td>Processing</td>
        <td>26/10/2013</td>
        <td>Rp.10.000.000,-</td>
        <td>[<a href="">View</a>]</td>
        </tr>
        </table>
    </div>
    

</body>
</html>
