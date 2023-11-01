<?php
include '../koneksi.php';


$judul   = $_POST['judul'];
$isi     = $_POST['isi'];
$tanggal    = $_POST['tanggal'];
$cipta   = $_POST['cipta'];
$ig     = $_POST['ig'];

$rand = rand();
$allowed =  array('gif','png','jpg','jpeg');
$filename = $_FILES['foto']['name'];

if($filename == ""){
	mysqli_query($koneksi, "INSERT INTO puisi VALUES (NULL, '$judul', '$isi', '$cipta', '$ig', '$tanggal')");
	header("location:puisi.php");
}else{
	$ext = pathinfo($filename, PATHINFO_EXTENSION);

	if(!in_array($ext,$allowed) ) {
		header("location:puisi.php?alert=gagal");
	}else{
		move_uploaded_file($_FILES['foto']['tmp_name'], '../dist/img/puisi/'.$rand.'_'.$filename);
		$file_gambar = $rand.'_'.$filename;
		mysqli_query($koneksi, "INSERT INTO puisi VALUES (NULL, '$judul', '$isi', '$cipta', '$ig', '$file_gambar', '$tanggal')");
		header("location:puisi.php");
	}
}

