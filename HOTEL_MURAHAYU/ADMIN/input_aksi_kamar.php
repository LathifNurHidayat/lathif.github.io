<?php
include 'koneksi.php';

$NO_KTP  = $_POST['no_ktp'];
$NAMA = $_POST['nama'];
$ALAMAT = $_POST['alamat'];
$KELAMIN = $_POST['jenis_kelamin'];
$CHECK_IN = $_POST['check_in'];
$CHECK_OUT = $_POST['check_out'];
$JENIS_KAMAR = $_POST['jenis_kamar'];
$TOTAL = $_POST['total_harga'];

mysqli_query($koneksi,"insert into pemesanan values('$NO_KTP' , '$NAMA','$KELAMIN','$CHECK_IN','$CHECK_OUT','$JENIS_KAMAR,'$TOTAL')");
header("location:pesan_kamar.html");
?>
