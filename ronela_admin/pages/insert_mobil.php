<?php

include '../config/conn.php';

	$plat_nomor = $_POST['plat_nomor'];
	$nama_mobil = $_POST['nama_mobil'];
	$id_tipe 	= $_POST['id_tipe'];
	$foto_name = $_FILES['foto']['name'];
    $foto_tmp = $_FILES['foto']['tmp_name'];

	if(empty($plat_nomor))
	{
		echo "<script>alert('Data tidak berhasil ditambahkan!'); window.location = '../index.php?act=input_mobil'</script>"; 	
	}
	else {
		move_uploaded_file($foto_tmp, "../image/".$foto_name);

		$simpan = mysql_query('INSERT INTO mobil (plat_nomor, nama_mobil, foto, id_tipe) values ("'.$plat_nomor.'","'.$nama_mobil.'", "'.$foto_name.'", "'.$id_tipe.'") ');
        echo "<script>alert('Data berhasil ditambahkan!'); window.location = '../index.php?act=input_mobil'</script>"; 
	}	
?>