<!DOCTYPE html>
<html>
<head></head>
	<title>Hotel Murahayu</title>
	<link rel="stylesheet" type="text/css" href="style.css">

    <style>
        h2 {
            color: white;
        }
    table {
        border-collapse: collapse;
        width: 90%;
        margin-bottom: 20px;
    }

    th, td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: wheat ;
    }

    tr{
        background-color: blanchedalmond;
    }

    a {
        text-decoration: none;
        margin-right: 10px;
    }
</style>

</head>
<body>
<div class="main">
	<div class="navbar">
		<label class="logo">Hotel Murahayu</label>
		<ul>
			<li><a href="home.html">Home</a></li>
			<li><a href="administrasi.php">administrasi</a></li>
			<li><a href="kamar.php">Kamar</a></li>
			<li><a href="pegawai.php">Pegawai</a></li>
			<li><a href="pengunjung.php">Pengunjung</a></li>
			<li><a href="pemesanan.php">Pemesanan</a></li>
			<li><a href="../USER/index.html">Logout</a></li>

		</ul>
	</div>

<div>
        <center>

	<h2>Administrasi</h2><br>
    <table border= "1">
        <tr>
            <th>Id Administrasi</th>
            <th>Id Pengunjung</th>
            <th>Nama</th>
            <th>Id Pegawai</th>
            <th>Nomor Kamar</th>
            <th>Tanggal Cek In</th>
            <th>Tanggal Cek Out</th>
            <th>Aksi</th>
        </tr>
    <?php
        include "koneksi.php";
        $data=mysqli_query($koneksi,"Select * from administrasi");
        while($tampil=mysqli_fetch_array($data)){   //syntak html berada di dalam php
    ?>

    <tr>
        <td> <?php echo $tampil['id_administrasi'] ?> </td>
        <td> <?php echo $tampil['id_pengunjung'] ?> </td>     
        <td> <?php echo $tampil['nama'] ?> </td>     
        <td> <?php echo $tampil['id_pegawai'] ?> </td>     
        <td> <?php echo $tampil['nomor_kamar'] ?> </td>     
        <td> <?php echo $tampil['cek_in'] ?> </td>     
        <td> <?php echo $tampil['cek_out'] ?> </td>     
        <td class="tombol">
         <a href="hapus_administrasi.php?id=<?php echo $tampil['id_administrasi'] ?>" >Hapus</a>
         <a href="edit_administrasi.php?id=<?php echo $tampil['id_administrasi'] ?>" >Edit</a>
        </td>
    </tr>

    <?php 
        }
    ?>
    </table>
    <a href="input_administrasi.php"><button type="button"><span></span>Tambahkan Data</button></a>
	</div>
</div>
</body>
</html>


