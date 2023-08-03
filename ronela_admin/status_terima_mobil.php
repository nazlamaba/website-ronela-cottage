<?php
include "../config/config.php";

$id_reserv = $_GET['id_reserv'];
$status = 'Selesai';

$sql = mysqli_query($conn, 'update reserv_mobil set status="'.$status.'" ');
if($sql) {
    echo "<script>alert('Pesanan telah berhasil di proses !'); window.location ='index.php?act=reserv_mobil'</script>"; 
} else {
    echo "<script>alert('terjadi error!'); window.location = 'index.php?act=reserv_mobil'</script>"; 
}
?>
