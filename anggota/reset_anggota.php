<?php
include "../config/koneksi.php";

// List of tables to reset
$tables = ["anggota"];

// Truncate each table
foreach ($tables as $table) {
    mysqli_query($koneksi, "TRUNCATE TABLE " . $table);
}

$referrer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'daftar_anggota.php';
echo "<script>alert('Data Sudah Di reset !!'); window.location.href = '$referrer';</script>";
?>