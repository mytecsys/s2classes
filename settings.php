<?php 
include("header.php");
 ?>
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Settings</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Settings v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      
    <!-- Content Header (Page header) -->
    
                  
        <div class="row">
          <div class="col-12 col-sm-12">
            <div class="card-body">
             <form action="loaddata.php" method="post">
              <form class="form-horizontal">
                <div class="card-body">
                <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Old Password</label>
                <div class="col-sm-10">
                <input type="password" class="form-control" id="inputEmail3" placeholder="Password" name="old_password">
                </div>
                </div>
                <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">New Password</label>
                <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="new_password">
                </div>
                </div>
                <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Confirm Password</label>
                <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="confirm_password">
                </div>
                </div>
              
                </div>

                
                <button type="submit" class="btn btn-success" name="action" value="reset_password" style="margin-left: 225px;">Save</button>
                <!-- <button type="submit" class="btn btn-default float-right">Cancel</button> -->
              

                </form>
              </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        
        <!-- /.row -->
      
      <!-- /.container-fluid -->
   </div>
    </section></div>
 <?php 
include("footer.php");
 ?>