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
session_start();
if($_SESSION['username']){
echo "Home Admin, selamat datang: ".$_SESSION['username'];?>
<br>
<a href="logout.php">Logout</a>
<?php } else{
header('location: ./login.php');
}
?>
					
				</div>
			
	</body>
</html>