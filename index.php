<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>-Website-</title>
<link rel="stylesheet"  type="text/css" href="css/bootstrap.css">
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
</head>
<body>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
    <div class="container col-md-9">
    	<div class="card">
    		<h1 align="center">Aplikasi</h1>
    		<div class="card-body">
				<a href="add.php" class="btn btn-primary">Tambah Data</a>
				<a href="cetak.php" target=_blank class="btn btn-info">Cetak</a><br><br>
    			<table class="table table-bordered">
    				<thead>
    				<tr>
    					<td>No</td>
    					<td>Kode Buku</td>
    					<td>Nama Buku</td>
    					<td>Penerbit</td>
						<td>Pengarang</td>
						<td></td>
    					
    				</tr>
	    			</thead>
					
	    			<tbody>
	    			<?php
						include "koneksi.php";
						$no=1;
						$sql = mysqli_query($koneksi, "SELECT * FROM buku order by id_buku ASC");
						while($data = mysqli_fetch_array($sql)){
					?>
						<td><?= $no++; ?></td>
						<td><?= $data['kode_buku']; ?></td>
						<td><?= $data['nama_buku']; ?></td>
						<td><?= $data['penerbit']; ?></td>
						<td><?= $data['pengarang']; ?></td>
					
						<td>
							<a href="edit.php?id=<?=$data['id_buku'];?>">Edit</a>
							|
							<a href="delete.php?id=<?=$data['id_buku'];?>">Delete</a>
						
							
						</td>
	    			</tbody>
					
	    			<?php
		    		}
		    		?>
    			</table>
				
    		</div>
    	</div>
    </div>
</body>
</html>