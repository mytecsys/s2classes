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
            <h1 class="m-0">UserWorkout</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">UserWorkout v1</li>
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
                    <th>Days</th>
                    <th>Activity</th>
                    <th>Sets</th>
                    <th>Reps</th>
                    <th>KG</th>
                    <th>Resttime</th>
                    <th> Button</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>sunday</td>
                    <td>Yoga</td>
                    <td>10</td>
                    <td>3</td>
                    <td>42</td>
                    <td>5</td>
                  <td><button class="btn btn-success"  style="float:right ; 225px;"Meeting > Meeting</button>
                  </td>
                   
                  </tr>
                  <tr>
                    <td>Monday</td>
                    <td>Zumba</td>
                    <td>10</td>
                    <td>3</td>
                    <td>42</td>
                    <td>5</td>
                  <td><button class="btn btn-success"  style="float:right ; 225px;"Meeting >Meeting</button>
                  </td>
                    
                  </tr>
                  <tr>
                    <td>Tuesday</td>
                    <td>Yoga</td>
                    <td>10</td>
                    <td>3</td>
                    <td>42</td>
                    <td>5</td>
                  <td><button class="btn btn-success"  style="float:right ; 225px;"Meeting > Meeting</button>
                  </td>
                  </tr>
                  <tr>
                    <td>Wednesday</td>
                    <td>Yoga</td>
                    <td>10</td>
                    <td>3</td>
                    <td>42</td>
                    <td>5</td>
                  <td><button class="btn btn-success"  style="float:right ; 225px;"Meeting > Meeting</button>
                  </td>
                  </tr>
                  <tr>
                    <td>Thursday</td>
                    <td>Yoga</td>
                    <td>10</td>
                    <td>3</td>
                    <td>42</td>
                    <td>5</td>
                  <td><button class="btn btn-success"  style="float:right ; 225px;"Meeting > Meeting</button>
                  </td>
                  </tr>
                  <tr>
                    <td>Friday</td>
                    <td>Yoga</td>
                    <td>10</td>
                    <td>3</td>
                    <td>42</td>
                    <td>5</td>
                  <td><button class="btn btn-success"  style="float:right ; 225px;"Meeting > Meeting</button>
                  </td>
                  </tr>
                  <tr>
                    <td>Saturday</td>
                    <td>Yoga</td>
                    <td>10</td>
                    <td>3</td>
                    <td>42</td>
                    <td>5</td>
                  <td><button class="btn btn-success"  style="float:right ; 225px;"Meeting > Meeting</button>
                  </td>
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