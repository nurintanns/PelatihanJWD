<?php
$sql = "SELECT idtransaksi FROM tbtransaksi ORDER BY idtransaksi DESC LIMIT 1";
$q_id_transaksi = mysqli_query($db, $sql);
$result = mysqli_fetch_array($q_id_transaksi);
?>

<div class="container">
	<h2>Input Transaksi Peminjaman</h2>
	<form action="proses/transaksi-peminjaman-input-proses.php" method="post" onsubmit="return validasi()">
		<div class="form-group">
			<label for="id_transaksi">ID Transaksi</label>
			<input type="text" name="id_transaksi" class="form-control" id="id_transaksi" value="<?= ++$result['idtransaksi'] ?>" readonly >
		</div>
		<div class="form-group">
			<label for="id_anggota">Anggota</label>
			<select name="id_anggota" class="form-control" id="id_anggota">
					<option value="" select="selected"> Pilih Data Anggota </option>
					<?php
						$q_tampil_anggota=mysqli_query($db,
							"SELECT * FROM tbanggota
							WHERE status='Tidak Meminjam'
							ORDER BY idanggota"
						);
						while($r_tampil_anggota=mysqli_fetch_array($q_tampil_anggota)){
							echo"<option value=$r_tampil_anggota[idanggota]>$r_tampil_anggota[idanggota] | $r_tampil_anggota[nama]</option>";
						}
					?>
				</select>
		</div>
		<div class="form-group">
			<label for="id_buku">Buku</label>
			<select name="id_buku" class="form-control" id="id_buku">
					<option value="" select="selected"> Pilih Data Buku </option>
					<?php
						$q_tampil_buku=mysqli_query($db,
							"SELECT * FROM tbbuku
							WHERE status='Tersedia'
							ORDER BY idbuku"
						);
						while($r_tampil_buku=mysqli_fetch_array($q_tampil_buku)){
							echo"<option value=$r_tampil_buku[idbuku]>$r_tampil_buku[idbuku] | $r_tampil_buku[judulbuku]</option>";
						}
					?>
				</select>
		</div>
		<div class="form-group">
			<label for="tgl_pinjam">Tanggal Pinjam</label>
			<input type="text" name="tgl_pinjam" value="<?php echo $tgl; ?>" readonly="readonly"  class="form-control" id="tgl_pinjam">
		</div>
	
		<button type="submit" class="btn btn-primary" name="simpan" value="Simpan">Submit</button>
	</form>

</div>

</div>


<script type="text/javascript">
		function validasi() {
			id_anggota = document.getElementById("id_anggota");
			id_buku = document.getElementById("id_buku");
			tgl_pinjam = document.getElementById("tgl_pinjam");

			if(id_anggota.value==''){
				alert('nama anggota tidak boleh kosong');
				id_anggota.focus();
				return false;
			}else if(id_buku.value==''){
				alert('judul buku tidak boleh kosong');
				id_buku.focus();
				return false;
			}else if(tgl_pinjam.value==''){
				alert('tanggal tidak boleh kosong');
				tgl_pinjam.focus();
				return false;
			}
			
		}
		
	</script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
