<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Hotel Template">
    <meta name="keywords" content="Hotel, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ora Beach | Parawisata</title>
    <link rel="shortcut icon" href="../img/lg.png">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Taviraj:300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="../css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="../css/linearicons.css" type="text/css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="../css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="../css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="../css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="../css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="../style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    <section class="room-section spad">
        <?php 
            include "../ronela_admin/config/conn.php";
            
            $qr = mysql_query("SELECT * FROM penginapan ");
        ?>
        <?php 
            while ($dt = mysql_fetch_array($qr)){


        ?>
        <div class="container">
            <div class="rooms-page-item">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="room-pic-slider owl-carousel">
                            <div class="single-room-pic">
                                <img src="../ronela_admin/image/dalam/<?php echo $dt['dalam'] ?>" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="room-text">
                            <div class="room-title">
                                <h2>Room <?php echo $dt['no_kamar'] ?></h2>
                                <div class="room-price">
                                    <br>
                                    <span>From</span>
                                    <h2>Rp. <?php echo number_format($dt['harga']) ?>,-</h2>
                                    <sub>/night</sub>
                                </div>
                            </div>
                            <div class="room-desc">
                                <p>Pantai Ora memiliki resort penginapan yang mengambang diatas pantai. Sementara di desa Sawai terdapat pondok wisata yang berada di antara pemukiman penduduk yang juga terapung di pantai. Berbagai kegiatan wisata yang dapat dilakukan di pantai Ora antara lain wisata alam, wisata tirta, snorkeling, selam, wisata kuliner, jelajah goa, dam fotografi.</p>
                            </div>
                            <div class="room-features">
                                <div class="room-info">
                                    <i class="flaticon-019-television"></i>
                                    <span>Smart TV</span>
                                </div>
                                <div class="room-info">
                                    <i class="flaticon-029-wifi"></i>
                                    <span>High Wi-fii</span>
                                </div>
                                <div class="room-info">
                                    <i class="flaticon-003-air-conditioner"></i>
                                    <span>AC</span>
                                </div>
                                <div class="room-info">
                                    <i class="flaticon-036-parking"></i>
                                    <span>Parking</span>
                                </div>
                                <div class="room-info last">
                                    <i class="flaticon-007-swimming-pool"></i>
                                    <span>Pool</span>
                                </div>
                            </div>
                            <a href="./input-sewa.php?&kd=<?php echo $dt['id'] ?>" class="primary-btn">Check In Resort <i class="lnr lnr-arrow-right"></i></a>
                            <a href="./input-reservasi.php?&kd=<?php echo $dt['id'] ?>" class="primary-btn">Check Resort <i class="lnr lnr-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </section>
    <!-- Rooms Section End -->

    <!-- Footer Section Begin -->
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>