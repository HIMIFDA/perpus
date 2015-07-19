<?php
include "../../core/config.php";

//ambil data dari inputan
$kategori = $_POST['kategori'];
//cegah sql injection
$kategori = mysqli_real_escape_string($config, $kategori);
if($kategori == NULL){
	header('location:../../index.php?mod=pengaturan&&act=kategori&&message=errorKategori');
}
else{
	//masukan data
	$qKategori = "INSERT INTO kategori(kategori)values('$kategori')";
	$queryKategori = mysqli_query($config, $qKategori)or die(mysqli_error($config));
	//jika berhasil redirect ke halaman pengaturan kategori lagi
	if($queryKategori){
		header('location:../../index.php?mod=pengaturan&&act=kategori&&message=addKategori');
	}	
}
?>