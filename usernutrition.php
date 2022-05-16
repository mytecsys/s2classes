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
            <h1 class="m-0">Payment</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Nutrition v1</li>
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
                    <th>S.N</th>
                    <th>Date</th>
                    <th>Title</th>
                    <th>Action</th>
                    
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>1</td>
                    <td>13/5/22</td>
                    <td>1000</td>
                    
                    <td><button class="btn btn-success"  style="float:right ; 225px;"Meeting > View</button>
                  </td>
                   
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>8/5/22</td>
                    <td>1200</td>
                    
                    <td><button class="btn btn-success"  style="float:right ; 225px;"Meeting >View</button>
                  </td>
                    
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>5/3/22</td>
                    <td>1000</td>
                    
                    
                  <td><button class="btn btn-success"  style="float:right ; 225px;"Meeting > View</button>
                  </td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>30/4/22</td>
                    <td>1000</td>
                    
                    
                  <td><button class="btn btn-success"  style="float:right ; 225px;"Meeting > View</button>
                  </td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>5/6/22</td>
                    <td>1000</td>
                   
                    
                  <td><button class="btn btn-success"  style="float:right ; 225px;"Meeting > View</button>
                  </td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>4/5/22</td>
                    <td>1000</td>
                    
                    
                  <td><button class="btn btn-success"  style="float:right ; 225px;"Meeting > View</button>
                  </td>
                    
                  </tr>
                  <tr>
                    <td>7</td>
                    <td>12/5/22</td>
                    <td>1000</td>
                    
                    
                  <td><button class="btn btn-success"  style="float:right ; 225px;"Meeting > View</button>
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