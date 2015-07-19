<h1>List Buku</h1>
<table border="1px" cellpadding="4px" cellspacing="4px">
	<thead>
		<th>No</th>
		<th>Judul</th>
		<th>Pengarang</th>
		<th>Tahun</th>
		<th>Kategori</th>
		<th>Rak</th>
		<th>Stok</th>
		<th>Status</th>
	</thead>
	<tbody>
	<?php
	$no = 1;
	$qBuku = "SELECT * FROM buku b
			  INNER JOIN kategori k ON b.id_kategori=k.id_kategori
              INNER JOIN rak r ON b.id_rak=r.id_rak
              ORDER BY judul ASC";
	$queryBuku = mysqli_query($config, $qBuku)or die(mysqli_error($config));
	while($list = mysqli_fetch_array($queryBuku)){
	?>
		<tr>
			<td><?php echo $no; ?></td>
			<td><?php echo $list['judul']; ?></td>
			<td><?php echo $list['pengarang']; ?></td>
			<td><?php echo $list['tahun']; ?></td>
			<td><?php echo $list['kategori']; ?></td>
			<td><?php echo $list['rak']; ?></td>
			<td><?php echo $list['stok']; ?></td>
			<td><?php if($list['stok'] == 0){ echo "Stok Habis"; } else if($list['stok'] >= 1){ echo "Available"; } ?></td>
		</tr>
	<?php
	$no++;
	}
	?>
	</tbody>
</table>
