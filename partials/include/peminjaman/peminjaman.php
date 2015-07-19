<h1>Peminjaman</h1>
<ul>
	<li>Hanya buku yang available yang dapat di pinjam(buku yang tidak tersedia tidak akan muncul di select box)</li>
	<li>Anggota hanya boleh meminjam maksimal 3 buku, bila sudah memasuki 3 peminjaman maka anggota tidak bisa meminjam buku lagi(anggota sudah meminjam lebih dari 3 buku tidak akan muncul di select box)</li>
</ul>

<form name="pinjam" method="POST" action="modAction/peminjaman/doPeminjaman.php">
	<table border="1px" cellpadding="8" cellspacing="2">
		<thead>
			<tr>
				<th>Peminjam</th>
				<th>Buku</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><select name="user">
						<?php
						$qUser = "SELECT * FROM user WHERE jumlahPinjam < '3' ORDER BY nama ASC";
						$queryUser = mysqli_query($config, $qUser)or die(mysqli_error($config));
						while($user = mysqli_fetch_array($queryUser)){
						?>
						<option value="<?php echo $user['id_user']; ?>"><?php echo $user['nama']; ?></option>
						<?php
						}
						?>
					</select></td>
				<td><select name="buku">
						<?php
						$qBuku = "SELECT * FROM buku WHERE stok > '0' ORDER BY judul ASC";
						$queryBuku = mysqli_query($config, $qBuku)or die(mysqli_error($config));
						while($buku = mysqli_fetch_array($queryBuku)){
						?>
						<option value="<?php echo $buku['id_buku']; ?>"><?php echo $buku['judul']; ?></option>
						<?php
						}
						?>
					</select></td>
				<td><input type="submit" name="pinjam" value="Peminjaman"></td>
			</tr>
		</tbody>
	</table>
</form>		