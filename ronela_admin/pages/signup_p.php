<?php

include '../config/conn.php';

	$username = $_POST['username'];
	$password = $_POST['password'];
	$fullname 	= $_POST['fullname'];


		$simpan = mysql_query('INSERT INTO admin (username, password, fullname ) values ("'.$username.'","'.$password.'", "'.$fullname.'") ');
		 if($simpan) {
        echo "<script>alert('Data berhasil ditambahkan!'); window.location = '../index.php?act=admin'</script>"; 
    } else {
        echo "<script>window.alert('Data gagal di Upload');window.close();</script>";
    } 

?>