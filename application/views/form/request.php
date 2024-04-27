<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
   </section>
   <section class="content">
      <div class="content py-4">
         <div class="card card-outline card-navy shadow rounded-0">
            <div class="card-header">
               <h5 class="card-title">Form Request</h5>
               <div class="card-tools">
                  <a href="<?php echo base_url('form/view_forms') ?>" class="btn btn-default border btn-sm btn-flat">
                  <i class="fa fa-angle-left"></i> Back to List
                  </a>
               </div>
            </div>
            <div class="card-body">
               <div class="container-fluid" id="outprint">
                  <form id="formData">
                     <div class="form-group col-md-12">
                        <input type="hidden" value="<?php echo $student->std_id ?>" id="std_id" name="">
                        <label for="status" class="control-label">Forms</label>
                        <div class="col-12 d-flex justify-content-center ">
                           <?php
                              $forms_count = count($forms);
                              $forms_per_column = ceil($forms_count / 3); 
                              $current_column_count = 0;
                              
                              for ($i = 0; $i < $forms_count; $i++) {
                                  if ($current_column_count == 0) {
                                      echo '<div class="col">';
                                  }
                              
                                  $form = $forms[$i];
                              ?>
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" name="form_id[]" id="form_<?php echo $form->form_id; ?>" value="<?php echo $form->form_id; ?>">
                              <label class="form-check-label" for="form_<?php echo $form->form_id; ?>"><?php echo $form->form_title; ?></label>
                           </div>
                           <?php
                              $current_column_count++;
                              
                              if ($i == $forms_count - 1) {
                                  echo '<div class="form-check d-flex align-items-center">';
                                  echo '<input class="form-check-input" type="checkbox" name="others" id="others" onchange="toggleInput(this)">';
                                  echo '<label class="form-check-label" for="others">Others</label>';
                                  echo '<input type="text" class="form-control form-control-border" name="" id="others_text" disabled>';
                                  echo '</div>';
                              }
                              
                              
                              
                              if ($current_column_count == $forms_per_column || $i == $forms_count - 1) {
                                  echo '</div>';
                                  $current_column_count = 0;
                              }
                              }
                              ?>
                        </div>
                     </div>
                     <div class="form-group col-md-6">
                        <label for="year" class="control-label">Date</label>
                        <input type="date" id="rq_date" name="rq_date" class="form-control form-control-border " required>
                     </div>
                     <div class="row">
                        <div class="form-group col-md-6">
                           <label for="rq_name" class="control-label">Student Name</label>
                           <input value="<?php echo $student->last_name . ', ' . $student->first_name . ' ' . $student->middle_name  ?>" type="text" class="form-control form-control-sm form-control-border rounded-0" id="rq_name" name="rq_name">
                        </div>
                     </div>
                     <div class="row">
                        <div class="form-group col-md-6">
                           <label for="rq_rc_name" class="control-label">Name of Receiver</label>
                           <input type="text" class="form-control form-control-sm form-control-border rounded-0" id="rq_rc_name" name="rq_rc_name">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="rq_contact" class="control-label">Contact #</label>
                            <input type="text" pattern="[0-9]{11}" title="Please enter an 11-digit number" 
                                   class="form-control form-control-sm form-control-border rounded-0" 
                                   id="rq_contact" name="rq_contact" maxlength="11">
                        </div>

                        <div class="form-group col-md-6">
                           <label for="rq_type" class="control-label">Relationship to Receiver</label>
                           <input type="text" class="form-control form-control-sm form-control-border rounded-0" id="rq_type" name="rq_type">
                        </div>
                     </div>
                     <button type="submit" class="btn btn-primary"><i class="fa fa-save mr-2"></i> Save</button> 
                  </form>
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
<script>
   $(document).ready(function() {
    $('#formData').on('submit', function(e) {
        e.preventDefault();
   
       var emptyFields = false;
        $('#formData input[type="text"], #formData input[type="number"], #formData input[type="date"]').not('#others_text').each(function() {
            if ($(this).val() === '') {
                emptyFields = true;
                return false;
            }
        });
        if (emptyFields) {
            Swal.fire({
                title: 'Error!',
                text: 'Please fill in all fields.',
                icon: 'error',
                confirmButtonColor: '#3085d6',
            });
            return;
        }
   
        var formIds = [];
        $('input[name="form_id[]"]:checked').each(function() {
            formIds.push($(this).val());
        });
        var othersText = $('#others_text').val();   
        var formData = {
            forms: formIds.join(','),
            std_id: $('#std_id').val(),
            rq_date: $('#rq_date').val(),
            rq_name: $('#rq_name').val(),
            rq_contact: $('#rq_contact').val(),
            rq_type: $('#rq_type').val(),
            rq_rc_name: $('#rq_rc_name').val(),
            others_text: othersText,
        };
   
        $.ajax({
            type: 'POST',
            url: '<?=base_url()?>form/insert_transaction',
            data: formData,
            success: function(response) {
                Swal.fire({
                        title: 'SUCCESSFULLY ADDED',
                        text: '',
                        icon: 'success',
                        confirmButtonColor: '#3085d6',
                    }).then((result) => {
                        window.location.href = '<?=base_url()?>form/view_forms';
                    });
                var data = JSON.parse(response);
   
                if (data.result == 'SUCCESS') {
                    Swal.fire({
                        title: 'SUCCESSFULLY ADDED',
                        text: '',
                        icon: 'success',
                        confirmButtonColor: '#3085d6',
                    }).then((result) => {
                        window.location.href = '<?=base_url()?>form/view_forms';
                    });
                } else {
                    alert('Failed to add data: ' + data.msg);
                }
            },
            error: function(xhr, status, error) {
                console.error('Error occurred while saving data:', error);
            }
        });
    });
   });
   
</script>
<script>
   function toggleInput(checkbox) {
       var input = document.getElementById('others_text');
       input.disabled = !checkbox.checked;
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