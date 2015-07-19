<?php
//jika ada get(id), maka itu berarti kita melakukan edit, maka form ini yang di tampilkan
if(isset($_GET['id'])){?>

	<h1>Edit Denda</h1>
	<form method="POST" action="modAction/denda/editDenda.php">
		<?php
		$id = $_GET['id'];
		$id = mysqli_real_escape_string($config, $id);
		$pickDenda = "SELECT * FROM denda WHERE id_denda='$id'";
		$denda = mysqli_query($config, $pickDenda)or die(mysqli_error($config));
		$data = mysqli_fetch_array($denda);
		?>
		<input type="hidden" name="id" value="<?php echo $data['id_denda']; ?>">
		Batas Hari :<input type="text" name="hari" value="<?php echo $data['hari']; ?>"><br>
		Denda Per Hari : <input type="text" name="denda" value="<?php echo $data['denda']; ?>"><br>
		<input type="submit" value="Submit">
	</form>

<?php
}
//jika tidak ada get(id), itu berarti kita tidak ingin melakukan update maka form ini yang di tampilkan
else if(!isset($_GET['id'])){
	$denda = "SELECT * FROM denda";
	$cekDenda = mysqli_query($config, $denda)or die(mysqli_error($config));
	if(mysqli_num_rows($cekDenda) == 0){?>

		<h1>Atur Denda</h1>
		<form method="POST" action="modAction/denda/addDenda.php">
			Batas Hari :<input type="text" name="hari"><br>
			Denda Per Hari : <input type="text" name="denda" placeholder="Rp. xxxx"><br>
			<input type="submit" value="Submit">
		</form>
	<?php
	}
	else if(mysqli_num_rows($cekDenda) >= 1){?>
		
	<?php
	}	
}
?>
