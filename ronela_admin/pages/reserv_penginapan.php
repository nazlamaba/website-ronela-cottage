<link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<!-- Content Header (Page header) -->


<section class="content">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h2>Reservation Penginapan</h2>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th><center>Kode Reservasi</center></th>
              <th><center>Nama Pemesan</center></th>
              <th><center>No Kamar</center></th>
              <th><center>Acttion</center></th>
            </tr>
          </thead>
          <?php include "config/conn.php";
            $sql = mysqli_query($conn, 'select reserv_penginapan.id_penginapan, reserv_penginapan.res_code, reserv_penginapan.no_kamar, pengunjung.fullname  
                                        from reserv_penginapan,pengunjung 
                                        where pengunjung.id_user=reserv_penginapan.id_user');
            while($dtt = mysqli_fetch_array($sql) ) {
            ?>
                <tr>
                    <td align="center">
                      <?=$dtt['res_code'];?>
                   </td>
                   <td align="center">
                      <?=$dtt['fullname'];?>
                   </td>
                    <td align="center">
                      <?=$dtt['no_kamar'];?>
                   </td>
                   <td align="center">
                        <a onclick="return confirm('Lihat Data <?php echo $dtt['res_code']; ?>')" class="btn btn-sm btn-info" data-placement="buttom" data-togle="tooltips" title="Lihat Data" href="index.php?act=details_pesan_penginapan&kd=<?php echo $dtt['id_penginapan']; ?>"><span class="fas fa-table"></span></a>
                        <a onclick="return confirm('Yakin hapus <?php echo $dtt['res_code']; ?>');" class="btn btn-sm btn-danger tooltips" data-placement="buttom" data-togle="tooltip" title="Hapus Data" href="pages/delete_pesan_penginapan.php?&kd=<?php echo $dtt['id_penginapan'];?>"><span class="fas fa-trash"></span></a>
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
