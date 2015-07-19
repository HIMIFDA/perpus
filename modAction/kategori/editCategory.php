<?php
include "../../core/config.php";

//ambil data dari inputan
$id = $_POST['id'];
$kategori = $_POST['kategori'];
//cegah sql injection
$id = mysqli_real_escape_string($config, $id);
$kategori = mysqli_real_escape_string($config, $kategori);
if($kategori == NULL){
	header('location:../../index.php?mod=pengaturan&&act=kategori&&id='.$id.'&&message=errorKategori');
}
else{
	//update data
	$qKategori = "UPDATE kategori SET kategori = '$kategori' WHERE id_kategori = '$id'";
	$queryKategori = mysqli_query($config, $qKategori)or die(mysqli_error($config));
	//jika berhasil redirect ke halaman pengaturan kategori lagi
	if($queryKategori){
		header('location:../../index.php?mod=pengaturan&&act=kategori&&message=editKategori');
	}
}	

?>