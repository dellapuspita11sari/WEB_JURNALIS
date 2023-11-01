<?php 
include '../koneksi.php';

$nama_anggota  = $_POST['nama_anggota'];
$divisi = $_POST['divisi'];
$ig = $_POST['ig'];

$rand = rand();
$allowed =  array('gif','png','jpg','jpeg');
$filename = $_FILES['gambar_anggota']['name'];

if($filename == ""){
	mysqli_query($koneksi, "INSERT INTO pimpinan_redaksi VALUES (NULL,'$nama_anggota','$divisi','$ig')");
	header("location:pimred.php");
}else{
	$ext = pathinfo($filename, PATHINFO_EXTENSION);

	if(!in_array($ext,$allowed) ) {
		header("location:pimred.php?alert=gagal");
	}else{
		move_uploaded_file($_FILES['gambar_anggota']['tmp_name'], '../dist/img/anggota/pimred/'.$rand.'_'.$filename);
		$file_gambar = $rand.'_'.$filename;
		mysqli_query($koneksi, "INSERT INTO pimpinan_redaksi VALUES (NULL, '$nama_anggota','$divisi','$ig','$file_gambar')");
		header("location:pimred.php");
	}
}

