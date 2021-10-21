
<div class="container">
	<div class="container">
		<h2 class="px-5 pb-4 fw-bold">Input Data Anggota</h2>
		<div class="container-fluid px-5">
			<form action="proses/anggota-input-proses.php" method="post" onsubmit='return validasi()'>
				<div class="mb-3 row" hidden>
					<label for="inputIdAnggota" class="col-sm-2 col-form-label">ID Anggota</label>
					<div class="col-sm-9">
						<input type="text" name="id_anggota" class="form-control" id="inputIdAnggota">
					</div>
				</div>
				<div class="mb-3 row">
					<label for="inputNama" class="col-sm-2 col-form-label">Nama</label>
					<div class="col-sm-9">
						<input type="text" name="nama" class="form-control" id="nama" required>
					</div>
				</div>
				<div class="mb-3 row">
					<label class="col-sm-2 col-form-label">Jenis Kelamin</label>
					<div class="col-sm-9">
						<select class="form-select" name="jenis_kelamin" required>
							<option selected>Pilih Jenis Kelamin</option>
							<option value="Pria">Pria</option>
							<option value="Wanita">Wanita</option>
						</select>
					</div>
				</div>
				<div class="mb-3 row">
					<label for="inputNama" class="col-sm-2 col-form-label">Alamat</label>
					<div class="col-sm-9">
						<textarea class="form-control" name="alamat" rows="3" required></textarea>
					</div>
				</div>
				<button type="submit" class="btn btn-primary" name="simpan" value="Simpan">Simpan</button>
			</form>
		</div>
	</div>
</div>


<script type="text/javascript">
	function validasi() {
		nama = document.getElemntById("nama");
		if(nama.value=='') {
			alert('nama tidak boleh kosong');
			nama.focus();
			return false;
		}
	}
</script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>