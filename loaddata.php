<?php 
include 'function.php';
$now=date('Y-m-d');

if($_REQUEST['action']=="view_member_under_batch"){
  ?>
<table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                     <th>Sr</th>
                    <th>Member name</th>
                    <th>Attendance</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php 
                 
     $query="SELECT * from `tbl_user` where  `is_delete`!=1  AND `group`=".$_REQUEST['id']; 
                      $result= $con -> query($query);
                      $i=1;

      while($row = $result -> fetch_object()){

            $query1="SELECT * FROM `tbl_attendance` where `user_id` = '".$row ->id."' AND `date`='".date('Y-m-d')."'";   
           $result1= $con -> query($query1);
           $row1 = $result1 -> fetch_object();
                        ?>

                  <tr>
                  <td><?php echo $i; ?></td>
                      <td> <?php echo $row ->first_name; ?></td>
                      
                      <td> <?php if(mysqli_num_rows( $result1 )==0){ echo "<a class='btn btn-danger'> Absent  </a>";}else{ echo "<a class='btn btn-success'> Present </a>";} ?> </td>
                      </tr>
                      
                      <?php  
                      $i++;
                        }
                      // echo $row -> id;
                     // exit();
                     ?>
                   </tbody>
                  </table>
  <?php
 }


// ===================add user============================

if($_REQUEST['action']=="add_user"){

 $query="INSERT INTO `tbl_user`(`id`, `first_name`, `middle_name`, `last_name`, `mobile_no`, `email`, `profile`, `group`, `dob`, `gender`, `address`, `city`, `state`, `zipcode`,`username`,`password`, `image`) VALUES (null,'".$_REQUEST['first_name']."','".$_REQUEST['middle_name']."','".$_REQUEST['last_name']."','".$_REQUEST['mobile_no']."','".$_REQUEST['email']."','".$_REQUEST['profile']."','".$_REQUEST['group']."','".$_REQUEST['dob']."','".$_REQUEST['gender']."','".$_REQUEST['address']."','".$_REQUEST['city']."','".$_REQUEST['state']."','".$_REQUEST['zipcode']."','".$_REQUEST['username']."','".$_REQUEST['password']."','".$_REQUEST['image']."')";

$result=mysqli_query($con,$query);
 $last_id = $con->insert_id;

 $query1="INSERT INTO `tbl_bodyscore`(`id`, `weight`, `before_meal`, `post_meal`, `height`, `chest`, `waist`, `thigh`, `arms`, `fat`, `date`, `user_id`,`s_track`) VALUES (null,'".$_REQUEST['weight']."','".$_REQUEST['before_meal']."','".$_REQUEST['post_meal']."','".$_REQUEST['height']."','".$_REQUEST['chest']."','".$_REQUEST['waist']."','".$_REQUEST['thigh']."','".$_REQUEST['arm']."','".$_REQUEST['fat']."','".date('y-m-d')."','".$last_id."','".$_REQUEST['s_track']."')";

$result1=mysqli_query($con,$query1);
 header('location:user.php');
}

// ====================edit user=======================

if($_REQUEST['action']=="update_user"){

   $query="UPDATE `tbl_user` SET `first_name`='".$_REQUEST['first_name']."',`middle_name`='".$_REQUEST['middle_name']."',`last_name`='".$_REQUEST['last_name']."',`mobile_no`='".$_REQUEST['mobile_no']."',`email`='".$_REQUEST['email']."',`profile`='".$_REQUEST['profile']."',`group`='".$_REQUEST['group']."',`dob`='".$_REQUEST['dob']."',`gender`='".$_REQUEST['gender']."',`address`='".$_REQUEST['address']."',`city`='".$_REQUEST['city']."',`state`='".$_REQUEST['state']."',`zipcode`='".$_REQUEST['zipcode']."',`username`='".$_REQUEST['username']."',`password`='".$_REQUEST['password']."',`image`='".$_REQUEST['image']."' WHERE id=".$_REQUEST['id'];
  $result=mysqli_query($con,$query);
  // header('location:user.php');

  $query1="UPDATE `tbl_bodyscore` SET `weight`='".$_REQUEST['weight']."',`height`='".$_REQUEST['height']."',`before_meal`='".$_REQUEST['before_meal']."',`post_meal`='".$_REQUEST['post_meal']."',`chest`='".$_REQUEST['chest']."',`waist`='".$_REQUEST['waist']."',`thigh`='".$_REQUEST['thigh']."',`arms`='".$_REQUEST['arms']."',`fat`='".$_REQUEST['fat']."',`s_track`='".$_REQUEST['s_track']."',`date`= '".date('y-m-d')."' WHERE user_id=".$_REQUEST['id'];

   $result1=mysqli_query($con,$query1);
  header('location:user.php');
}

// =================delete user============================

