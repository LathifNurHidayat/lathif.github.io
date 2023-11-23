<link rel="stylesheet" href="style_edit.css">
<div class="utama">
<h3>Edit Pengunjung</h3>

<?php
include 'koneksi.php';
$PENGUNJUNG= $_GET['id'];
$data = mysqli_query($koneksi,"SELECT * FROM pengunjung WHERE no_ktp='$PENGUNJUNG'");
while($tampil=mysqli_fetch_array($data)){
?>
<form method="post" action="edit_aksi_pengunjung.php">
<table>
    <tr>
        <td>ID Pengunjung</td>
        <td><input type="number" name="ID" value="<?php echo $tampil['no_ktp']; ?>"></td>
    </tr>
    <tr>
        <td>Nama</td>
        <td><input type="text" name="NAMA" value="<?php echo $tampil['nama']; ?>"></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td><input type="text" name="ALAMAT" value="<?php echo $tampil['alamat']; ?>"></td>
    </tr>
    <tr>
        <td>Gender</td>
        <td><select name="GENDER" id="">
            <option value="L">L</option>
            <option value="P">P</option>
        </select></td>
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