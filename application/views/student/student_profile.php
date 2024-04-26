
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
                     <!--  <button type="button" class="btn btn-sm btn-navy bg-navy btn-flat" data-toggle="modal" data-target="#addAcademicModal">
                          <i class="fa fa-plus"></i> Add Credential
                      </button> -->
                      
                      <a href="<?php echo base_url('student/view_students') ?>" class="btn btn-default border btn-sm btn-flat"><i class="fa fa-angle-left"></i> Back to List</a>
                  </div>
              </div>
              <div class="card-body">
                  <div class="container-fluid" id="outprint">
                      <div class="row">
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label class="control-label text-muted">LRN</label>
                                  <div class="pl-4"><?php echo $student->LRN ?></div>
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label class="control-label text-muted"></label>
                              </div>
                          </div>
                      </div>
                      <fieldset class="border-bottom">
                          <div class="row">
                              <div class="col-md-12">
                                  <div class="form-group">
                                      <label class="control-label text-muted">Name</label>
                                      <div class="pl-4"><?php echo $student->last_name . ', ' . $student->first_name . ' ' . $student->middle_name  ?></div>
                                  </div>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-md-4">
                                  <div class="form-group">
                                      <label class="control-label text-muted">Gender</label>
                                      <div class="pl-4"><?php echo $student->gender ?></div>
                                  </div>
                              </div>
                              
                              
                              <div class="col-md-4">
                                  <div class="form-group">
                                      <label class="control-label text-muted">Grade Level</label>
                                      <div class="pl-4"><?php echo $student->grd_title ?></div>
                                  </div>
                              </div>
                              <?php if ($student->str_title !== null): ?>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label text-muted">Strand</label>
                                        <div class="pl-4"><?php echo $student->str_title ?></div>
                                    </div>
                                </div>
                            <?php endif; ?>

                          </div>
                          
                      </fieldset>
                     <!--  <fieldset>
                          <legend class="text-muted">Request History</legend>
                          <table class="table table-stripped table-bordered" id="academic-history">
                              <thead>
                                  <tr class="bg-gradient-dark">
                                      <th class="py-1 text-center">#</th>
                                      <th class="py-1 text-center">Form</th>
                                      <th class="py-1 text-center">Date</th>
                                      <th class="py-1 text-center">Name</th>
                                      <th class="py-1 text-center">Contact</th>
                                      <th class="py-1 text-center">Requesting</th>
                                      <th class="py-1 text-center">Action</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <?php foreach ($requests as $request): ?>
                                      <tr>
                                          <td><?php echo $request['rq_id'] ?></td>
                                          <td><?php echo $request['form_title'] ?></td>
                                          <td><?php echo $request['rq_date'] ?></td>
                                          <td><?php echo $request['rq_name'] ?></td>
                                          <td><?php echo $request['rq_contact'] ?></td>
                                          <td><?php echo $request['rq_type'] ?></td>
                                           <td class="text-center">
                                              <button class="btn btn-outline-warning btn-sm" onclick="openEditModal('<?php echo $request['rq_id'] ?>', '<?php echo $request['form_id'] ?>', '<?php echo $request['rq_date'] ?>', '<?php echo $request['rq_name'] ?>', '<?php echo $request['rq_contact'] ?>', '<?php echo $request['rq_type'] ?>')"><i class="fa fa-edit"></i></button>


                                              <button class="btn btn-outline-danger btn-sm" onclick="deleteRequest(<?php echo $request['rq_id'] ?>)"><i class="fa fa-trash"></i></button>
                                          </td>
                                      </tr>
                                  <?php endforeach ?>

                              </tbody>
                          </table>
                      </fieldset> -->
                  </div>
              </div>
          </div>
      </div>

    </section>
  </div>
 



  
  <?php include APPPATH."views/templates/footer.php"; ?>
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

<script type="text/javascript">
$(document).ready(function () {
    $("#delete_student").click(function () {
        var std_id = "<?php echo $student->std_id; ?>";
        deleteStudent(std_id);
    });
});

