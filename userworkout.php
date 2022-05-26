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
            <h1 class="m-0">Workout</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Workout</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="card">
             <!--  <div class="card-header">
                <a href="addworkout.php" class="btn btn-success"  style="float:right ; 225px;">Add workout </a>
                
              </div> -->
              <!-- /.card-header -->
              <div class="card-body">
                <table id="workout_table" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Day</th>
                    <th>Workout</th>
                    <th>Link</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>sunday</td>
                    <td>Yoga</td>
                <td><a href="https://meet.google.com/" class="btn btn-success">Join</a></td>
                  </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          </section>
          <!-- /.col -->
        </div>
      
    
 <?php 
include("footer.php");
 ?>