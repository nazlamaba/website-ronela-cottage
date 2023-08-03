<?php
include "koneksi.php";

$res_code = $_POST['res_code'];
$tanggal_berangkat = $_POST['tanggal_berangkat'];
$waktu_berangkat = $_POST['waktu_berangkat'];
$feri = $_POST['feri'];
$driver = $_POST['driver'];
$nama_mobil = $_POST['nama_mobil'];
$lama_sewa = $_POST['lama_sewa'];
$harga = $_POST['harga'];
$id_user = $_POST['id_user'];
$id_harga = $_POST['id_harga'];
$status = $_POST['status'];

$sql = mysqli_query($conn, 'INSERT INTO reserv_mobil (res_code, tanggal_berangkat, waktu_berangkat, feri, driver, nama_mobil, lama_sewa,  harga, id_user, id_harga, status) VALUES 
			("'.$res_code.'", "'.$tanggal_berangkat.'", "'.$waktu_berangkat.'","'.$feri.'", "'.$driver.'","'.$nama_mobil.'","'.$lama_sewa.'", "'.$harga.'", "'.$id_user.'", "'.$id_harga.'", "'.$status.'") ');
if($sql) {
    echo "<script>window.alert('Sedang dalam Proses, mohon tunggu!');window.location.href='keranjang.php';</script>";
} else {
    echo "<script>window.alert('Gagal');window.location.href='index.php';</script>";
}
?>
