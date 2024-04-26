<div class="content-wrapper">
    <section class="content-header">
    </section>
    <section class="content">
        <div class="card card-outline card-primary">
            <div class="card-body">
                <div class="container-fluid">
                    <div id="msg"></div>
                    <form action="<?= base_url('users/update_user') ?>" id="manage-user" method="post" enctype="multipart/form-data"> 
                        <input type="hidden" id="id" name="id" value="<?php echo $user->id ?>">
                        <div class="form-group">
                            <label for="name">First Name</label>
                            <input type="text" name="firstname" id="firstname" class="form-control" value="<?php echo $user->first_name ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="name">Last Name</label>
                            <input type="text" name="lastname" id="lastname" class="form-control" value="<?php echo $user->last_name ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" name="username" id="username" class="form-control" value="<?php echo $user->username ?>" required  autocomplete="off">
                            <span id="usernameTaken" style="color: red; display: none;">Username is taken.</span>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control" value="" autocomplete="off">
                            <small><i>Leave this blank if you dont want to change the password.</i></small>
                        </div>
                        <div class="form-group">
                            <label for="avatar" class="control-label">Avatar</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input rounded-circle" id="avatar" name="avatar" onchange="showSelectedImage(event)">
                                <label class="custom-file-label" for="avatar">Choose file</label>
                            </div>
                        </div>
                        <div class="form-group d-flex justify-content-center">
                            <?php if (!empty($user->avatar)): ?>
                                <input type="hidden" name="existing_avatar" value="<?php echo $user->avatar; ?>">
                                <img id="selectedImage" style="width:100px; height:100px; object-fit:cover; object-position:center center; border-radius:100%;" src="<?php echo base_url('uploads/users/' . $user->avatar); ?>" class="img-fluid img-thumbnail mt-2" alt="Current Avatar">
                            <?php endif; ?>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card-footer">
                <div class="col-md-12">
                    <div class="row">
                        <button class="btn btn-sm btn-primary mr-2" id="update-user"><i class="fa fa-save"></i> Update</button>
                        <a class="btn btn-sm btn-danger" href="<?php echo base_url('users/view_users') ?>"><i class="fa fa-times mr-2"></i> Cancel</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php include APPPATH . "views/templates/footer.php"; ?>
<script>
    document.getElementById('username').addEventListener('input', function() {
        var inputUsername = this.value.trim(); 
        var usernames = <?php echo json_encode(array_column($usernames, 'username')); ?>; 
        var usernameTaken = document.getElementById('usernameTaken');
        if (usernames.includes(inputUsername)) {
            usernameTaken.style.display = 'inline'; 
        } else {
            usernameTaken.style.display = 'none'; 
        }
    });
</script>
<script>
    $(document).ready(function() {
    $('#update-user').click(function() {
        var username = $('#username').val().trim();
        var firstName = $('#firstname').val().trim();
        var lastName = $('#lastname').val().trim();


        if ($('#usernameTaken').is(':visible')) {
            Swal.fire({
                title: 'Username Taken',
                text: 'The username is already taken. Please choose a different one.',
                icon: 'error',
                confirmButtonColor: '#3085d6',
            });
            return;
        }
        if (username === ''  || firstName === '' || lastName === '') {
            Swal.fire({
                title: 'Missing Information',
                text: 'Please fill in all required fields.',
                icon: 'error',
                confirmButtonColor: '#3085d6',
            });
            return;
        }

        var formData = new FormData($('#manage-user')[0]); 
        $.ajax({
            type: 'POST',
            url: '<?=base_url()?>users/update_user_profile',
            data: formData, 
            contentType: false,
            processData: false, 
            success: function(data) {
                Swal.fire({
                    title: 'SUCCESSFULLY UPDATED',
                    text: data.message,
                    icon: 'success',
                    confirmButtonColor: '#3085d6',
                }).then((result) => {
                    window.location.href = '<?=base_url()?>users/view_users';
                });
            },
            error: function(xhr, status, error) {
                Swal.fire({
                    title: 'Error',
                    text: 'An error occurred while processing the request.',
                    icon: 'error',
                    confirmButtonColor: '#3085d6',
                });
                console.error(xhr.responseText);
            }
        });
    });
});

</script>
<script>
    function showSelectedImage(event) {
        var input = event.target;
        var reader = new FileReader();
        reader.onload = function() {
            var dataURL = reader.result;
            var image = document.getElementById('selectedImage');
            image.src = dataURL;
        };
        reader.readAsDataURL(input.files[0]);
    }
</script>
