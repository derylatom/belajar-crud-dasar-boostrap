<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>.::web::.</title>
<link rel="stylesheet"  type="text/css" href="css/bootstrap.css">
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
</head>
<body>
    <div class="container col-md-9">
    	<div class="card">
    		<h3 align="center">Belajar Crud</h3>
    		<div class="card-body">
				<a href="add.php" class="btn btn-success">Tambah</a><br><br>
    			<table class="table table-bordered">
    				<thead>
    				<tr>
    					<td>No</td>
    					<td>Kode Buku</td>
    					<td>Nama Buku</td>
    					<td>Penerbit</td>
    					<td>Pengarang</td>
    					
    				</tr>
	    			</thead>
					
	    			<tbody>
	    			<?php
						include "koneksi.php";
						$no=1;
						$sql = mysqli_query($koneksi, "SELECT * FROM buku order by kode_buku ASC");
						while($data = mysqli_fetch_array($sql)){
					?>
						<td><?= $no++; ?></td>
						<td><?= $data['kode_buku']; ?></td>
						<td><?= $data['nama_buku']; ?></td>
						<td><?= $data['penerbit']; ?></td>
						<td><?= $data['pengarang']; ?></td>
					
						<td>
							<a href="edit.php?kode_buku=<?=$data['kode_buku'];?>">Edit</a>
							|
							<a href="delete.php?kode_buku=<?=$data['kode_buku'];?>">Delete</a>
						
							
						</td>
	    			</tbody>
					
	    			<?php
		    		}
		    		?>
    			</table>
				<a href="cetak.php" target=_blank class="btn btn-success">Cetak</a><br><br>
    		</div>
    	</div>
    </div>
</body>
</html>