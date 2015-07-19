<a href="index.php?mod=peminjaman&&act=peminjaman"><input type="submit" name="buku" value="Peminjaman"></a>
<a href="index.php?mod=peminjaman&&act=laporan"><input type="submit" name="buku" value="Laporan Peminjaman"></a>
<a href="index.php?mod=peminjaman&&act=histori"><input type="submit" name="kategori" value="Histori Peminjaman"></a>
<br><br>

	<?php
		//jika berhasil melakukan add, edit, delete, maka munculkan notification yang ada di proses di file notification.php
		include "include/notification.php";	
	?>
	

<?php
if(isset($_GET['act'])){
	if($_GET['act'] == 'peminjaman'){?>
	<!-- jika pengguna memilih peminjaman, maka eksekusi bagian ini, tampilkan bagian ini-->	
			
			<?php
			include "include/peminjaman/peminjaman.php";
			?>

			
	<?php
	}
	else if($_GET['act'] == 'laporan'){?>
	<!-- jika pengguna memilih laporan, maka eksekusi bagian ini, tampilkan bagian ini-->
		
			<?php
			include "include/peminjaman/laporan.php";
			?>

		
	<?php
	}
	else if($_GET['act'] == 'histori'){?>
	<!-- jika pengguna memilih pengaturan denda, maka eksekusi bagian ini, tampilkan bagian ini-->
			
			<?php
			include "include/peminjaman/histori.php";
			?>

	<?php
	}
	}
else if(!isset($_GET['act'])){?>
	<h1>Peminjaman</h1>
<?php
}
?>
