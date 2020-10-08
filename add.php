<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>-Website-</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
</head>

<body>
	<div class="container col-md-9">
		<div class="card">
			<h3 align="center">Tambah Data</h3>
			<div class="card-body">
				<a href="index.php" class="btn btn-warning">Kembali</a><br><br>
				<form class="form-item" action="" method="post" role="form">
					<div class="form-group">
						<label>Kode Buku</label>
						<input type="number" class="form-control col-md-4" name="kode_buku" placeholder="">
					</div>
					<div class="form-group">
						<label>Nama Buku</label>
						<input type="text" class="form-control col-md-4" name="nama_buku" placeholder="">
					</div>
					<div class="form-group">
						<label>penerbit</label>
						<input type="text" class="form-control col-md-4" name="penerbit" placeholder="">
					</div>
					<div class="form-group">
						<label>pengarang</label>
						<input type="text" class="form-control col-md-4" name="pengarang" placeholder="">
					</div>
					
					
					
					
					<div class="form-group">
						<button class="btn btn-info" name="submit" type="submit">Simpan</button>
						<button class="btn btn-danger" name="reset" type="reset">Batal</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>

</html>

<?php
include "koneksi.php";
if (isset($_POST['submit'])) {
	$kode_buku  = $_POST['kode_buku'];
	$nama_buku = $_POST['nama_buku'];
	$penerbit 			   = $_POST['penerbit'];
	$pengarang 		 = $_POST['pengarang'];
	

	mysqli_query($koneksi, "INSERT INTO buku(kode_buku, nama_buku, penerbit, pengarang) VALUES('$kode_buku', '$nama_buku', '$penerbit', '$pengarang')");
	header("location:index.php");
}
?>