<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<?php
    $query = $this->db->select('sys_logo')->get('system_info');

    if ($query && $query->num_rows() > 0) {
        $row = $query->row();
        $sysvatar_path = $row->sys_logo;

        if ($sysvatar_path !== null && $sysvatar_path !== '') {
            echo '<link rel="icon" type="image/x-icon" href="' . base_url('uploads/' . $sysvatar_path) . '">';
        } else {
            echo "Image not found";
        }
    } else {
        echo "No data found in the system_info table";
    }
    ?>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/fontawesome-free/css/all.min.css">


  <title>SIS</title>
  <style>
        body {
            <?php
            $query = $this->db->select('sys_cover')->get('system_info');

            if ($query && $query->num_rows() > 0) {
                $row = $query->row();
                $sys_cover_path = $row->sys_cover;

                if ($sys_cover_path !== null && $sys_cover_path !== '') {
                    echo 'background-image: url("' . base_url('uploads/' . $sys_cover_path) . '");';
                } else {
                    echo "background-color: #f8f9fa;"; 
                }
            } else {
                echo "background-color: #f8f9fa;"; 
            }
            ?>
            background-size: cover;
            background-position: center;
            min-height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            opacity: 2;
            padding-bottom: 10%;
        }
        .login-title{
      text-shadow: 2px 2px black
    }
#logo-img {
    display: block;
    margin: auto;
}
    </style>
</head>
<body>

<div class="container">
      <div class="w-100">
       <div class="mt-5" style="text-align: center;">
    <img src="<?php
        $query = $this->db->select('sys_logo')->get('system_info');

        if ($query && $query->num_rows() > 0) {
            $row = $query->row();
            $sysvatar_path = $row->sys_logo;

            if ($sysvatar_path !== null && $sysvatar_path !== '') {
                echo base_url('uploads/' . $sysvatar_path);
            } else {
                echo "Image not found";
            }
        } else {
            echo "No data found in the system_info table";
        }
    ?>" alt="" id="logo-img">
</div>

        <h1 class="text-center  login-title"><b><?php
                  $query = $this->db->select('sys_name')->get('system_info');

                  if ($query && $query->num_rows() > 0) {
                      $row = $query->row();
                      $sys_name = isset($row->sys_name) ? $row->sys_name : '';
                      echo $sys_name;
                  } else {
                      echo "Default Value";
                  }
              ?>- Admin</b></h1>
      </div>

  <div class="row d-flex justify-content-center align-items-center mt-3"> 
    <div class="col-md-4">
        <div class="card">
            <div class="card-header text-center">
                Login
            </div>
            <div class="card-body">
                <form method="post" autocomplete="off" action="<?=base_url('welcome/loginnow')?>">
                    <div class="mb-3">
                        <label for="exampleInputUsername" class="form-label">Username</label>
                        <div class="input-group">
                            <input type="text" placeholder="Username" name="username" class="form-control" id="exampleInputUsername" aria-describedby="usernameHelp">
                            <div class="input-group-append">
                                <span class="input-group-text" style="height: 38px;"><i class="fas fa-user"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <div class="input-group">
                            <input type="password" name="password" placeholder="User Password" class="form-control" id="exampleInputPassword1">
                            <div class="input-group-append">
                                <span class="input-group-text" style="height: 38px;"><i class="fas fa-lock"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary"> <i class="fas fa-sign-in-alt"></i> Sign in</button>
                    </div>
                    <?php if($this->session->flashdata('error')) { ?>
                        <p class="text-danger text-center" style="margin-top: 10px;"> <?=$this->session->flashdata('error')?></p>
                    <?php } ?>
                </form>
            </div>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
