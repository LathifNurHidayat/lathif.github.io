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
		</ul>
	</div>

    <div>
        <center>
	<table border= "1">
        <h2>Pengunjung</h2><br>
        <tr>
            <th>No KTP</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Gender</th>
            <th>Aksi</th>
        </tr>
    <?php
        include "koneksi.php";
        $data=mysqli_query($koneksi,"Select * from pengunjung");
        while($tampil=mysqli_fetch_array($data)){   //syntak html berada di dalam php
    ?>

        <tr>
        <td> <?php echo $tampil['no_ktp'] ?> </td>
        <td> <?php echo $tampil['nama'] ?> </td>     
        <td> <?php echo $tampil['alamat'] ?> </td>     
        <td> <?php echo $tampil['gender'] ?> </td>     
    <td class="tombol"> <a href="hapus_pengunjung.php?id=<?php echo $tampil['no_ktp'] ?>">Hapus</a>
         <a href="edit_pengunjung.php?id=<?php echo $tampil['no_ktp'] ?>">Edit</a></td>
        </tr>

    <?php 
        }
    ?>

    </table>
    <a href="input_pengunjung.php">
        <button class="tombol" type="button"><span></span>Tambahkan data</button>
    </a>
       
	</div>
</div>
</body>
</html>


