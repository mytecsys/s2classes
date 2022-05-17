<?php 
include("header.php");
 ?>
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Nutrition</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Nutrition</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
          

            <div class="card">
              <div class="card-header">
                <h3 class="card-title"></h3>
                <button class="btn btn-success float-right"  data-toggle="modal" data-target="#add_nutrition">Add Nutrition</button>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="quotation1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>SN</th>
                    <th>Name</th>
                    <th>PDF</th>
                    <th>Alloted</th>
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
                       <td><?php echo $row->name ?></td>
                       <td><?php echo $row->pdf ?></td>
                       <td><?php echo $row->groups ?></td>
                       <td><a onclick="edit_nutrition(<?php echo $row->id; ?>)" title="Edit Profile" data-toggle="modal" data-target="#modal-lg-edit" class="btn btn-link bg-light-blue btn-xs" style="background-color: #3c8dbc !important;color: #fff !important;"><i class="fa fa-edit"></i></a>
                        <a onclick="del_nutrition('<?php echo $row ->id; ?>')" title="Delete Profile" class="btn btn-link bg-red btn-xs" style=""><i class="fa fa-trash"></i></a>
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
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

<!-- =================add========================== -->

<div class="modal fade" id="add_nutrition">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add Nutrition</h4>
               <form action="loaddata.php" method="post">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                      <input type="Text" class="form-control" id="name" placeholder="Name" name="name">
                    </div>
                  </div>

                   <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label"> Pdf</label>
                    <div class="col-sm-10">
                      <input type="File" class="form-control" id="name" placeholder="Pdf" name="pdf">
                    </div>
                  </div>
                    <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Select Member</label>
                    <div class="col-sm-10">
                      <select class="form-control select2" style="width: 100%; height: 28px;">
                        <?php 
                        $query="SELECT * FROM tbl_user WHERE is_delete=0";
                           $result= $con -> query($query);
                           $i=1;
                            while($row = $result -> fetch_object()){
                        ?>
                       
                    <option value="<?php echo $row ->id; ?>"><?php echo $row ->first_name." ".$row->middle_name." ".$row->last_name; ?></option>
                    
                    <?php  
                      $i++;
                        }
                      // echo $row -> id;
                     // exit();
                     ?>
                  </select>
                    </div>

                  </div>
                    

                  
                                    <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                       
                 <H4  text-align: center;>OR </H4>
                    </div>

                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Select Group</label>
                    <div class="col-sm-10">
                        <select class="form-control select2" style="width: 100%; ">
                    <?php 
                        $query="SELECT * FROM tbl_groups ";
                           $result= $con -> query($query);
                           $i=1;
                            while($row = $result -> fetch_object()){
                        ?>
                       
                    <option value="<?php echo $row ->id; ?>"><?php echo $row ->title;?></option>
                    
                    <?php  
                      $i++;
                        }
                      // echo $row -> id;
                     // exit();
                     ?>
                  </select>
                    </div>

                  </div>
               </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <input type="hidden" name="action" value="add_nutrition">
              
              <button type="submit" class="btn btn-primary">Save</button>
            </form>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>


<!-- =========================edit==================================== -->

<div class="modal fade" id="modal_edit_nutrition">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add Nutrition</h4>
               <form action="loaddata.php" method="post">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                      <input type="Text" class="form-control" id="name_edit_nutrition" placeholder="Name" name="name">
                    </div>
                  </div>

                   <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Pdf</label>
                    <div class="col-sm-10">
                      <input type="File" class="form-control" id="pdf_edit_nutrition" placeholder="Pdf" name="pdf">
                    </div>
                  </div>
                    <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Select Member</label>
                    <div class="col-sm-10">
                      <select class="form-control select2" style="width: 100%; height: 28px;">
                        <?php 
                        $query="SELECT * FROM tbl_user WHERE is_delete=0";
                           $result= $con -> query($query);
                           $i=1;
                            while($row = $result -> fetch_object()){
                        ?>
                       
                    <option value="<?php echo $row ->id; ?>"><?php echo $row ->first_name." ".$row->middle_name." ".$row->last_name; ?></option>
                    
                    <?php  
                      $i++;
                        }
                      // echo $row -> id;
                     // exit();
                     ?>
                  </select>
                    </div>

                  </div>
                    

                  
                                    <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                       
                 <H4  text-align: center;>OR </H4>
                    </div>

                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Select Group</label>
                    <div class="col-sm-10">
                        <select class="form-control select2" style="width: 100%; ">
                    <?php 
                        $query="SELECT * FROM tbl_groups ";
                           $result= $con -> query($query);
                           $i=1;
                            while($row = $result -> fetch_object()){
                        ?>
                       
                    <option value="<?php echo $row ->id; ?>"><?php echo $row ->title;?></option>
                    
                    <?php  
                      $i++;
                        }
                      // echo $row -> id;
                     // exit();
                     ?>
                  </select>
                    </div>

                  </div>
               </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <input type="hidden" name="action" value="add_nutrition">
              
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
  function edit_nutrition(para){
     // alert(para)
    $('#modal_edit_nutrition').modal('show');
     $('#update_nutrition').val(para); 
     $.ajax({
      data: {action:"view_one_nutrition",id:para},
      type: "post",
      url: "loaddata.php",
      crossDomain: true,
      success: function(dataResult){
          
          var abc=  JSON.parse(dataResult)
          console.log(dataResult)

          $('#name_edit_nutrition').val(abc[0]);
          $('#pdf_edit_nutrition').val(abc[1]);
          $('#group_edit_nutrition').val(abc[2]);
          $('#fetch_q_date').val(abc[3]);
          
          
      }
    });
      
}
// ============code for grp mmembr selsction=====================
$('#nutri_alot').on('change', function() {
  // alert( this.value );
  if(this.value=="group"){
$('#nutri_alot1').show();
  }else{
    $('#nutri_alot1').hide();
  }
});
$('#nutri_alot_edit_nutrition').on('change', function() {
  // alert( this.value );
  if(this.value=="Group"){
$('#nutri_alot2').show();
  }else{
    $('#nutri_alot2').hide();
  }
});
</script>