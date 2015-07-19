<?php
//jika ada get(message)
if(isset($_GET['message'])){
	if ($_GET['message'] == 'addKategori') {?>
		<h3 style="color:red;">Berhasil Menambahkan Kategori</h3>	
	<?php
	}
	else if ($_GET['message'] == 'editKategori') {?>
		<h3 style="color:red;">Berhasil Mengedit Kategori</h3>	
	<?php
	}
	else if ($_GET['message'] == 'deleteKategori') {?>
		<h3 style="color:red;">Berhasil Menghapus Kategori</h3>	
	<?php
	}
	else if ($_GET['message'] == 'addDenda') {?>
		<h3 style="color:red;">Berhasil Mensetting Denda</h3>	
	<?php
	}
	else if ($_GET['message'] == 'addRak') {?>
		<h3 style="color:red;">Berhasil Menambah Rak</h3>	
	<?php
	}
	else if ($_GET['message'] == 'editRak') {?>
		<h3 style="color:red;">Berhasil Mengedit Rak</h3>	
	<?php
	}
	else if ($_GET['message'] == 'deleteRak') {?>
		<h3 style="color:red;">Berhasil Menghapus Rak</h3>	
	<?php
	}
	else if ($_GET['message'] == 'addUser') {?>
		<h3 style="color:red;">Berhasil Menambah Anggota</h3>	
	<?php
	}
	else if ($_GET['message'] == 'editUser') {?>
		<h3 style="color:red;">Berhasil Mengedit Anggota</h3>	
	<?php
	}
	else if ($_GET['message'] == 'deleteUser') {?>
		<h3 style="color:red;">Berhasil Menghapus Anggota</h3>	
	<?php
	}
	else if ($_GET['message'] == 'addBuku') {?>
		<h3 style="color:red;">Berhasil Menambah Buku</h3>	
	<?php
	}
	else if ($_GET['message'] == 'editBuku') {?>
		<h3 style="color:red;">Berhasil Mengedit Buku</h3>	
	<?php
	}
	else if ($_GET['message'] == 'deleteBuku') {?>
		<h3 style="color:red;">Berhasil Menghapus Buku</h3>	
	<?php
	}
	else if ($_GET['message'] == 'errorNamaUser') {?>
		<h3 style="color:red;">Nama Harus Diisi!</h3>	
	<?php
	}
	else if ($_GET['message'] == 'errorRak') {?>
		<h3 style="color:red;">Nama Rak Harus Diisi!</h3>	
	<?php
	}
	else if ($_GET['message'] == 'errorKategori') {?>
		<h3 style="color:red;">Nama Kategori Harus Diisi!</h3>	
	<?php
	}
	else if ($_GET['message'] == 'errorDendaHari') {?>
		<h3 style="color:red;">Hari Harus Diisi!</h3>	
	<?php
	}
	else if ($_GET['message'] == 'errorDendaDenda') {?>
		<h3 style="color:red;">Besaran Denda Harus Diisi!</h3>	
	<?php
	}
	else if ($_GET['message'] == 'errorBukuJudul') {?>
		<h3 style="color:red;">Judul Buku Harus Diisi!</h3>	
	<?php
	}
	else if ($_GET['message'] == 'errorBukuPengarang') {?>
		<h3 style="color:red;">Pengarang Buku Harus Diisi!</h3>	
	<?php
	}
	else if ($_GET['message'] == 'doPeminjaman') {?>
		<h3 style="color:red;">Peminjaman Buku Berhasil!</h3>	
	<?php
	}
	else if ($_GET['message'] == 'doPengembalian') {?>
		<h3 style="color:red;">Pengembalian Buku Berhasil! Data akan terecord di histori peminjaman</h3>	
	<?php
	}
}
?>