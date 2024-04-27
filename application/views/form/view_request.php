<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <section class="content-header">
   </section>
   <section class="content">
      <div class="content py-4">
         <div class="card card-outline card-navy shadow rounded-0">
            <div class="card-header">
               <h5 class="card-title">View Form Request</h5>
               <div class="card-tools">
                  <a href="<?php echo base_url('transaction/view_transactions') ?>" class="btn btn-default border btn-sm btn-flat">
                  <i class="fa fa-angle-left"></i> Back to List
                  </a>
               </div>
            </div>
            <div class="card-body">
               <div class="container-fluid" >
                  <?php foreach ($transactions as $transaction): ?>
                  <div class="card">

                     <div class="card-body">
                         
                         <?php
$udata = $this->session->userdata('UserLoginSession');
if ($udata && isset($udata['username'])) {
    $query = $this->db->get_where('users', array('username' => $udata['username']));
    $user = $query->row();

    if ($user) {
         if ($user->user_type == 2) {
            ?>
            <button class="float-right btn btn-danger delete_transaction" disabled>
                <i class="fa fa-trash"></i> Delete
            </button>
            <?php
        } else {
            ?>
            <button class="float-right btn btn-danger delete_transaction"  data-rq_id="<?php echo $transaction->rq_id; ?>">
                <i class="fa fa-trash"></i> Delete
            </button>
            <?php
        }
    } else {
        echo '<button type="button" class="btn btn-secondary">User not found</button>';
    }
} else {
    echo '<button type="button" class="btn btn-secondary">Guest</button>';
}
?>

                        <form id="formData">
                           <div class="form-group col-md-6 my-0">
                              <label for="status" class="control-label">Forms</label>
                              <div class="form-check">
                                 <?php if (!empty($transaction) && is_object($transaction)) : ?>
                                 <?php
                                    $form_ids = explode(',', $transaction->form_id);
                                    
                                    foreach ($form_ids as $form_id) {
                                        $form = $this->Transaction_model->form_id($form_id);
                                    
                                        if ($form) :
                                    ?>
                                 <input class="form-check-input" type="checkbox" name="form_id[]" id="form_<?php echo $form->form_id; ?>" value="<?php echo $form->form_id; ?>" checked disabled>
                                 <label class="form-check-label" for="form_<?php echo $form->form_id; ?>"><?php echo $form->form_title; ?></label>
                                 <br>
                                 <?php
                                    endif;
                                    }
                                    ?>
                                 <?php endif; ?>
                              </div>
                           </div>
                           <?php if (!empty($transaction) && isset($transaction->others) && !empty($transaction->others)) : ?>
                           <?php
                              $is_checked = true; 
                              ?>
                           <div class="form-group col-md-6 my-0">
                              <div class="form-check d-flex align-items-center">
                                 <input class="form-check-input" type="checkbox" name="others" id="others" <?php echo $is_checked ? 'checked' : ''; ?> onchange="toggleInput(this)">
                                 <label class="form-check-label" for="others">Others</label>
                                 <?php if ($is_checked) : ?>
                                 <input value="<?php echo $transaction->others; ?>" disabled type="text" class="form-control form-control-border" name="" id="others_text">
                                 <?php else : ?>
                                 <input type="text" class="form-control form-control-border" name="" id="others_text" disabled>
                                 <?php endif; ?>
                              </div>
                           </div>
                           <?php endif; ?>
                        </form>
                        <div class="form-group col-md-6">
                           <label for="year" class="control-label">Date</label>
                           <input value="<?php echo $transaction->rq_date ?>" type="date" id="rq_date" name="rq_date" class="form-control form-control-border form-control-sm" required disabled>
                        </div>
                        <div class="row">
                           <div class="form-group col-md-6">
                              <label for="rq_name" class="control-label">Student Name</label>
                              <input value="<?php echo $transaction->last_name . ', ' . $transaction->first_name . ' ' . $transaction->middle_name  ?>" type="text" class="form-control form-control-sm form-control-border rounded-0" id="rq_name" name="rq_name" disabled>
                           </div>
                           <div class="form-group col-md-6">
                              <label for="rq_contact" class="control-label">Contact #</label>
                              <input type="number" value="<?php echo $transaction->rq_contact ?>" class="form-control form-control-sm form-control-border rounded-0" id="rq_contact" name="rq_contact" disabled>
                           </div>
                            <div class="form-group col-md-6">
                              <label for="rq_type" class="control-label">Name of Receiver</label>
                              <input value="<?php echo $transaction->rq_rc_name ?>" type="text" class="form-control form-control-sm form-control-border rounded-0" id="rq_type" name="rq_type" disabled>
                           </div>
                           <div class="form-group col-md-6">
                              <label for="rq_type" class="control-label">Relationship to Receiver</label>
                              <input value="<?php echo $transaction->rq_type ?>" type="text" class="form-control form-control-sm form-control-border rounded-0" id="rq_type" name="rq_type" disabled>
                           </div>
                        </div>
                        </form>
                     </div>
                  </div>
                  <?php endforeach ?>
               </div>
            </div>
         </div>
      </div>
   </section>
</div>
<?php include APPPATH."views/templates/footer.php"; ?>
<script>
   $(document).ready(function() {
       // Disable form submission
       $('#formData').on('submit', function(e) {
           e.preventDefault();
       });
   });

   $(document).ready(function () {
    $(".delete_transaction").click(function () {
        var rq_id = $(this).data('rq_id');
            deleteTransaction(rq_id);
    });
});

function deleteTransaction(rq_id) {
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
                url: '<?=base_url()?>transaction/delete_transaction',
                data: {
                    rq_id: rq_id
                },
                success: function (data) {
                   Swal.fire({
                            title: 'Deleted',
                            text: 'Transaction deleted successfully',
                            icon: 'success',
                            confirmButtonColor: '#3085d6',
                        }).then((result) => {
                             location.reload();
                        });
                    data = JSON.parse(data);
                    if (data.result == 'SUCCESS') {
                        Swal.fire({
                            title: 'Deleted',
                            text: 'Transaction deleted successfully',
                            icon: 'success',
                            confirmButtonColor: '#3085d6',
                        }).then((result) => {
                             location.reload();
                        });
                    } else {
                        Swal.fire({
                            title: 'Failed',
                            text: 'Failed to delete Transaction',
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
