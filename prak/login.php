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
if (isset($_POST['submit'])) {
$username = $_POST['username'];
$password = $_POST['password'];
$query = mysql_query("SELECT * FROM login WHERE username =
'$username' AND password ='$password' LIMIT 1");
$hasil = mysql_fetch_array($query);
if ($hasil) {
$_SESSION['username'] = $username;
$_SESSION['password'] = $password;
if($hasil['privilege'] == 1){
header('location: ./home_admin.php');
} else{
header('location: ./home_user.php');
}
} else {
echo 'Invalid password.';
}
}
?>
</head>
<body>
<form method="POST">
<u>Login</u>
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
<td><input type="submit" name="submit" value="Login"></td>
</tr>
</table></center>
</form>
					
				</div>
			
	</body>
</html>