<?php
include 'koneksi.php';

$id = $_GET ['id'];
mysqli_query($koneksi,"Delete From pemesanan Where no_ktp='$id'");

header("location: pemesanan.php");
?>
 