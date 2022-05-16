<?php 
include("header.php");

 $query="SELECT * FROM `tbl_user` ";
$result=$con-> query($query);
// $row=$result-> fetch_object();
 ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Add User</h1>
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
    <form action="loaddata.php" method="post">
    <section class="content">
      <div class="container-fluid">
                    <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Personal Information</h3>
              </div>
                    
              <!-- /.card-header -->
              <!-- form start -->
              <div class="form-horizontal">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Member ID</label>
                    <div class="col-sm-10">
                      <input type="" class="form-control" id="inputEmail3" placeholder="member id" disabled value="<?php echo mysqli_num_rows( $result ) ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">First Name<span class="text-danger"> *</span></label>
                    <div class="col-sm-10">
                      <input type="" class="form-control" id="inputPassword3" placeholder="first name" name="first_name">
                    </div>
                  </div>
                     <!-- <div class="card-body"> -->
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Middle Name</label>
                    <div class="col-sm-10">
                      <input type="" class="form-control" id="inputEmail3" placeholder="middle name" name="middle_name">
                    </div>
                  </div>
                  <!-- </div> -->
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Last Name<span class="text-danger"> *</span></label>
                    <div class="col-sm-10">
                      <input type="" class="form-control" id="inputPassword3" placeholder="last name" name="last_name">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="control-label col-md-2" for="gender">Gender<span class="text-danger"> *</span></label>
                    <div class="col-sm-10">
                      <input type="hidden" name="gender" value="">
                      <span>
                      <label for="gender-male">
                        <input type="radio" name="gender" value="male" class="gender" id="gender-male" > Male</label>
                        <label for="gender-female">
                          <input type="radio" name="gender" value="female" class="gender" id="gender-female"> Female</label>
                        </span>
                        </div>
                      </div>
                 <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Date Of Birth <span class="text-danger"> *</span></label>
                    <div class="col-sm-10">
                      <input type="date" class="form-control" id="inputPassword3" placeholder="Date Of Birth" name="dob">
                    </div>
                  </div>

                    
<div class="form-group row">
  <label class="control-label col-md-2" for="assign_group">Group</label>
  <div class="col module_padding">
    <input type="hidden" name="assign_group" value="">
  <div class="form-group">
                  
                  <select class="form-control select2" style="width: 100%;">
                    <option ></option>
                    <option>Alaska</option>
                    <option>California</option>
                    <option>Delaware</option>
                    <option>Tennessee</option>
                    <option>Texas</option>
                    <option>Washington</option>
                  </select>
                </div>
    
            </div>
           
          </div>
              </div>
              </div>
            
</div>

<div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Contact Information</h3>
              </div>
              
              <div class="form-horizontal">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Address <span class="text-danger"> *</span></label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="Address" name="address">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">City<span class="text-danger"> *</span></label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputPassword3" placeholder="City" name="city">
                    </div>
                  </div>
                     <!-- <div class="card-body"> -->
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">State</label>
                    <div class="col-sm-10">
                      <input type="" class="form-control" id="inputEmail3" placeholder="State" name="state">
                    </div>
                  </div>
                  <!-- </div> -->
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Zip Code<span class="text-danger"> *</span></label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" id="inputPassword3" placeholder="Zip Code" name="zipcode">
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Mobile Number<span class="text-danger"> *</span></label>
                    <div class="col-sm-10">
                      <input type="Number" class="form-control" id="inputPassword3" placeholder="Mobile Number" name="mobile_no">
                    </div>
                  </div>
                <!--   <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Phone</label>
                    <div class="col-sm-10">
                      <input type="" class="form-control" id="inputPassword3" placeholder="Phone">
                    </div>
                  </div> -->
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Email<span class="text-danger"> *</span></label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputPassword3" placeholder="Email" name="email">
                    </div>
                  </div>
</div>
</div>

</div>
<div class="card card-info">
                  <div class="card-header">
                <h3 class="card-title">Physical Information</h3>
              </div>
              <div class="form-horizontal">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Weight </label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" id="inputEmail3" placeholder="KG" name="weight">
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

</div>
</div>
</div>


<div class="card card-info">
                  <div class="card-header">
                <h3 class="card-title">Logical Information</h3>
              </div>
              <div class="form-horizontal">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Username<span class="text-danger"> *</span> </label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="username"name="username">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Password <span class="text-danger"> *</span></label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" id="inputPassword3" placeholder="password" name="password">
                    </div>
                  </div>
                     <!-- <div class="card-body"> -->
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Display Image</label>
                    <div class="col-sm-10">
                      <input type="fileupload-process" class="form-control" id="inputEmail3" placeholder="fileupload" name="image">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                      <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                       <input type="hidden" name="action" value="add_user">
            <input type="submit"  class="btn btn-success"  value="save">

                    </div>
                  </div>
                </div>
              </div>
            </div>
      </div>
      <!-- /.container-fluid -->
    </section>
  </form>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

 <?php 
include("footer.php");
 ?>