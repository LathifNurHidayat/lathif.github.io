<link rel="stylesheet" href="style_edit.css">
<div class="utama">
<h3>Edit Data Pemesan</h3>

<?php
include 'koneksi.php';
$ID= $_GET['id'];
$data = mysqli_query($koneksi,"SELECT * FROM pemesanan WHERE no_ktp='$ID'");
while($tampil=mysqli_fetch_array($data)){
?>
<form method="post" action="edit_aksi_pemesanan.php">
<table>
    <tr>
        <td>No KTP</td>
        <td><input type="number" name="NO_KTP" value="<?php echo $tampil['no_ktp']; ?>"></td>
    </tr>
    <tr>
        <td>Nama</td>
        <td><input type="number" name="NAMA" value="<?php echo $tampil['nama']; ?>"></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td><input type="text" name="ALAMAT" value="<?php echo $tampil['alamat']; ?>"></td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td><input type="number" name="JENIS_KELAMIN" value="<?php echo $tampil['jenis_kelamin']; ?>"></td>
    </tr>
    <tr>
        <td>Check In</td>
        <td><input type="number" name="CHECK_IN" value="<?php echo $tampil['check_in']; ?>"></td>
    </tr>
    <tr>
        <td>Check Out</td>
        <td><input type="date" name="CHECK_OUT" value="<?php echo $tampil['check_out']; ?>"></td>
    </tr>
    <tr>
        <td>Jenis Kamar</td>
        <td><input type="date" name="JENIS_KAMAR" value="<?php echo $tampil['jenis_kamar']; ?>"></td>
    </tr>
    <tr>
        <td>Total Biaya</td>
        <td><input type="date" name="TOTAL_BIAYA" value="<?php echo $tampil['total_biaya']; ?>"></td>
    </tr>
    <tr>
        <td><input type="submit" value="SIMPAN"></td>          
    </tr>
</table>
</form>

<?php
}
?>

</div>