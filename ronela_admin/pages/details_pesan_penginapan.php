<link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
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
            <div class="col-12 col-sm-12">
              <?php 
                include "config/conn.php";
                $qr = mysql_query("SELECT * FROM reserv_penginapan WHERE id_penginapan='$_GET[kd]' ");
                $data = mysql_fetch_array($qr);
              ?>
               <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th><center>Kode Reservasi</center></th>
              <th><center>Nomor Kamar</center></th>
              <th><center>Tanggal Masuk</center></th>
              <th><center>Waktu Masuk</center></th>
              <th><center>Tanggal Keluar </center></th>
              <th><center>Harga </center></th>
              <th><center>Action</center></th>
            </tr>
          </thead>
                <tr>
                    <td align="center">
                         <?=$data['res_code'];?>
                    </td>
                    <td align="center">
                         <?=$data['no_kamar'];?>
                    </td>
                   <td align="center">
                         <?=$data['tgl_masuk'];?>
                    </td>
                    <td align="center">
                         <?=$data['waktu_masuk'];?>
                    </td>
                    <td align="center">
                        <?=$data['tgl_keluar'];?>
                    </td>
					<td align="center">
                        <?=$data['harga'];?>
                    </td>
                    <td align="center">
                        <?php 
                          if($data['status']=='Proses') {
                        ?>
                          <a href="status_terima_penginapan.php?id_penginapan=<?=$data['id_penginapan'];?>" onclick="return confirm('Ingin Melanjutkan?');" class="white-text">
								          <button class="btn btn-primary"><?=$data['status'];?></button>
                          </a>
                        <?php 
                          } else {
                           echo $data['status'];
                          }
                        ?>
                     </td>
                  </tr>
          </tbody>
        </table>
              </div>
            </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->