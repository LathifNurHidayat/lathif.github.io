<link rel="stylesheet" href="style_edit.css">
<div class="utama">
<h3>Edit Administrasi</h3>

<?php
include 'koneksi.php';
$ID= $_GET['id'];
$data = mysqli_query($koneksi,"SELECT * FROM administrasi WHERE id_administrasi='$ID'");
while($tampil=mysqli_fetch_array($data)){
?>
<form method="post" action="edit_aksi_administrasi.php">
<table>
    <tr>
        <td>Id Administrasi</td>
        <td><input type="number" name="ID_ADMINISTRASI" value="<?php echo $tampil['id_administrasi']; ?>"></td>
    </tr>
    <tr>
        <td>Id Pengunjung</td>
        <td><input type="number" name="ID_PENGUNJUNG" value="<?php echo $tampil['id_pengunjung']; ?>"></td>
    </tr>
    <tr>
        <td>Nama</td>
        <td><input type="text" name="NAMA" value="<?php echo $tampil['nama']; ?>"></td>
    </tr>
    <tr>
        <td>Id Pegawai</td>
        <td><input type="number" name="ID_PEGAWAI" value="<?php echo $tampil['id_pegawai']; ?>"></td>
    </tr>
    <tr>
        <td>Nomor Kamar</td>
        <td><input type="number" name="NOMOR_KAMAR" value="<?php echo $tampil['nomor_kamar']; ?>"></td>
    </tr>
    <tr>
        <td>Cek In</td>
        <td><input type="date" name="CEK_IN" value="<?php echo $tampil['cek_in']; ?>"></td>
    </tr>
    <tr>
        <td>Cek Out</td>
        <td><input type="date" name="CEK_OUT" value="<?php echo $tampil['cek_out']; ?>"></td>
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