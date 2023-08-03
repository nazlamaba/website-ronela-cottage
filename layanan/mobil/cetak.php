<html>

<head>
    <title>Ronella Cottage </title>
    <link rel="icon" href="../image/logo2.png">
    <link rel="stylesheet" href="../../css/materialize.min.css">
    <link rel="stylesheet" href="../../css/ionicons.min.css">
    <script src="../../js/jquery-3.2.1.min.js"></script>
    <script src="../../js/materialize.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col s7">
                <div class="card">
                    <div class="card-title blue white-text">
                        <p>Ronella Cottage</p>
                    </div>
                    <div class="card-content">
                        <div class="row">
                            <div class="col s6">
                                <?php
                            include "koneksi.php";
                            include "../session.php";
                            
                            $id_reserv = $_GET['id_reserv'];
                            $sr = mysqli_query($conn, 'select * from reserv_mobil where id_reserv="'.$id_reserv.'" ');
                            $fr = mysqli_fetch_array($sr);
                            ?>
                                    <form>
									<?php
											include "koneksi.php";
											$sc = mysqli_query($conn, 'select * from pengunjung where username="'.$_SESSION['pengunjung'].'" ');
											$qc = mysqli_fetch_array($sc);
											$scus = mysqli_query($conn, 'select * from pengunjung where id_user="'.$qc['id_user'].'" ');
											$fcus = mysqli_fetch_array($scus);
									?>
                                            <div class="input-field">
                                                <p>Nama Pemesan</p>
                                                <input type="text" id="form" value="<?=$qc['fullname'];?>">
                                            </div>
                                            <div class="input-field">
                                                <p>Nama Mobil</p>
                                                <input type="text" id="to" value="<?=$fr['nama_mobil'];?>">
                                            </div>
                                            <div class="input-field">
                                                <p>lama sewa</p>
                                                <input type="text" id="date" value="<?=$fr['lama_sewa'];?>">
                                            </div>
                                    </form>
                            </div>
                            <div class="col s6">
                                <div class="input-field">
                                    <p>Alamat</p>
                                    <input type="text" id="depat" value="<?=$qc['alamat'];?>">
                                </div>
                                <div class="input-field">
                                    <p>Waktu Berangkat</p>
                                    <input type="text" id="seat" value="<?=$fr['waktu_berangkat'];?>">
                                </div>
                                <div class="input-field">
                                    <p>Harga Sewa</p>
                                    <input type="text" id="price" value="<?=$fr['harga'];?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col s6">
                                <img src="../../image/foot_logo.png" class="center" style="width: 100px; height: 100px; margin-left: 70px;">
                            </div>
                            <div class="col s6">
                                <form>
                                    <div class="input-field">
                                        <p class="center">Kode Boking</p>
                                        <input class="center" type="text" id="bocode" value="<?=$fr['res_code'];?>">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<script>
    window.print();

</script>
