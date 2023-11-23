<?php
include 'koneksi.php';

$ID  = $_POST['no_ktp'];
$NAMA = $_POST['nama'];
$ALAMAT = $_POST['alamat'];
$GENDER = $_POST['gender'];

mysqli_query($koneksi,"insert into pengunjung values('$ID', '$NAMA' , '$ALAMAT' , '$GENDER' )");
header("location:pengunjung.php");
?>
