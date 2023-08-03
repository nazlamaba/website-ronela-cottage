<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Pengunjung</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="index.php?act=customer">Back</a></li>
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
              <div class="card-body">
              <?php
                    include 'config/conn.php';
                    $pr = mysqli_query($conn, "SELECT * FROM pengunjung where id_user=$_GET[kd] ");
                    $rp = mysqli_fetch_assoc($pr) 
                ?>
              <form action="pages/update_customer.php" method="post">
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                      <label>Nama</label>
                        <input type="text" class="form-control" name="fullname" value="<?=$rp['fullname'];?>">
                      </div>
                    </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Alamat</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                        </div>
                        <input type="text" name="alamat" class="form-control" value="<?=$rp['alamat'];?>">
                      </div>
                    <!-- /.input group -->
                    </div>
                  </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>No Hanphone</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                        </div>
                        <input type="text" name="nohp" class="form-control" value="<?=$rp['nohp'];?>">
                      </div>
                    <!-- /.input group -->
                    </div>
                  </div>
                  <input type="hidden" name="id_user" value="<?php echo $rp['id_user'] ?>">
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