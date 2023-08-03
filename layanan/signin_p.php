<?php
include 'koneksi.php';

$user = $_POST['username'];
$pass = $_POST['password'];

$u = mysqli_real_escape_string($conn,$user);
$p = mysqli_real_escape_string($conn,$pass);

$sql = mysqli_query($conn,'select * from pengunjung where username="'.$u.'" and password="'.$p.'" ');
$al = mysqli_num_rows($sql);

if($al == 1) {
    session_start();
    $_SESSION['pengunjung']=$user;
    echo "<script>window.alert('Selamat, Anda berhasil Sign In!!');window.location.href='index.php';</script>";
} else {
    echo "<script>window.alert('Gagal, Username dan Password Salah !!');window.location.href='signin.php';</script>";
}
