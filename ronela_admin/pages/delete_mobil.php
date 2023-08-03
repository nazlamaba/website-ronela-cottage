<?php
include '../config/conn.php';
$nama_mobil = $_GET['kd'];

$query = mysql_query("DELETE FROM mobil WHERE id_mobil='$nama_mobil'");
if ($query){
	echo "<script>alert('Data Berhasil dihapus!');window.location = '../index.php?act=data_mobil'</script>";	
} else {
	echo "<script>alert('Data Gagal dihapus!');window.location = '../index.php?act=data_mobil'</script>";	
}
?>