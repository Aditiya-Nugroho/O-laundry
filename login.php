<?php
require "koneksi/koneksi.php";
require "config/auth.php";
session_start();
if (isset($_SESSION["email"])) {
	echo "<script>
	document.location.href ='home.php'
	</script>";
}



if (isset($_POST["submit"])) {
	if (login($_POST)) {
		echo "<script>
            alert('Selamat anda berhasil login silahkan laundry sepuasnya'); document.location.href ='home.php'
            </script>";
	} else {
		echo "<script>
            alert('Maaf Email atau Password anda salah'); document.location.href ='login.php'
            </script>";
	}
}
?>
<!DOCTYPE html>
<html>

<head>
	<title>Login | O'LAUNDRY</title>
	<link rel="icon" href="gambar/carousel-1.jpg">
	<link rel="stylesheet" type="text/css" href="bootstrap-5.0.0-alpha2/dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="login-style.css">
	<script src="https://kit.fontawesome.com/d1a508a7c1.js" crossorigin="anonymous"></script>
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-light">
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
	<div class="login">
		<div class="login-content">
			<div id="login-title">
				<h2 color="#fff">LOGIN MEMBER</h2>

			</div>
			<form method="post" class="form" action=" ">
				<label for="user-email" style="padding-top: 5px">&nbsp;Email</label>
				<input id="user-email" class="form-content" type="email" name="email" autocomplete="on" required />
				<div class="form-border"></div>
				<label for="use-password" style="padding-top: 22px">&nbsp;Password</label>
				<input id="user-password" class="form-content" type="password" name="password" required />
				<div class="form-border"></div>

				<a href="register.php" id="signup">Don't have account yet?</a>

				<input id="submit-btn" type="submit" name="submit" value="LOGIN">
				<input id="reset" type="reset" name="reset" value="RESET" style="background-color: #0004ff;">

			</form>
		</div>
	</div>
	<div class="jarak">
		<footer div class="footer" style="top:30px">
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
	</div>
	<script src="bootstrap-5.0.0-alpha2/dist/js/bootstrap.min.js">
	</script>


	<script>
		// function bos() {
		// 	var email = document.getElementById("user-email");
		// 	var password = document.getElementById("user-password");
		// 	var text = document.getElementById("text");

		// 	if (email.value == "adit@gmail.com" && password.value == "adittt") {
		// 		alert("Anda Berhasil Login");
		// 	} else {
		// 		text.innerHTML = "Username Atau Password Anda Salah";
		// 		return false;

		// 	}
		// }
		// var reset = document.getElementById("reset");
		// var text = document.getElementById("text");

		// reset.addEventListener("click", function() {
		// 	text.style.display = "none";
		// });
	</script>
</body>

</html>