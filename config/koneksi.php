<?php
    $host="localhost";
    $user="root";
    $pass="";
    $database="dbperpus";
    // $connect = mysqli_connect($host, $user, $pass, $database); // Koneksi ke MySQL
    $koneksi=new mysqli($host,$user,$pass,$database);
    if (mysqli_connect_errno()) {
    trigger_error('Koneksi ke database gagal: '. mysqli_connect_error(),
    E_USER_ERROR);
    }
?>