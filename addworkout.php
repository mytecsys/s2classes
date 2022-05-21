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
                             <input  type="checkbox" value="sunday" class="ckbox reset_form_ex">
                             <label for="inputPassword3" class="col-form-label " onclick="">Sunday </label>
                             <br>
                             <input  type="checkbox" value="monday" = class="ckbox reset_form_ex">
                             <label for="inputPassword3" class="col-form-label">Monday </label>
                             <br>
                             <input  type="checkbox" value="Tuesday" = class="ckbox reset_form_ex" >
                             <label for="inputPassword3" class="col-form-label">Tuesday </label>
                             <br>
                             <input  type="checkbox" value="Wednesday" = class="ckbox reset_form_ex">
                             <label for="inputPassword3" class=" col-form-label">Wednesday </label>
                             <br>
                             <input  type="checkbox" value="Thuesday" = class="ckbox reset_form_ex">
                             <label for="inputPassword3" class=" col-form-label">Thuesday </label>
                             <br>
                             <input  type="checkbox" value="Friday" = class="ckbox reset_form_ex">
                             <label for="inputPassword3" class="col-form-label">Friday </label>
                             <br>
                             <input  type="checkbox" value="Saturday" = class="ckbox reset_form_ex">
                             <label for="inputPassword3" class="col-form-label">Saturday </label>
                             <br>

                             <div style="margin-top:25px; " class="col-md-2"><a href="#" class="btn btn-flat btn-success" onclick="add_workout();"> Add Exercise  </a>
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
                                <input class="exercise_ckbox reset_form_ex" type="checkbox" name="title" value="<?php echo $row ->title; ?>" id="inex<?php echo $row ->id; ?>" onchange="ex_show('ex<?php echo $row ->id; ?>');">
                         <label for="inputPassword3"   class="col-form-label "><?php echo $row ->title; ?> </label>
                             
                            </div>
                            <div class="col-8"> 
                                <div class="form-group row reset_form_ex" id="ex<?php echo $row ->id; ?>" style="display: none;">
                                     <label for="" class="col-2 mt-4 col-form-label">Set </label>
                             <input  type="number" class="reset_form_ex col-2 mt-4 ck" id="inex<?php echo $row ->id; ?>sets" >
                             <span class="col-2 mt-4 " ></span>
                              <label for="" class="col-2 mt-4 col-form-label">Reps </label>
                             <input  type="number" class="reset_form_ex col-2 mt-4 ck" id="inex<?php echo $row ->id; ?>reps">
                             <span class="col-2 mt-4 "></span>
                                 <label for="" class="col-2 mt-3 col-form-label">KG </label>
                             <input  type="number" class="reset_form_ex col-2 mt-3 ck" id="inex<?php echo $row ->id; ?>kg">
                             <span class="col-2 mt-3 "></span>
                              <label for="" class="col-2 mt-3 col-form-label">Rest </label>
                             <input  type="number" class="reset_form_ex col-2 mt-3 ck" id="inex<?php echo $row ->id; ?>rest_time">
                             <span class="col-2 mt-3 "></span>
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
<table id="ex_workout_app" width="100%" style="background-color: white;border:2px solid Gray;">
   



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
  // alert('testing')
  var i=0; 
     var arr1 = [];
     $('.ckbox:checked').each(function (){
      arr1[i++] = $(this).val();
     });

     var i=0; 
     var arr2 = [];
     var arr3 = [];
     var sets = [];
     var reps = [];
     var kg = [];
     var rest_time = [];
     $('.exercise_ckbox:checked').each(function (){
      arr2[i] = $(this).val();
       arr3[i] = $(this).attr("id");
       sets[i] = $("#"+$(this).attr("id")+"sets").val();
       reps[i] = $("#"+$(this).attr("id")+"reps").val();
       kg[i] = $("#"+$(this).attr("id")+"kg").val();
       rest_time[i] = $("#"+$(this).attr("id")+"rest_time").val();
       i++;
     });
    
    // console.log( $("#inex2sets").val())

     // console.log(arr1);
     // console.log(arr2);
     // console.log(arr3);
     // console.log(sets);
     // console.log(reps);
     // console.log(kg);
     // console.log(rest_time);
     var text1 = ""
     for (let i = 0; i <arr1.length; i++) {
  text1 += arr1[i]+ ", ";
}
     var text = ""
     for (let i = 0; i <arr2.length; i++) {
  text += arr2[i]+" : sets "+sets[i]+ ", reps "+reps[i] + ", kg "+kg[i]+ ", rest_time "+rest_time[i] + "<br>";
}
console.log(text1+" "+text);

$("#ex_workout_app").append(' <tr ><td style="height:80px;">'+text1+'</td><td style="height:80px;">'+text+'</td> </tr>');


$(".reset_form_ex").val("")
$(".reset_form_ex").prop('checked', false);
       
// console.log();
     // $.ajax({
     //  data: {action:"add_workout",id:arr},
     //  type: "post",
     //  url: "loaddata.php",
     //  crossDomain: true,
     //  success: function(dataResult){
     //     location.reload();
     //      console.log(dataResult)
     //    }

     // });
 }



 </script>