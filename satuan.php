<?php
require "koneksi/koneksi.php";
require "config/config-satuan.php";
if (isset($_POST["kirim"])) {
    if (input_satuan($_POST) > 0) {
        echo "<script>
          alert(Transaksi anda berhasil silahkan screenshoot halaman salanjutnya untuk  kepentingan transaksi) document.location.href ='home.php'
          </script>";
    } else {
        echo mysqli_error($db);
    }
}

?>
<!DOCTYPE html>
<html>

<head>
    <Title> O'Laundry</Title>
    <link rel="stylesheet" type="text/css" href="bootstrap-5.0.0-alpha2/dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="style.css">

    <script src="https://kit.fontawesome.com/d1a508a7c1.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand text-light ml-5" href="home.php">O'Laundry</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link text-light" href="home.php">Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link text-light" href="login.php">Logout</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Contact Us
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="https://facebook.com/">Facebook</a>
                        <a class="dropdown-item" href="https://Instagram.com">Instagram</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="https://Twitter.com">Twitter</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <!-- SATUAN -->
    <section class="section-cg">
        <div class="content-cg" style="margin-left:70px;">
            <h5 style="color:#00a7da;">Menyediakan</h5>

            <form action=" " method="post">

                <div class="label-tipe">
                    <label>Data Pribadi</label>
                </div>
                <div class="satuan">
                    <table>
                        <tr>
                            <td> <label> Nama </label></td>
                            <td><input type="text" name="nama_pesanan"></td>
                        </tr>
                        <!-- <tr>
            <td> <label> Nama </label></td> <td><input type="number" name="id_pelanggan"></td>
        </tr> -->
                        <tr>
                            <td>
                                <label> No Handphone </label>
                            <td><input type="number" name="no_hp_pesanan" min="0"></td>
                            </td>
                        </tr>
                        <tr>
                            <td> <label> Alamat </label></td>
                            <td><input type="tel" name="alamat_pesanan"></td>
                        </tr>
                    </table>
                </div>


                <!-- <div class="label-tipe">
                <label >Nama Barang</label>
            </div>
       
            <div class="satuan">
    <table>
            <tr>        
                <td><label>1. Bed Cover 200x200cm |30k </label></td>
                <td width="30px"><input type="number" name="bedcover_besar" value="0" min="0"></td>
            </tr>
            <tr>    
                </td><td><label>2. Bed Cover 180x200cm |25k </label>
                </td><td width="30px"><input type="number" name="bedcover_kecil" value="0" min="0"></td>
            </tr>
            <tr>     
                </td><td><label>3. Sarung Bantal |10k </label>
                </td><td width="50px"> <input type="number" name="sarung_bantal" value="0" min="0"></td>
            </tr>
            <tr>
                </td><td><label>4. Sarung Guling |10k </label>
                </td><td width="50px"> <input type="number" name="sarung_guling" value="0" min="0"></td>
            </tr>
            <tr>     
                </td><td><label>5. Handuk Tangan |7k </label>
                </td><td width="50px"><input type="number" name="handuk_tangan" value="0" min="0"></td>
            </tr>
            <tr>     
                </td><td><label>6. Handuk Mandi |20k </label>
                </td><td width="50px"><input type="number" name="handuk_mandi" value="0" min="0"></td>
            </tr>
            <tr>     
                </td><td><label>7. Saputangan |7k </label>
                </td><td width="50px"><input  type="number" name="saputangan" value="0" min="0"></td>
            </tr>
            <tr>     
                </td><td><label>8. Sprei 160x200cm |25k </label>
                </td><td width="50px"><input type="number" name="sprei_besar" value="0" min="0"></td>
            </tr>
            <tr>     
                </td><td><label>9. Sprei 140x190cm |20k </label>
                </td><td width="50px"><input type="number" name="sprei_kecil" value="0" min="0"></td>
            </tr>
            <tr>     
                </td><td><label>10. Selimut 200x200cm |35k </label>
                </td><td width="50px"><input   type="number" name="selimut_besar" value="0" min="0"></td>
            </tr>
            <tr>     
                </td><td><label>11. Selimut 180sx200cm |25k </label>
                </td><td width="50px"><input type="number" name="selimut_kecil" value="0" min="0"></td>
            </tr> 
    </table> -->


                <div class="label-tipe" style="margin-top: 40px;">
                    <label>Waktu Pengambilan</label>
                </div>
                <table>
                    <tr>
                        <td><label>Tanggal</label></td>
                        <td>
                            <div class="row">
                                <div class="col" style="width: 20px;">
                                    <input type="date" class="form-control" name="tanggal_pengambilan">
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><label>Jam</label></td>

                        <td style="padding-left: 40px;"><select class="form-select" aria-label="Default select example" name="jam_pengambilan">
                                <option value="Pagi">Pagi</option>
                                <option value="Siang">Siang</option>
                                <option value="Malam">Malam</option>
                            </select></td>

                    </tr>
                </table>

                <div class="label-tipe">
                    <label>Waktu Pengantaran</label>
                </div>
                <table>
                    <!-- <tr>
                <td><label>Tanggal</label></td>
            <td>
                    <div class="row">
                        <div class="col" style="width: 20px;">
                            <input type="date" class="form-control" name="tanggal_pengantaran">
                        </div>
                    </div>
                    </td>
                    </tr> -->
                    <tr>
                        <td><label>Jam</label></td>
                        <td style="padding-left: 40px;">

                            <select class="form-select" aria-label="Default select example" name="jam_pengantaran">

                                <option value="Pagi">Pagi</option>
                                <option value="Siang">Siang</option>
                                <option value="Malam">Malam</option>
                            </select><br></td>
                    </tr>
                </table>
                <button type="submit" class="btn btn-primary" name="kirim">Kirim</button>


        </div>
        </form>
        </div>
    </section>
    <!-- FOOTER -->
    <footer div class="footer" style="height:350px;">
        <div class="container">
            <div class="left-side" style="transform: translateX(-40px);">
                <h3>O'Laundry</h3>
                <p>Thanks For Your Visit</p>
            </div>
            <div class="wrapper">
                <div class="button">
                    <div class="icon"><i class="fab fa-facebook-f"></i></div>
                    <label>Facebook</label>
                </div>
                <div class="button">
                    <div class="icon"><i class="fab fa-twitter"></i></div>
                    <label>Twitter</label>
                </div>
                <div class="button">
                    <div class="icon"><i class="fab fa-instagram"></i></div>
                    <label>Instagram</label>
                </div>
            </div>
            <hr style=" position: absolute; left: 550px; top: 170px; background: #fff;
             width: 100px; height: 2px; transform: rotate(90deg); border: none;">
            <div class="under-text">
                <div class="under-text-1">
                    <h4>Layanan Kami</h4>
                    <ul>
                        <li>Laundry kiloan</li>
                        <li>Laundry satuan</li>
                        <li>Cuci & setrika</li>
                        <li>Setrika</li>
                        <li>Tips mencuci</li>
                    </ul>
                </div>
                <div class="under-text-2" style="margin-right: 40px;
            position: absolute;
            left: 250px;
            top: 150px;">
                    <h4>Perusahaan Kami</h4>
                    <ul>
                        <li>Tentang O'Laundry</li>
                        <li>Kontak Kami</li>
                    </ul>
                </div>
            </div>
    </footer>
    <script src="bootstrap-5.0.0-alpha2/bootstrap-5.0.0-alpha2/dist/js/bootstrap.min.js">
    </script>
</body>

</html>