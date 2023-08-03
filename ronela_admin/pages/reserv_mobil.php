<link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<!-- Content Header (Page header) -->


<section class="content">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h2>Data Pemesanan Mobil</h2>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
            <th><center>kode Reservasi </center></th> 
              <th><center>Nama Pemesan </center></th> 
              <th><center>Nama Mobil</center></th>
              <th><center>Lama Sewa</center></th>
              <th><center>Harga</center></th>
              <th><center>Action</center></th>
            </tr>
          </thead>
          <?php include "config/conn.php";
            $sql = mysqli_query($conn, 'select reserv_mobil.id_reserv, reserv_mobil.res_code, reserv_mobil.tanggal_berangkat, reserv_mobil.waktu_berangkat, reserv_mobil.driver, reserv_mobil.nama_mobil, reserv_mobil.lama_sewa, reserv_mobil.harga, reserv_mobil.status, pengunjung.fullname 
										from reserv_mobil,pengunjung 
										where pengunjung.id_user=reserv_mobil.id_user');
			 while($data = mysqli_fetch_array($sql)) {
             ?>
                <tr>
                   <td align="center">
                        <?=$data['res_code'];?>
                   </td>
                    <td align="center">
                        <?=$data['fullname'];?>
                   </td>
					          <td align="center">
                        <?=$data['nama_mobil'];?>
                    </td>
					          <td align="center">
                        <?=$data['lama_sewa'];?>
                    </td>
					          <td align="center">
                        <?=$data['harga'];?>
                    </td>
                    <td align="center">
                        <a onclick="return confirm('Lihat Data <?php echo $data['res_code']; ?>')" class="btn btn-sm btn-info" data-placement="buttom" data-togle="tooltips" title="Lihat Data" href="index.php?act=details_pesan_mobil&kd=<?php echo $data['id_reserv']; ?>"><span class="fas fa-table"></span></a>
                        <a onclick="return confirm('Yakin hapus <?php echo $data['res_code']; ?>');" class="btn btn-sm btn-danger tooltips" data-placement="buttom" data-togle="tooltip" title="Hapus Data" href="pages/delete_pesan_mobil.php?&kd=<?php echo $data['id_reserv'];?>"><span class="fas fa-trash"></span></a>
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
