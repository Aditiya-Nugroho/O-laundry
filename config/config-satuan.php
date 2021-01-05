<?php
require "config/app.php";

function input_satuan($data)
{
    global $db;
    $nama = htmlspecialchars($data["nama_pesanan"]);
    // $id_pelanggan = htmlspecialchars($data ["id_pelanggan"]);
    // $kode_transaksi_satuan = htmlspecialchars($data ["kode_transaksi_satuam"]);
    $no_hp = htmlspecialchars($data["no_hp_pesanan"]);
    $alamat = htmlspecialchars($data["alamat_pesanan"]);
    // $bedcover_besar =htmlspecialchars($data ["bedcover_besar"]);
    // $bedcover_kecil =htmlspecialchars($data ["bedcover_kecil"]);
    // $sarung_bantal =htmlspecialchars($data ["sarung_bantal"]);
    // $sarung_guling =htmlspecialchars($data ["sarung_guling"]);
    // $handuk_tangan =htmlspecialchars($data ["handuk_tangan"]);
    // $handuk_mandi =htmlspecialchars($data ["handuk_mandi"]);
    // $saputangan =htmlspecialchars($data ["saputangan"]);
    // $sprei_besar =htmlspecialchars($data ["sprei_besar"]);
    // $sprei_kecil =htmlspecialchars($data ["sprei_kecil"]);
    // $selimut_besar =htmlspecialchars($data["selimut_besar"]);
    // $selimut_kecil =htmlspecialchars($data["selimut_kecil"]);
    $tanggal_pengambilan = htmlspecialchars($data["tanggal_pengambilan"]);
    $jam_pengambilan = htmlspecialchars($data["jam_pengambilan"]);
    // $tanggal_pengantaran =htmlspecialchars($data ["tanggal_pengantaran"]);
    $jam_pengantaran = htmlspecialchars($data["jam_pengantaran"]);


    // $query = "INSERT INTO transaksi_satuan VALUES('', '' ,'$nama', '$no_hp', '$bedcover_besar','$bedcover_kecil','$sarung_bantal','$sarung_guling','$handuk_tangan','$handuk_mandi','$saputangan','$sprei_besar','$sprei_kecil','$selimut_besar','$selimut_kecil','$tanggal_pengambilan','$jam_pengambilan','$tanggal_pengantaran','$jam_pengantaran','$alamat')";
    // mysqli_query($db, $query);


    $query = "INSERT INTO transaksi_satuan VALUES('' ,'','$nama', '$no_hp','$tanggal_pengambilan','$jam_pengambilan','$jam_pengantaran','$alamat')";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}
