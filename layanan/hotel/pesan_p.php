<?php
include "koneksi.php";

$res_code 	= $_POST['res_code'];
$no_kamar 	= $_POST['no_kamar'];
$tgl_masuk 	= $_POST['tgl_masuk'];
$waktu_masuk= $_POST['waktu_masuk'];
$tgl_keluar = $_POST['tgl_keluar'];
$harga 		= $_POST['harga'];
$id_hotel 	= $_POST['id_hotel'];
$id_user 	= $_POST['id_user'];
$status 	= $_POST['status'];

$sql = mysqli_query($conn, 'INSERT INTO reserv_penginapan (res_code, no_kamar, tgl_masuk,waktu_masuk, tgl_keluar, harga, id_hotel, id_user, status) VALUES 
			("'.$res_code.'", "'.$no_kamar.'", "'.$tgl_masuk.'","'.$waktu_masuk.'","'.$tgl_keluar.'","'.$harga.'","'.$id_hotel.'","'.$id_user.'","'.$status.'") ');
if($sql) {
    echo "<script>window.alert('selamat pesanan anda berhasil dibuat!');window.location.href='keranjang.php';</script>";
} else {
    echo "<script>window.alert('maaf, gagal Membuat pesanan');window.location.href='checkin.php';</script>";
}
?>