if($_REQUEST['action']=="del_one_user"){

  $query="DELETE FROM `tbl_user` WHERE id=".$_REQUEST['id'];
  $result=mysqli_query($con,$query);
  header('location:user.php');
}

// ==========deactive user=======================

if($_REQUEST['action']=="deactive_user"){

   $query= "UPDATE `tbl_user` SET `is_delete`= 1 WHERE id= ".$_REQUEST['id'];
   $result=mysqli_query($con,$query);
   header('location:user.php');
}

// ===========active user=========================

if($_REQUEST['action']=="active_user"){

   $query= "UPDATE `tbl_user` SET `is_delete`=0 WHERE id= ".$_REQUEST['id'];
   $result=mysqli_query($con,$query);
     header('location:user.php');
}

// ======================sign up==========================

if($_REQUEST['action']=="sign_up"){

   $query="SELECT * FROM `tbl_user` WHERE `username` = '".$_REQUEST['email']."' AND `password`='".$_REQUEST['password']."' AND `is_delete`=0"; 
                      $result= $con -> query($query);
                      $row = $result -> fetch_object();
                    if(mysqli_num_rows( $result )==0){
                        $queryqw="SELECT * FROM `tbl_admin` WHERE `email` = '".$_REQUEST['email']."' AND `password`='".$_REQUEST['password']."'"; 
                          $resultqw= $con -> query($queryqw);
                          $rowqw = $resultqw -> fetch_object();
                        if(mysqli_num_rows( $resultqw )==0){
                         header('location:login.php?var=fail');
                        }
                        else{
                        $_SESSION["id"] = $rowqw->id;
                        $_SESSION["username"] = $rowqw->username;
                        $_SESSION["role"] = 'admin';
                          header('location:index.php');
                        }
                    }
                    else{
                    $_SESSION["id"] = $row->id;
                    $_SESSION["username"] = $row->first_name." ".$row->last_name;
                    $_SESSION["role"] = 'user';
                      header('location:index.php');
                    }
}
if ($_REQUEST['action']=="logout") {

  unset($_SESSION['id']);
  unset($_SESSION['username']);
  header('location:login.php');
}

// ====================add exercise=====================

if($_REQUEST['action']=="add_exercise"){

 $query="INSERT INTO `tbl_exercise_type`(`id`, `title`) VALUES (null,'".$_REQUEST['title']."')";
$result=mysqli_query($con,$query);
header('location:exercise.php');
}

// ==================edit exercise=========================

if($_REQUEST['action']=="edit_exercise"){

 $query= "UPDATE `tbl_exercise_type` SET `title`='".$_REQUEST['title']."' WHERE id=".$_REQUEST['id'];
 $result=mysqli_query($con,$query);
 header('location:exercise.php');
}

// =======================delete exercise=========================

if($_REQUEST['action']=="del_exercise"){

  $query="DELETE FROM `tbl_exercise_type` WHERE id=".$_REQUEST['id'];
  $result=mysqli_query($con,$query);
  header('location:exercise.php');
}

// ====================add group=========================

if($_REQUEST['action']=="add_group"){

 $query="INSERT INTO `tbl_groups`(`id`,`title`,`link`,`fees`) VALUES (null,'".$_REQUEST['title']."','".$_REQUEST['link']."','".$_REQUEST['fees']."')";
$result=mysqli_query($con,$query);
header('location:groups.php');
}

// ===================edit group==============================

if($_REQUEST['action']=="edit_group"){

 $query= "UPDATE `tbl_groups` SET `title`='".$_REQUEST['title']."',`link`='".$_REQUEST['link']."',`fees`='".$_REQUEST['fees']."' WHERE id=".$_REQUEST['id'];
 $result=mysqli_query($con,$query);
 header('location:groups.php');
}

// =======================delete group=======================

if($_REQUEST['action']=="del_group"){

  $query="DELETE FROM `tbl_groups` WHERE id=".$_REQUEST['id'];
  $result=mysqli_query($con,$query);
  header('location:groups.php');
}


// =======================add nutrition=========================

if($_REQUEST['action']=="add_nutri"){

  $fileTmpPath = $_FILES['nutri_pdf']['tmp_name'];
  $fileName = $_FILES['nutri_pdf']['name'];
  $fileSize = $_FILES['nutri_pdf']['size'];
  $fileType = $_FILES['nutri_pdf']['type'];
  $fileNameCmps = explode(".", $fileName);
  $fileExtension = strtolower(end($fileNameCmps));
  $newFileName = md5(time() . $fileName) . '.' . $fileExtension;
  $uploadFileDir = 'gym/nutrition_pdf/';
  $dest_path = $uploadFileDir . $newFileName;

  $query="INSERT INTO `tbl_nutrition`(`id`,`name`,`pdf`,`group`,`member`,`created_at`) VALUES
   (NULL,'".$_REQUEST['name']."','".$newFileName."','".$_REQUEST['group']."','".$_REQUEST['member']."','".$_REQUEST['q_date']."')";
    $result = mysqli_query($con, $query);
      if($result && move_uploaded_file ($fileTmpPath, $dest_path)){  
       header('location:nutrition.php');
      }else{
        echo "something went wrong";
        echo mysqli_error($con);
      }
}

