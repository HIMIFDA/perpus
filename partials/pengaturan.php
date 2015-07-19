<a href="index.php?mod=pengaturan&&act=buku"><input type="submit" name="buku" value="Pengaturan Buku"></a>
<a href="index.php?mod=pengaturan&&act=kategori"><input type="submit" name="kategori" value="Pengaturan Kategori"></a>
<a href="index.php?mod=pengaturan&&act=denda"><input type="submit" name="denda" value="Pengaturan Denda"></a>
<a href="index.php?mod=pengaturan&&act=rak"><input type="submit" name="rak" value="Pengaturan Rak Buku"></a>
<a href="index.php?mod=pengaturan&&act=user"><input type="submit" name="user" value="Pengaturan Anggota"></a>
	

	<?php
		//jika berhasil melakukan add, edit, delete, maka munculkan notification yang ada di proses di file notification.php
		include "include/notification.php";	
	?>
	

<?php
if(isset($_GET['act'])){
	if($_GET['act'] == 'buku'){?>
	<!-- jika pengguna memilih pengaturan buku, maka eksekusi bagian ini, tampilkan bagian ini-->	
			
			<?php
			//include form
			include "include/buku/_formBuku.php";
			?>

			<br>
					
			<?php
			//include list
			include "include/buku/_listBuku.php";
			?>


	<?php
	}
	else if($_GET['act'] == 'kategori'){?>
	<!-- jika pengguna memilih pengaturan kategori, maka eksekusi bagian ini, tampilkan bagian ini-->
		
			<?php
			//include form
			include "include/kategori/_formCategory.php";
			?>

			<br>
					
			<?php
			//include list
			include "include/kategori/_listCategory.php";
			?>

	<?php
	}
	else if($_GET['act'] == 'denda'){?>
	<!-- jika pengguna memilih pengaturan denda, maka eksekusi bagian ini, tampilkan bagian ini-->
		
			<?php
			//include form
			include "include/denda/_formDenda.php";
			?>

			<br>
					
			<?php
			//include list
			include "include/denda/_listDenda.php";
			?>

	<?php
	}
	else if($_GET['act'] == 'rak'){?>
	<!-- jika pengguna memilih pengaturan rak, maka eksekusi bagian ini, tampilkan bagian ini-->
			
			<?php
			//include form
			include "include/rak/_formRak.php";
			?>

			<br>
					
			<?php
			//include list
			include "include/rak/_listRak.php";
			?>
	

	<?php
	}
	else if($_GET['act'] == 'user'){?>
	<!-- jika pengguna memilih pengaturan user, maka eksekusi bagian ini, tampilkan bagian ini-->

			<?php
			//include form
			include "include/user/_formUser.php";
			?>

			<br>
					
			<?php
			//include list
			include "include/user/_listUser.php";
			?>


	<?php
	}
}
else if(!isset($_GET['act'])){?>
	<h1>Hello</h1>
<?php
}
?>
