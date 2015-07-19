<?php
include "../../core/config.php";

//ambil data dari inputan
$id = $_POST['id'];
$rak = $_POST['rak'];
//cegah sql injection
$id = mysqli_real_escape_string($config, $id);
$rak = mysqli_real_escape_string($config, $rak);
if($_POST['rak'] == NULL){
	header('location:../../index.php?mod=pengaturan&&act=rak&&id='.$id.'&&message=errorRak');
}
else{
	//update data
	$qRak = "UPDATE rak SET rak = '$rak' WHERE id_rak = '$id'";
	$queryRak = mysqli_query($config, $qRak)or die(mysqli_error($config));
	//jika berhasil redirect ke halaman pengaturan kategori lagi
	if($queryRak){
		header('location:../../index.php?mod=pengaturan&&act=rak&&message=editRak');
	}	
}
?>