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
			<h3 align="center">Ubah Data</h3>
			<div class="card-body">
				<a href="index.php" class="btn btn-warning">Kembali</a><br><br>
				<?php
					include "koneksi.php";
					$id = $_GET['id'];
					$no = 1;
					$sql = mysqli_query($koneksi, "SELECT * FROM buku WHERE id_buku = '$id'");
					$data = mysqli_fetch_array($sql); //update tanpa while
				?>
					<form class="form-item" action="" method="post" role="form">
						<div class="form-group">
							<label>Kode Buku</label>
							<input type="number" class="form-control col-md-4" name="kode_buku" value="<?= $data['kode_buku']; ?>" placeholder="isi ID disini">
						</div>
						<div class="form-group">
							<label>Nama Buku</label>
							<input type="text" class="form-control col-md-4" name="nama_buku" value="<?= $data['nama_buku']; ?>" placeholder="isi nama disini">
						</div>
						<div class="form-group">
							<label>Penerbit</label>
							<input type="text" class="form-control col-md-4" name="penerbit" value="<?= $data['penerbit']; ?>" placeholder="isi telepon disini">
						</div>
						<div class="form-group">
							<label>Pengarang</label>
							<input type="text" class="form-control col-md-4" name="pengarang" value="<?= $data['pengarang']; ?>" placeholder="isi telepon disini">
						</div>
						

						<div class="form-group">
							<button class="btn btn-info" name="submit" type="submit">Edit</button>
							
						</div>
					</form>				
			</div>
		</div>
	</div>
</body>

</html>

<?php
if (isset($_POST['submit'])) {
	$kode_buku 	 = $_POST['kode_buku'];
	$nama_buku 	= $_POST['nama_buku'];
	$penerbit 				   = $_POST['penerbit'];
	$pengarang 			 = $_POST['pengarang'];
	

	mysqli_query($koneksi,  "UPDATE buku SET kode_buku = '$kode_buku', nama_buku = '$nama_buku', penerbit = '$penerbit', pengarang = '$pengarang' WHERE id_buku = '$id'");
	header("location:index.php");
}
?>