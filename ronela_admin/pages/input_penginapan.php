<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Penginapan</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="index2.php?act=reservasi">Penginapan</a></li>
          <li class="breadcrumb-item active">Add Data</li>
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
                <h3 class="card-title">Add Data</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="pages/insert_hotel.php" method="post" enctype="Multipart/form-data">
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Nomor Kamar</label>
                        <input type="number" class="form-control" name="no_kamar" placeholder="" required>
                      </div>
                    </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Harga Kamar</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                        </div>
                          <input type="number" name="harga" class="form-control" required>
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
                            <option value="Sedang">Sedang</option>
                            <option value="Ekstra">Ekstra</option>
                          </select>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Fasilitas</label>
                        <textarea class="form-control" rows="2" name="fasilitas" placeholder="" required></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Foto</label>
                          <input type="file" name="foto" class="form-control">
                      </div>
                    </div>
                  </div>
                  </div>
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="index.php?act=data_penginapan" class="btn btn-success">Lihat data</a>
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