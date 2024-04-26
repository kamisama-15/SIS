<div class="content-wrapper">
    <div class="card-header"></div>
    <div class="col-lg-12">
        <div class="card card-outline card-primary rounded-0 shadow">
            <div class="card-header">
                <h5 class="card-title">Student Credentials Keeping <i class="fa fa-assistive-listening-systems" aria-hidden="true"></i></h5>
            </div>
            <div class="card-body">
                <form id="system-frm" enctype="multipart/form-data">
                    <div id="msg" class="form-group"></div>
                    <div class="form-group">
                        <label for="sys_name" class="control-label">System Name</label>
                       <input type="text" value="<?php echo isset($settings->sys_name) ? $settings->sys_name : '' ?>" class="form-control form-control-sm" name="sys_name" id="sys_name">

                    </div>
                    <div class="form-group">
                        <label for="short_name" class="control-label">System Short Name</label>
                       <input type="text" value="<?php echo isset($settings->short_name) ? $settings->short_name : '' ?>" class="form-control form-control-sm" name="short_name" id="short_name">
                    </div>
                    <div class="form-group">
                        <label for="sys_logo" class="control-label">System Logo</label>
                        <div class="custom-file">
                           <input type="file" class="custom-file-input" id="sys_logo" name="sys_logo" <?php if(isset($settings->sys_logo)) echo 'value="' . $settings->sys_logo . '"'; ?>>

                            <label class="custom-file-label" for="sys_logo">Choose file</label>
                        </div>
                    </div>
                    <div class="form-group d-flex justify-content-center">
                         <?php if(isset($settings->sys_logo)): ?>
			                <img src="<?= base_url('uploads/' . $settings->sys_logo) ?>" alt="System Logo" class="img-fluid img-thumbnail rounded-circle" id="sys_logo_preview">
			            <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <label for="sys_cover" class="control-label">Cover</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="sys_cover" name="sys_cover" <?php if(isset($settings->sys_cover)) echo 'value="' . $settings->sys_cover . '"'; ?>>

                            <label class="custom-file-label" for="sys_cover">Choose file</label>
                        </div>
                    </div>
                    <div class="form-group d-flex justify-content-center">
                        <?php if(isset($settings->sys_cover)): ?>
			                <img src="<?= base_url('uploads/' . $settings->sys_cover) ?>" alt="System Cover" class="img-fluid img-thumbnail bg-gradient-dark border-dark" id="sys_cover_preview">
			            <?php endif; ?>
                    </div>
                </form>
            </div>
            <div class="card-footer">
                <div class="col-md-12">
                    <div class="row">
                        <button type="button" class="btn btn-sm btn-primary" id="updateBtn">Update</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
$(document).ready(function(){
    $('#updateBtn').click(function(){
        var formData = new FormData($('#system-frm')[0]);
        $.ajax({
            url: '<?= base_url('settings/configure_settings') ?>',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                Swal.fire({
                        title: 'SUCCESS',
                        text: 'System info successfully updated.',
                        icon: 'success',
                        confirmButtonColor: '#3085d6',
                    }).then((result) => {
                        location.reload();
                    });
                var data = JSON.parse(response);
                if (data.result == 'SUCCESS') {
                    Swal.fire({
                        title: 'SUCCESS',
                        text: 'System info successfully updated.',
                        icon: 'success',
                        confirmButtonColor: '#3085d6',
                    }).then((result) => {
                        location.reload();
                    });
                } else {
                    Swal.fire({
                        title: 'ERROR',
                        text: 'Failed to update system info: ' + data.msg,
                        icon: 'error',
                        confirmButtonColor: '#d33',
                    });
                }
            },
            error: function(xhr, status, error) {
                console.error('Error occurred while updating system info:', error);
            }
        });
    });
    
    // Preview image for sys_logo input
    $('#sys_logo').change(function(){
        var input = this;
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#sys_logo_preview').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    });
    
    $('#sys_cover').change(function(){
        var input = this;
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#sys_cover_preview').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    });
});

</script>

<?php include APPPATH . "views/templates/footer.php"; ?>
