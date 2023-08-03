<?php
include '../config/conn.php';
$res_code = $_GET['kd'];

$query = mysql_query("DELETE FROM reserv_mobil WHERE id_reserv='$res_code'");
if ($query){
	echo "<script>alert('Data Berhasil dihapus!');window.location = '../index.php?act=reserv_mobil'</script>";	
} else {
	echo "";	
}
?>