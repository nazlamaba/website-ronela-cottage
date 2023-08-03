<?php
include '../config/conn.php';
$username = $_GET['kd'];

$query = mysql_query("DELETE FROM pengunjung WHERE id_user='$username'");
if ($query){
	echo "<script>alert('Data Berhasil dihapus!');window.location = '../index.php?act=customer'</script>";	
} else {
	echo "<script>alert('Data Gagal dihapus!');window.location = '../index.php?act=customer'</script>";	
}
?>