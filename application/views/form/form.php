
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content-header">
   
    </section>

    <section class="content">
      <div class="card card-outline card-primary rounded-0 shadow">
          <div class="card-header">
              <h3 class="card-title">List of students</h3>
              <div class="card-tools">
              </div>
          </div>
          <div class="card-body">
              <div class="container-fluid">
                  <table id="example1" class="table table-bordered table-hover table-striped">
                     
                      <thead>
                          <tr class="bg-gradient-dark text-light">
                              <th>LRN</th>
                              <th>Name</th>
                              <th>Action</th>
                          </tr>
                      </thead>
                      <tbody>
                         <?php foreach ($students as $student): ?>
                          <tr>
                               <td class=""><p class="m-0 truncate-1"><?php echo $student->LRN ?> </p></td>
                              <td class=""><p class="m-0 truncate-1"><?php echo $student->last_name . ', ' . $student->first_name . ' ' . $student->middle_name . '.' ?></p></td>
                             
                             <td align="center">
                                <a href="<?php echo base_url('form/student_request/'.$student->std_id) ?>" class="btn btn-flat btn-success btn-sm border"><i class="fas fa-file-alt mr-1"></i> Request Form</a>
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
