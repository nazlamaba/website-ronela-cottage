
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Detail Penginapan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php?act=data_mobil">Back</a></li>
              <li class="breadcrumb-item active">Detail Mobil</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card card-solid">
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-sm-6">
              <?php 
                include "config/conn.php";
                $qr = mysql_query("SELECT * FROM mobil WHERE id_mobil='$_GET[kd]' ");
                $dt = mysql_fetch_array($qr);
              ?>
              <h3 class="d-inline-block d-sm-none"></h3>
              <div class="col-12">
                <img src="image/<?php echo $dt['foto'] ?>" class="product-image" alt="Product Image">
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <h5 class="my-3">Plat Nomor : <?php echo $dt['plat_nomor'] ?></h5>
              <h5 class="my-3">Nama Mobil : <?php echo $dt['nama_mobil'] ?></h5>
              <hr>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->