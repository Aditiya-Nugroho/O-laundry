<?php
require "config/app.php";

function input_kiloan($data)
{
    global $db;

    $nama = htmlspecialchars($data["nama"]);
    $no_hp = htmlspecialchars($data["no_hp"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $jenis_laundry = htmlspecialchars($data["jenis_laundry"]);
    $tanggal_pengambilan = htmlspecialchars($data["tanggal_pengambilan"]);
    $jam_pengambilan = htmlspecialchars($data["jam_pengambilan"]);
    $jam_pengantaran = htmlspecialchars($data["jam_pengantaran"]);


    $query = "INSERT INTO transaksi_kiloan(nama,no_hp,jenis_laundry,tanggal_pengambilan,jam_pengambilan,jam_pengantaran,alamat) VALUES('$nama', '$no_hp','$jenis_laundry','$tanggal_pengambilan','$jam_pengambilan','$jam_pengantaran','$alamat')";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}
