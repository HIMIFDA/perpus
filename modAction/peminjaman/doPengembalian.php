<?php
include "../../core/config.php";

//ambil data dari inputan
$peminjaman = $_POST['peminjaman'];
$user = $_POST['user'];
$buku = $_POST['buku'];
$denda = $_POST['denda'];
$peminjaman = mysqli_real_escape_string($config, $peminjaman);
$user = mysqli_real_escape_string($config, $user);
$buku = mysqli_real_escape_string($config, $buku);
$denda = mysqli_real_escape_string($config, $denda);
$tglBalik = time();

//tambahkan stok 1
$qBuku = "UPDATE buku SET stok = stok+1 where id_buku = '$buku'";
$queryBuku = mysqli_query($config, $qBuku)or die(mysqli_error($config));

//kurangkan jumlah pinjam si user
$qUser = "UPDATE user SET jumlahPinjam = jumlahPinjam-1 WHERE id_user = '$user'";
$queryUser = mysqli_query($config, $qUser)or die(mysqli_error($config));

//set statuspengembalian 1
$qPeminjaman = "UPDATE peminjaman SET statusPengembalian = '1', denda = '$denda', tglBalik = '$tglBalik' WHERE id_peminjaman = '$peminjaman'";
$queryPeminjaman = mysqli_query($config, $qPeminjaman)or die(mysqli_query($config));

if($queryBuku && $queryUser && $queryPeminjaman){
	header('location:../../index.php?mod=peminjaman&&act=laporan&&message=doPengembalian');
}
?>