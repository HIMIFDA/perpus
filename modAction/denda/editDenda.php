<?php
include "../../core/config.php";

//ambil data dari inputan
$id = $_POST['id'];
$hari = $_POST['hari'];
$denda = $_POST['denda'];
//cegah sql injection
$id = mysqli_real_escape_string($config, $id);
$hari = mysqli_real_escape_string($config, $hari);
$denda = mysqli_real_escape_string($config, $denda);
if($hari == NULL){
	header('location:../../index.php?mod=pengaturan&&act=denda&&id='.$id.'&&message=errorDendaHari');
}
else if($denda == NULL){
	header('location:../../index.php?mod=pengaturan&&act=denda&&id='.$id.'&&message=errorDendaDenda');
}
else{
	//update data
	$qDenda = "UPDATE denda SET hari = '$hari', denda = '$denda' WHERE id_denda = '$id'";
	$queryDenda = mysqli_query($config, $qDenda)or die(mysqli_error($config));
	//jika berhasil redirect ke halaman pengaturan kategori lagi
	if($queryDenda){
		header('location:../../index.php?mod=pengaturan&&act=denda&&message=addDenda');
	}	
}
?>