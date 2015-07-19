<?php
include "../../core/config.php";
//ambil data dari inputan
$id = $_POST['id'];
$nama = $_POST['nama'];
//cegah sql injection
$id = mysqli_real_escape_string($config, $id);
$nama = mysqli_real_escape_string($config, $nama);
if($_POST['nama'] == NULL){
	header('location:../../index.php?mod=pengaturan&&act=user&&id='.$id.'&&message=errorNamaUser');
}
else{
	//update data
	$qUser = "UPDATE user SET nama = '$nama' WHERE id_user = '$id'";
	$queryUser = mysqli_query($config, $qUser)or die(mysqli_error($config));
	//jika berhasil redirect ke halaman pengaturan kategori lagi
	if($queryUser){
		header('location:../../index.php?mod=pengaturan&&act=user&&message=editUser');
	}	
}
?>