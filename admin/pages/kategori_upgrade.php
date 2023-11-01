<?php
include '../koneksi.php';

$id_kategori = $_POST['id_kategori'];
$nama_kategori = $_POST['nama_kategori'];
$is_active = $_POST['is_active'];

$query = "UPDATE kategori SET  nama_kategori='$nama_kategori', is_active='$is_active' WHERE id_kategori='$id_kategori'";
$result = mysqli_query($koneksi, $query);

if(!$result){
    die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
         " - ".mysqli_error($koneksi));
} else {
  //tampil alert dan akan redirect ke halaman index.php
  //silahkan ganti index.php sesuai halaman yang akan dituju
  echo "<script>alert('Data berhasil diubah');window.location='kategori.php';</script>";
}


//mysqli_query($koneksi, "INSERT INTO kategori VALUES ('', '$nama_kategori', '$is_active')")or die(mysqli_error($koneksi));
//header("location:kategori.php");
