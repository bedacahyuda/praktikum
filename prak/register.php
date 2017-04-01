<!DOCTYPE html>
<html lang="en">
	<head>
		<<title>Pratikum Pemrograman WEB</title>
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
					<?php
require 'koneksi.php';
if (isset($_POST['submit'])) {
$username = $_POST['username'];
$password = $_POST['password'];
$privileges = $_POST['privileges'];
$query = mysql_query("INSERT into login VALUES('','$username','$password','$privileges')");
 if(query){
 header('location: ./login.php');
 } else{
 echo "Gagal register";
 }
}
?>
</head>
<body>
<form method="POST">
<u>REGISTER</u>
<center><table>
<tr>
<td>Username</td>
<td><input type="text" name="username"></td>
</tr>
<tr>
<td>Password</td>
<td><input type="password" name="password"></td>
</tr>
<tr>
<td>Hak akses</td>
<td>
<select name="privileges">
<option disabled selected>--pilih hak akses--</option>
<option value="1">Admin</option>
<option value="0">User biasa</option>
</select>
</td>
</tr>
<tr>
<td><input type="submit" name="submit" value="Register"></td>
</tr>
</table></center>
</form>
					
				</div>
			
	</body>
</html>