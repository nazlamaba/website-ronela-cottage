<html>

<head>
    <title>Penginapan | Booking</title>
    <link rel="icon" href="../../image/logo_head.png">
    <link rel="stylesheet" href="../../css/materialize.min.css">
    <link rel="stylesheet" href="../../css/ionicons.min.css">
    <script src="../../js/jquery-3.2.1.min.js"></script>
    <script src="../../js/materialize.min.js"></script>
</head>

<body style="background: url(../../image/head.png); background-size: 500px;" class="trans">
    <div class="white-text" style="background-color: rgba(0, 0, 0, 0.75); width: 100%; height:900px; margin-top: 35px;">
   
    <?php include "nav.php"; ?>
    <?php include "../session.php"; ?>
	<br>
	<div class="container pt-5 mt-5">
	  <?php
        include "../koneksi.php";
        $id_hotel = $_GET['id_hotel'];
        $sqr = mysqli_query($conn, 'select * from penginapan where id_hotel="'.$id_hotel.'" ');
        $qur = mysqli_fetch_array($sqr);
      ?>
		<div class="row">
			<div class="col s6">
                    <font face="algrin"><h3 style="color:white"> DETAILS</H3></font>
                    <img src="../../ronela_admin/image/penginapan/<?php echo $qur['foto']?>"  
                    width="400"
                    height="350">
                    <br>
                    <br>
                    <font face="papyrus" ><H5 style="color:white">Kamar         : <?php echo $qur['no_kamar']?></H5></font>
                    <font face="papyrus" ><H5 style="color:white">Tipe    : <?php echo $qur['tipe']?></H5></font>
                    <font face="papyrus"><H5 style="color:white">Harga         : Rp.<?php echo $qur['harga']?>/malam</H5></font>
            </div>
            <div class="col s6">
                    <h3 align="center" style="color:white">Checked in</h3>
                    <form method="post" action="pesan_p.php">
                        <div class="input-field">
                            <?php
                            $rang = range(1, 9);
                            shuffle($rang);
                            $c = implode($rang);
                            $res_code = $c;
                            ?>
                                <input type="text" name="res_code" id="name" value="<?=$res_code;?>">
                                <label for="name">Kode Booking</label>
                        </div>
                                <input type="hidden" name="no_kamar" id="h" value="<?=$qur['no_kamar'];?>">	
                            <div class="input-field">
                                <p class="grey-text">Tanggal Masuk</p>
                                <input type="date" name="tgl_masuk">
                            </div>
                            <div class="input-field">
                                <p class="grey-text">Waktu Chacked In</p>
                                <input type="time"name="waktu_masuk">
                            </div>
							<div class="input-field">
                                <p class="grey-text">Tanggal Keluar</p>
                                <input type="date" name="tgl_keluar">
                            </div>
                                <input type="hidden" name="harga" id="h" value="<?=$qur['harga'];?>">
                                <?php
                                include "../koneksi.php";
                                $squ = mysqli_query($conn, 'select * from pengunjung where username="'.$_SESSION['pengunjung'].'" ');
                                $quu = mysqli_fetch_array($squ);
                                ?>
                                <input type="hidden" name="id_user" id="iu" value="<?=$quu['id_user'];?>">
                                <input type="hidden" name="id_hotel" id="ir" value="<?=$qur['id_hotel'];?>">
                                <input type="hidden" name="status" id="status" value="Proses" class="disabled">
                                
                           
                            <button class="btn waves-effect red"><i class="ion-load-c"></i> Booking</button>
                    </form>
                </div>
            </div>
    <?php include "../../footer.php";?>
</body>

</html>
