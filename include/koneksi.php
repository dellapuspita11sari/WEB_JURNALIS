<?php
$server = 'localhost';
$user = 'root';
$pass = '';
$database = 'jurnalis1';

//koneksi databse
$koneksi = mysqli_connect("localhost", "root", "" ,"jurnalis1");

$conn  = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Gagal Tersambung dengan database.')</script>");
}

