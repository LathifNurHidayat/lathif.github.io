<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="style_input.css">
    <title>Hotel Murahayu</title>
</head>
<body>
    <nav>
        <div class="nav__bar">
            <div class="nav__header">
                <div class="logo nav__logo">
                    <div>H</div>
                    <span>HOTEL<br>MURAHAYU</span>
                </div>
                <div class="nav__menu__btn" id="menu-btn">
                    <i class="ri-menu-line"></i>
                </div>
            </div>
            <ul class="nav__links" id="nav-links">
                <li><a href="index.html">Home</a></li>
                <li><a href="pesan_kamar.php">Pesan Kamar</a></li>
                <li><a href="HOTEL_NURAHAYU/ADMIN/home.html">Login</a></li>
            </ul>
        </div>
    </nav>


    <header class="header" id="home">
    <center>
    
    <div class="utama">
    <h3>Masukan Data Pemesanan</h3>
        <form method="post" action="input_aksi_pesan.php">
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
                    <td><label for="jenis_kelamin">Jenis Kelamin</label></td>
                    <td> 
                    <select name="jenis" id="jenis_kelamin">
                        <option value="">Pilih Jenis Kelamin</option>
                        <option value="L">L</option>
                        <option value="P">P</option>
                    </select>
                    </td>
                </tr>

                <tr>
                    <td>Check In</td>
                    <td><input type="date" name="check_in"></td>
                </tr>
                
                <tr>
                    <td>Check Out</td>
                    <td><input type="date" name="check_out"></td>
                </tr>

                <tr>
                    <td><label for="jenis_kamar">Jenis Kamar</label></td>
    
                    <td> 
                    <select name="jenis" id="jenis_kamar">
                        <option value="">Pilih Jenis Kamar</option>
                        <option value="Biasa">Biasa</option>
                        <option value="VIP">VIP</option>
                        <option value="President Class">President Class</option>
                    </select>
                    </td>
                </tr>


                <tr>
                    <td>Total Harga</td>
                    <td><input type="number" name="total_harga"></td>
                </tr>

                <tr>
                    <td><a class="kembali" href="index.html">kembali</a></td>
                    <td><input type="submit" value="Simpan"></td>
                </tr>
            </table>
        </form>
    </div>

</header>


</body>
</html>