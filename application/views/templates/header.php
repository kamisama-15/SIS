<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SIS</title>
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
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>

 <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script> -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>
</head>
<style>
    #website-cover{
        width:100%;
        height:30em;
        object-fit:cover;
        object-position:center center;
    }
    .img-thumb-path{
        width:100px;
        height:80px;
        object-fit:scale-down;
        object-position:center center;
    }
    #sys_logo{
      width:5em;
      height:5em;
      object-fit:scale-down;
      object-position:center center;
    }
    .img-avatar{
        width:45px;
        height:45px;
        object-fit:cover;
        object-position:center center;
        border-radius:100%;
    }
    .user-img{
        position: absolute;
        height: 27px;
        width: 27px;
        object-fit: cover;
        left: -7%;
        top: -12%;
  }
  .btn-rounded{
        border-radius: 50px;
  }
  .bg-color{
    background-color: lightgray;
  }
  .text-super-sm {
        font-size: 10px;
    }
    .form-control-border-dark {
        border-color: #343a40;
    }
    .form-input-height{
      height: 0.4rem;
      font-size: 10px;
    }
    .custom-col{
      width: 10%;
      padding-bottom: 5px;
    }
    .deped{
      position: absolute;
      height: 100px;
      left: 30px;
      top:  -10px;
      margin-left: 10px;
    }
    .ne {
      position: absolute;
      height: 50px;
      right: 0; 
      margin-right: 20px;
      top: 20px;
      width: 150px;
}
    .col-5-5{
      flex: 0 0 49%;
    max-width: 49%;

    }
    input[type=number]::-webkit-inner-spin-button,
    input[type=number]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    input[type=number] {
        -moz-appearance: textfield;
    }
    .table-sm {
        font-size: 12px;
    }
    .table-sm th,
    .table-sm td {
        padding: 0.25rem;
    }
    
      @media print {
        select {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            background-image: none;
            background-repeat: no-repeat;
            background-position: right 0.7em top 50%;
            background-size: 0.65em auto;
            padding-right: 1.6em;
        }
        select option {
        display: block; 
    }
    
    custom-width {
        width: 10%;
    }
    .underline {
    display: inline-block;
    border-bottom: 1px solid black;
}

}

