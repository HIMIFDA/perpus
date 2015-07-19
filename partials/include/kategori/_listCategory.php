<h1>List Kategori Buku</h1>
<table border="1px" cellpadding="4px" cellspacing="4px">
	<thead>
		<th>No</th>
		<th>Kategori</th>
		<th>Aksi</th>
	</thead>
	<tbody>
	<?php
	$no = 1;
	$qKategori = "SELECT * FROM kategori ORDER BY kategori ASC";
	$queryKategori = mysqli_query($config, $qKategori)or die(mysqli_error($config));
	while($list = mysqli_fetch_array($queryKategori)){
	?>
		<tr>
			<td><?php echo $no; ?></td>
			<td><?php echo $list['kategori']; ?></td>
			<td><a href="index.php?mod=pengaturan&&act=kategori&&id=<?php echo $list['id_kategori']; ?>"><input type="submit" value="Edit"></a>
			 <a href="modAction/kategori/deleteCategory.php?id=<?php echo $list['id_kategori']; ?>"><input type="submit" value="Delete"></a></td>
		</tr>
	<?php
	$no++;
	}
	?>
	</tbody>
</table>
