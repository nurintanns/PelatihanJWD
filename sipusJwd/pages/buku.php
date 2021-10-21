<div class="container">
	<h2 class="mx-3">Tampil Data Buku</h2>
	<a class="btn btn-success mx-3" href="index.php?p=buku-input">Tambah Buku</a>
	<div class="container py-4">
			<table class="table">
				<thead class="thead-dark">
					<tr>
						<th scope="col">No</th>
						<th scope="col">ID Buku</th>
						<th scope="col">Judul Buku</th>
						<th scope="col">Kategori</th>
						<th scope="col">Pengarang</th>
						<th scope="col">Penerbit</th>
						<th scope="col">Opsi</th>
					</tr>
				</thead>
				<tbody>

					<?php
						$sql="SELECT * FROM tbbuku ORDER BY idbuku DESC";
						$q_tampil_buku = mysqli_query($db, $sql);
				
						$nomor=1;
						while($r_tampil_buku=mysqli_fetch_array($q_tampil_buku)){
					?>

					<tr>
						<td><?= $nomor++; ?></td>
						<td><?= $r_tampil_buku['idbuku']; ?></td>
						<td><?= $r_tampil_buku['judulbuku']; ?></td>
						<td><?= $r_tampil_buku['kategori']; ?></td>
						<td><?= $r_tampil_buku['pengarang']; ?></td>
						<td><?= $r_tampil_buku['penerbit']; ?></td>
						<td>
							<a class="btn btn-secondary" href="index.php?p=buku-edit&id=<?php echo $r_tampil_buku['idbuku'];?>">Ubah</a>
							<a class="btn btn-danger" href="proses/buku-hapus.php?id=<?php echo $r_tampil_buku['idbuku']; ?>" onclick="return confirm('Yakin Hapus?')">Hapus</a>
						</td>
					</tr>

					<?php } ?>

				</tbody>
			</table>
		</div>
</div>