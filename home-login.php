<?php
require "koneksi/koneksi.php";
?>
<!DOCTYPE html>
<html>

<head>
    <title>
        O'LAUNDRY | Tempatnya Orang Mencuci
    </title>
    <link rel="icon" href="gambar/carousel-1.jpg">
    <link rel="stylesheet" type="text/css" href="bootstrap-5.0.0-alpha2/dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://kit.fontawesome.com/d1a508a7c1.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- NAVBAR -->
    <section class="tampilan_awal">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand text-light ml-5" href="home-login.php">O'Laundry</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="falsae" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link text-light" href="home-login.php">Home</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link text-light" href="login.php">Login</a>
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

        <!-- CAROUSEL -->
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="gambar/carousel-1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="gambar/carousel-2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="gambar/carousel-3.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </a>
        </div>
        <div class="carousel-text-konten">
            <h2>
                HI, Sahabat Laundry
            </h2>
            <p>
                Kamu mau laundry, tapi bingung mau dimana? <br> Sekarang gak perlu bingung lagi karna ada O'LAUNDRY, yuk gabung
            </p>
            <button type="button"><a href="login.php"> MASUK</a> </button>

        </div>
        <div class="cara-memesan">
            <div class="konten-petugas" style="text-align: center;background-color:#f0fbff; padding-bottom:20px;">
                <p> Cara memesan O'Laundry </p>
            </div>
            <div class="container-fluid">
                <div class="justify-content-center row">
                    <div class="col-md-8">
                        <div class="table-memesan">
                            <div class="col-md-4">
                                <img style="height:70px;" src="gambar/tangan.png"><br>
                                <p>Pilih pelayanan</p>
                            </div>
                            <div class="col-md-4">
                                <img style="height:70px;" src="gambar/lokasi.png"><br>
                                <p>Atur Alamat</p>
                            </div>
                            <div class="col-md-4">
                                <img style="height:70px;" src="gambar/smile.png"><br>
                                <p>Nikmati</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="konten-petugas">
            <p> Mengapa harus O'Laundry? </p>
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
    </section>
</body>

</html>