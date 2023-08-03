<?php
include "../config/conn.php";
$nama = $_GET['kd'];

$query = mysql_query("DELETE FROM penginapan WHERE id_hotel='$nama'");
if ($query){
	echo "<script>alert('Data Berhasil dihapus!'); window.location = '../index.php?act=data_penginapan'</script>";	
} else {
	echo "<script>alert('Data Gagal dihapus!'); window.location = '../index.php?act=sewa-data_penginapan'</script>";	
}
?>