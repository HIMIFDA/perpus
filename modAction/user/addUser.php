<?php
include "../../core/config.php";

if($_POST['nama'] == NULL){
	header('location:../../index.php?mod=pengaturan&&act=user&&message=errorNamaUser');
}
else{
	//ambil data dari inputan
	$nama = $_POST['nama'];
	//cegah sql injection
	$nama = mysqli_real_escape_string($config, $nama);

	//masukan data
	$qUser = "INSERT INTO user(nama)values('$nama')";
	$queryUser = mysqli_query($config, $qUser)or die(mysqli_error($config));
	//jika berhasil redirect ke halaman pengaturan kategori lagi
	if($queryUser){
		header('location:../../index.php?mod=pengaturan&&act=user&&message=addUser');
	}	
}
?>