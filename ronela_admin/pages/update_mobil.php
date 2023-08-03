<?php

include '../config/conn.php';

	$id_mobil = $_POST['id_mobil'];	
	$plat_nomor = $_POST['plat_nomor'];
	$nama_mobil = $_POST['nama_mobil'];
	$id_tipe 	= $_POST['id_tipe'];
   
    if(empty($nama_mobil))
	{
		echo "<script>alert('Data tidak berhasil ditambahkan!'); window.location = '../index.php?act=data_mobil'</script>"; 	
	}else{

    $simpan = mysql_query("UPDATE mobil SET id_mobil='$id_mobil', plat_nomor='$plat_nomor', nama_mobil='$nama_mobil', id_tipe='$id_tipe' WHERE id_mobil='$id_mobil' ");
        echo "<script>alert('Data berhasil Di Ubah!'); window.location = '../index.php?act=data_mobil'</script>"; 
    }
?>