<div class="container-fluid">
        <div class="card-header">
          <h2>Dashboard</h2>
        </div>
        <!-- Small boxes (Stat box) -->
        <div class="row mt-3">
          <div class="col-lg-3 col-3">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <?php 
                  include "config/conn.php";
                  $tampil=mysql_query("SELECT * FROM reserv_mobil order by id_reserv desc");
                  $total = mysql_num_rows($tampil);
                ?>
                <h3><?php echo "$total"; ?></h3>

                <p>Reservation Mobil</p>
              </div>
              <div class="icon">
              <i class="fa fa-table"></i>
              </div>
              <a href="index.php?act=reserv_mobil" class="small-box-footer">Lihat data<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
		    <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
                <?php 
                  include "config/conn.php";
                  $tampil = mysql_query("SELECT * FROM reserv_penginapan ORDER BY id_penginapan desc");
                  $total = mysql_num_rows($tampil);
                ?>
                <h3><?php echo "$total" ?></h3>

                <p>Reservasi Penginapan</p>
              </div>
              <div class="icon">
                <i class="fa fa-table"></i>
              </div>
              <a href="index.php?act=reserv_penginapan" class="small-box-footer">Lihat Data <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <?php 
                  include "config/conn.php";
                  $tampil = mysql_query("SELECT * FROM pengunjung ORDER BY id_user desc");
                  $total = mysql_num_rows($tampil);
                ?>
                <h3><?php echo "$total" ?></h3>

                <p>Pengunjung</p>
              </div>
              <div class="icon">
                <i class="fa fa-user"></i>
              </div>
              <a href="index.php?act=customer" class="small-box-footer">Lihat Data <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div> 
		  
          <!-- ./col -->
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
            <!-- Custom tabs (Charts with tabs)-->
            <!-- /.card-body -->
        </div>
            <!-- /.card -->

            <!-- DIRECT CHAT -->
            <div class="card direct-chat direct-chat-primary">
              
              <!-- /.card-header -->
              <div class="">
                <!-- Conversations are loaded here -->
                <div class="">
                  <!-- Message. Default to the left -->
                  <div class="">
                    <!-- /.direct-chat-infos -->
                    <!-- /.direct-chat-img -->
                    <!-- /.direct-chat-text -->
                  </div>
                  <!-- /.direct-chat-msg -->

                  <!-- Message to the right -->
                  <div class="">
                    <!-- /.direct-chat-infos -->
                    <!-- /.direct-chat-img -->
                    <!-- /.direct-chat-text -->
                  </div>
                  <!-- /.direct-chat-msg -->

                  <!-- Message. Default to the left -->
                  
                  <!-- /.direct-chat-msg -->

                  <!-- Message to the right -->
                  
                  <!-- /.direct-chat-msg -->

                </div>
                <!--/.direct-chat-messages-->

                <!-- Contacts are loaded here -->
                
                <!-- /.direct-chat-pane -->
              </div>
              <!-- /.card-body -->
              <!-- /.card-footer-->
            </div>
            <!--/.direct-chat -->

            <!-- TO DO List -->
            
            <!-- /.card -->
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <section class="col-lg-5 connectedSortable">

            <!-- Map card -->
            <div class="card bg-gradient-primary">
              
              
              <!-- /.card-body-->
             

            <!-- Calendar -->
            <!-- /.card -->
            </div>
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->