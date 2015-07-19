<?php
session_start();
//cek jika session ada, maka redirect ke page index
if(isset($_SESSION['username'])){
	header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sistem Informasi Perpustakaan</title>
</head>
<body>
	
	<!-- form untuk login-->
	<form method="POST" action="modAction/doLogin.php">
		<input type="text" name="username" placeholder="username">
		<input type="password" name="password" placeholder="password">
		<input type="submit" name="Log in">
	</form>

</body>
</html>