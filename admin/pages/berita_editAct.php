<?php
include '../koneksi.php';

$id_berita = $_POST['id_berita'];
$judul_berita   = $_POST['judul_berita'];
$isi_berita     = $_POST['isi_berita'];
$tgl_input    = $_POST['tgl_input'];
$is_active   = $_POST['is_active'];
$is_populer    = $_POST['is_populer'];
$penulis = $S_POST['penulis'];
$kategori = $S_POST['kategori'];

$rand = rand();
$allowed =  array('gif','png','jpg','jpeg');
$filename = $_FILES['gambar_berita']['name'];

if($filename == ""){
	mysqli_query($koneksi, "UPDATE berita SET judul_berita='$judul_berita', isi_berita='$isi_berita', tgl_input='$tgl_input', is_active='$is_active', is_populer='$is_populer', penulis='$penulis'  WHERE id_berita='$id_berita'");
	header("location:berita.php");
}else{
	$ext = pathinfo($filename, PATHINFO_EXTENSION);

	if(!in_array($ext,$allowed) ) {
		header("location:berita.php?alert=gagal");
	}else{
		move_uploaded_file($_FILES['gambar_berita']['tmp_name'], '../dist/img/berita/'.$rand.'_'.$filename);
		$file_gambar = $rand.'_'.$filename;
		mysqli_query($koneksi, "UPDATE berita SET judul_berita='$judul_berita', isi_berita='$isi_berita', gambar_berita='$file_gambar', tgl_input='$tgl_input', is_active='$is_active', is_populer='$is_populer', penulis='$penulis' WHERE id_berita='$id_berita'");
		header("location:berita.php");
	}
}



