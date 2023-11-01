<?php
include '../koneksi.php';


$judul_berita = $_POST['judul_berita'];
$isi_berita = $_POST['isi_berita'];
$tgl_input = $_POST['tgl_input'];
$is_active =$_POST['is_active'];
$is_populer = $_POST['is_populer'];
$penulis= $_POST['penulis'];
$kategori_berita = implode(', ', $_POST['kategori_berita']);


$rand = rand();
$allowed =  array('gif','png','jpg','jpeg');
$filename = $_FILES['gambar_berita']['name'];

if($filename == ""){
	mysqli_query($koneksi, "INSERT INTO berita VALUES (NULL,'$judul_berita', '$isi_berita', '$tgl_input', '$is_active', '$is_populer', '$penulis', '$kategori_berita')");
	header("location:berita.php");
}else{
	$ext = pathinfo($filename, PATHINFO_EXTENSION);

	if(!in_array($ext,$allowed) ) {
		header("location:berita.php?alert=gagal");
	}else{
		move_uploaded_file($_FILES['gambar_berita']['tmp_name'], '../dist/img/berita/'.$rand.'_'.$filename);
		$file_gambar = $rand.'_'.$filename;
		mysqli_query($koneksi, "INSERT INTO berita VALUES (NULL, '$judul_berita', '$isi_berita', '$file_gambar', '$tgl_input', '$is_active', '$is_populer', '$penulis', '$kategori_berita')");
		header("location:berita.php");
	}
}

