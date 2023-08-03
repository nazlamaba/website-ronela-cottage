<html>

<head>
    <title>Rental Mobil | keranjang</title>
    <link rel="icon" href="../image/logo_head.png">
    <link rel="stylesheet" href="../../css/materialize.min.css">
    <link rel="stylesheet" href="../../css/ionicons.min.css">
    <script src="../../js/jquery-3.2.1.min.js"></script>
    <script src="../../js/materialize.min.js"></script>
</head>

<body style="background: url(../../image/023.jpg); background-size: cover;" class="trans">
    <div class="white-text" style="background-color: rgba(0, 0, 0, 0.75); width: 100%; height:700px; margin-top: 35px;">
   
    <?php include "nav.php"; ?>
    <?php
    include "../session.php";?>
    <?php
    include "koneksi.php";
    $s = mysqli_query($conn, 'select * from pengunjung where username="'.$_SESSION['pengunjung'].'" ');
    $q = mysqli_fetch_array($s);
    $id_user = $q['id_user'];
    ?>
        <div class="container pt-5 mt-5">
            <div class="row pt-5">
                <div class="col s12">
                        <center>
						
                            <h1><font face="Bernard MT Condensed"><i class="ion-android-cart"></i> Keranjang Anda</font></h1>
                            <p><font face="Segoe Print">silahkan untuk cetak pesanan anda </font></p>
                            </center>
                </div>
                </div>
                </div>
                <div class="container">
                <div class="row">
                <div class="col-md-4">
                    <?php
                include "koneksi.php";
                $sql = mysqli_query($conn, 'select * from reserv_mobil where id_user="'.$id_user.'" ');
                while($query = mysqli_fetch_array($sql)) {
                ?>
                        <div class="card-panel blue">
                            <b class="white-text">Code Booking</b>
                            <p>
                                <?=$query['res_code'];?>
                            </p>
                            <b class="white-text">Cetak</b>
                            <br>
                            <p>
                                    <a href="cetak.php?id_reserv=<?=$query['id_reserv'];?>" target="_blank"><button class="btn waves-effect red"><i class="ion-android-print"></i></button></a>
                            </p>
                        </div>
                        <?php } ?>
                </div>
            </div>
        </div>
        <br>
        <br>
</body>

</html>
