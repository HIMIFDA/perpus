<h1>Denda</h1>
<table border="1px" cellpadding="4px" cellspacing="4px">
	<thead>
		<th>-</th>
		<th>Batas Peminjaman (Hari)</th>
		<th>Denda</th>
		<th>Aksi</th>
	</thead>
	<tbody>
	<?php
	$no = 1;
	$qDenda = "SELECT * FROM denda";
	$queryDenda = mysqli_query($config, $qDenda)or die(mysqli_error($config));
	while($list = mysqli_fetch_array($queryDenda)){
	?>
		<tr>
			<td></td>
			<td><?php echo $list['hari']; ?></td>
			<td><?php echo $list['denda']; ?></td>
			<td><a href="index.php?mod=pengaturan&&act=denda&&id=<?php echo $list['id_denda']; ?>"><input type="submit" value="Edit"></a></td>
		</tr>
	<?php
	$no++;
	}
	?>
	</tbody>
</table>
