<?php 
include 'function.php';
$now=date('Y-m-d');

if($_REQUEST['action']=="add_user"){                    


 $query="INSERT INTO `tbl_user`(`id`, `first_name`, `middle_name`, `last_name`, `mobile_no`, `email`, `profile`, `group`, `dob`, `gender`, `address`, `city`, `state`, `zipcode`,`username`,`password`, `image`) VALUES (null,'".$_REQUEST['first_name']."','".$_REQUEST['middle_name']."','".$_REQUEST['last_name']."','".$_REQUEST['mobile_no']."','".$_REQUEST['email']."','".$_REQUEST['profile']."','".$_REQUEST['group']."','".$_REQUEST['dob']."','".$_REQUEST['gender']."','".$_REQUEST['address']."','".$_REQUEST['city']."','".$_REQUEST['state']."','".$_REQUEST['zipcode']."','".$_REQUEST['username']."','".$_REQUEST['password']."','".$_REQUEST['image']."')";
$result=mysqli_query($con,$query);
echo $last_id = $con->insert_id;

 $query1="INSERT INTO `tbl_bodyscore`(`id`, `weight`, `height`, `chest`, `waist`, `thigh`, `arms`, `fat`, `date`, `user_id`) VALUES (null,'".$_REQUEST['weight']."','".$_REQUEST['height']."','".$_REQUEST['chest']."','".$_REQUEST['waist']."','".$_REQUEST['thigh']."','".$_REQUEST['arm']."','".$_REQUEST['fat']."','".date('y-m-d')."','".$last_id."')";

$result1=mysqli_query($con,$query1);
 header('location:user.php');
}

if($_REQUEST['action']=="update_user"){
   $query="UPDATE `tbl_user` SET `first_name`='".$_REQUEST['first_name']."',`middle_name`='".$_REQUEST['middle_name']."',`last_name`='".$_REQUEST['last_name']."',`mobile_no`='".$_REQUEST['mobile_no']."',`email`='".$_REQUEST['email']."',`profile`='".$_REQUEST['profile']."',`group`='".$_REQUEST['group']."',`dob`='".$_REQUEST['dob']."',`gender`='".$_REQUEST['gender']."',`address`='".$_REQUEST['address']."',`city`='".$_REQUEST['city']."',`state`='".$_REQUEST['state']."',`zipcode`='".$_REQUEST['zipcode']."',`username`='".$_REQUEST['username']."',`password`='".$_REQUEST['password']."',`image`='".$_REQUEST['image']."' WHERE id=".$_REQUEST['id'];
  $result=mysqli_query($con,$query);
  // header('location:user.php');


  $query1="UPDATE `tbl_bodyscore` SET `weight`='".$_REQUEST['weight']."',`height`='".$_REQUEST['height']."',`chest`='".$_REQUEST['chest']."',`waist`='".$_REQUEST['waist']."',`thigh`='".$_REQUEST['thigh']."',`arms`='".$_REQUEST['arms']."',`fat`='".$_REQUEST['fat']."',`date`= '".date('y-m-d')."' WHERE user_id=".$_REQUEST['id'];
   $result1=mysqli_query($con,$query1);
  header('location:user.php');
}


 
if($_REQUEST['action']=="del_one_user"){
  $query="DELETE FROM `tbl_user` WHERE id=".$_REQUEST['id'];
  $result=mysqli_query($con,$query);
  header('location:user.php');
}


if($_REQUEST['action']=="deactive_user"){
   $query= "UPDATE `tbl_user` SET `is_delete`= 1 WHERE id= ".$_REQUEST['id'];
   $result=mysqli_query($con,$query);
   header('location:user.php');
}

if($_REQUEST['action']=="active_user"){

   $query= "UPDATE `tbl_user` SET `is_delete`=0 WHERE id= ".$_REQUEST['id'];
   $result=mysqli_query($con,$query);
     header('location:user.php');
}

