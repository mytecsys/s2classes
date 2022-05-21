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
            <h1 class="m-0">Nutrition</h1>
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
                    <?php 
              $query="SELECT * FROM `tbl_nutrition` ORDER BY `created_at` DESC";
                $result=$con -> query($query);
                $i=1;
              while($row = $result->fetch_object()){ 
               ?>
                  <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php  $date = strtotime($row->created_at);
                      echo date('d-m-Y', $date);  ?></td>
                    <td> Batch: <?php echo fetch_extra_data('tbl_groups','title','id',$row->group) ;?></td>
                    <td><a href="gym/nutrition_pdf/<?php echo $row->pdf ?>" target="_blank"><i class="fas fa-file-pdf" style="font-size: 25px;"></i></a>
                  </td>
                  </tr>
                  <?php 
                   $i++;
                   } ?>
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