<?php
require "koneksi/koneksi.php";
require "config/config-register.php";
    if (isset($_POST["kirim"])) {
        if(input_register($_POST)>0){
            echo"<script>
            alert(Transaksi anda berhasil silahkan screenshoot halaman salanjutnya untuk  kepentingan transaksi) document.location.href ='home.php'
            </script>";
    }else{
        echo mysqli_error($db);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Akun | O'LAUNDRY</title>
    <link rel="icon" href="gambar/carousel-1.jpg">
    <link rel="stylesheet" type="text/css" href="bootstrap-5.0.0-alpha2/dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="style2.css">
    <script src="https://kit.fontawesome.com/d1a508a7c1.js" crossorigin="anonymous"></script>
</head>
<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light" >
        <a class="navbar-brand text-light ml-5" href="home-login.php">O'Laundry</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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

    <section>
        <div class="container">
            <div class="user singupbox">               
                <div class="formbox">
                    <form action="" method="POST">
                        <h2>Create An Account Member</h2>
                        <p id="text"></p>
                        <input type="text" name="nama" placeholder="Name" id="nama2">
                        <input type="text" name="username" placeholder="Username"  id="username-2">
                        <input type="email" name="email" placeholder="Email"  id="email-2">
                        <input type="password" name="password" placeholder="Create Password"  id="password-2">
                        
                        <input type="text"  name="alamat" placeholder="Alamat" required="required" id="alamat2">
                        <input type="tel" id="tlp2" name="no_hp" placeholder="+62" min="12" maxlenght="13">
                        
                        <!-- pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}-[0-9]{3}"> -->
                        <div class="edit">
                        <button type="submit" value="Register" onclick="return Register()" name="kirim">Create</button>
                        <button type="reset" id="reset" value="reset" style="background: red;">Reset</button>
                    </div>
                        <p class="signup">Already Have An Account ? <a href="login.php" onclick="toggleForm();">Sign In.</a></p>
                    </form>
                </div>
                <div class="imgbox"><img src="gambar/img-login1.jpg"></div>
            </div>
        </div>
    </section>
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

    <!-- <script type="text/javascript">
         function toggleForm(){
             var container = document.querySelector('.container');
                container.classList.toggle('active')
         }

    function Register(){
        var name = document.getElementById( "nama2" );
        var username = document.getElementById( "username-2" );
        var email = document.getElementById( "email-2" );
        var password2 = document.getElementById( "password-2" );
        var password3 = document.getElementById( "password-3" );
        var alamat = document.getElementById( "alamat2");
        var tlp = document.getElementById ("tlp2");

        if(nama.value.length >= 2 && username.value.length >= 2 && email.value.length >= 12 && password2.value.length >= 1 && password3.value.length >= 1 && alamat.value.length >= 5 && tlp.value.length >= 12){
            alert("Akun Berhasil Di Buat");
        }else if(password2.value !== password3.value){
            text.innerHTML = "Confirm Password Tidak Sama";
            text.style.display = "block";
            return false;
        } else {
            text.innerHTML = "Akun Gagal Di Buat Atau Ada Kesalahan Saat Mengisi Data";
            text.style.display = "block";
            return false;
        }
    }

    var reset = document.getElementById ("reset");
    var text = document.getElementById( "text" );

    reset.addEventListener("click", function(){
        text.style.display = "none";
    }); -->
    </script>
</body>
</html>