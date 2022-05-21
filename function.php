<?php
include 'config.php';
 function convert_dmy($date){
	$date=strtotime($date);
	return date('D-M-Y',$date)."<br>";
}

function fetch_extra_data($table,$colum,$id_n,$id){
  global $con;
      $sql = "SELECT * FROM $table WHERE $id_n=".$id; 
      $result=$con -> query($sql);
      $row =$result->fetch_object();
 
 if(strlen($row->$colum) !=0){
      return strtoupper($row->$colum); 
 }else{
     return 0;
 }
}
?>