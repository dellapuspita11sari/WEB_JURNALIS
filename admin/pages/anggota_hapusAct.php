<?php 
include '../koneksi.php';
$idanggota = $_GET['idanggota'];
$data = mysqli_query($koneksi, "SELECT * FROM anggota WHERE idanggota='$idanggota'");
$d = mysqli_fetch_assoc($data);
$foto = $d['gambar_anggota'];
unlink("../dist/img/anggota/$foto");
mysqli_query($koneksi, "DELETE FROM anggota WHERE idanggota='$idanggota'");
header("location:anggota.php");