// =================edit nutrition=================

if ($_REQUEST['action']=="view_one_nutri"){

$id = $_REQUEST['id'];
   $query='SELECT * from `tbl_nutrition` where `id`='.$id.' order by `id` DESC';
  $result=$con -> query($query);
  $row =$result->fetch_assoc();
             $array[]=   $row['name'];
             $array[]=   $row['pdf'];
             $array[]=   $row['group'];
             $array[]=   $row['member'];
             $array[]=   $row['created_at'];  
           echo  json_encode($array);
}
           if ($_REQUEST['action']=="update_nutri"){
  if (isset($_FILES['nutri_pdf']) && $_FILES['nutri_pdf']['error'] === UPLOAD_ERR_OK) {
    unlink($_REQUEST['pdf_path']);
  $fileTmpPath = $_FILES['nutri_pdf']['tmp_name'];
  $fileName = $_FILES['nutri_pdf']['name'];
  $fileSize = $_FILES['nutri_pdf']['size'];
  $fileType = $_FILES['nutri_pdf']['type'];
  $fileNameCmps = explode(".", $fileName);
  $fileExtension = strtolower(end($fileNameCmps));
  $newFileName = md5(time() . $fileName) . '.' . $fileExtension;
  $uploadFileDir = 'gym/nutrition_pdf/';
  $dest_path =  $newFileName;
  $dest_path3 = $uploadFileDir . $newFileName;
  move_uploaded_file($fileTmpPath, $dest_path3);
  }else{
    $dest_path=$_REQUEST['pdf_path'];
  }
         $query="UPDATE `tbl_nutrition` SET `name`='".$_REQUEST['name']."',`pdf`='".$dest_path."',`group`='".$_REQUEST['group']."',`member`='".$_REQUEST['member']."',`created_at`='".$_REQUEST['q_date']."' WHERE `id`='".$_REQUEST['id']."'";
             $result = mysqli_query($con, $query);
                          if($result){
                echo "success";
                 header('Location:nutrition.php');
              }else{
                echo "failed";
              }                  
}


// =======================delete=================================

if($_REQUEST['action']=="del_nutri"){

  $query="DELETE FROM `tbl_nutrition` WHERE id=".$_REQUEST['id'];
  $result=mysqli_query($con,$query);
  header('location:nutrition.php');
}

// =============================== attendance===========================

if($_REQUEST['action']=="attendance"){
 $query="SELECT * FROM `tbl_attendance` where `date`='".date('Y-m-d')."' AND `user_id`='".$_SESSION['id']."' ";
 $result=mysqli_query($con,$query);
  if(mysqli_num_rows( $result )==0) {
  // code...

 $query="INSERT INTO `tbl_attendance` (`id`, `date`, `time`, `user_id`) VALUES (null, '".date('Y-m-d')."', '".date('H:I:S')."','".$_SESSION['id']."')";

 $result=mysqli_query($con,$query);
}

 $query="SELECT * from `tbl_user` WHERE `id`='".$_SESSION['id']."'";
 $result=mysqli_query($con,$query);
 $row =$result->fetch_assoc();
 // $row['group'];
 header('location:userworkout.php?id='.$row['group']);


}






// =============================== workout===========================

 if($_REQUEST['action']=="save_workout"){
  // print_r($_REQUEST['arr1']);
   // print_r($_REQUEST['arr3']);
   //  print_r($_REQUEST['sets']);
   //   print_r($_REQUEST['reps']);
   //    print_r($_REQUEST['kg']);
   //     print_r($_REQUEST['rest_time']);

       foreach ($_REQUEST['arr3'] as $key => $value) {
         
         // echo $value;
         // echo $_REQUEST['sets'][$key];
         //   echo $_REQUEST['reps'][$key];
         //     echo $_REQUEST['kg'][$key];
         //       echo $_REQUEST['rest_time'][$key];

         // echo $key; 
               $query="INSERT INTO `tbl_exercise`(`id`, `activity`, `sets`, `reps`, `rest_time`, `kg`) VALUES (null,'".$value."','".$_REQUEST['sets'][$key]."','".$_REQUEST['reps'][$key]."','".$_REQUEST['kg'][$key]."','".$_REQUEST['rest_time'][$key]."')";
            $result=mysqli_query($con,$query);
           $last_id[] = $con->insert_id;
       }
  
  print_r($last_id);
 }

 ?>