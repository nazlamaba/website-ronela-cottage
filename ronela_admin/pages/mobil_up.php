<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1> Sewa Mobil</h1>
    </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <!-- left column -->
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-12">
            <!-- general form elements disabled -->
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Add Data</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <?php
                    include 'config/conn.php';
                    $pr = mysqli_query($conn, "SELECT * FROM mobil where id_mobil=$_GET[kd] ");
                    $rp = mysqli_fetch_assoc($pr) 
                ?>
                <form action="pages/update_mobil.php" method="post">
                      <!-- text input -->
                      <div class="col-md-3">
                      <div class="form-group">
                        <label>Plat Nomor</label>
                        <input type="text" class="form-control" name="plat_nomor" value="<?=$rp['plat_nomor'];?>">
                      </div>
                    </div>
                    <div class="col-md-3">
                    <div class="form-group">
                      <label>Nama  Mobil</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                        </div>
                          <input type="text" name="nama_mobil" class="form-control" value="<?=$rp['nama_mobil'];?>">
                      </div>
                    <!-- /.input group -->
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Type</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                        </div>
                           <select class="form-control" name="id_tipe">
                            <?php
                                include 'config/conn.php';
                                $result = mysqli_query($conn, "SELECT * FROM tipe_mobil ");
                                while ($row = mysqli_fetch_assoc($result)) {?>
                                <option value="<?php echo $row['id_tipe']?>"><?php echo $row['mobil_tipe']?></option>
                            <?php }?>
                          </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <input type="hidden" class="form-control" name="id_mobil" value="<?=$rp['id_mobil'];?>">
                      </div>
                    </div>
                  </div>
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="index.php?act=data_mobil" class="btn btn-success">Lihat data</a>
                </div>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- general form elements disabled -->
            
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->