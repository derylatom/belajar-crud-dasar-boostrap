<?php
$koneksi = mysqli_connect("localhost", "root", "", "buku");
if (mysqli_connect_errno()) {
	echo "Koneksi Gagal :" . mysqli_connect_errno();
}
?>