<?php
include "koneksi.php";

$ID= $_POST['ID'];
$NAMA = $_POST['NAMA'];
$ALAMAT = $_POST['ALAMAT'];
$GENDER = $_POST['GENDER'];

mysqli_query ($koneksi, "UPDATE pengunjung SET  no_ktp='$ID' , nama='$NAMA' , alamat='$ALAMAT' , gender='$GENDER'  WHERE no_ktp='$ID'");
header("location:pengunjung.php");
?>