if($_REQUEST['action']=="sign_up"){
//  echo 'test';
// print_r($_REQUEST);
   $query="SELECT * FROM `tbl_user` WHERE `username` = '".$_REQUEST['email']."' AND `password`='".$_REQUEST['password']."' AND `is_delete`=0"; 
                      $result= $con -> query($query);
                      $row = $result -> fetch_object();
                    // echo $row->id;
                
                    if(mysqli_num_rows( $result )==0){
                        
                        $queryqw="SELECT * FROM `tbl_admin` WHERE `email` = '".$_REQUEST['email']."' AND `password`='".$_REQUEST['password']."'"; 
                          $resultqw= $con -> query($queryqw);
                          $rowqw = $resultqw -> fetch_object();
                       
                    
                        if(mysqli_num_rows( $resultqw )==0){
                         header('location:login.php?var=fail');
                        }
                        else{
                        //   echo "success";
                                            // Set session variables
                        $_SESSION["id"] = $rowqw->id;
                        $_SESSION["username"] = $rowqw->username;
                        $_SESSION["role"] = 'admin';
                        // echo "Session variables are set.";
                          header('location:index.php');
    
                        }
                        
                        
                 
                    }
                    else{
                    //   echo "success";
                                        // Set session variables
                    $_SESSION["id"] = $row->id;
                    $_SESSION["username"] = $row->first_name." ".$row->last_name;
                    $_SESSION["role"] = 'user';
                    // echo "Session variables are set.";
                      header('location:index.php');

                    }
                    
                
}
if ($_REQUEST['action']=="logout") {
  // echo 'testing';
  unset($_SESSION['id']);
  unset($_SESSION['username']);
  header('location:login.php');

}


if($_REQUEST['action']=="add_exercise"){    

   
 $query="INSERT INTO `tbl_exercise_type`(`id`, `title`) VALUES (null,'".$_REQUEST['title']."')";
$result=mysqli_query($con,$query);
header('location:exercise.php');


}

if($_REQUEST['action']=="edit_exercise"){

 $query= "UPDATE `tbl_exercise_type` SET `title`='".$_REQUEST['title']."' WHERE id=".$_REQUEST['id'];
 $result=mysqli_query($con,$query);
 header('location:exercise.php');

}
if($_REQUEST['action']=="del_exercise"){
  $query="DELETE FROM `tbl_exercise_type` WHERE id=".$_REQUEST['id'];
  $result=mysqli_query($con,$query);
  header('location:exercise.php');
}

if($_REQUEST['action']=="add_group"){    

   
 $query="INSERT INTO `tbl_groups`(`id`, `title`) VALUES (null,'".$_REQUEST['title']."')";
$result=mysqli_query($con,$query);
header('location:groups.php');


}

if($_REQUEST['action']=="edit_group"){

 $query= "UPDATE `tbl_groups` SET `title`='".$_REQUEST['title']."' WHERE id=".$_REQUEST['id'];
 $result=mysqli_query($con,$query);
 header('location:groups.php');

}

if($_REQUEST['action']=="del_group"){
  $query="DELETE FROM `tbl_groups` WHERE id=".$_REQUEST['id'];
  $result=mysqli_query($con,$query);
  header('location:groups.php');
}


// =====================add nutrition======================
if($_REQUEST['action']=="add_nutrition"){
  $query="INSERT INTO `tbl_nutrition`(`id`,`name`,`pdf`,`groups`,`created_at`) VALUES
   (NULL,'".$_REQUEST['name']."','".$_REQUEST['pdf']."','".$_REQUEST['groups']."','".$_REQUEST['q_date']."')";
    $result = mysqli_query($con, $query);
      if($result ){  
       header('location:nutrition.php');
      }else{
        echo "something went wrong";
        echo mysqli_error($con);
      }
}

// =================edit nutrition=================
if ($_REQUEST['action']=="view_one_nutrition"){
  // $table = $_REQUEST['table'];
$id = $_REQUEST['id'];
// echo $id; 


   $query='SELECT * from `tbl_nutrition` where `id`='.$id;
  $result=$con -> query($query);
  $row =$result->fetch_assoc();
             
             $array[]=   $row['name'];
             $array[]=   $row['pdf'];
             $array[]=   $row['alloted'];
             $array[]=   $row['created_at'];
                 
           echo  json_encode($array);
}
           if ($_REQUEST['action']=="update_nutrition"){
                   

         $query="UPDATE `tbl_nutrition` SET `name`='".$_REQUEST['name']."',`pdf`='".$_REQUEST['pdf']."',`status`='".$_REQUEST['groups']."',`created_at`='".$_REQUEST['q_date']."' WHERE `id`='".$_REQUEST['id']."'";

             $result = mysqli_query($con, $query);

                          if($result){
                echo "success";
                 header('Location:nutrition.php');
              }else{
                echo "failed";
              }
   }   
// =============delete nutrition========================

   if($_REQUEST['action']=="del_nutrition"){
  $query="DELETE FROM `tbl_nutrition` WHERE id=".$_REQUEST['id'];
  $result=mysqli_query($con,$query);
  header('location:nutrition.php');
}
 ?>