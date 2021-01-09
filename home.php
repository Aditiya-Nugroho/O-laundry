<?php
require "koneksi/koneksi.php";
session_start();
if (!isset($_SESSION["email"])) {
    echo "<script>
	document.location.href ='home-login.php'
	</script>";
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>
        O'LAUNDRY | Tempat Orang Mencuci
    </title>
    <link rel="icon" href="gambar/carousel-1.jpg">
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
                    <a class="nav-link text-light" href="logout.php">Logout</a>
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

    <!-- HOME -->
    <div class="konten-petugas">
        <p style="margin-left: 30px;
    padding-top: 0px; "> Kami Menyediakan </p>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="card" style="border: 5px;">
                    <div class="card-body">
                        <h4 class="card-title">Laundry kiloan</h4>
                        <p class="card-text">Mencuci pakaian dengan satuan kg, minimal pencucian online yaitu 2kg,Dan penimbangan di lakukan di tempat pengambilan laundry oleh petugas dan timbangan dari petugas.</p>
                        <a href="kiloan.php" class="btn btn-primary">Let's Go</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card" style=" right: 150px;">
                    <div class="card-body">
                        <h4 class="card-title">Laundry satuan</h4>
                        <p class="card-text">Mencuci pakaian dengan satuan per-item. minimal pencucian laundry online yaitu 1 item 2 pasang</p>
                        <a href="satuan.php" class="btn btn-primary">Lets's Go</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="konten-petugas">
        <p style="margin: 30px;
    padding-top: 20px;"> Cara memesan O'Laundry </p>
    </div>
    <div class="table-petugas">
        <table>
            <tr>
                <td><img src="gambar/tangan.png"></td>
                <td>
                    <p>Setiap petugas sudah terlatih dan siap melayani anda kapanpun</p>
                </td>
            </tr>
            <tr>
                <td>
                    <img src="gambar/lokasi.png">
                </td>
                <td>
                    <p>Setiap petugas memiliki good attitude</p>
                </td>
            </tr>
            <tr>
                <td>
                    <img src="gambar/smile.png">
                </td>
                <td>
                    <p>Harga laundry yang terjangkau</p>
                </td>
            </tr>
        </table>
    </div>
    <!-- <div class="konten-cara">
        <div class="cara">
            <img src="gambar/like.png">
        </div>
    </div> -->
    <div class="konten-petugas">
        <p style="margin: 30px;
    padding-top: 20px;"> Mengapa harus O'Laundry? </p>
    </div>
    <div class="table-petugas">
        <table>
            <tr>
                <td><img src="gambar/people.png"></td>
                <td>
                    <p>Setiap petugas sudah terlatih dan siap melayani anda kapanpun</p>
                </td>
            </tr>
            <tr>
                <td>
                    <img src="gambar/like.png">
                </td>
                <td>
                    <p>Setiap petugas memiliki good attitude</p>
                </td>
            </tr>
            <tr>
                <td>
                    <img src="gambar/dompet.png">
                </td>
                <td>
                    <p>Harga laundry yang terjangkau</p>
                </td>
            </tr>
        </table>
    </div>
    <!-- FOOTER -->
    <footer div class="footer">
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
    <script src="bootstrap-5.0.0-alpha2/dist/js/bootstrap.min.js"></script>
</body>

</html>