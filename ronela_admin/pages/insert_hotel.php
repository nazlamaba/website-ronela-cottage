<?php

include '../config/conn.php';

	$no = $_POST['no_kamar'];
	$hrg =$_POST['harga'];
	$tpe =$_POST['tipe'];
	$fts =$_POST['fasilitas'];
    $foto_name = $_FILES['foto']['name'];
    $foto_tmp = $_FILES['foto']['tmp_name'];
	
	if(empty($no))
	{
		echo "<script>alert('Data tidak berhasil ditambahkan!'); window.location = '../index.php?act=input_penginapan'</script>"; 	
	}
	
	else{
		move_uploaded_file($foto_tmp, "../image/penginapan/".$foto_name);
    
		$simpan = mysql_query("INSERT INTO penginapan (no_kamar, harga, tipe, fasilitas, foto) values ('$no', '$hrg', '$tpe', '$fts', '$foto_name')");
		echo "<script>alert('Data berhasil ditambahkan!'); window.location = '../index.php?act=data_penginapan'</script>"; 
	}
?>