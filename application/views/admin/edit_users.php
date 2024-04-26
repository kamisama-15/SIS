<div class="content-wrapper">
    <section class="content-header">
        <!-- <h1>Update Details</h1> -->
    </section>
    <section class="content">
        <div class="card card-outline card-primary shadow">
            <div class="card-body">
                <form method="post" autocomplete="off" id="manage-user-form">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input value="<?php echo $user->id ?>" type="hidden" class="form-control" id="id" name="id" placeholder="">
                                <label for="username">User Name</label>
                                <input value="<?php echo $user->username ?>" type="text" class="form-control" id="username" name="username" placeholder="User Name">
                                <span id="usernameTaken" style="color: red; display: none;">Username is taken.</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="first_name">First Name</label>
                                <input value="<?php echo $user->first_name ?>" type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="last_name">Last Name</label>
                                <input value="<?php echo $user->last_name ?>" type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input value="<?php echo $user->password ?>" type="password" class="form-control" id="password" name="password" placeholder="User Password">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="user_type">User Type</label>
                               <select name="user_type" id="user_type" class="form-control">
                                    <option value="1" <?php echo ($user->user_type == 1) ? 'selected' : ''; ?>>Admin</option>
                                    <option value="2" <?php echo ($user->user_type == 2) ? 'selected' : ''; ?>>Staff</option>
                                </select>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="avatar" class="control-label">Avatar</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="avatar" name="avatar" onchange="previewImage(this)">
                                    <label class="custom-file-label" for="avatar">Choose file</label>
                                </div>
                                <?php if (!empty($user->avatar)): ?>
                                    <input type="hidden" name="existing_avatar" value="<?php echo $user->avatar; ?>">
                                    <img id="preview-avatar" style="width:100px; height:100px; object-fit:cover; object-position:center center; border-radius:100%;" src="<?php echo base_url('uploads/users/' . $user->avatar); ?>" class="img-fluid img-thumbnail mt-2" alt="Current Avatar">
                                <?php endif; ?>
                            </div>

                        </div>
                    </div>
                </form>
            </div>
            <div class="card-footer">
                <div class="col-md-4">
                    <button type="button" class="btn btn-sm btn-primary mr-2" id="save-user"><i class="fa fa-save mr-2 "></i>Save Changes</button>
                    <a href="<?php echo base_url('users/view_users') ?>" class="btn btn-sm btn-secondary"  id="cancel-user">
                    <i class="fa fa-times mr-2"></i>Cancel</a>
                </div>
            </div>
        </div>
    </section>
</div>
<?php include APPPATH . "views/templates/footer.php"; ?>

<script>
    function displayImg(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#preview-avatar').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>

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
        $('#save-user').click(function() {
            var username = $('#username').val().trim();
            var password = $('#password').val().trim();
            var firstName = $('#first_name').val().trim();
            var lastName = $('#last_name').val().trim();

            if (password.length < 8) {
                Swal.fire({
                    title: 'Password Length',
                    text: 'Password must be at least 8 characters long.',
                    icon: 'error',
                    confirmButtonColor: '#3085d6',
                });
                return;
            }

            if ($('#usernameTaken').is(':visible')) {
                Swal.fire({
                    title: 'Username Taken',
                    text: 'The username is already taken. Please choose a different one.',
                    icon: 'error',
                    confirmButtonColor: '#3085d6',
                });
                return;
            }
            if (username === '' || password === '' || firstName === '' || lastName === '') {
                Swal.fire({
                    title: 'Missing Information',
                    text: 'Please fill in all required fields.',
                    icon: 'error',
                    confirmButtonColor: '#3085d6',
                });
                return;
            }

            var formData = $('#manage-user-form').serialize();

            $.ajax({
                type: 'POST',
                url: '<?=base_url()?>users/update_user',
                data: formData,
                success: function(data) {
                     Swal.fire({
                            title: 'SUCCESSFULLY UPDATED',
                            text: data.message,
                            icon: 'success',
                            confirmButtonColor: '#3085d6',
                        }).then((result) => {
                            window.location.href = '<?=base_url()?>users/view_users';
                        });
                    data = JSON.parse(data);
                    if (data.result === 'SUCCESS') {
                        Swal.fire({
                            title: 'SUCCESSFULLY UPDATED',
                            text: data.message,
                            icon: 'success',
                            confirmButtonColor: '#3085d6',
                        }).then((result) => {
                            window.location.href = '<?=base_url()?>users/view_users';
                        });
                    } else {
                        Swal.fire({
                            title: 'Update Failed',
                            text: data.message,
                            icon: 'error',
                            confirmButtonColor: '#3085d6',
                        });
                    }
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