</style>
<body class="hold-transition sidebar-mini layout-navbar-fixed layout-fixed sidebar-closed ">
<div class="wrapper">
  <nav class="main-header navbar navbar-expand  navbar-light ">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">
            <b>
               <?php
                  $query = $this->db->select('sys_name')->get('system_info');

                  if ($query && $query->num_rows() > 0) {
                      $row = $query->row();
                      $sys_name = isset($row->sys_name) ? $row->sys_name : '';
                      echo $sys_name;
                  } else {
                      echo "Default Value";
                  }
              ?>
            </b>
          </a>
      </li>
     
    </ul>

  <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
          <div class="btn-group">
              <?php
              global $user; 
              $udata = $this->session->userdata('UserLoginSession');
              if ($udata && isset($udata['username'])) {
                  $query = $this->db->get_where('users', array('username' => $udata['username']));
                  $user = $query->row();

                  if ($user) {
                      ?>
                      <button type="button" class="btn btn-rounded badge badge-light dropdown-toggle" data-toggle="dropdown">
                          <img src="<?= base_url('uploads/users/' . $user->avatar) ?>" class="img-circle elevation-2 user-img" alt="User Image">
                          <span class="ml-3" style="font-size: 15px;"><?= $user->first_name . ' ' . $user->last_name ?></span>
                      </button>
                      <?php
                  } else {
                      echo '<button type="button" class="btn btn-secondary">User not found</button>';
                  }
              } else {
                  echo '<button type="button" class="btn btn-secondary">Guest</button>';
              }
              ?>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="<?php echo base_url('users/user_profile/' . $user->id) ?>"><i class="fa fa-user mr-2 "></i>My Account</a>

                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?= base_url('welcome/logout') ?>"><i class="fa fa-sign-out-alt"></i> Logout</a>
              </div>
          </div>
      </li>
  </ul>


  </nav>

  <aside class="main-sidebar sidebar-dark-primary elevation-4 " >
    <a href="<?=base_url()?>assets/index3.html" class="brand-link">
      <?php
      $query = $this->db->select('sys_logo')->get('system_info');

      if ($query && $query->num_rows() > 0) {
          $row = $query->row();
          $sysvatar_path = $row->sys_logo;

          if ($sysvatar_path !== null && $sysvatar_path !== '') {
              echo '<img src="' . base_url('uploads/' . $sysvatar_path) . '" alt="Kamisama Logo" class="brand-image img-circle elevation-3" style="opacity: .8">';
          } else {
              echo "Image not found";
          }
      } else {
          echo "No data found in the system_info table";
      }
      ?>
     <span class="brand-text font-weight-light">
       <?php
          $query = $this->db->select('short_name')->get('system_info');

          if ($query && $query->num_rows() > 0) {
              $row = $query->row();
              $short_name = isset($row->short_name) ? $row->short_name : '';
              echo $short_name;
          } else {
              echo "Default Value";
          }
      ?>

    </span>

    </a>

    <div class="sidebar fixed" >
      <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column text-sm nav-compact nav-flat nav-child-indent nav-collapse-hide-child" data-widget="treeview" role="menu" data-accordion="false">
              <li class="nav-item <?= ($this->uri->uri_string() == 'welcome/dashboard') ? 'menu-open' : '' ?>">
                  <a href="<?= base_url('welcome/dashboard') ?>" class="nav-link <?= ($this->uri->uri_string() == 'welcome/dashboard') ? 'active' : '' ?>">
                      <i class="nav-icon fas fa-tree"></i>
                      <p>Dashboard</p>
                  </a>
              </li>
              <li class="nav-header">Students</li>
              <li class="nav-item <?= ($this->uri->uri_string() == 'student/add_student') ? 'menu-open' : '' ?>">
                  <a href="<?= base_url('student/add_student') ?>" class="nav-link <?= ($this->uri->uri_string() == 'student/add_student') ? 'active' : '' ?>">
                      <i class="nav-icon fas fa-plus"></i>
                      <p>New Student</p>
                  </a>
              </li>
              <li class="nav-item <?= ($this->uri->uri_string() == 'student/view_students') ? 'menu-open' : '' ?>">
                  <a href="<?= base_url('student/view_students') ?>" class="nav-link <?= ($this->uri->uri_string() == 'student/view_students') ? 'active' : '' ?>">
                      <i class="nav-icon fas fa-users"></i>
                      <p>Students</p>
                  </a>
              </li>
              <li class="nav-item <?= ($this->uri->uri_string() == 'form/view_forms') ? 'menu-open' : '' ?>">
                  <a href="<?= base_url('form/view_forms') ?>" class="nav-link <?= ($this->uri->uri_string() == 'form/view_forms') ? 'active' : '' ?>">
                      <i class="nav-icon fas fa-list-alt"></i>
                      <p>Request Form</p>
                  </a>
              </li>
              <li class="nav-item <?= ($this->uri->uri_string() == 'transaction/view_transactions') ? 'menu-open' : '' ?>">
                  <a href="<?= base_url('transaction/view_transactions') ?>" class="nav-link <?= ($this->uri->uri_string() == 'transaction/view_transactions') ? 'active' : '' ?>">
                      <i class="nav-icon fas fa-list"></i>
                      <p>Transaction Lists</p>
                  </a>
              </li>
              <li class="nav-header">Credentials</li>

            <li class="nav-item <?= ($this->uri->segment(1) == 'forms') ? 'menu-open' : '' ?>">
                <a href="#" class="nav-link <?= ($this->uri->segment(1) == 'forms') ? 'active' : '' ?>">
                    <i class="nav-icon fas fa-file-alt"></i>
                    <p>Form 137 <i class="fas fa-angle-left right"></i></p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item <?= ($this->uri->segment(2) == 'elementary_form') ? 'menu-open' : '' ?>">
                        <a href="<?= base_url('forms/elementary_form'); ?>" class="nav-link <?= ($this->uri->segment(2) == 'elementary_form') ? 'active' : '' ?>">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Elementary</p>
                        </a>
                    </li>
                    <li class="nav-item <?= ($this->uri->segment(2) == 'highschool_form') ? 'menu-open' : '' ?>">
                        <a href="<?= base_url('forms/highschool_form'); ?>" class="nav-link <?= ($this->uri->segment(2) == 'highschool_form') ? 'active' : '' ?>">
                            <i class="far fa-circle nav-icon"></i>
                            <p>High School</p>
                        </a>
                    </li>
                    <li class="nav-item <?= ($this->uri->segment(2) == 'senior_highschool_form') ? 'menu-open' : '' ?>">
                        <a href="<?= base_url('forms/senior_highschool_form'); ?>" class="nav-link <?= ($this->uri->segment(2) == 'senior_highschool_form') ? 'active' : '' ?>">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Senior High School</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-header">Certificates</li>
            <li class="nav-item <?= ($this->uri->uri_string() == 'transaction/view_transactions') ? 'menu-open' : '' ?>">
                  <a href="<?= base_url('credentials/good_moral') ?>" class="nav-link <?= ($this->uri->uri_string() == 'credentials/good_moral') ? 'active' : '' ?>">
                      <i class="nav-icon fas fa-certificate"></i>
                      <p>Good Moral</p>
                  </a>
              </li>
              <li class="nav-item <?= ($this->uri->uri_string() == 'transaction/view_transactions') ? 'menu-open' : '' ?>">
                  <a href="<?= base_url('credentials/diploma') ?>" class="nav-link <?= ($this->uri->uri_string() == 'credentials/diploma') ? 'active' : '' ?>">
                      <i class="nav-icon fas fa-graduation-cap"></i>
                      <p>Diploma</p>
                  </a>
              </li>
            <?php if ($user && $user->user_type && $user->user_type != 2): ?>
              <li class="nav-header">Maintenance</li>
              <li class="nav-item <?= ($this->uri->uri_string() == 'users/view_users') ? 'menu-open' : '' ?>">
                  <a href="<?= base_url('users/view_users') ?>" class="nav-link <?= ($this->uri->uri_string() == 'users/view_users') ? 'active' : '' ?>">
                      <i class="nav-icon fas fa-users-cog"></i>
                      <p>Users List</p>
                  </a>
              </li>
              <li class="nav-item <?= ($this->uri->uri_string() == 'settings/view_settings') ? 'menu-open' : '' ?>">
                  <a href="<?= base_url('settings/view_settings') ?>" class="nav-link <?= ($this->uri->uri_string() == 'settings/view_settings') ? 'active' : '' ?>">
                      <i class="nav-icon fas fa-cogs"></i>
                      <p>Settings</p>
                  </a>
              </li>
          <?php endif; ?>

          </ul>  
      </nav>

    </div>
  </aside>