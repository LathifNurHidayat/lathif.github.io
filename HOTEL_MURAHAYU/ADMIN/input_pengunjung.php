<link rel="stylesheet" href="style_input.css">
<center>

<div class="utama">
<h3>Tambahkan Data Pengunjung</h3>
    <form method="post" action="input_aksi_pengunjung.php">
        <table>
            <tr>
                <td>No KTP</td>
                <td><input type="number" name="no_ktp"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>
                    <select name="gender" id="gender_">
                        <option value="">Pilih Jenis Kelamin</option>
                        <option value="L">L</option>
                        <option value="P">P</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td><a href="pengunjung.php">kembali</a></td>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>
</div>