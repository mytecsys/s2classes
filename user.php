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
              <li class="breadcrumb-item active">Users v1</li>
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
  
  <td><a href="" class="btn btn-info"><i class="fa fa-eye"></i></a>
           
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


                 <!--  <tr>
                    <td>1</td>
                    <td>Internet
                      Explorer 4.0
                    </td>
                    <td>Win 95+</td>
                    <td> 4</td>
                    <td>X</td>
                    <td></td>
                    <td><a href="/dasinfoau/php/gym/GymMember/viewMember/3" title="View" class="btn btn-flat btn-info"><i class="fa fa-eye"></i></a><a href="#" title="Edit" class="btn btn-flat btn-primary" disabled="disabled"><i class="fa fa-edit"></i></a><a href="#" title="Delete" class="btn btn-flat btn-danger" disabled="disabled"><i class="fa fa-trash"></i></a></td>
                    <td><a class="btn btn-success btn-flat" onclick="return confirm('Are you sure,You want to activate this account?');" href="/dasinfoau/php/gym/GymMember/activateMember/4" style="background: rgb(175, 29, 29); border-color: rgb(175, 29, 29);">Activate</a></<a class="btn btn-success btn-flat" onclick="return confirm('Are you sure,You want to activate this account?');" href="/dasinfoau/php/gym/GymMember/activateMember/4" style="background: rgb(175, 29, 29); border-color: rgb(175, 29, 29);"</a>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Internet
                      Explorer 5.0
                    </td>
                    <td>Win 95+</td>
                    <td>5</td>
                    <td>C</td>
                    <td></td>
                    <td><a href="/dasinfoau/php/gym/GymMember/viewMember/3" title="View" class="btn btn-flat btn-info"><i class="fa fa-eye"></i></a><a href="#" title="Edit" class="btn btn-flat btn-primary" disabled="disabled"><i class="fa fa-edit"></i></a><a href="#" title="Delete" class="btn btn-flat btn-danger" disabled="disabled"><i class="fa fa-trash"></i></a></td>
                    <td><a class="btn btn-success btn-flat" onclick="return confirm('Are you sure,You want to activate this account?');" href="/dasinfoau/php/gym/GymMember/activateMember/4" style="background: rgb(175, 29, 29); border-color: rgb(175, 29, 29);">Activate</a></<a class="btn btn-success btn-flat" onclick="return confirm('Are you sure,You want to activate this account?');" href="/dasinfoau/php/gym/GymMember/activateMember/4" style="background: rgb(175, 29, 29); border-color: rgb(175, 29, 29);"</a>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Internet
                      Explorer 5.5
                    </td>
                    <td>Win 95+</td>
                    <td>5.5</td>
                    <td>A</td>
                    <td></td>
                    <td><a href="/dasinfoau/php/gym/GymMember/viewMember/3" title="View" class="btn btn-flat btn-info"><i class="fa fa-eye"></i></a><a href="#" title="Edit" class="btn btn-flat btn-primary" disabled="disabled"><i class="fa fa-edit"></i></a><a href="#" title="Delete" class="btn btn-flat btn-danger" disabled="disabled"><i class="fa fa-trash"></i></a></td>
                    <td><a class="btn btn-success btn-flat" onclick="return confirm('Are you sure,You want to activate this account?');" href="/dasinfoau/php/gym/GymMember/activateMember/4" style="background: rgb(175, 29, 29); border-color: rgb(175, 29, 29);">Activate</a></<a class="btn btn-success btn-flat" onclick="return confirm('Are you sure,You want to activate this account?');" href="/dasinfoau/php/gym/GymMember/activateMember/4" style="background: rgb(175, 29, 29); border-color: rgb(175, 29, 29);"</a>
                  </tr>

                  </tfoot> -->
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

     
 <?php 
include("footer.php");
 ?>
 <script type="text/javascript">
   
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