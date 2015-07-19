<?php
include "../../core/config.php";

//ambil data dari get
$id = $_GET['id'];

//cegah sql injection
$id = mysqli_real_escape_string($config, $id);

//delete data
$qKategori = "DELETE FROM kategori WHERE id_kategori = '$id'";
$queryKategori = mysqli_query($config, $qKategori)or die(mysqli_error($config));
//jika berhasil redirect ke halaman pengaturan kategori lagi
if($queryKategori){
	header('location:../../index.php?mod=pengaturan&&act=kategori&&message=delete');
}	

?>