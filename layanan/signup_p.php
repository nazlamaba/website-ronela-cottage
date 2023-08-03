<?php
include "koneksi.php";

$user   = $_POST['username'];
$pass   = $_POST['password'];
$full   = $_POST['fullname'];
$alamat = $_POST['alamat'];
$nohp   = $_POST['nohp'];

$sql    = 'INSERT INTO pengunjung (username, password, fullname,alamat,nohp) VALUES ("'.$user.'", "'.$pass.'", "'.$full.'", "'.$alamat.'", "'.$nohp.'") ';
$query  = mysqli_query($conn, $sql);

if($query) {
    echo "<script>window.alert('Selamat, Akun anda berhasil dibuat'); window.location.href='signin.php';</script>";
} else {
    echo "<script>window.alert('Oops!!, Terjadi kesalahan!!!'); window.location.href='signup.php';</script>";
}
?>
