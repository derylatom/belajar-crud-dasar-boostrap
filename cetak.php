    <?php 
    include 'koneksi.php';
    ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CETAK LAPORAN</title>
<link rel="stylesheet"  type="text/css" href="css/bootstrap.css">
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
</head>
<body>
    <center>
        <h2>LAPORAN</h2>
    </center>
    <table class="table table-bordered">
        <tr>
            <th width="1%">No</th>
            <th width="15%">Kode Buku </th>
            <th> Nama Buku </th>
            <th width="10%">Penerbit</th>
            <th width="10%">Pengarang</th>
            
        </tr>
        </tr>
        <?php 
        $no = 1;
        $sql = mysqli_query($koneksi,"select * from buku");
        while($data = mysqli_fetch_array($sql)){
        ?>
        <tr>
    
            <td><?php echo $no++; ?></td>
            <td><center><?php echo $data['kode_buku']; ?></td>
            <td><center><?php echo $data['nama_buku']; ?></td>
            <td><center><?php echo $data['penerbit']; ?></td>
            <td><center><?php echo $data['pengarang']; ?></td>
        <?php 
        }
        ?>
    </table>
 
    <script>
        window.print();
    </script>
 
</body>
</html>