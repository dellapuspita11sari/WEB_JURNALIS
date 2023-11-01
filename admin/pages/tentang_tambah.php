<?php 
include '../koneksi.php';

$nama_jurnalis  = $_POST['nama_jurnalis'];
$kampus_Jur = $_POST['kampus_Jur'];
$link_ig = $_POST['link_ig'];
$email = $_POST['email'];
$alamat_Jur = $_POST['alamat_Jur'];
$no_telp = $_POST['no_telp'];


$rand = rand();
$allowed =  array('gif','png','jpg','jpeg');
$filename = $_FILES['logo_jurnalis']['name'];

if($filename == ""){
	mysqli_query($koneksi, "INSERT INTO tentang_jurnalis VALUES (NULL,'$nama_jurnalis','$kampus_Jur','$link_ig', '$email','$alamat_Jur', '$no_telp')");
	header("location:tentang.php");
}else{
	$ext = pathinfo($filename, PATHINFO_EXTENSION);

	if(!in_array($ext,$allowed) ) {
		header("location:tentang.php?alert=gagal");
	}else{
		move_uploaded_file($_FILES['logo_jurnalis']['tmp_name'], '../dist/img/logo/'.$rand.'_'.$filename);
		$file_gambar = $rand.'_'.$filename;
		mysqli_query($koneksi, "INSERT INTO tentang_jurnalis VALUES (NULL, '$nama_jurnalis','$kampus_Jur','$link_ig', '$email', '$alamat_Jur', '$no_telp', '$file_gambar')");
		header("location:tentang.php");
	}
}

