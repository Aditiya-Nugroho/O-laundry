<?php
require "config/app.php";

function login($data)
{
    global $db;

    $email = htmlspecialchars($data['email']);
    $password = htmlspecialchars($data['password']);

    $query1 = "SELECT * FROM pelanggan WHERE email = '$email'";
    $mysql1 = mysqli_query($db, $query1);
    if (mysqli_num_rows($mysql1) == 1) {
        $query2 = "SELECT * FROM pelanggan WHERE password = '$password'";
        $mysql2 = mysqli_query($db, $query2);
        if (mysqli_num_rows($mysql2)) {
            $_SESSION["submit"] = true;
            $_SESSION["email"] = $email;
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}
