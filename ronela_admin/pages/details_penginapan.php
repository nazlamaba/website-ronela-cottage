
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Detail Penginapan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php?act=data_penginapan">Back</a></li>
              <li class="breadcrumb-item active">Detail Penginapan</li>
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
                $qr = mysql_query("SELECT * FROM penginapan WHERE id_hotel='$_GET[kd]' ");
                $dt = mysql_fetch_array($qr);
              ?>
              <h3 class="d-inline-block d-sm-none"></h3>
              <div class="col-12">
                <img src="image/dalam/<?php echo $dt['dalam'] ?>" class="product-image" alt="Product Image">
              </div>
              <div class="col-12 product-image-thumbs">
                <div class="product-image-thumb active"><img src="image/luar/<?php echo $dt['luar'] ?>" alt="Product Image"></div>
                <div class="product-image-thumb" ><img src="image/dalam/<?php echo $dt['dalam'] ?>" alt="Product Image"></div>
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <h3 class="my-3">Rooms : <?php echo $dt['no_kamar'] ?></h3>
              <h3 class="my-3">Fasilitas : <?php echo $dt['fasilitas'] ?></h3>
              <hr>
              <div class="bg-gray py-2 px-3 mt-4">
                <h2 class="mb-0">
                  Rp. <?php echo number_format($dt['harga']) ?>,-
                </h2>
                <h2 class="mb-0">
                  Tipe: <?php echo $dt['tipe'] ?>
                </h2>
              </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->