<?php
include "../../core/config.php";

//ambil data dari inputan
$judul = $_POST['judul'];
$pengarang = $_POST['pengarang'];
$tahun = $_POST['tahun'];
$kategori = $_POST['kategori'];
$rak = $_POST['rak'];
$stok = $_POST['stok'];

//cegah sql injection
$judul = mysqli_real_escape_string($config, $judul);
$pengarang = mysqli_real_escape_string($config, $pengarang);
$tahun = mysqli_real_escape_string($config, $tahun);
$kategori = mysqli_real_escape_string($config, $kategori);
$rak = mysqli_real_escape_string($config, $rak);
$stok = mysqli_real_escape_string($config, $stok);
if($judul == NULL){
	header('location:../../index.php?mod=pengaturan&&act=buku&&message=errorBukuJudul');
}
else if($pengarang == NULL){
	header('location:../../index.php?mod=pengaturan&&act=buku&&message=errorBukuPengarang');
}
else{
	//masukan data
	$qBuku = "INSERT INTO buku(judul, pengarang, tahun, stok, id_kategori, id_rak)values('$judul', '$pengarang', '$tahun', '$stok', '$kategori', '$rak')";
	$queryBuku = mysqli_query($config, $qBuku)or die(mysqli_error($config));
	//jika berhasil redirect ke halaman pengaturan kategori lagi
	if($queryBuku){
		header('location:../../index.php?mod=pengaturan&&act=buku&&message=addBuku');
	}	
}
?>