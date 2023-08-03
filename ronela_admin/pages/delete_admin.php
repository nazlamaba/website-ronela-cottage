<?php
include '../config/conn.php';
$username = $_GET['kd'];

$query = mysql_query("DELETE FROM admin WHERE id_admin='$username'");
if ($query){
	echo "<script>alert('Data Berhasil dihapus!');window.location = '../signin.php'</script>";	
} else {
	echo "<script>alert('Data Gagal dihapus!');window.location = '../index.php?act=admin'</script>";	
}
?>