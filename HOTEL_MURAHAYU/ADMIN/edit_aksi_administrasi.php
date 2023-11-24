<?php
include "koneksi.php";

$ADMINISTRASI= $_POST['ID_ADMINISTRASI'];
$PENGUNJUNG = $_POST['ID_PENGUNJUNG'];
$NAMA = $_POST['NAMA'];
$PEGAWAI = $_POST['ID_PEGAWAI'];
$KAMAR = $_POST['NOMOR_KAMAR'];
$CEK_IN = $_POST['CEK_IN'];
$CEK_OUT = $_POST['CEK_OUT'];

mysqli_query ($koneksi, "UPDATE administrasi SET  id_administrasi='$ADMINISTRASI' , id_pengunjung='$PENGUNJUNG' , nama='$NAMA', id_pegawai='$PEGAWAI', nomor_kamar='$KAMAR', cek_in='$CEK_IN', cek_out='$CEK_OUT' WHERE id_administrasi='$ADMINISTRASI'");
header("location:administrasi.php");
?>