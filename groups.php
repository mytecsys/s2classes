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
            <h1 class="m-0">Batches</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Batches v1</li>
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

               <button type="btn" class="btn btn-success"  style="float:right ; 225px;" data-toggle="model" data-target="#add_group" onclick="add_group();">Add Batches </button>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="group_table" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>SN</th>
                    <th>Title</th>
                    <th>Link</th>
                    <th>No of Members</th>
                    <th>Action</th>
                    
                  </tr>
                  </thead>
                  <tbody>
                             <?php 
 $query="SELECT * FROM `tbl_groups` order by `id` DESC";
$result=$con-> query($query);
$i=1;
while($row=$result-> fetch_object()) {
  $query1="SELECT count(*) as cnt FROM `tbl_user` WHERE `group`=".$row->id;
  $result1=$con->query($query1);
  $row1 = $result1 -> fetch_object();
  ?>
 <tr>
  <td><?php echo $i; ?></td>
<td><?php echo $row ->title; ?></td>
<td><a href="<?php echo $row->link ?>" class="btn btn-success" >Join</a></td>
<td><?php echo $row1->cnt; ?></td>
  <td><a onclick="edit_group('<?php echo $row->id ?>','<?php echo $row->title ?>' )" class="btn btn-success"> <i class="fa fa-edit">
    </i></a>
   <a class="btn btn-danger" onclick="del_group('<?php echo $row ->id; ?>')">
          <i class="fa fa-trash"></i>
     </a> 

     
    
                 </td>
    

 </tr>
<?php  
  $i++;
}
// exit();
?>
                 

                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        </section>
      </div>
    <div class="modal fade" id="add_group">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add Batch</h4>
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
                      <input type="Text" class="form-control" id="name" placeholder="Name" name="title">
                    </div>
                  </div>
               </div>
               <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Link</label>
                    <div class="col-sm-10">
                    <input type="nav-link" class="form-control" id="link" placeholder="Link" name="link">
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


         <div class="modal fade" id="edit_group">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Batch</h4>
               <form action="loaddata.php" method="post">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label"> Name</label>
                    <div class="col-sm-10">
                      <input type="Text" class="form-control" id="title_edit" placeholder="Name" name="title">
                    </div>
                  </div>
               </div>
               <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Link</label>
                    <div class="col-sm-10">
                    <input type="nav-link" class="form-control" id="link_edit" placeholder="Link" name="link">
                    </div>
                  </div>
               </div> 
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <input type="hidden" name="action" value="edit_group">
              <input type="hidden" name="id" id="row_id">
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
   function add_group()
   {
    // alert('test');
$('#add_group').modal('show');
   }

   function edit_group(id,title){
    // alert(id)
    // alert(title)
     $('#edit_group').modal('show');
     $('#title_edit').val(title)
      $('#link_edit').val(link)
      $('#row_id').val(id)
       }

        function del_group(id) {
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
                window.location.href='loaddata.php?action=del_group&id='+id;
              } else if (result.isDenied) {
                Swal.fire('Changes are not saved', '', 'info')
              }
            })
      }
 </script>