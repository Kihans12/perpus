<?php
include "../config/koneksi.php";
/* memasukan setiap data inputan kedalam
setiap variabel
*/
$id_tmp=$_POST['id_tmp'];
$id=$_POST['id'];
$isbn=$_POST['isbn'];
$kategori=$_POST['kategori'];
$judul_buku=$_POST['judul_buku'];
$pencipta=$_POST['pencipta'];
$penerbit=$_POST['penerbit'];
$tahun_terbit=$_POST['tahun_terbit'];
$jumlah=$_POST['jumlah'];
$status=$_POST['status'];


//Menjalankan kueri update
$update=mysqli_query($koneksi,"UPDATE buku SET
id='$id',
isbn='$isbn',
kategori='$kategori',
judul_buku='$judul_buku',
pencipta='$pencipta',
penerbit='$penerbit',
tahun_terbit='$tahun_terbit',
jumlah='$jumlah',
status='$status'
WHERE id='$id_tmp'
");
if($update){
    //Jika proses delete berhasil
    header("location:data_buku.php");
}else{
    //Jika proses update gagal
    echo"<p>Gagal Menyimpan !</p>";
    echo"<a href='data_buku.php'>Coba Lagi</a>";
}
?>