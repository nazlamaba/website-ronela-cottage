<html>

<head>
    <title>Rental Mobil | Cari</title>
    <link rel="icon" href="../../image/logo_head.png">
    <link rel="stylesheet" href="../../css/materialize.min.css">
    <link rel="stylesheet" href="../../css/ionicons.min.css">
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>

<body style="background: url(../../image/023.jpg); background-size: cover;" class="trans">
    <div class="white-text" style="background-color: rgba(0, 0, 0, 0.75); width: 100%; height:650px; margin-top: 35px;">
    <?php include "nav.php"; ?>

    <div class="container pt-5 mt-5">
        <div class="row">
            <div class="col s12">
                    <center><font face="times new rowman">
                        <h1>Hasil Pencarian mobil</h1>
                        <br>
                        <a href="index.php"><button class="btn waves-effect red"><i class="ion-search"></i> Cari Lagi</button></a>
                    </center>
                    <br>
                    <table id="example1" class="table table-bordered table-striped white-text">
                        <thead>
                            <tr>
                                <th><b><center> Foto</b></center></th>
                                <th><b> <center> Nama Mobil</b></center></th>                                
                                <th><b> <center>Lama Penyewaan</b></center></th>
                                <th><b> <center>Harga</b></center></th>
                                <th><b> <center>Type</b></center></th>
                                <th><b> <center>Pesan</b></center></th></font>
                            </tr>
                        </thead>
                        <tbody>
                        <?php include "koneksi.php";?>
                            <?php
                            $cari = $_POST['cari'];
                            $sql = "SELECT *
                            FROM harga,mobil,tipe_mobil 
                            WHERE tipe_mobil.`id_tipe`=mobil.`id_tipe` AND harga.`id_mobil`=mobil.`id_mobil` AND (CONVERT(id_harga USING utf8) LIKE '%$cari%' OR CONVERT(lama_sewa USING utf8) LIKE '%$cari%' OR CONVERT(nama_mobil USING utf8) LIKE '%$cari%' OR CONVERT(harga.id_mobil USING utf8) LIKE '%$cari%')
                             ";
                        $query = mysqli_query($conn, $sql);
                        $row = mysqli_num_rows($query);
                        if($row==0) {
                                echo "Pencarian tidak ditemukan, Silahkan Cari lagi!";
                            } else {
                        while($data = mysqli_fetch_array($query)) {
                        ?>
                                <tr class="white-text">
                                    <td><center>
                                        <img src="../../ronela_admin/image/<?php echo $data['foto'] ?>" width="200px" height="150px"/>
                                        </center>
                                    </td>
                                    <td>
                                        <center><?=$data['nama_mobil'];?></center>
                                    </td>
                                    <td>
                                        <center><?=$data['lama_sewa'];?></center>
                                    </td>
                                    <td>
                                        <center><?=$data['harga_sewa'];?></center>
                                    </td>
                                    <td>
                                        <center><?=$data['mobil_tipe'];?></center>
                                    </td>
                                    <td><center><a href="booking.php?id_harga=<?=$data['id_harga'];?>"><button class="btn waves-effect red"><i class="ion-ios-book"></i> Pesan</button></a></center></td>
                                </tr>
                                <?php  } }?>
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
</body>

</html>
