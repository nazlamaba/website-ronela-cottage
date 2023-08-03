<html>

<head>
    <title>Rental Mobil | Booking</title>
    <link rel="icon" href="../../image/logo_head.png">
    <link rel="stylesheet" href="../../css/materialize.min.css">
    <link rel="stylesheet" href="../../css/ionicons.min.css">
    <script src="../../js/jquery-3.2.1.min.js"></script>
    <script src="../../js/materialize.min.js"></script>
</head>

<body style="background: url(../../image/head.png); background-size: cover;" class="trans">
    <div class="white-text" style="background-color: rgba(0, 0, 0, 0.75); width: 100%; height:700px; margin-top: 35px;">
   
    <?php include "../session.php"; ?>
    <?php include "nav.php"; ?>
    <div class="container pt-5 mt-5">
    <?php
        include "koneksi.php";
        $id_harga = $_GET['id_harga'];
        $sqr = mysqli_query($conn, 'select * from harga where id_harga="'.$id_harga.'" ');
        $qur = mysqli_fetch_array($sqr);
                                ?>
    <?php
        include "koneksi.php";
        $sqt = mysqli_query($conn, 'select * from mobil where id_mobil="'.$qur['id_mobil'].'" ');
        $qut = mysqli_fetch_array($sqt);
                                ?>
            <div class="row">                            
            <div class="col s6 pt-5 mt-5">
                    <font face="algrin" color="white"><h3><b>DETAILS</b></h3></font>
                    <img src="../../ronela_admin/image/<?php echo $qut['foto']?>"  
                    width="400"
                    height="300">
                    <br>
                    <br>
                    <font face="algrin" color="white"><p>Nama Mobil : <b><?php echo $qut['nama_mobil']?></b></p>
                     <p>Plar Nomor : <b><?php echo $qut['plat_nomor']?></b></p></font>
            </div>
            <div class="col s6 pt-5 mt-5">
                    <h3 align="center"><font face="algrin">Booking</font></h3>
                    <form method="post" action="pesan_p.php">
                        <div class="input-field">
                            <?php
                            $rang = range(1, 9);
                            shuffle($rang);
                            $c = implode($rang);
                            $res_code = $c;
                            ?>
                                <label for="name">Kode Booking</label>
                                <input type="text" name="res_code" id="name" value="<?=$res_code;?>">
                        </div>
                            <div class="input-field">
                                <p class="grey-text">Tanggal Berangkat</p>
                                <input type="date" name="tanggal_berangkat">
                            </div>
                            <p class="grey-text">Waktu Berangkat Feri</p>
                                <select class="form-control" name="feri" required>
                                <option selected disabled>Pilih waktu berangkat </option>
                                <option value="Pukul 08:00 WIT">Pukul : 08:00 WIT</option>
                                <option value="Pukul 14:00 WIT">Pukul : 14:00 WIT</option>
                            </select>
							<div class="input-field">
                                <p class="grey-text">Waktu Berangkat </p>
                                <input type="time" name="waktu_berangkat">
							</div>
                            <p class="grey-text"> Pilihan Driver</p>
                             <select name="driver" class="form-control" required>
                                <option selected disabled>Pilih Driver</option>
                                <option value="Tanpa Driver">Tanpa Driver</option>
                                <option value="Dengan Driver">Dengan Driver</option>
                            </select>
                          <br>
                                    <input type="hidden" name="nama_mobil" id="phone" value="<?=$qut['nama_mobil'];?>">
                                
                                <input type="hidden" name="lama_sewa" id="h" value="<?=$qur['lama_sewa'];?>">               
                                <input type="hidden" name="harga" id="h" value="<?=$qur['harga_sewa'];?>">                        
                                <?php
                                include "koneksi.php";
                                $squ = mysqli_query($conn, 'select * from pengunjung where username="'.$_SESSION['pengunjung'].'" ');
                                $quu = mysqli_fetch_array($squ);
                                ?>
                                    <input type="hidden" name="id_user" id="iu" value="<?=$quu['id_user'];?>">                            						 
                                    <input type="hidden" name="id_harga" id="ir" value="<?=$qur['id_harga'];?>">
                                    <input type="hidden" name="status" id="status" value="Proses" class="disabled">

                            <button class="btn waves-effect red"><i class="ion-load-c"></i> Booking</button>
                    </form>
                </div>
        </div>
    </div>
    </div>
</body>

</html>
