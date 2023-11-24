<?php
include 'koneksi.php';

$id_administrasi  = $_POST['id_administrasi'];
$id_pengunjung = $_POST['id_pengunjung'];
$nama = $_POST['nama'];
$id_pegawai = $_POST['id_pegawai'];
$no_kamar = $_POST['nomor_kamar'];
$CEK_IN = $_POST['cek_in'];
$CEK_OUT = $_POST['cek_out'];

mysqli_query($koneksi,"insert into administrasi values('$id_administrasi' , '$id_pengunjung' , '$nama' , '$id_pegawai' , '$no_kamar' , '$CEK_IN' , '$CEK_OUT')");
header("location:administrasi.php");
?>
