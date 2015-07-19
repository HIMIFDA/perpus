<?php
include "../core/config.php";

//ambil inputan dari form dan masukan ke variabel
$username = $_POST['username'];
$password = md5($_POST['password']);

//untuk mencegah sql injection gunakan mysqli_real_escape_string
$username = mysqli_real_escape_string($config, $username);
$password = mysqli_real_escape_string($config, $password);

//cek apakah ada di database atau tidak
$qLogin = "SELECT * FROM admin WHERE username='$username' && password='$password'";
$queryLogin = mysqli_query($config, $qLogin)or die(mysqli_error($config));
$data = mysqli_fetch_array($queryLogin);
//jika ada maka masukan session
if(mysqli_num_rows($queryLogin) == 1){
	session_start();
 	$_SESSION['username'] = $data['username'];
 	header('location:../index.php');
}
?>