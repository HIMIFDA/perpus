<ul>
	<li>Peminjaman yang belum di kembalikan akan muncul disini</li>
</ul>

<form name="pengembalian" method="POST" action="modAction/peminjaman/doPengembalian.php">
	<table border="1px" cellpadding="4px">
		<thead>
			<tr>
				<th>Anggota</th>
				<th>Buku Yang Dipinjam</th>
				<th>Tanggal Peminjaman</th>
				<th>Durasi Peminjaman(Sampai Hari Ini)</th>
				<th>Denda</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
		<?php
		$tglSekarang = time();
		$qPeminjaman = "SELECT * FROM peminjaman p
						INNER JOIN user u ON p.id_user=u.id_user
						INNER JOIN buku b ON p.id_buku=b.id_buku
						WHERE statusPengembalian = '0'";
		$queryPeminjaman = mysqli_query($config, $qPeminjaman)or die(mysqli_error($config));
		while($data = mysqli_fetch_array($queryPeminjaman)){
		//perhitungan hari untuk durasi
		$dateDiff = $tglSekarang - $data['tglPinjam'];
		$durasi = floor($dateDiff/(60*60*24));
		?>
			<tr>
				<td><?php echo $data['nama']; ?></td>
				<td><?php echo $data['judul']; ?></td>
				<td><?php echo date('l jS \of F Y h:i:s A', $data['tglPinjam']); ?></td>
				<td align="right"><?php echo $durasi; ?> Hari</td>
				<td align="right"><?php 
					//perhitungan denda
					$qDenda = "SELECT * FROM denda";
					$queryDenda = mysqli_query($config, $qDenda)or die(mysqli_error($config));
					$dataDenda = mysqli_fetch_array($queryDenda);
					if($durasi > $dataDenda['hari']){
						$hariDenda = $durasi - $dataDenda['hari'];
						$denda = $hariDenda * $dataDenda['denda'];
						echo $denda;
					}
					else{
						$denda = 0;
						echo $denda;
					}
					?></td>

				<input type="hidden" name="user" value="<?php echo $data['id_user']; ?>">
				<input type="hidden" name="buku" value="<?php echo $data['id_buku']; ?>">
				<input type="hidden" name="denda" value="<?php echo $denda; ?>">
				<input type="hidden" name="peminjaman" value="<?php echo $data['id_peminjaman']; ?>">
				<td><input type="submit" name="pengembalian" value="Pengembalian"></td>
			</tr>
		<?php
		}
		?>
		</tbody>
	</table>
</form>
