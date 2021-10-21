<?php
include 'koneksi.php';
$tgl = date('Y-m-d');
?>
<!doctype html>
<html>

<head>
	<title>Sistem Informasi Perpustakaan</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>



	<div class="p-5 mb-4 bg-dark">
		<div class="container-fluid py-5">
			<h1 class="display-8 fw-bold text-light">PERPUSTAKAAN UMUM</h1>
			<p class="col-md-8"><b class = "text-light">Jl. Lembah Abang No 11, Telp: (021)55555555</b></p>
		</div>
	</div>

	<div class="row g-0">
		<div class="col-md-3">
			<ul class="nav flex-column">
				<li class="nav-item">
					<a class="nav-link text-dark py-2 mb-2" href="index.php?p=beranda">Beranda</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-dark py-2 mb-2" href="index.php?p=anggota">Data Anggota</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-dark py-2 mb-2" href="index.php?p=buku">Data Buku</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-dark py-2 mb-2" href="index.php?p=transaksi-peminjaman">Transaksi Peminjaman</a>
				</li>
			</ul>
		</div>
		<div class="col-md-9">
			<?php
			$pages_dir = 'pages';
			if (!empty($_GET['p'])) {
				$pages = scandir($pages_dir, 0);
				unset($pages[0], $pages[1]);
				$p = $_GET['p'];
				if (in_array($p . '.php', $pages)) {
					include($pages_dir . '/' . $p . '.php');
				} else {
					echo 'Halaman Tidak Ditemukan';
				}
			} else {
				include($pages_dir . '/beranda.php');
			}
			?>
		</div>
	</div>

	<div class="p-5 bg-warning">
		<div class="container-fluid">
			<p class="text-center">&copy Sistem Informasi Perpustakaan (sipus) | Praktikum </p>
		</div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>