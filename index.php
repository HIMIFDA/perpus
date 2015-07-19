<?php
session_start();
include "core/config.php";
include "core/cekLogin.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sistem Informasi Perpustakan</title>
</head>
<body>
	<a href="index.php">Buku</a> |
	<a href="index.php?mod=anggota">Anggota</a> |
	<a href="index.php?mod=peminjaman">Peminjaman</a> |
	<a href="index.php?mod=pengaturan">Pengaturan</a> |
	<a href="modAction/doLogout.php">Log Out</a> |
	<br><hr><br>
	<!-- Pemecaham template untuk mempersimpel, tidak perlu menulis seluruh komponen html di setiap page-->
	<?php
	//cek apakah ada get(mod) atau tidak
		if(isset($_GET['mod'])){
			//jika ada get(mod), dan nilainya peminjaman, maka include page peminjaman yang ada di folder partials
			if($_GET['mod'] == 'peminjaman'){
				include "partials/peminjaman.php";
			}
			//jika ada get(mod), dan nilainya pengaturan, maka include page pengaturan yang ada di folder partials
			else if($_GET['mod'] == 'pengaturan'){
				include "partials/pengaturan.php";
			}
			else if($_GET['mod'] == 'anggota'){
				include "partials/anggota.php";
			}
		}
		//jika tidak ada get(mod) maka tampilkan halaman awal yaitu list, include page list yang ada di folder partials
		else if(!isset($_GET['mod'])){
			include "partials/list.php";
		}
	?>
		

</body>
</html>