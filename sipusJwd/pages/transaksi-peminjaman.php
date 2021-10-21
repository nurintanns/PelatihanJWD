<div class="container">
		<h2 class="mx-3">Transaksi Peminjaman</h2>
		<a class="btn btn-success mx-3" href="index.php?p=transaksi-peminjaman-input">Transaksi Baru</a>
		<div class="container py-4">
			<table class="table">
				<thead class="thead-dark">
					<tr>
						<th scope="col">No</th>
						<th scope="col">ID Transaksi</th>
						<th scope="col">ID Anggota</th>
						<th scope="col">Nama</th>
						<th scope="col">ID Buku</th>
						<th scope="col">Judul Buku</th>
						<th scope="col">Tanggal Pinjam</th>
						<th scope="col">Opsi</th>
					</tr>
				</thead>
				<tbody>

				<?php
					$sql = "SELECT tbtransaksi.*,tbanggota.*,tbbuku.*
					FROM tbtransaksi,tbanggota,tbbuku
					WHERE tbtransaksi.idanggota=tbanggota.idanggota
					AND tbtransaksi.idbuku=tbbuku.idbuku
					AND tbtransaksi.tglkembali='0000-00-00'
					ORDER BY tbtransaksi.idtransaksi DESC";

					$q_transaksi = mysqli_query($db, $sql);

					$nomor = 1;
					while ($r_transaksi = mysqli_fetch_array($q_transaksi)) {
				?>

						<tr>
							<td><?= $nomor++; ?></td>
							<td><?= $r_transaksi['idtransaksi']; ?></td>
							<td><?= $r_transaksi['idanggota']; ?></td>
							<td><?= $r_transaksi['nama']; ?></td>
							<td><?= $r_transaksi['idbuku']; ?></td>
							<td><?= $r_transaksi['judulbuku']; ?></td>
							<td><?= $r_transaksi['tglpinjam']; ?></td>
							<td>
								<a class="btn btn-secondary"  href="cetak/nota-peminjaman.php?&id=<?php echo $r_transaksi['idtransaksi']; ?>" target="_blank">Ubah</a>
								<a class="btn btn-danger" href="proses/pengembalian-proses.php?&id=<?php echo $r_transaksi['idtransaksi']; ?>" onclick="return confirm('Yakin Hapus?')">Hapus</a>
							</td>
						</tr>

					<?php } ?>

				</tbody>
			</table>
		</div>
</div>