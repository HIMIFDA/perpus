<?php
//jika ada get(id), maka itu berarti kita melakukan edit, maka form ini yang di tampilkan
if(isset($_GET['id'])){?>

	<h1>Edit Rak</h1>
	<form method="POST" action="modAction/rak/editRak.php">
		<?php
		$id = $_GET['id'];
		$id = mysqli_real_escape_string($config, $id);
		$pickRak = "SELECT * FROM rak WHERE id_rak='$id'";
		$rak = mysqli_query($config, $pickRak)or die(mysqli_error($config));
		$data = mysqli_fetch_array($rak);
		?>
		<input type="hidden" name="id" value="<?php echo $data['id_rak']; ?>">
		<input type="text" name="rak" value="<?php echo $data['rak']; ?>">
		<input type="submit" value="Submit">
	</form>

<?php
}
//jika tidak ada get(id), itu berarti kita tidak ingin melakukan update maka form ini yang di tampilkan
else if(!isset($_GET['id'])){?>

		<h1>Tambah Rak</h1>
		<form method="POST" action="modAction/rak/addRak.php">
			<input type="text" name="rak" placeholder="Masukan Nama Rak">
			<input type="submit" value="Submit">
		</form>


<?php
}
?>
