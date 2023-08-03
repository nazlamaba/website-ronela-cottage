<link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<!-- Content Header (Page header) -->


<section class="content">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h2>Data Mobil</h2>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th><center>Plat Nomor </center></th> 
              <th><center>Nama Mobil</center></th>
              <th><center>Type </center></th>
              <th><center>Foto </center></th>
              <th><center>Action</center></th>
            </tr>
          </thead>
          </tbody>
          <?php include "config/conn.php";
            $sql = mysqli_query($conn, 'select mobil.id_mobil, mobil.plat_nomor, mobil.nama_mobil, mobil.foto, tipe_mobil.mobil_tipe 
										from mobil,tipe_mobil 
										where tipe_mobil.id_tipe=mobil.id_tipe');
			 while($data = mysqli_fetch_array($sql)) {
             ?>
                <tr>
                    <td align="center">
                        <?=$data['plat_nomor'];?>
                   </td>
                   <td align="center">
                         <?=$data['nama_mobil'];?>
                    </td>
                    <td align="center">
                        <?=$data['mobil_tipe'];?>
                    </td>
                    <td align="center">
                        <?=$data['foto'];?>
                    </td>
                    <td align="center">
                        <a onclick="return confirm('Lihat Data <?php echo $data['nama_mobil']; ?>')" class="btn btn-sm btn-info" data-placement="buttom" data-togle="tooltips" title="Lihat Data" href="index.php?act=details_mobil&kd=<?php echo $data['id_mobil']; ?>"><span class="fas fa-table"></span></a>
                        <a onclick="return confirm('Edit data <?php echo $data['nama_mobil']; ?>')" class="btn btn-sm btn-success" data-placement="buttom" data-togle="tooltips" title="Edit Data" href="index.php?act=mobil_up&kd=<?php echo $data['id_mobil']; ?>"><span class="fas fa-edit"></span></a>
                        <a onclick="return confirm('Yakin hapus <?php echo $data['nama_mobil']; ?>');" class="btn btn-sm btn-danger tooltips" data-placement="buttom" data-togle="tooltip" title="Hapus Data" href="pages/delete_mobil.php?&kd=<?php echo $data['id_mobil'];?>"><span class="fas fa-trash"></span></a>
                     </td>
                  </tr>
              <?php } ?>
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
  </div>
</div>
</section>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
