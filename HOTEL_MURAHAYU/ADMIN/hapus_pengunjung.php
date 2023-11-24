<?php
include 'koneksi.php';

$id = $_GET ['id'];
mysqli_query($koneksi,"Delete From pengunjung Where no_ktp='$id'");

header("location: pengunjung.php");
?>
 