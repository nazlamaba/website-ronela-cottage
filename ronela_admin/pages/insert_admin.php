<?php

include '../config/conn.php';

	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);


		$simpan = mysql_query('INSERT INTO admin (username, email, password ) values ("'.$username.'","'.$email.'", "'.$password.'") ');
		 if($simpan) {
        echo "<script>alert('Data berhasil ditambahkan!'); window.location = '../berhasil_login.php?act=admin'</script>"; 
    } else {
        echo "<script>window.alert('Data gagal di Upload');window.close();</script>";
    } 

?>