<?php

include '../config/conn.php';

	$id_admin   = $_POST['id_admin'];	
	$username   = $_POST['username'];
	$password   = $_POST['password'];
	$fullname 	= $_POST['fullname'];
   
    if(empty($password))
	{
		echo "<script>alert('Data tidak berhasil ditambahkan!'); window.location = '../index.php?act=admin'</script>"; 	
	}else{

    $simpan = mysql_query("UPDATE admin SET username='$username', password='$password', fullname='$fullname'  WHERE id_admin='$id_admin' ");
        echo "<script>alert('Data berhasil Di Ubah!'); window.location = '../index.php?act=admin'</script>"; 
    }
?>