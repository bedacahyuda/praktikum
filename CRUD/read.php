<!DOCTYPE html>
<html>
<head>
<title>CRUD PHP</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>CRUD PHP</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link  href='https://fonts.googleapis.com/css?family=Noto+Sans' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<div id="pemulaan">
			<div id="header">
			<img src="logo.png" id="logo" alt="">
				
				</div>
					<div class="hapus"></div>
				<div id="kotak_ocehan">
Data Berita
<table border="1">
<tr>
<th>No</th>
<th>Judul Berita</th>
<th>Headline Berita</th>
<th>Isi Berita</th>
<th>Author</th>
<th>Tanggal Post</th>
<th>Aksi</th>
</tr>
<?php
require 'koneksi.php';
$no = 1;
$query = mysql_query("SELECT * FROM berita");
while ($hasil = mysql_fetch_array($query)) { ?>
<tr>
<td><?php echo $no++; ?></td>
<td><?php echo $hasil[1]?></td>
<td><?php echo $hasil[2]?></td>
<td><?php echo $hasil[3]?></td>
<td><?php echo $hasil[4]?></td>
<td><?php echo $hasil[5]?></td>
<td>
<a href="update.php?berita_id=<?php echo $hasil[0]?>">Update </a>
<a href="delete.php?berita_id=<?php echo $hasil[0]?>">Delete </a>
</td>
</tr>
<?php }?>
</table>
					
				</div>
			
	</body>
</html>
</body>
</html>