<?php
include "../../core/config.php";

//ambil data dari inputan
$hari = $_POST['hari'];
$denda = $_POST['denda'];

//cegah sql injection
$hari = mysqli_real_escape_string($config, $hari);
$denda = mysqli_real_escape_string($config, $denda);
if($hari == NULL){
	header('location:../../index.php?mod=pengaturan&&act=denda&&message=errorDendaHari');
}
else if($denda == NULL){
	header('location:../../index.php?mod=pengaturan&&act=denda&&message=errorDendaDenda');
}
else{
	//masukan data
	$qDenda = "INSERT INTO denda(hari, denda)values('$hari', '$denda')";
	$queryDenda = mysqli_query($config, $qDenda)or die(mysqli_error($config));
	//jika berhasil redirect ke halaman pengaturan kategori lagi
	if($queryDenda){
		header('location:../../index.php?mod=pengaturan&&act=denda&&message=addDenda');
	}	
}
?>