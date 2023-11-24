<?php
include 'koneksi.php';

$NO_KTP  = $_POST['no_ktp'];
$NAMA = $_POST['nama'];
$ALAMAT = $_POST['alamat'];
$KELAMIN = $_POST['jenis_kelamin'];
$CEKIN = $_POST['check_in'];
$CEKOUT = $_POST['check_out'];
$KAMAR = $_POST['jenis_kamar'];
$TOTAL = $_POST['total_harga'];

mysqli_query($koneksi,"insert into pemesanan values('$NO_KTP' , '$NAMA' , '$ALAMAT' , '$KELAMIN' , '$CEKIN' , '$CEKOUT' , '$KAMAR','$TOTAL')");
header("location:../ADMIN/pemesanan.php");
?>
