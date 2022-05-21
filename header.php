<?php  include 'function.php'; 
if(!isset($_SESSION['id'])){
    header('location:login.php');
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>S2 <?php if($_SESSION['role']=="admin"){ ?>ADMIN <?php }else{ ?> MEMBER <?php  } ?></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
<link rel="stylesheet" href="plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <style type="text/css">
    .select2-container .select2-selection--single {
      height:40px!important;
    }
  </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/s2 logo.jpeg" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      
      <li class="nav-item">
        <a class="nav-link" href="loaddata.php?action=logout" role="button">
          <i class="fas fa-sign-out-alt"></i> sign out
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/s2 logo.jpeg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">S2 <?php if($_SESSION['role']=="admin"){ ?>ADMIN <?php }else{ ?> MEMBER <?php  } ?></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo  $_SESSION["username"]; ?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <!--<div class="form-inline">-->
      <!--  <div class="input-group" data-widget="sidebar-search">-->
      <!--    <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">-->
      <!--    <div class="input-group-append">-->
      <!--      <button class="btn btn-sidebar">-->
      <!--        <i class="fas fa-search fa-fw"></i>-->
      <!--      </button>-->
      <!--    </div>-->
      <!--  </div>-->
      <!--</div>-->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         <?php if($_SESSION['role']=="admin"){ ?>
          <li class="nav-item">
            <a href="index.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>

              <p>
                Dashboard
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="user.php" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Users
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="groups.php" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Batches
                
              </p>
            </a>
          </li>
           <li class="nav-item">
            <a href="exercise.php" class="nav-link">
                <i class="nav-icon fas fa-running"></i>
              <!--<i class="nav-icon fas fa-dumbbell"></i>-->
              <p>
                Exercise
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="workout.php" class="nav-link">
              <i class="nav-icon fas fa-dumbbell"></i>
              <p>
                Workout
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="nutrition.php" class="nav-link">
              
              <i class=" nav-icon fab fa-nutritionix"></i>
              <p>
                Meal
                
              </p>
            </a>
          </li>
           </li><li class="nav-item">
            <a href="payments.php" class="nav-link">
              
               <i class="  nav-icon fas fa-receipt"></i>
              <p>
                Payments
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="settings.php" class="nav-link">
             
             
             <i class="  nav-icon fas fa-cog"></i>
              <p>
                Settings
                
              </p>
            </a>
          </li>
             <?php }else{ ?>
             <li class="nav-item">
            <a href="index.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>

              <p>
                Dashboard
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="usertransformation.php" class="nav-link">
              <i class="nav-icon fas fa-child"></i>
              <p>
                Transformation
                
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="userworkout.php" class="nav-link">
              <i class="nav-icon fas fa-dumbbell"></i>
              <p>
                Workout
                
              </p>
            </a>
          </li><li class="nav-item">
            <a href="usernutrition.php" class="nav-link">
              
              <i class=" nav-icon fab fa-nutritionix"></i>
              <p>
                Meal
                
              </p>
            </a>
          </li>
          </li><li class="nav-item">
            <a href="userpayment.php" class="nav-link">
              
               <i class="  nav-icon fas fa-receipt"></i>
              <p>
                Payment
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="settings.php" class="nav-link">
             
             
             <i class="  nav-icon fas fa-cog"></i>
              <p>
                Settings
                
              </p>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a href="usertransformation.php" class="nav-link">
             
             
             <i class="  nav-icon fas fa-cog"></i>
              <p>
                Transformation
                
              </p>
            </a>
          </li> -->
             
             <?php } ?>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
