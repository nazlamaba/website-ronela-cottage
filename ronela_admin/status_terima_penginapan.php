<?php
include "../config/config.php";

$id_penginapan = $_GET['id_penginapan'];
$status = 'Selesai';

$sql = mysqli_query($conn, 'update reserv_penginapan set status="'.$status.'" ');
if($sql) {
    echo "<script>alert('Pesanan telah berhasil di proses !'); window.location ='index.php?act=reserv_penginapan'</script>"; 
} else {
    echo "<script>alert('terjadi error!'); window.location = 'index.php?act=reserv_penginapan'</script>"; 
}
?>
