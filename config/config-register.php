<?php
require "config/app.php";

function input_register($data)
{
    global $db;

    $nama = htmlspecialchars($data["nama"]);
    $no_hp = htmlspecialchars($data["no_hp"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $username = htmlspecialchars($data["username"]);
    $password = htmlspecialchars($data["password"]);
    $email = htmlspecialchars($data["email"]);

    $cek = "SELECT email FROM pelanggan WHERE email = '$email' ";
    $cek2 = "SELECT no_hp FROM pelanggan WHERE no_hp = '$no_hp' ";

    var_dump(mysqli_fetch_assoc(mysqli_query($db, $cek)));

    if (mysqli_fetch_assoc(mysqli_query($db, $cek))) {
        echo "<script>
            alert('Email sudah terpakai');
            </script>";
    } elseif (mysqli_fetch_assoc(mysqli_query($db, $cek2))) {
        echo "<script>
            alert('No handphone sudah ada');
            </script>";
    } else {
        $query = "INSERT INTO pelanggan VALUES( '' ,'$nama', '$no_hp','$alamat','$username','$password','$email')";
        mysqli_query($db, $query);
    }

    return mysqli_affected_rows($db);
}
