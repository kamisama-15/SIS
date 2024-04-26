<?php 
if($this->session->userdata('UserLoginSession'))
{
    $udata = $this->session->userdata('UserLoginSession');
?>
<div class="content-wrapper">
   <div class="container">
   	 <h1 class="py-3">Welcome to Student Information System</h1>
	    <hr class="border-purple">

	    <div class="row">
	        <div class="col-12 col-sm-12 col-md-6 col-lg-4">
	            <div class="info-box bg-gradient-light shadow">
	                <span class="info-box-icon bg-gradient-warning elevation-1"><i class="fas fa-user-friends"></i></span>

	                <div class="info-box-content ">
					    <?php
					    $query = $this->db->count_all('students');
					    $total_students = $query;

					    if (isset($total_students)) {
					        echo '<span class="info-box-text ">Total Student Records</span>';
					        echo '<span class="info-box-number text-right">' . $total_students . '</span>';
					    } else {
					        echo '<span class="info-box-text">Total Student Records</span>';
					        echo '<span class="info-box-number text-right">0</span>'; 
					    }
					    ?>
					</div>
					
	            </div>

	        </div>
	        <div class="col-12 col-sm-12 col-md-6 col-lg-4">
	            <div class="info-box bg-gradient-light shadow">
	                <span class="info-box-icon bg-gradient-success elevation-1"><i class="fas fa-file-alt"></i></span>

	               <div class="info-box-content">
					    <?php
					    $query = $this->db->count_all('request');
					    $total_request = $query;

					    if (isset($total_request)) {
					        echo '<span class="info-box-text">Total Requested Forms</span>';
					        echo '<span class="info-box-number text-right">' . $total_request . '</span>';
					    } else {
					        echo '<span class="info-box-text">Total Requested Forms</span>';
					        echo '<span class="info-box-number text-right">0</span>'; 
					    }
					    ?>
					</div>
	            </div>
	        </div>
	    </div>
	    <hr>
	    <div class="row">
	        <div class="col-md-12">
			    <?php
			    $query = $this->db->select('sys_cover')->get('system_info');

			    if ($query && $query->num_rows() > 0) {
			        $row = $query->row();
			        $sys_cover_path = $row->sys_cover;

			        if ($sys_cover_path !== null && $sys_cover_path !== '') {
			            echo '<img src="' . base_url('uploads/' . $sys_cover_path) . '" alt="Website Cover" class="img-fluid border w-100" id="website-cover">';
			        } else {
			            echo "Website cover image not found";
			        }
			    } else {
			        echo "No data found in the system_info table";
			    }
			    ?>
			</div>

	    </div>
   </div>
</div>

<!-- <?php include APPPATH . "views/templates/footer.php"; ?> -->
<!-- Page specific script -->

<?php
}
else
{
    redirect(base_url('welcome/login'));
}
?>
