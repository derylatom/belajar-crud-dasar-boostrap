<?php
include "koneksi.php";

$id = $_GET['id'];
$delete = mysqli_query($koneksi, "DELETE FROM buku WHERE id_buku = '$id'");
header("location:index.php");
?>
