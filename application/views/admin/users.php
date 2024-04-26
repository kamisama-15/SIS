
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
     
    </section>

    <section class="content">
        <div class="content py-4">
            <div class="card card-outline card-primary">
    <div class="card-header">
        <h3 class="card-title">List of System Users</h3>
        <div class="card-tools">
            <a href="<?php echo base_url('users/add_users') ?>" class="btn btn-flat btn-primary">
                <span class="fas fa-plus"></span> Create New
            </a>
        </div>
    </div>
    <div class="card-body">
        <div class="container-fluid">
            <div class="container-fluid">
                <table  class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Avatar</th>
                            <th>Name</th>
                            <th>User Type</th>
                            <th>Username</th>
                             <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                       <?php foreach ($users as $user): ?>
                           <tr>
                               <td><?php echo $user->id ?></td>
                                <td><img class="img-avatar img-thumbnail p-0 border-2" src="<?= base_url('uploads/users/' . $user->avatar) ?>" alt="Avatar"></td> 
                               <td><?php echo $user->first_name . ' ' . $user->last_name?></td>
                               <td><?php echo ($user->user_type == 1) ? 'Administrator' : 'Staff'; ?></td>
                               <td><?php echo $user->username ?></td>
                               <td>
                                    <div class="btn-group" role="group" aria-label="User Actions">
                                        <a href="<?= sprintf('%s/%d', base_url('users/edit_user'), $user->id) ?>" class="btn btn-sm btn-outline-primary"><i class="fa fa-edit"></i></a>
                                       <button type="button" class="btn btn-sm btn-outline-danger delete-user" data-user-id="<?= $user->id ?>"><i class="fa fa-trash"></i></button>
                                    </div>
                                </td>
                           </tr>
                       <?php endforeach ?>
                    </tbody>
                </table>
            </div>
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
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true,
      "responsive": true,
    });
  });
</script>

<script>
    $(document).ready(function() {
        $('.delete-user').click(function() {
            var userId = $(this).data('user-id');
            Swal.fire({
                title: 'Are you sure?',
                text: 'You will not be able to recover this user!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: 'POST',
                        url: '<?= base_url('users/delete_user') ?>',
                        data: { id: userId },
                        success: function(data) {
                            Swal.fire(
                                'Deleted!',
                                'User has been deleted.',
                                'success'
                            );
                            location.reload();
                        },
                        error: function(xhr, status, error) {
                            Swal.fire(
                                'Error!',
                                'An error occurred while deleting the user.',
                                'error'
                            );
                            console.error(xhr.responseText);
                        }
                    });
                }
            });
        });
    });
</script>




</body>
</html>
