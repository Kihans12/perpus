<?php

// koneksi database
$conn = mysqli_connect('localhost', 'root', '', 'dbperpus');

// cek nis
if (isset($_POST['id'])) {
 $id = $_POST['id'];
 $isbn = $_POST['isbn'];
 $kategori=$_POST['kategori'];
 $judul_buku=$_POST['judul_buku'];
 $pencipta=$_POST['pencipta'];
 $penerbit=$_POST['penerbit'];
 $tahun_terbit=$_POST['tahun_terbit'];
 $jumlah=$_POST['jumlah'];
 $status=$_POST['status'];
 $query = mysqli_query($conn, "SELECT id FROM buku WHERE id = '$id'"); 

 if($query->num_rows > 0) {
  echo "<script>alert('ID Buku Sudah Terdaftar, Coba Lagi !!');</script>";
  
 } else {
  mysqli_query($conn, "INSERT INTO buku (id, isbn, kategori, judul_buku, pencipta, penerbit, tahun_terbit, jumlah, status) VALUES ('$id', '$isbn', '$kategori', '$judul_buku', '$pencipta', '$penerbit', '$tahun_terbit', '$jumlah', '$status')");
 }
}

// tampilkan data
$stmt = mysqli_query($conn, "SELECT id FROM buku");

?>