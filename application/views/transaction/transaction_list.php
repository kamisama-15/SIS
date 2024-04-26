
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
   
    </section>

    <section class="content">
      <div class="card card-outline card-primary rounded-0 shadow">
          <div class="card-header">
              <h3 class="card-title">Transaction List</h3>
              <div class="card-tools">
              </div>
          </div>
          <div class="card-body">
              <div class="container-fluid">
                  <table id="example1" class="table table-bordered table-hover table-striped">
                     
                      <thead>
                          <tr class="bg-gradient-dark text-light">
                              <th>LRN</th>
                              <th>Date</th>
                              <th>Name</th>
                              <th>Action</th>
                          </tr>
                      </thead>
                      <tbody>
                         <?php foreach ($transactions as $transaction): ?>
                          <tr>
                              <td class="text-center"><?php echo $transaction->LRN ?></td>
                               <td class=""><p class="m-0 truncate-1"><?php echo $transaction->rq_date?> </p></td>
                              <td class=""><p class="m-0 truncate-1"><?php echo $transaction->last_name . ', ' . $transaction->first_name . ' ' . $transaction->middle_name . '.' ?></p></td>
                             
                             <td align="center">
                                <a href="<?php echo base_url('form/view_request/'.$transaction->std_id.'/'.$transaction->rq_id) ?>" class="btn btn-flat btn-outline-warning btn-sm"><i class="fa fa-eye"></i> View</a>
                            </td>
                          </tr>
                          <?php endforeach ?>
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
    </section>
  </div>
 


  
  <?php include APPPATH."views/templates/footer.php"; ?>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": true, "autoWidth": true,
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
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

</body>
</html>
