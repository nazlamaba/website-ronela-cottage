<?php

include "../config/conn.php";

	$id_hotel 	= $_POST['id_hotel'];
	$no 		= $_POST['nomor'];
	$hrg 		= $_POST['harga'];
	$tpe 		= $_POST['tipe'];
	$fts 		= $_POST['fasilitas'];
    $foto_name 	= $_FILES['foto']['name'];
    $foto_tmp 	= $_FILES['foto']['tmp_name'];

	if(empty($no))
	{
		echo "<script>alert('Data tidak berhasil ditambahkan!'); window.location = '../index.php?act=data_penginapan'</script>"; 	
	}
	
	else{
		move_uploaded_file($foto_tmp, "../image/penginapan/".$foto_name);
		

		$simpan = mysql_query("UPDATE penginapan SET no_kamar='$no', harga='$hrg', tipe='$tpe', fasilitas='$fts', foto='$foto_name' WHERE id_hotel='$id_hotel' ");
		echo "<script>alert('Data berhasil diubah!'); window.location = '../index.php?act=data_penginapan'</script>"; 

	}
?>