function deleteStudent(std_id) {
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                type: 'post',
                url: '<?=base_url()?>student/delete_student',
                data: {
                    std_id: std_id
                },
                success: function (data) {
                   Swal.fire({
                            title: 'Deleted',
                            text: 'Student deleted successfully',
                            icon: 'success',
                            confirmButtonColor: '#3085d6',
                        }).then((result) => {
                             window.location.href = '<?=base_url()?>student/view_students'
                        });
                    data = JSON.parse(data);
                    if (data.result == 'SUCCESS') {
                        Swal.fire({
                            title: 'Deleted',
                            text: 'Student deleted successfully',
                            icon: 'success',
                            confirmButtonColor: '#3085d6',
                        }).then((result) => {
                             window.location.href = '<?=base_url()?>student/view_students'
                        });
                    } else {
                        Swal.fire({
                            title: 'Failed',
                            text: 'Failed to delete student',
                            icon: 'error',
                            confirmButtonColor: '#3085d6',
                        });
                    }
                },
                error: function (xhr, status, error) {
                    alert(xhr.responseText);
                }
            });
        }
    });
}

</script>

<script type="text/javascript">
  $(document).ready(function () {
    $("#saveFormButton").click(function () {
        if ($('#form_id').val() == '' || $('#rq_date').val() == '' || $('#rq_name').val() == '' || $('#rq_contact').val() == '' || $('#rq_type').val() == '') {
            Swal.fire({
                title: 'Error',
                text: 'Please fill all fields',
                icon: 'error',
                confirmButtonColor: '#3085d6',
            });
        } else {
            saveForm();
        }
    });
});
  function saveForm(){
    var formData = $('#form').serialize(); 

    $.ajax({
      type: 'post',
      url: '<?=base_url()?>student/add_request',
      data: formData, 
      success: function(data) {
        Swal.fire({
          title: 'SUCCESSFULLY ADDED',
          text: "",
          icon: 'success',
          confirmButtonColor: '#3085d6',
        }).then((result) => {
          window.location.href = '<?=base_url()?>student/view_students'
        })
        data = JSON.parse(data);

        if (data.result == 'SUCCESS') {
          window.location.reload();
        } else if (data.result == 'FAILED') {
          alert(data.msg);
        }
      },
      error: function(xhr, status, error) {
        alert(xhr.responseText);
      }
    });
  }
</script>
<script type="text/javascript">
 function openEditModal(rq_id, form_id, rq_date, rq_name, rq_contact, rq_type) {
        $('#edit_rq_id').val(rq_id);
        $('#edit_form_id').val(form_id); 
        $('#edit_rq_date').val(rq_date); 
        $('#edit_rq_name').val(rq_name); 
        $('#edit_rq_contact').val(rq_contact); 
        $('#edit_rq_type').val(rq_type);
        $('#editRequestModal').modal('show'); 
    }


   function saveEditedRequest() {
    var edit_rq_id = $("#edit_rq_id").val();
    var edit_rq_name = $("#edit_rq_name").val();
    var edit_rq_date = $("#edit_rq_date").val();
    var edit_rq_contact = $("#edit_rq_contact").val();
    var edit_rq_type = $("#edit_rq_type").val();
    var edit_form_id = $("#edit_form_id").val();


    $.ajax({
        type: 'post',
        url: '<?= base_url() ?>student/update_request',
        data: {
            rq_id: edit_rq_id,
            rq_name: edit_rq_name,
            rq_date: edit_rq_date,
            rq_contact: edit_rq_contact,
            rq_type: edit_rq_type,
            form_id: edit_form_id

        },
        success: function(data) {
            console.log(data);
            Swal.fire({
                title: 'Updated',
                text: 'Request details updated successfully',
                icon: 'success',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
            }).then((result) => {
                if (result.isConfirmed) {
                    location.reload();
                }
            });
        },
        error: function(xhr, status, error) {
            console.error(xhr.responseText);
            Swal.fire({
                title: 'Error',
                text: 'Failed to update request details',
                icon: 'error',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
            });
        }
    });
}

  

</script>

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
