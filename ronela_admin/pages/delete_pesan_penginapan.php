<?php
include "../config/conn.php";
$res_code = $_GET['kd'];

$query = mysql_query("DELETE FROM reserv_penginapan WHERE id_penginapan='$res_code'");
if ($query){
	echo "<script>alert('Data Berhasil dihapus!'); window.location = '../index.php?act=reserv_penginapan'</script>";	
} else {
	echo "<script>alert('Data Gagal dihapus!'); window.location = '../index.php?act=reserv_penginapan'</script>";	
}
?>