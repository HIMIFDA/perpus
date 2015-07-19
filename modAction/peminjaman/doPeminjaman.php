<?php
include "../../core/config.php";

//ambil data dari inputan
$user = $_POST['user'];
$buku = $_POST['buku'];
$user = mysqli_real_escape_string($config, $user);
$buku = mysqli_real_escape_string($config, $buku);
$tglPinjam = time();
$statusPengembalian = 0;

//input data peminjaman
$qPeminjaman = "INSERT INTO peminjaman(id_user, id_buku, tglPinjam, statusPengembalian)values('$user', '$buku', '$tglPinjam', '$statusPengembalian')";
$queryPeminjaman = mysqli_query($config, $qPeminjaman)or die(mysql_error($config));

//kurang stok buku
$qBuku = "UPDATE buku SET stok = stok-1 WHERE id_buku = '$buku'";
$queryBuku = mysqli_query($config, $qBuku)or die(mysqli_error($config));

//tambah status peminjaman
$qUser = "UPDATE user SET jumlahPinjam = jumlahPinjam+1 where id_user = '$user'";
$queryUser = mysqli_query($config, $qUser)or die(mysqli_error($config));


if($queryPeminjaman && $queryBuku && $queryUser){
	header('location:../../index.php?mod=peminjaman&&act=peminjaman&&message=doPeminjaman');
}

?>