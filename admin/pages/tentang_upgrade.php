<?php 
include '../koneksi.php';


$id_jurnalis = $_POST['id_jurnalis'];
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
	mysqli_query($koneksi, "UPDATE tentang_jurnalis SET nama_jurnalis='$nama_jurnalis', kampus_Jur='$kampus_Jur', link_ig='$link_ig', email='$email', alamat_jur='$alamat_Jur', no_telp='$no_telp' WHERE id_jurnalis = '$id_jurnalis'");
	header("location:tentang.php");
}else{
	$ext = pathinfo($filename, PATHINFO_EXTENSION);

	if(!in_array($ext,$allowed) ) {
		header("location:tentang.php?alert=gagal");
	}else{
		move_uploaded_file($_FILES['logo_jurnalis']['tmp_name'], '../dist/img/logo/'.$rand.'_'.$filename);
		$file_gambar = $rand.'_'.$filename;
		mysqli_query($koneksi, "UPDATE tentang_jurnalis SET nama_jurnalis='$nama_jurnalis', kampus_jur='$kampus_Jur', link_ig='$link_ig', email='$email', alamat_jur='$alamat_Jur', no_telp='$no_telp' logo_jurnalis='$file_gambar' WHERE id_jurnalis = '$id_jurnalis'");
		header("location:tentang.php");
	}
}

