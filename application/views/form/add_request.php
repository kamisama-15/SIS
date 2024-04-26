
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
     
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="content py-4">
          <div class="card card-outline card-navy shadow rounded-0">
              <div class="card-header">
                  <h5 class="card-title">Student Details</h5>
                  <div class="card-tools">
                      <a class="btn btn-sm btn-primary btn-flat" href="<?php echo base_url('student/edit_student/'.$student->std_id) ?>"><i class="fa fa-edit"></i> Edit</a>
                      <button class="btn btn-sm btn-danger btn-flat" id="delete_student"><i class="fa fa-trash"></i> Delete</button>
                      <button type="button" class="btn btn-sm btn-navy bg-navy btn-flat" data-toggle="modal" data-target="#addAcademicModal">
                          <i class="fa fa-plus"></i> Add Credential
                      </button>
                      <button class="btn btn-sm btn-info bg-info btn-flat" type="button" id="update_status">Updated Status</button>
                      <button class="btn btn-sm btn-success bg-success btn-flat" type="button" id="print"><i class="fa fa-print"></i> Print</button>
                      <a href="./?page=students" class="btn btn-default border btn-sm btn-flat"><i class="fa fa-angle-left"></i> Back to List</a>
                  </div>
              </div>
              <div class="card-body">
                  <div class="modal-body">
                <form id="editRequestForm">
                    <input type="text" name="rq_id" id="edit_rq_id" > 
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="status" class="control-label">Forms</label>
                            <select name="form_id" id="edit_form_id" class="form-control form-control-sm form-control-border rounded-0" required>
                                <option selected disabled hidden>Please Select</option>
                                <?php foreach ($forms as $form): ?>
                                    <option value="<?php echo $form->rq_id; ?>"><?php echo $form->rq_title; ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="year" class="control-label">Date</label>
                            <input type="date" id="edit_rq_date" name="edit_rq_date" class="form-control form-control-border form-control-sm">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="edit_rq_name" class="control-label">Name</label>
                            <input type="text" class="form-control form-control-sm form-control-border rounded-0" id="edit_rq_name" name="rq_name">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="edit_rq_contact" class="control-label">Contact #</label>
                            <input type="number" class="form-control form-control-sm form-control-border rounded-0" id="edit_rq_contact" name="rq_contact">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="edit_rq_type" class="control-label">Requesting</label>
                            <input type="text" class="form-control form-control-sm form-control-border rounded-0" id="edit_rq_type" name="rq_type">
                        </div>
                    </div>
                </form>
            </div>
              </div>
          </div>
      </div>

    </section>
  </div>
 
</div>


  
  <?php include APPPATH."views/templates/footer.php"; ?>

<script>
    var today = new Date();

    var year = today.getFullYear();
    var month = ('0' + (today.getMonth() + 1)).slice(-2); 
    var day = ('0' + today.getDate()).slice(-2); 
    var formattedDate = year + '-' + month + '-' + day;

    document.getElementById('rq_date').value = formattedDate;
</script>



</body>
</html>
