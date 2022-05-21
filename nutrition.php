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
                    <th>Date</th>
                    <th>Action</th>
                  </tr>
                  </thead>
               <tbody>
                    <?php 
              $query="SELECT * FROM `tbl_nutrition` ORDER BY `created_at` DESC";
                $result=$con -> query($query);
                $i=1;
              while($row = $result->fetch_object()){ 
                $group=$row->group;
                $member=$row->member;
               ?>
                   <tr>
                       <td><?php echo $i; ?></td>
                       <td><?php echo $row->name ?></td>
                       <td><a href="gym/nutrition_pdf/<?php echo $row->pdf ?>" target="_blank"><i class="fas fa-file-pdf" style="font-size: 25px;"></i></a></td>
                       <td>Batch: <?php echo fetch_extra_data('tbl_groups','title','id',$row->group) ;?></td>
                       <td><?php  $date = strtotime($row->created_at);
                      echo date('d-m-Y', $date);  ?></td>
                       <td><a onclick="edit_nutrition(<?php echo $row->id; ?>)" title="Edit Profile" data-toggle="modal" data-target="#modal-lg-edit" class="btn btn-link bg-light-blue btn-xs" style="background-color: #3c8dbc !important;color: #fff !important;"><i class="fa fa-edit"></i></a>
                        <a onclick="del_nutri(<?php echo $row ->id; ?>)" title="Delete Profile" class="btn btn-link bg-red btn-xs" style=""><i class="fa fa-trash"></i></a>
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
               <form action="loaddata.php" class="form-horizontal" enctype="multipart/form-data" method="post">
                <input type="hidden" name="action" value="add_nutri">
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
                   <div class="row form-group">
                      <div class="col col-md-2">
                          <label for="file-input" class=" form-control-label">PDF :</label>
                       </div>
                         <div class="col-12 col-md-4">
                           <input type="file" id="file-input" multiple name="nutri_pdf" class="form-control-file">
                       </div>
                 </div>  
                   <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Select</label>
                    <div class="col-sm-10">
                     
                <select id="nutri_alot1" class="form-control select2" name="group"  style="width: 100%; ">
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
                     ?>
                  </select>  
                  </div>
                </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Date</label>
                    <div class="col-sm-10">
                      <input type="date" class="form-control" id="inputPassword3" placeholder="date" name="q_date" value="<?php echo date('Y-m-d'); ?>">
                  </div>
                </div>
               </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <!-- <input type="hidden" name="action" value="add_nutrition"> -->
              
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
              <h4 class="modal-title">Edit Nutrition</h4>
               <form action="loaddata.php" class="form-horizontal" enctype="multipart/form-data" method="post">
                <input type="hidden" name="action" value="add_nutri">
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
                   <div class="row form-group">
                       <div class="col col-md-2">
                          <label for="file-input" class=" form-control-label">Upload Image :</label>
                       </div>
                         <div class="col-12 col-md-4">
                           <input type="file" id="file-input" multiple name="nutri_pdf" class="form-control-file">
                          <a id="nutri_pdf" href="gym/nutrition_pdf/<?php echo $row->pdf ?>" target="_blank" style="font-size: 10px;"><i class="fas fa-file-pdf" style="font-size: 25px; padding-top: 10px;"></i></a>
                           <input type="hidden" name="pdf_path" id="pdf_path">
                       </div>
                 </div> 
                   <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Select</label>
                    <div class="col-sm-10">
                      <select id="group_edit_nutri" class="form-control select2" name="group"  style="width: 100%; ">
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
                     ?>
                  </select>
                  </div>
                </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Date</label>
                    <div class="col-sm-10">
                      <input type="date" class="form-control" id="inputPassword3" placeholder="date" name="q_date" value="<?php echo date('Y-m-d'); ?>">
                  </div>
                </div>
               </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <!-- <input type="hidden" name="action" value="add_nutrition"> -->
              
              <button type="submit" class="btn btn-primary">Save</button>
            </form>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>

<!-- ============================ -->     
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
           $('#name_edit_nutri').val(abc[0]);
          $('#group_edit_nutri').val(abc[2]);
          $('#fetch_q_date').val(abc[3]);
          $('#pdfpath').val(abc[1]);
          $('#nutri_pdf').attr("src","gym/nutrition_pdf/"+abc[1]);
          $('#group_edit_nutri option[value="'+abc[2]+'"]').attr("selected","selected");
      }
    });
}
// =============delete===============
function del_nutri(id) {
        // alert(id)
        Swal.fire({
              title: 'Do you want to delete user?',
              showDenyButton: false,
              showCancelButton: true,
              confirmButtonText: 'Yes delete it',
              denyButtonText: `Close`,
            }).then((result) => {
              /* Read more about isConfirmed, isDenied below */
              if (result.isConfirmed) {
                window.location.href='loaddata.php?action=del_nutri&id='+id;
              } else if (result.isDenied) {
                Swal.fire('Changes are not saved', '', 'info')
              }
            })
      }
</script>