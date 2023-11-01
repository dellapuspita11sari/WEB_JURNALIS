<?php
include '../koneksi.php';


$nama_kategori = $_POST['nama_kategori'];
$is_active = $_POST['is_active'];

$query = "INSERT INTO kategori (nama_kategori, is_active) VALUES ('$nama_kategori', '$is_active')";
$result = mysqli_query($koneksi, $query);

if(!$result){
    die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
         " - ".mysqli_error($koneksi));
} else {
  //tampil alert dan akan redirect ke halaman index.php
  //silahkan ganti index.php sesuai halaman yang akan dituju
  echo "<script>alert('Data berhasil ditambah.');window.location='kategori.php';</script>";
}


//mysqli_query($koneksi, "INSERT INTO kategori VALUES ('', '$nama_kategori', '$is_active')")or die(mysqli_error($koneksi));
//header("location:kategori.php");
