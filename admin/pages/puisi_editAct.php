<?php
include '../koneksi.php';

$id = $_POST['id'];
$judul   = $_POST['judul'];
$isi     = $_POST['isi'];
$tanggal    = $_POST['tanggal'];
$cipta   = $_POST['cipta'];
$ig     = $_POST['ig'];

$rand = rand();
$allowed =  array('gif','png','jpg','jpeg');
$filename = $_FILES['foto']['name'];

if($filename == ""){
	mysqli_query($koneksi, "UPDATE puisi SET judul='$judul', isi='$isi', cipta='$cipta', ig='$ig', tanggal='$tanggal' WHERE id='$id'");
	header("location:puisi.php");
}else{
	$ext = pathinfo($filename, PATHINFO_EXTENSION);

	if(!in_array($ext,$allowed) ) {
		header("location:puisi.php?alert=gagal");
	}else{
		move_uploaded_file($_FILES['foto']['tmp_name'], '../dist/img/puisi/'.$rand.'_'.$filename);
		$file_gambar = $rand.'_'.$filename;
		mysqli_query($koneksi, "UPDATE puisi SET judul='$judul', isi='$isi', cipta='$cipta', ig='$ig', foto='$file_gambar', tanggal='$tanggal' WHERE id='$id'");
		header("location:puisi.php");
	}
}



