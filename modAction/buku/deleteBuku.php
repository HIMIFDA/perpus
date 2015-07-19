<?php
include "../../core/config.php";

//ambil data dari get
$id = $_GET['id'];

//cegah sql injection
$id = mysqli_real_escape_string($config, $id);

//delete data
$qBuku = "DELETE FROM buku WHERE id_buku = '$id'";
$queryBuku = mysqli_query($config, $qBuku)or die(mysqli_error($config));
//jika berhasil redirect ke halaman pengaturan kategori lagi
if($queryBuku){
	header('location:../../index.php?mod=pengaturan&&act=buku&&message=deleteBuku');
}	

?>