<?php
include "koneksi.php";

$KTP= $_POST['NO_KTP'];
$NAMA = $_POST['NAMA'];
$ALAMAT = $_POST['ALAMAT'];
$KELAMIN = $_POST['JENIS_KELAMIN'];
$CEKIN = $_POST['CHECK_IN'];
$CEKOT = $_POST['CHECK_OUT'];
$KAMAR = $_POST['JENIS_KAMAR'];
$TOTAL = $_POST['TOTAL_BIAYA'];

mysqli_query ($koneksi, "UPDATE pemesanan SET  no_ktp='$KTP' , nama='$NAMA' , alamat='$ALAMAT', check_in='$CEKIN', check_out='$CEKOT', jenis_kamar='$KAMAR', total_harga='$TOTAL' WHERE no_ktp='$KTP'");
header("location:pemesanan.php");
?>