<div class="content-wrapper">
    <section class="content-header">
    </section>
    <section class="content">
        <div class="card card-outline card-primary rounded-0 shadow">
            <div class="card-body">
                <form method="post" autocomplete="off" id="manage-user-form">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="username">User Name</label>
                                <input type="text" class="form-control" id="username" name="username" placeholder="User Name">
                                <span id="usernameTaken" style="color: red; display: none;">Username is taken.</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="first_name">First Name</label>
                                <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="last_name">Last Name</label>
                                <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name">
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="user_type">User Type</label>
                                <select name="user_type" id="user_type" class="form-control">
                                    <option value="1">Admin</option>
                                    <option value="2">Staff</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="User Password">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="confirm_password">Confirm Password</label>
                                <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm Password">
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="avatar" class="control-label">Avatar</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="avatar" name="avatar" onchange="showSelectedImage(event)">
                                <label class="custom-file-label" for="avatar">Choose file</label>
                            </div>
                        </div>
                        <div class="form-group col-md-12 d-flex justify-content-center align-items-center" id="selectedFileContainer" style="display: none;">
                            <img class="img-fluid img-thumbnail" id="selectedImage" src="<?= base_url('uploads/users/default.png') ?>" style="width:100px;
                                height:100px;
                                object-fit:cover;
                                object-position:center center;
                                border-radius:50%;">
                        </div>

                    </div>
                </form>
            </div>
            <div class="card-footer">
                <div class="col-md-4">
                    <button type="button" class="btn btn-sm btn-primary mr-2" id="save-user">
                    <i class="fa fa-save mr-2"></i>Save</button>
                    <a href="<?php echo base_url('users/view_users') ?>" class="btn btn-sm btn-secondary"  id="cancel-user">
                    <i class="fa fa-times mr-2"></i>Cancel</a>
                </div>
            </div>
        </div>
    </section>
</div>
<?php include APPPATH . "views/templates/footer.php"; ?>


<script>
    function showSelectedImage(event) {
        var input = event.target;
        var reader = new FileReader();
        reader.onload = function() {
            var dataURL = reader.result;
            var image = document.getElementById('selectedImage');
            image.src = dataURL;
            var container = document.getElementById('selectedFileContainer');
            container.style.display = 'block';
        };
        reader.readAsDataURL(input.files[0]);
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
            var confirmPassword = $('#confirm_password').val().trim();
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

            if (username === '' || password === '' || confirmPassword === '' || firstName === '' || lastName === '') {
                Swal.fire({
                    title: 'Missing Information',
                    text: 'Please fill in all required fields.',
                    icon: 'error',
                    confirmButtonColor: '#3085d6',
                });
                return;
            }

            if (password !== confirmPassword) {
                Swal.fire({
                    title: 'Password Mismatch',
                    text: 'The passwords do not match. Please try again.',
                    icon: 'error',
                    confirmButtonColor: '#3085d6',
                });
                return; 
            }

            var formData = new FormData($('#manage-user-form')[0]);
            $.ajax({
                type: 'POST',
                url: '<?=base_url()?>welcome/registerNow',
                data: formData,
                processData: false,
                contentType: false,
                success: function(data) {
                     Swal.fire({
                            title: 'SUCCESSFULLY ADDED',
                            text: data.message,
                            icon: 'success',
                            confirmButtonColor: '#3085d6',
                        }).then((result) => {
                            window.location.href = '<?=base_url()?>users/view_users';
                        });
                    data = JSON.parse(data);
                    if (data.result == 'SUCCESS') {
                        Swal.fire({
                            title: 'SUCCESSFULLY ADDED',
                            text: data.message,
                            icon: 'success',
                            confirmButtonColor: '#3085d6',
                        }).then((result) => {
                            window.location.href = '<?=base_url()?>users/view_users';
                        });
                    } else {
                        Swal.fire({
                            title: 'Registration Failed',
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




