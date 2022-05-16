<?php
include 'config.php';
 function convert_dmy($date){
	$date=strtotime($date);
	return date('D-M-Y',$date)."<br>";
}

?>