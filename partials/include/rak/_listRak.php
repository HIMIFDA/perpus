<h1>List Rak</h1>
<table border="1px" cellpadding="4px" cellspacing="4px">
	<thead>
		<th>No</th>
		<th>Rak</th>
		<th>Aksi</th>
	</thead>
	<tbody>
	<?php
	$no = 1;
	$qRak = "SELECT * FROM rak ORDER BY rak ASC";
	$queryRak = mysqli_query($config, $qRak)or die(mysqli_error($config));
	while($list = mysqli_fetch_array($queryRak)){
	?>
		<tr>
			<td><?php echo $no; ?></td>
			<td><?php echo $list['rak']; ?></td>
			<td><a href="index.php?mod=pengaturan&&act=rak&&id=<?php echo $list['id_rak']; ?>"><input type="submit" value="Edit"></a>
			 <a href="modAction/rak/deleteRak.php?id=<?php echo $list['id_rak']; ?>"><input type="submit" value="Delete"></a></td>
		</tr>
	<?php
	$no++;
	}
	?>
	</tbody>
</table>
