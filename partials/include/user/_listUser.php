<h1>List Anggota</h1>
<table border="1px" cellpadding="4px" cellspacing="4px">
	<thead>
		<th>No</th>
		<th>Nama</th>
		<th>Aksi</th>
	</thead>
	<tbody>
	<?php
	$no = 1;
	$qUser = "SELECT * FROM user ORDER BY nama ASC";
	$queryUser = mysqli_query($config, $qUser)or die(mysqli_error($config));
	while($list = mysqli_fetch_array($queryUser)){
	?>
		<tr>
			<td><?php echo $no; ?></td>
			<td><?php echo $list['nama']; ?></td>
			<td><a href="index.php?mod=pengaturan&&act=user&&id=<?php echo $list['id_user']; ?>"><input type="submit" value="Edit"></a>
			 <a href="modAction/user/deleteUser.php?id=<?php echo $list['id_user']; ?>"><input type="submit" value="Delete"></a></td>
		</tr>
	<?php
	$no++;
	}
	?>
	</tbody>
</table>
