<div class="container">
		<h2 class="mx-3">Tampil Data Anggota</h2>
		<a class="btn btn-success mx-3" href="index.php?p=anggota-input">Tambah Anggota</a>
		<div class="container py-4">
			<table class="table">
				<thead class="thead-dark">
					<tr>
						<th scope="col">No</th>
						<th scope="col">ID Anggota</th>
						<th scope="col">Nama</th>
						<th scope="col">Jenis Kelamin</th>
						<th scope="col">Alamat</th>
						<th scope="col">Opsi</th>
					</tr>
				</thead>
				<tbody>

					<?php
						$sql = "SELECT * FROM tbanggota ORDER BY idanggota DESC";
						$q_tampil_anggota = mysqli_query($db, $sql);
						$nomor = 1;
						while ($r_tampil_anggota = mysqli_fetch_array($q_tampil_anggota)) {
					?>

					<tr>
						<td><?= $nomor++; ?></td>
						<td><?= $r_tampil_anggota['idanggota']; ?></td>
						<td><?= $r_tampil_anggota['nama']; ?></td>
						<td><?= $r_tampil_anggota['jeniskelamin']; ?></td>
						<td><?= $r_tampil_anggota['alamat']; ?></td>
						<td>
							<a class="btn btn-secondary" href="index.php?p=anggota-edit&id=<?php echo $r_tampil_anggota['idanggota']; ?>">Ubah</a>
							<a class="btn btn-danger" href="proses/anggota-hapus.php?id=<?php echo $r_tampil_anggota['idanggota']; ?>" onclick="return confirm('Yakin Hapus?')">Hapus</a>
						</td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
</div>





<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>