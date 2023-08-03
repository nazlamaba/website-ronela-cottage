<?php
include "koneksi.php";
session_start();

if(!isset($_SESSION['pengunjung']) || empty($_SESSION['pengunjung']) ) {
    echo "<script>window.alert('Anda harus Sign In terlebih dahulu!!');window.location.href='signin.php';</script>";
}
