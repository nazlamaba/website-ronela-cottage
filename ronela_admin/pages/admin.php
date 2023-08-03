<link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<!-- Content Header (Page header) -->


<section class="content">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h2>Data Admin</h2>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
        <!-- start-top-search-->
        <a style="margin-bottom: 10px" href="index.php?act=signup" class="btn btn-info float-sm-right"><span class="fas  fa-plus"></span> Add Data </a>
        <!--close-top-serch--> 
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>Fullname</th>
              <th>Password</th>
              <th><center>Tools</center></th>
            </tr>
          </thead>
          <?php include "config/koneksi.php";
            $sql = mysqli_query($conn, 'select * from admin ');
            while($dtt = mysqli_fetch_array($sql) ) {
            ?>
                <tr>
                    <td>
                      <?=$dtt['fullname'];?>
                   </td>
                   <td>
                     <?=$dtt['password'];?>
                    </td>
                    <td>
                    <center>
                        <a onclick="return confirm('Edit data <?php echo $dtt['username']; ?>')" class="btn btn-sm btn-success" data-placement="buttom" data-togle="tooltips" title="Edit Data" href="index.php?act=admin_up&kd=<?php echo $dtt['id_admin']; ?>"><span class="fas fa-edit"></span></a>
                        <a onclick="return confirm('Yakin hapus <?php echo $dtt['username']; ?>');" class="btn btn-sm btn-danger tooltips" data-placement="buttom" data-togle="tooltip" title="Hapus Data" href="pages/delete_admin.php?&kd=<?php echo $dtt['id_admin'];?>"><span class="fas fa-trash"></span></a>
                    </center>
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
