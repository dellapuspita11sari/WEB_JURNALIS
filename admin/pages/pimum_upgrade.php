<?php 
include '../koneksi.php';

$idanggota = $_POST['idanggota'];
$nama_anggota  = $_POST['nama_anggota'];
$divisi = $_POST['divisi'];
$ig = $_POST['ig'];


// cek gambar
$rand = rand();
$allowed =  array('gif','png','jpg','jpeg');
$filename = $_FILES['gambar_anggota']['name'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

if($pwd=="" && $filename==""){
	mysqli_query($koneksi, "UPDATE pimpinan_umum SET nama_anggota='$nama_anggota', divisi='$divisi', ig='$ig' WHERE idanggota='$idanggota'");
	header("location:pimum.php");
}elseif($pwd==""){
	if(!in_array($ext,$allowed) ) {
		header("location:pimum.php?alert=gagal");
	}else{
		move_uploaded_file($_FILES['gambar_anggota']['tmp_name'], '../dist/img/anggota/pimum/'.$rand.'_'.$filename);
		$x = $rand.'_'.$filename;
		mysqli_query($koneksi, "UPDATE pimpinan_umum SET nama_anggota='$nama_anggota', divisi='$divisi', ig='$ig', gambar_anggota='$x' WHERE idanggota='$idanggota'");		
		header("location:pimum.php?alert=berhasil");
	}
}elseif($filename==""){
	mysqli_query($koneksi, "UPDATE pimpinan_umum SET nama_anggota='$nama_anggota', divisi='$divisi', ig='$ig' WHERE idanggota='$idanggota'");
	header("location:pimum.php");
}

