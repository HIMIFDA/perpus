<?php
include "../../core/config.php";

//ambil data dari get
$id = $_GET['id'];

//cegah sql injection
$id = mysqli_real_escape_string($config, $id);

//delete data
$qUser = "DELETE FROM user WHERE id_user = '$id'";
$queryUser = mysqli_query($config, $qUser)or die(mysqli_error($config));
//jika berhasil redirect ke halaman pengaturan kategori lagi
if($queryUser){
	header('location:../../index.php?mod=pengaturan&&act=user&&message=deleteUser');
}	

?>