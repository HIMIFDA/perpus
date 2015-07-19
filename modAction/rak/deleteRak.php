<?php
include "../../core/config.php";

//ambil data dari get
$id = $_GET['id'];

//cegah sql injection
$id = mysqli_real_escape_string($config, $id);

//delete data
$qRak = "DELETE FROM rak WHERE id_rak = '$id'";
$queryRak = mysqli_query($config, $qRak)or die(mysqli_error($config));
//jika berhasil redirect ke halaman pengaturan kategori lagi
if($queryRak){
	header('location:../../index.php?mod=pengaturan&&act=rak&&message=deleteRak');
}	

?>