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
            <h1 class="m-0">Transformation</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Transformation</li>
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
            <div class="card-header">
              <div class="card-header">
                <button type="btn" class="btn btn-success"  style="float:right ; 225px;" data-toggle="model" data-target="#add_group" onclick="add_transformation();">Add transformation </button>
                <!-- <a href="addtransformation.php" class="btn btn-success"  style="float:right ; 225px;">Add Transformation  </a> -->
              </div>
                
              
              <!-- /.card-header -->
              <div class="card-body">
                <table id="workout_table" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>S.N</th>
                    <th>Date</th>
                    <th>Action</th>
                    <th>Weight</th>
                    <th>Height</th>
                    <th>Chest</th>
                    <th>Waist</th>
                    <th>Thigh</th>
                    <th>Arms</th>
                    <th>Fat</th>
                    
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>1</td>
                    <td>17/5/22</td>
                    <td> </td>
                    <td>55</td>
                    <td>6</td>
                    <td>32 </td>
                    <td>34 </td>
                    <td>10</td>
                    <td>9</td>
                    <td>8</td>
                    
                    
                    

                  </tr>
                  <tr>
                    <td>2</td>
                    <td>18/5/22</td>
                    <td> </td>
                    <td></td>
                    <td></td>
                    <td> </td>
                    <td> </td>
                    <td></td>
                    <td> </td>
                    <td></td>
                    

                   
                  </tr>
                  <tr>
                    <td>3</td>
                     <td>19/5/22</td>
                     <td></td>
                     <td></td>
                    <td></td>
                    <td> </td>
                    <td> </td>
                    <td></td>
                    <td> </td>
                    <td></td>
                    
                   
                    
                  </tr>

                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        
      
    </section></div>




    <div class="modal fade" id="add_transformation">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add Transfoation</h4>
               <form action="loaddata.php" method="post">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <div class="card-body">
                  
                  <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Weight </label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" id="inputEmail3" placeholder="KG" name="weight">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Wt.Before Meal</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" id="inputEmail3" placeholder="KG" name="b_weight">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Wt.Post Meal</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" id="inputEmail3" placeholder="KG" name="p_weight">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Height</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" id="inputPassword3" placeholder="Centimeter" name="height">
                    </div>
                  </div>
                     <!-- <div class="card-body"> -->
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Chest</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" id="inputEmail3" placeholder="Inches"name="chest">
                    </div>
                  </div>
                  <!-- </div> -->
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Waist</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" id="inputPassword3" placeholder="Inches" name="waist">
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label"> Thigh </label>
                    <div class="col-sm-10">
                      <input type="Number" class="form-control" id="inputPassword3" placeholder="Inches" name="thigh">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Arms</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" id="inputPassword3" placeholder="Inches" name="arms">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Fat</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" id="inputPassword3" placeholder="percentage" name="fat">
                    </div>
                  </div>
                  <div class="row form-group">
                      <div class="col col-md-2">
                          <label for="file-input" class=" form-control-label">Food Track :</label>
                       </div>
                         <div class="col-12 col-md-4">
                           <input type="file" id="file-input"  name="s_track" class="form-control-file">
                          
                       </div>
                 </div> 

</div>

               </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <input type="hidden" name="action" value="add_group">
              <!-- <input type="hidden" name="id" id="row_id"> -->
              <button type="submit" class="btn btn-primary">Save</button>
            </form>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      
 <?php 
include("footer.php");
 ?>


 <script type="text/javascript">
   function add_transformation()
   {
    // alert('test');
$('#add_transformation').modal('show');
   }
 </script>