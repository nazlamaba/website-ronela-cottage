<link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<!-- Content Header (Page header) -->


<section class="content">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h2>Data Penginapan</h2>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th><center>No Kamar</center></th> 
              <th><center>Harga</center></th>
              <th><center>Type </center></th>
              <th><center>Fasilitas </center></th>
              <th><center>Foto </center></th>
              <th><center>Action</center></th>
            </tr>
          </thead>
          <?php include "config/conn.php";
            $sql = mysqli_query($conn, 'select * from penginapan ');
            while($dtt = mysqli_fetch_array($sql) ) {
            ?>
                <tr>
                    <td align="center">
                        <?=$dtt['no_kamar'];?>
                   </td>
                   <td align="center">
                       Rp 
                         <?=$dtt['harga'];?>
                    </td>
                    <td align="center">
                        <?=$dtt['tipe'];?>
                    </td>
                    <td align="center">
                        <?=$dtt['fasilitas'];?>
                    </td>
                    <td align="center">
                        <?=$dtt['foto'];?>
                    </td>
                    <td align="center">
                        <a onclick="return confirm('Lihat Data <?php echo $data['no_kamar']; ?>')" class="btn btn-sm btn-info" data-placement="buttom" data-togle="tooltips" title="Lihat Data" href="index.php?act=details_penginapan&kd=<?php echo $dtt['id_hotel']; ?>"><span class="fas fa-table"></span></a>
                        <a onclick="return confirm('Edit data <?php echo $dt['no_kamar']; ?>')" class="btn btn-sm btn-success" data-placement="buttom" data-togle="tooltips" title="Edit Data" href="index.php?act=penginapan_up&kd=<?php echo $dtt['id_hotel']; ?>"><span class="fas fa-edit"></span></a>
                        <a onclick="return confirm('Yakin hapus <?php echo $dtt['no_kamar']; ?>');" class="btn btn-sm btn-danger tooltips" data-placement="buttom" data-togle="tooltip" title="Hapus Data" href="pages/delete_penginapan.php?&kd=<?php echo $dtt['id_hotel'];?>"><span class="fas fa-trash"></span></a>
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
