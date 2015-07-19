<?php
//jika ada get(id), maka itu berarti kita melakukan edit, maka form ini yang di tampilkan
if(isset($_GET['id'])){?>

	<h1>Edit Anggota</h1>
	<form method="POST" action="modAction/user/editUser.php">
		<?php
		$id = $_GET['id'];
		$id = mysqli_real_escape_string($config, $id);
		$pickUser = "SELECT * FROM user WHERE id_user='$id'";
		$user = mysqli_query($config, $pickUser)or die(mysqli_error($config));
		$data = mysqli_fetch_array($user);
		?>
		<input type="hidden" name="id" value="<?php echo $data['id_user']; ?>">
		<input type="text" name="nama" value="<?php echo $data['nama']; ?>">
		<input type="submit" value="Submit">
	</form>

<?php
}
//jika tidak ada get(id), itu berarti kita tidak ingin melakukan update maka form ini yang di tampilkan
else if(!isset($_GET['id'])){?>

		<h1>Tambah Anggota</h1>
		<form method="POST" action="modAction/user/addUser.php">
			<input type="text" name="nama" placeholder="Masukan Nama">
			<input type="submit" value="Submit">
		</form>


<?php
}
?>
