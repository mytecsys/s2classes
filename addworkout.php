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
            <h1 class="m-0">Workout</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Workout v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
                    <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Workout </h3>
              </div>

              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label"> Select Member</label>
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
                     <!-- <div class="card-body"> -->
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Discription</label>
                    <div class="col-sm-10">
                      <textarea style="height:50px;width: 100%;"></textarea>
                    </div>
                  </div>
                  <!-- </div> -->
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Start Date</label>
                    <div class="col-sm-10">
                      <input type="date" class="form-control" id="inputPassword3" placeholder="last name">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">End Date</label>
                    <div class="col-sm-10">
                      <input type="date" class="form-control" id="inputPassword3" placeholder="last name">
                    </div>
                  </div>
                  
                 <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label"> Select day</label>
                    <div class="col-sm-10">
                    <div class="row">
                        <div class="col-4">
                             <input  type="checkbox" name="">
                             <label for="inputPassword3" class="col-form-label">Sunday </label>
                             <br>
                             <input  type="checkbox" name="">
                             <label for="inputPassword3" class="col-form-label">Monday </label>
                             <br>
                             <input  type="checkbox" name="">
                             <label for="inputPassword3" class="col-form-label">Tuesday </label>
                             <br>
                             <input  type="checkbox" name="">
                             <label for="inputPassword3" class=" col-form-label">Wednesday </label>
                             <br>
                             <input  type="checkbox" name="">
                             <label for="inputPassword3" class=" col-form-label">Thuesday </label>
                             <br>
                             <input  type="checkbox" name="">
                             <label for="inputPassword3" class="col-form-label">Friday </label>
                             <br>
                             <input  type="checkbox" name="">
                             <label for="inputPassword3" class="col-form-label">Saturday </label>
                             <br>

                             <div style="margin-top:25px; " class="col-md-2"><a href="/dasinfoau/php/gym/GymGroup/addGroup/" class="btn btn-flat btn-success" onclick="add_workout();"> Add Exercise  </a>
            </div>
                        </div>
                        

                          
                        <div class="col-8">


                       <?php 
                        $query="SELECT * FROM tbl_exercise_type ";
                           $result= $con -> query($query);
                           $i=1;
                            while($row = $result -> fetch_object()){
                        ?>
                       
                           <div class="form-group row" style="    background-color: #a9d2e9!important;
    border-radius: 11px;">
                            <div class="col-4">
                                <input  type="checkbox" name="" id="inex<?php echo $row ->id; ?>" onchange="ex_show('ex<?php echo $row ->id; ?>');">
                         <label for="inputPassword3" class="col-form-label"><?php echo $row ->title; ?> </label>
                             
                            </div>
                            <div class="col-8"> 
                                <div class="form-group row " id="ex<?php echo $row ->id; ?>" style="display: none;">
                                     <label for="" class="col-2 mt-4 col-form-label">Set </label>
                             <input  type="number" class="col-2 mt-4" name="">
                             <span class="col-2 mt-4"></span>
                              <label for="" class="col-2 mt-4 col-form-label">Rep </label>
                             <input  type="number" class="col-2 mt-4" name="">
                             <span class="col-2 mt-4"></span>
                                 <label for="" class="col-2 mt-3 col-form-label">KG </label>
                             <input  type="number" class="col-2 mt-3" name="">
                             <span class="col-2 mt-3"></span>
                              <label for="" class="col-2 mt-3 col-form-label">Rest </label>
                             <input  type="number" class="col-2 mt-3" name="">
                             <span class="col-2 mt-3"></span>
                                </div>
                         </div>
            </div>
                    
                    <?php  
                      $i++;
                        }
                      // echo $row -> id;
                     // exit();
                     ?>






 
                    </div> 
                       
                     
                      
                    </div>
                  </div>
<table width="100%" style="background-color: white;border:2px solid Gray;">
    <tr>

        <td style="height:80px;"> 
            Friday
        </td>
        <td style="height:80px;">
        
Crunch : Sets 2, Reps 6, KG 55, Rest Time 2
        </td>
        <td>  

              
</td>
        <td>

            
               
            
        
    </td>
    </tr>

</table>
                    


</section>
</div>

<script type="text/javascript">
    function ex_show(id){
        console.log($('#in'+id).is(":checked"))

 
  if ($('#in'+id).is(":not(:checked)"))
  {
   $('#'+id).hide()
  }else{
$('#'+id).show()
  }

    }
</script>

<script type="text/javascript">
    function ex_show(id){
        console.log($('#in'+id).is(":checked"))

 
  if ($('#in'+id).is(":not(:checked)"))
  {
   $('#'+id).hide()
  }else{
$('#'+id).show()
  }

    }
</script>

<script type="text/javascript">
    function ex_show(id){
        console.log($('#in'+id).is(":checked"))

 
  if ($('#in'+id).is(":not(:checked)"))
  {
   $('#'+id).hide()
  }else{
$('#'+id).show()
  }

    }
</script>


 <?php 
include("footer.php");
 ?>

 <script type="text/javascript">
     function add_workout(){
        alert('test');
     }
 </script>