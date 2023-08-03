<?php

include '../config/conn.php';

	$id_user = $_POST['id_user'];	
	$fullname = $_POST['fullname'];
	$alamat = $_POST['alamat'];
	$nohp 	= $_POST['nohp'];
   
    if(empty($fullname))
	{
		echo "<script>alert('Data tidak berhasil ditambahkan!'); window.location = '../index.php?act=customer'</script>"; 	
	}else{

    $simpan = mysql_query("UPDATE pengunjung SET id_user='$id_user', fullname='$fullname', alamat='$alamat', nohp='$nohp' WHERE id_user='$id_user' ");
        echo "<script>alert('Data berhasil Di Ubah!'); window.location = '../index.php?act=customer'</script>"; 
    }
?>