<div class="content-wrapper">
    <div class="content py-3">
        <div class="card card-outline card-primary shadow rounded-0">
            <div class="card-header">
                <h3 class="card-title"><b>Update Student Detail - <?php echo $student->LRN ?></b></h3>
            </div>
            <div class="card-body">
                <div class="container-fluid">
                    <form id="student_form">
                        <input type="hidden" name="std_id" id="std_id" value="<?php echo $student->std_id; ?>">
                        <fieldset class="border-bottom">
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label for="roll" class="control-label">LRN</label>
                                    <input type="number" name="roll" id="roll" autofocus value="<?php echo $student->LRN; ?>" class="form-control form-control-sm rounded-0">
                                     <span id="indicator" style="color: red;"></span>
                                <span id="LRNtaken" style="color: red; display: none;">LRN is taken.</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label for="firstname" class="control-label">First Name</label>
                                    <input type="text" name="firstname" id="firstname" value="<?php echo $student->first_name; ?>" class="form-control form-control-sm rounded-0">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="middlename" class="control-label">Middle Name</label>
                                    <input type="text" name="middlename" id="middlename" value="<?php echo $student->middle_name; ?>" class="form-control form-control-sm rounded-0" placeholder="optional">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="lastname" class="control-label">Last Name</label>
                                    <input type="text" name="lastname" id="lastname" autofocus value="<?php echo $student->last_name; ?>" class="form-control form-control-sm rounded-0">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label for="gender" class="control-label">Gender</label>
                                    <select name="gender" id="gender" class="form-control form-control-sm rounded-0">
                                        <option <?php echo $student->gender == 'Male' ? 'selected' : ''; ?>>Male</option>
                                        <option <?php echo $student->gender == 'Female' ? 'selected' : ''; ?>>Female</option>
                                    </select>
                                </div>
                                
                            </div>
                           <div class="row">
                            <div class="form-group col-md-4">
                                <label for="status" class="control-label">Grade Level</label>
                                <select name="form_id" id="grade_level" class="form-control" required onchange="toggleStrandDropdown()">
                                    <option selected disabled hidden>Please Select</option>
                                    <?php foreach ($grade_levels as $grade_level): ?>
                                        <option value="<?php echo $grade_level->grd_id; ?>" <?php echo ($grade_level->grd_id == $student->grd_id) ? 'selected' : ''; ?>><?php echo $grade_level->grd_title; ?></option>
                                    <?php endforeach ?>
                                </select>

                            </div>
                            <div class="form-group col-md-4">
                                <label for="status" class="control-label">Strand</label>
                                <select name="form_id" id="strand" class="form-control" required <?php echo ($student->grd_id >= 11 && $student->grd_id <= 12) ? '' : 'disabled'; ?>>
                                    <option selected disabled hidden>Please Select</option>
                                    <?php foreach ($strands as $strand): ?>
                                        <option value="<?php echo $strand->str_id; ?>" <?php echo ($strand->str_id == $student->str_id) ? 'selected' : ''; ?>><?php echo $strand->str_title; ?></option>
                                    <?php endforeach ?>
                                </select>

                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
            <div class="card-footer text-right">
                <button class="btn btn-flat btn-primary btn-sm" type="button" onclick="updateStudent()">Save Changes</button>
                <a href="<?php echo base_url('student/view_students') ?>" class="btn btn-flat btn-default border btn-sm">Cancel</a>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function toggleStrandDropdown() {
        var gradeLevelSelect = document.getElementById("grade_level");
        var strandSelect = document.getElementById("strand");

        if (gradeLevelSelect.value >= 11 && gradeLevelSelect.value <= 12) {
            strandSelect.disabled = false;
        } else {
            strandSelect.disabled = true;
            strandSelect.selectedIndex = 0;
        }
    }
</script>
<script>
document.getElementById("roll").addEventListener("input", function(event) {
  let inputValue = event.target.value;
  if (inputValue.length > 12) {
    event.target.value = inputValue.slice(0, 12);
    document.getElementById("indicator").textContent = "Maximum length reached (12)";
  } else {
    document.getElementById("indicator").textContent = "";
  }
});
</script>
<?php include APPPATH . "views/templates/footer.php"; ?>
<script>
    document.getElementById('roll').addEventListener('input', function() {
        var inputUsername = this.value.trim(); 
        var LRNS = <?php echo json_encode(array_column($LRNS, 'LRN')); ?>; 
        var LRNtaken = document.getElementById('LRNtaken');
        if (LRNS.includes(inputUsername)) {
            LRNtaken.style.display = 'inline'; 
        } else {
            LRNtaken.style.display = 'none'; 
        }
    });

    document.getElementById("roll").addEventListener("input", function(event) {
        let inputValue = event.target.value;
        if (inputValue.length > 12) {
            event.target.value = inputValue.slice(0, 12);
            document.getElementById("indicator").textContent = "Maximum length reached (12)";
        } else {
            document.getElementById("indicator").textContent = "";
        }
    });

    function updateStudent() {
        var std_id = $("#std_id").val();
        var roll = $("#roll").val();
        var firstname = $("#firstname").val();
        var middlename = $("#middlename").val();
        var lastname = $("#lastname").val();
        var gender = $("#gender").val();
        var grd_id = $("#grade_level").val(); 
        var str_id = $("#strand").val();

        if (!roll || !firstname || !lastname || !gender || !grd_id) {
            alert("Please fill in all required fields.");
            return;
        }

        if ($('#LRNtaken').is(':visible')) {
            Swal.fire({
                title: 'LRN is Taken',
                text: 'The LRN is already taken. Please enter a different one.',
                icon: 'error',
                confirmButtonColor: '#3085d6',
            });
            return; 
        }

        $.ajax({
            type: 'post',
            url: '<?=base_url()?>student/update_student',
            data: {
                std_id: std_id,
                roll: roll,
                firstname: firstname,
                middlename: middlename,
                lastname: lastname,
                gender: gender,
                grd_id: grd_id,
                str_id: str_id,
            },
            success: function(data) {
                 Swal.fire({
                        title: 'UPDATED',
                        text: "",
                        icon: 'success',
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK!'
                    }).then((result) => {
                        window.location.href='<?=base_url()?>student/view_students'
                    });
                data = JSON.parse(data);
                if (data.result == 'SUCCESS') {
                    Swal.fire({
                        title: 'UPDATED',
                        text: "",
                        icon: 'success',
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK!'
                    }).then((result) => {
                        window.location.href='<?=base_url()?>student/view_students'
                    });
                } else if (data.result == "FAILED") {
                    alert(data.msg);
                }
            },
            error: function(xhr, status, error) {
                alert(xhr.responseText);
            }
        });
    }
</script>



</body>
</html>
