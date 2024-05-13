<?php
require_once '../config/koneksi.php';

if (isset($_GET['id_pinjam'])) {
    $id_pinjam = $_GET['id_pinjam'];
    $stmt = $koneksi->prepare("UPDATE peminjaman SET tanggal_kembali = NOW(), status = 'Dikembalikan' WHERE id_pinjam = ?");
    $stmt->bind_param("s", $id_pinjam);
    $stmt->execute();
    header('Location: data_pengembalian.php');
    exit;
}