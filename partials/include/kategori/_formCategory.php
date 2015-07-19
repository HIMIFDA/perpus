<?php
//jika ada get(id), maka itu berarti kita melakukan edit, maka form ini yang di tampilkan
if(isset($_GET['id'])){?>

	<h1>Edit Kategori Buku</h1>
	<form method="POST" action="modAction/kategori/editCategory.php">
		<?php
		$id = $_GET['id'];
		$id = mysqli_real_escape_string($config, $id);
		$pickCategory = "SELECT * FROM kategori WHERE id_kategori='$id'";
		$category = mysqli_query($config, $pickCategory)or die(mysqli_error($config));
		$data = mysqli_fetch_array($category);
		?>
		<input type="hidden" name="id" value="<?php echo $data['id_kategori']; ?>">
		<input type="text" name="kategori" value="<?php echo $data['kategori']; ?>">
		<input type="submit" value="Submit">
	</form>

<?php
}
//jika tidak ada get(id), itu berarti kita tidak ingin melakukan update maka form ini yang di tampilkan
else if(!isset($_GET['id'])){?>

		<h1>Tambah Kategori Buku</h1>
		<form method="POST" action="modAction/kategori/addCategory.php">
			<input type="text" name="kategori" placeholder="Masukan Kategori">
			<input type="submit" value="Submit">
		</form>


<?php
}
?>
