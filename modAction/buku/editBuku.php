<?php
include "../../core/config.php";

//ambil data dari inputan
$id = $_POST['id'];
$judul = $_POST['judul'];
$pengarang = $_POST['pengarang'];
$tahun = $_POST['tahun'];
$kategori = $_POST['kategori'];
$rak = $_POST['rak'];
$stok = $_POST['stok'];

//cegah sql injection
$id = mysqli_real_escape_string($config, $id);
$judul = mysqli_real_escape_string($config, $judul);
$pengarang = mysqli_real_escape_string($config, $pengarang);
$tahun = mysqli_real_escape_string($config, $tahun);
$kategori = mysqli_real_escape_string($config, $kategori);
$rak = mysqli_real_escape_string($config, $rak);
$stok = mysqli_real_escape_string($config, $stok);
if($judul == NULL){
	header('location:../../index.php?mod=pengaturan&&act=buku&&id='.$id.'&&message=errorBukuJudul');
}
else if($pengarang == NULL){
	header('location:../../index.php?mod=pengaturan&&act=buku&&id='.$id.'&&message=errorBukuPengarang');
}
else{
	//masukan data
	$qBuku = "UPDATE buku SET judul='$judul', pengarang='$pengarang', tahun='$tahun', stok='$stok', id_kategori='$kategori', id_rak='$rak' WHERE id_buku='$id'";
	$queryBuku = mysqli_query($config, $qBuku)or die(mysqli_error($config));
	//jika berhasil redirect ke halaman pengaturan kategori lagi
	if($queryBuku){
		header('location:../../index.php?mod=pengaturan&&act=buku&&message=editBuku');
	}	
}
?>