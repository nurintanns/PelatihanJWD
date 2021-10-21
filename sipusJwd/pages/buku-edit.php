<?php
	$id_buku=$_GET['id'];
	$q_tampil_buku=mysqli_query($db,"SELECT * FROM tbbuku WHERE idbuku='$id_buku'");
	$r_tampil_buku=mysqli_fetch_array($q_tampil_buku);

?>

<div class="container">
	<h2>Edit Data Buku</h2>
	<form action="proses/buku-edit-proses.php" method="post" onsubmit="return validasi()">
		<div class="form-group">
			<label for="inputid">ID Buku</label>
			<input type="text" name="id_buku" class="form-control" id="inputid" value="<?php echo $r_tampil_buku['idbuku']; ?>" readonly="readonly">
		</div>
		<div class="form-group">
			<label for="judul_buku">Judul Buku</label>
			<input type="text" name="judul_buku" class="form-control" id="judul_buku" value="<?php echo $r_tampil_buku['judulbuku']; ?>">
		</div>
		<div class="form-group">
			<label for="kategori">Kategori</label>
			<select class="form-control" id="kategori" name="kategori" value="<?php echo $r_tampil_buku['kategori']; ?>">
					<option disabled selected>Pilih Kategori</option>
					<option value="Ilmu Komputer">Ilmu Komputer</option>
					<option value="Ilmu Agama">Ilmu Agama</option>
					<option value="Karya Sastra">Karya Sastra</option>
			</select>
		</div>
		<div class="form-group">
			<label for="pengarang">Pengarang</label>
			<input type="text" name="pengarang"  class="form-control" id="pengarang" value="<?php echo $r_tampil_buku['pengarang']; ?>">
		</div>
		<div class="form-group">
			<label for="penerbit">Penerbit</label>
			<input type="text" name="penerbit"  class="form-control" id="penerbit" value="<?php echo $r_tampil_buku['penerbit']; ?>">
		</div>
	
		<button type="submit" class="btn btn-primary" name="simpan" value="Simpan" id="tombol-simpan">Submit</button>
	</form>

</div>

<script type="text/javascript">
		function validasi() {
			judul_buku = document.getElementById("judul_buku");
			kategori = document.getElementById("kategori");
			pengarang = document.getElementById("pengarang");
			penerbit = document.getElementById("penerbit");
			if(judul_buku.value==''){
				alert('judul buku tidak boleh kosong');
				judul_buku.focus();
				return false;
			}else if(kategori.value==''){
				alert('kategori tidak boleh kosong');
				kategori.focus();
				return false;
			}else if(pengarang.value==''){
				alert('pengarang tidak boleh kosong');
				pengarang.focus();
				return false;
			}else if(penerbit.value==''){
				alert('penerbit tidak boleh kosong');
				penerbit.focus();
				return false;
			}
			
		}
		
	</script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>