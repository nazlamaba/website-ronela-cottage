<?php
session_start();
session_destroy();
echo "<script>window.alert('Anda telah SignOut');window.location.href='signin.php';</script>";
?>
