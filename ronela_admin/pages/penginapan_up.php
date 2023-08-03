<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Resort</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="index2.php?act=reservasi">Resort</a></li>
          <li class="breadcrumb-item active">Edit Data</li>
        </ol>
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
                <h3 class="card-title">Edit Data</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <?php 
                  include "config/conn.php";
                  $qr = mysql_query("SELECT * FROM penginapan WHERE id_hotel='$_GET[kd]'");
                  $dt = mysql_fetch_array($qr);
                ?>
                <form action="pages/update_penginapan.php" method="post" enctype="Multipart/form-data">
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <input type="hidden" name="id_hotel" value="<?php echo $dt['id_hotel'] ?>">
                      <div class="form-group">
                        <label>Nomor Kamar</label>
                        <input type="number" value="<?php echo $dt['no_kamar'] ?>" class="form-control" name="nomor" placeholder="" required>
                      </div>
                    </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Harga Kamar</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                        </div>
                          <input type="number" value="<?php echo $dt['harga'] ?>" name="harga" class="form-control" required>
                      </div>
                    <!-- /.input group -->
                    </div>
                  </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Tipe Kamar</label>
                          <select class="form-control" name="tipe">
                            <option><?php echo $dt['tipe'] ?></option>
                            <option value="Sedang">Sedang</option>
                            <option value="Ekstra">Ekstra</option>
                          </select>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Fasilitas</label>
                        <input type="text" class="form-control" value="<?php echo $dt['fasilitas'] ?>" name="fasilitas" required></textarea>
                      </div>
                    </div>
                  </div>
                    <div class="col-sm-6">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Foto</label>
                          <input type="file" name="foto" class="form-control">
                      </div>
                    </div>
                  </div>
                  
                  </div>
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                    <a href="index2.php?act=add-resort" class="btn btn-success">Back</a>
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