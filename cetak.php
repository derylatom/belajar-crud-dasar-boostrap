<!DOCTYPE html>
<html>
<head>
    <title>CETAK LAPORAN  </title>
</head>
<body>
 
    <center>
 
        <h2>LAPORAN  </h2>
    
 
    </center>
 
    <?php 
    include 'koneksi.php';
    ?>
 
    <table border="1" style="width: 100%">
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