<html>

<head>
    <title>Ronella Cottage </title>
    <link rel="icon" href="../../image/logo_head.png">
    <link rel="stylesheet" href="../../css/materialize.min.css">
    <link rel="stylesheet" href="../../css/ionicons.min.css">
    <script src="../../js/jquery-3.2.1.min.js"></script>
    <script src="../../js/materialize.min.js"></script>
</head>


<body style="background: url(../../image/wallpaperbetter.com_1920x1080.jpg); background-size: cover;" class="trans">
    <div class="" style="background-color: rgba(0, 0, 0, 0.75); width: 100%; height:1120px; margin-top: 35px;">
   
    <?php include "nav.php"; ?>
    <?php include "../session.php"; ?>
    <div class="container pt-5 mt-5">
        <div class="row pt-5">
            <div class="col s12">
                    <center>
					<font face="Bernard MT Condensed">
                        <h1 style="color:white">Layanan Penginapan </h1>
                    </center>
					</font>
                </div>
            </div>
        </div>
        <div class="container">
         <div class="col s12">   
        <?php 
            include "../../ronela_admin/config/conn.php";
            
            $qr = mysql_query("SELECT * FROM penginapan ");
        ?>
        <?php 
            while ($dt = mysql_fetch_array($qr)){


        ?>
        <div class="row pt-4">
            <div class="col s6 pt-4 mt-4">
                <div class="thumbnail">
                    <img src="../../ronela_admin/image/penginapan/<?php echo $dt['foto']?>"  
                    width="450"
                    height="400">
                </div>
            </div>
          <div class="col s6 pt-4 mt-4">
                    <h5><font face="orator" color="#ecad05"><b>Kamar      : <?php echo $dt['no_kamar']?></b></font></h5>
                    <br>
                    <h5 align="center"><font face="Cambria" color="#ecad05"> Deskripsi Kamar </font></h5><hr>
                    <p><font face="orator" color="white"> Fasilitas   : </font><font face="papyrus" color="white"><?php echo $dt['fasilitas']?></font></p>
                    <hr>
                    <p><font face="orator" color="white">Tipe Kamar  : </font><font face="papyrus" color="white"><?php echo $dt['tipe']?></font></p>
                    <hr>
                    <p><font face="orator" color="white"> Harga Kamar : </font><font face="papyrus" color="white">Rp.<?php echo $dt['harga']?></font> <font face="orator std"size="1" color="red">/Malam</font></p>
                    <hr>
                    <a href="checkin.php?id_hotel=<?=$dt['id_hotel'];?>"><button class="btn waves-effect red"><i class="ion-ios-book"></i> Pesan</button></a>
            </div>
    </div>
    <?php } ?>
</div> 
</div> 
</body>

</html>
