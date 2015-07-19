<?php
include "../../core/config.php";

//ambil data dari inputan
$rak = $_POST['rak'];
//cegah sql injection
$rak = mysqli_real_escape_string($config, $rak);

if($rak == NULL){
	header('location:../../index.php?mod=pengaturan&&act=rak&&message=errorRak');
}
else{
	
	//masukan data
	$qRak = "INSERT INTO rak(rak)values('$rak')";
	$queryRak = mysqli_query($config, $qRak)or die(mysqli_error($config));
	//jika berhasil redirect ke halaman pengaturan kategori lagi
	if($queryRak){
		header('location:../../index.php?mod=pengaturan&&act=rak&&message=addRak');
	}
}	

?>