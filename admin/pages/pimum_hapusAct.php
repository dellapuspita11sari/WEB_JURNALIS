<?php 
include '../koneksi.php';
$idanggota = $_GET['idanggota'];
$data = mysqli_query($koneksi, "SELECT * FROM pimpinan_umum WHERE idanggota='$idanggota'");
$d = mysqli_fetch_assoc($data);
$foto = $d['gambar_anggota'];
unlink("../dist/img/anggota/pimum/$foto");
mysqli_query($koneksi, "DELETE FROM pimpinan_umum WHERE idanggota='$idanggota'");
header("location:pimum.php");