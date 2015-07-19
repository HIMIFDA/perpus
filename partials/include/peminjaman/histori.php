
			<ul>
				<li>Peminjaman yang sudah di kembalikan akan muncul disini</li>
			</ul>
			<table border="1px" cellpadding="4px">
				<thead>
					<tr>
						<th>Anggota</th>
						<th>Buku Yang Dipinjam</th>
						<th>Tanggal Peminjaman</th>
						<th>Tanggal Pengembalian</th>
						<th>Durasi Peminjaman(Hari)</th>
						<th>Denda</th>
					</tr>
				</thead>
				<tbody>
				<?php
				$tglSekarang = time();
				$qHistori = "SELECT * FROM peminjaman p
								INNER JOIN user u ON p.id_user=u.id_user
								INNER JOIN buku b ON p.id_buku=b.id_buku
								WHERE statusPengembalian = '1'";
				$queryHistori = mysqli_query($config, $qHistori)or die(mysqli_error($config));
				while($histori = mysqli_fetch_array($queryHistori)){
				//perhitungan hari untuk durasi
				$dateDiff = $tglSekarang - $histori['tglPinjam'];
				$durasi = floor($dateDiff/(60*60*24));
				?>
					<tr>
						<td><?php echo $histori['nama']; ?></td>
						<td><?php echo $histori['judul']; ?></td>
						<td><?php echo date('l jS \of F Y h:i:s A', $histori['tglPinjam']); ?></td>
						<td><?php echo date('l jS \of F Y h:i:s A', $histori['tglBalik']); ?></td>
						<td align="right"><?php echo $durasi; ?> Hari</td>
						<td><?php echo $histori['denda']; ?></td>
					</tr>
				<?php
				}
				?>
				</tbody>
			</table>
		