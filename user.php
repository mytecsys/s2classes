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
            <h1 class="m-0">Users</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Users </li>
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
                <a href="adduser.php" class="btn btn-success"  style="float:right ; 225px;">Add User</a>
                  <button type="btn" class="btn btn-success"  style="float:left ;" data-toggle="model" data-target="#send_notification" onclick="send_notification();">Send Notification </button>
              </div>
                
              <!-- /.card-header -->
              <div class="card-body">
                <table id="user_table" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>SN.</th>
                    <th>First Name</th>
                    <th>Mobile No</th>
                    <th>Email</th>
                    <th>Action </th>
                  
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
 $query="SELECT * FROM `tbl_user` order by `id` DESC";
$result=$con-> query($query);
$i=1;
while($row=$result-> fetch_object()) {
  ?>
 <tr>
  <td><?php echo $i; ?></td>
  <td> <?php echo $row ->first_name; ?></td>
  <td> <?php echo $row ->mobile_no; ?></td>
  <td> <?php echo $row ->email; ?></td>
  
  <td><a href="view_user.php?id=<?php echo $row->id ?>" class="btn btn-info"><i class="fa fa-eye"></i></a>
           
    <a href="edit_user.php?id=<?php echo $row->id ?>" class="btn btn-success"> <i class="fa fa-edit">
    </i></a>
    <a  class="btn btn-danger" onclick="del('<?php echo $row ->id; ?>')">
          <i class="fa fa-trash"></i>
     </a>

     <?php if($row ->is_delete==0){ ?>
                  <a href="loaddata.php?action=deactive_user&id=<?php echo $row ->id; ?>" class="btn btn-warning">D</a>
                  <?php } else{ ?>
                    <a href="loaddata.php?action=active_user&id=<?php echo $row ->id; ?>" class="btn btn-success">A</a>
                    <?php } ?>
    
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
        <!-- /.row -->
      
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

   <div class="modal fade" id="send_notification">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Send Notification</h4>
               <form action="loaddata.php" method="post">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label"> Notifications</label>
                    <div class="col-sm-10">
                      <textarea  type="text" class="form-control" id="notifications" placeholder="" name="notification"></textarea>
                    </div>
                  </div>
               </div>
               
              
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <input type="hidden" name="action" value="edit_group">
              <input type="hidden" name="id" id="row_id">
              <button type="submit" class="btn btn-primary">Send</button>
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

function send_notification(){
  // alert('test');
  $('#send_notification').modal('show');
}
   
   function del(id) {
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
                window.location.href='loaddata.php?action=del_one_user&id='+id;
              } else if (result.isDenied) {
                Swal.fire('Changes are not saved', '', 'info')
              }
            })
      }
 </script>s