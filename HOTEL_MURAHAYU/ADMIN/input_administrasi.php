<link rel="stylesheet" href="style_input.css">
<center>

<div class="utama">
    <br>
<h3>Tambahkan Data  Administrasi</h3>
    <form method="post" action="input_aksi_administrasi.php">
        <table>
            <tr>
                <td>Id Administrasi</td>
                <td><input type="number" name="id_administrasi"></td>
            </tr>
            <tr>
                <td>Id Pengunjung</td>
                <td><input type="number" name="id_pengunjung"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Id Pegawai</td>
                <td><input type="number" name="id_pegawai"></td>
            </tr>
            <tr>
                <td>Nomor Kamar</td>
                <td><input type="number" name="nomor_kamar"></td>
            </tr>
            <tr>
                <td>Tanggal Cek In</td>
                <td><input type="date" name="cek_in"></td>
            </tr>
            <tr>
                <td>Tanggal Cek Out</td>
                <td><input type="date" name="cek_out"></td>
            </tr>
            
            <tr>
                <td><a href="administrasi.php">Kembali</a></td>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>
</div>
