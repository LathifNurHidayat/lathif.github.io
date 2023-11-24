<?php
include 'koneksi.php';

$id = $_GET ['id'];
mysqli_query($koneksi,"Delete From administrasi Where id_administrasi='$id'");

header("location: administrasi.php");
?>
 