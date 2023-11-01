<?php 
include '../koneksi.php';
$id_berita = $_GET['id_berita'];
$data = mysqli_query($koneksi, "SELECT * FROM berita WHERE id_berita='$id_berita'");
$d = mysqli_fetch_assoc($data);
$foto = $d['gambar_berita'];
unlink("../dist/img/berita/$foto");
mysqli_query($koneksi, "DELETE FROM berita WHERE id_berita='$id_berita'");
header("location:berita.php");