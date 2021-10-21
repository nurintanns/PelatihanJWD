<?php
	$id_anggota=$_GET['id'];
	$q_tampil_anggota=mysqli_query($db,"SELECT * FROM tbanggota WHERE idanggota='$id_anggota'");
	$r_tampil_anggota=mysqli_fetch_array($q_tampil_anggota);
?>

<div class="container">
	<h2>Edit Data Anggota</h2>
	<form action="proses/anggota-edit-proses.php" method="post" id="form" onsubmit="return validasi()">
		<div class="form-group">
			<label for="inputid">ID Anggota</label>
			<input type="text" name="id_anggota" class="form-control" id="inputid" value="<?php echo $r_tampil_anggota['idanggota']; ?>" readonly="readonly"> 
		</div>
		<div class="form-group">
			<label for="nama">Nama</label>
			<input type="text" name="nama" class="form-control" id="nama" value="<?php echo $r_tampil_anggota['nama']; ?>">
		</div>
		<div class="form-group">
			<label for="jenis_kelamin">Jenis Kelamin</label>
			<select class="form-control" id="jenis_kelamin" name="jenis_kelamin" value="<?php echo $r_tampil_anggota['jeniskelamin']; ?>">
				<option disabled selected>Pilih Jenis Kelamin</option>
					<option value="pr">Perempuan</option>
					<option value="lk">Laki-Laki</option>
			</select>
		</div>
		<div class="form-group">
			<label for="alamat">Alamat</label>
			<textarea rows="2" cols="40" name="alamat" class="form-control" id="alamat"><?php echo $r_tampil_anggota['alamat']; ?></textarea></textarea>
		</div>
		<button type="submit" class="btn btn-primary" name="simpan" value="Simpan">Submit</button>
	</form>
</div>

<script type="text/javascript">
		function validasi() {
			nama = document.getElementById("nama");
			if(nama.value==''){
				alert('nama tidak boleh kosong');
				nama.focus();
				return false;
			}
			
		}
		
	</script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
