<?php

$host = "127.0.0.1:3307"; //host server
$user = "root"; // user server
$pass = ""; // isikan password jika user anda memiliki password
$dbname = "akademik_uaspbw"; // nama database yang ingin anda koneksikan

    try{
        $koneksi = new PDO ("mysql:host=$host; dbname=$dbname", $user, $pass);
    }
    catch(PDOException $e){
        echo"Koneksi gagal ", $e->getMessage();
    }