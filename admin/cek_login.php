<?php 
// menghubungkan dengan koneksi
include 'koneksi.php';

// menangkap data yang dikirim dari form
$email= $_POST['email'];
$password = $_POST['password'];

$login = mysqli_query($koneksi, "SELECT * FROM users WHERE user_email='$email' AND user_password='$password'");
$cek = mysqli_num_rows($login);

if($cek > 0){
	session_start();
	$data = mysqli_fetch_assoc($login);
	$_SESSION['id'] = $data['user_id'];
    $_SESSION['user'] = $data['user_fullname'];
    $_SESSION['username'] = $data['user_username'];
	$_SESSION['email'] = $data['user_email'];
	$_SESSION['level'] = $data['user_level'];

	if($data['user_level'] == "Tim Redaksi"){
		$_SESSION['status'] = "tim redaksi_logedin";
		header("location:./pages/");
	}else if($data['user_level'] == "Admin"){
		$_SESSION['status'] = "admin_logedin";
		header("location:./administrator/");
	}else{
		header("location:index.php?alert=gagal");
	}
}else{
	header("location:index.php?alert=gagal");
} 
