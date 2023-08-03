<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1> Edit Data Admin</h1>
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
                <h3 class="card-title">Edit  Data</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <?php
                    include 'config/conn.php';
                    $pr = mysqli_query($conn, "SELECT * FROM admin where id_admin=$_GET[kd] ");
                    $rp = mysqli_fetch_assoc($pr) 
                ?>
                <form action="pages/update_admin.php" method="post">
                      <!-- text input -->
                      <div class="col-md-3">
                      <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" name="username"  value="<?=$rp['username'];?>">
                      </div>
                    </div>
                    <div class="col-md-3">
                    <div class="form-group">
                      <label>Password</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                        </div>
                          <input type="text" name="password" class="form-control" value="<?=$rp['password'];?>">
                      </div>
                    <!-- /.input group -->
                    </div>
					          <div class="form-group">
                      <label>Fullname</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                        </div>
                          <input type="text" name="fullname" class="form-control" value="<?=$rp['fullname'];?>">
                      </div>
                    <!-- /.input group -->
                    </div>
                    <input type="hidden" name="id_admin" value="<?php echo $rp['id_admin'] ?>">
                  </div>
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
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