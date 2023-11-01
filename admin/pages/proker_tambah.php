<?php
include '../koneksi.php';


$proker_name = $_POST['proker_name'];
$proker_date = $_POST['proker_date'];
$proker_konsep = $_POST['proker_konsep'];

$query = "INSERT INTO proker (proker_name, proker_date, proker_konsep) VALUES ('$proker_name', '$proker_date', '$proker_konsep')";
$result = mysqli_query($koneksi, $query);

if(!$result){
    die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
         " - ".mysqli_error($koneksi));
} else {
  //tampil alert dan akan redirect ke halaman index.php
  //silahkan ganti index.php sesuai halaman yang akan dituju
  echo "<script>alert('Data berhasil ditambah.');window.location='proker.php';</script>";
}


//mysqli_query($koneksi, "INSERT INTO kategori VALUES ('', '$nama_kategori', '$is_active')")or die(mysqli_error($koneksi));
//header("location:kategori.php");
