<?php
//jika ada get(id), maka itu berarti kita melakukan edit, maka form ini yang di tampilkan
if(isset($_GET['id'])){?>

	<h1>Edit Anggota</h1>
	<form method="POST" action="modAction/buku/editBuku.php">
		<?php
		$id = $_GET['id'];
		$id = mysqli_real_escape_string($config, $id);
		$pickBuku = "SELECT * FROM buku WHERE id_buku='$id'";
		$buku = mysqli_query($config, $pickBuku)or die(mysqli_error($config));
		$data = mysqli_fetch_array($buku);
		?>
		<input type="hidden" name="id" value="<?php echo $data['id_buku']; ?>">
		Judul : <input type="text" name="judul" value="<?php echo $data['judul']; ?>"><br><br>
					Pengarang : <input type="text" name="pengarang" value="<?php echo $data['pengarang']; ?>"><br><br>
					Tahun : <select name="tahun">
							<?php
							$tanggal = date('Y-m-d');
							$ambilTahun = substr($tanggal, 0, 4);
							for($tahun = 1990; $tahun <= $ambilTahun; $tahun++){
							?>
								<option value="<?php echo $tahun; ?>" <?php if($tahun == $data['tahun']){ echo "selected"; } ?>><?php echo $tahun; ?></option>	
							<?php
							}
							?>			
					</select><br><br>
					Kategori : <select name="kategori">
					<?php
					$qKategori = "SELECT * FROM kategori ORDER BY kategori ASC";
					$queryKategori = mysqli_query($config, $qKategori)or die(mysqli_error($config));
					while($kategori = mysqli_fetch_array($queryKategori)){
					?>
							<option value="<?php echo $kategori['id_kategori']; ?>" <?php if($kategori['id_kategori'] == $data['id_kategori']){ echo "selected"; } ?>><?php echo $kategori['kategori']; ?></option>				
					<?php
					}
					?>
					</select><br><br>
					Rak : <select name="rak">
					<?php
					$qRak = "SELECT * FROM rak ORDER BY rak ASC";
					$queryRak = mysqli_query($config, $qRak)or die(mysqli_error($config));
					while($rak = mysqli_fetch_array($queryRak)){
					?>
							<option value="<?php echo $rak['id_rak']; ?>" <?php if($rak['id_rak'] == $data['id_rak']){ echo "selected"; } ?>><?php echo $rak['rak']; ?></option>				
					<?php
					}
					?>
					</select><br><br>
					Stok : <select name="stok">
						<?php
						for($stok = 1; $stok <= 50; $stok++){
						?>
						<option value="<?php echo $stok; ?>"  <?php if($stok == $data['stok']){ echo "selected"; } ?>><?php echo $stok; ?></option>
						<?php
						}
						?>
					</select><br><br>
					<input type="submit" value="Submit">
	</form>

<?php
}
//jika tidak ada get(id), itu berarti kita tidak ingin melakukan update maka form ini yang di tampilkan
else if(!isset($_GET['id'])){?>

		<h1>Tambah Buku</h1>
		<form method="POST" action="modAction/buku/addBuku.php">
			Judul : <input type="text" name="judul" placeholder="Masukan Judul"><br><br>
			Pengarang : <input type="text" name="pengarang" placeholder="Masukan Pengarang"><br><br>
			Tahun : <select name="tahun">
					<?php
					$tanggal = date('Y-m-d');
					$ambilTahun = substr($tanggal, 0, 4);
					for($tahun = 1990; $tahun <= $ambilTahun; $tahun++){
					?>
						<option value="<?php echo $tahun; ?>"><?php echo $tahun; ?></option>	
					<?php
					}
					?>			
			</select><br><br>
			Kategori : <select name="kategori">
			<?php
			$qKategori = "SELECT * FROM kategori ORDER BY kategori ASC";
			$queryKategori = mysqli_query($config, $qKategori)or die(mysqli_error($config));
			while($kategori = mysqli_fetch_array($queryKategori)){
			?>
					<option value="<?php echo $kategori['id_kategori']; ?>"><?php echo $kategori['kategori']; ?></option>				
			<?php
			}
			?>
			</select><br><br>
			Rak : <select name="rak">
			<?php
			$qRak = "SELECT * FROM rak ORDER BY rak ASC";
			$queryRak = mysqli_query($config, $qRak)or die(mysqli_error($config));
			while($rak = mysqli_fetch_array($queryRak)){
			?>
					<option value="<?php echo $rak['id_rak']; ?>"><?php echo $rak['rak']; ?></option>				
			<?php
			}
			?>
			</select><br><br>
			Stok : <select name="stok">
				<?php
				for($stok = 1; $stok <= 50; $stok++){
				?>
				<option value="<?php echo $stok; ?>"><?php echo $stok; ?></option>
				<?php
				}
				?>
			</select><br><br>
			<input type="submit" value="Submit">
		</form>


<?php
}
?>
