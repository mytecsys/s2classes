<?php
session_start();
ob_start();
error_reporting(0);
date_default_timezone_set("Asia/Kolkata");

$host = "localhost"; /* Host name */
if($_SERVER['SERVER_NAME']=="localhost"){
	// ===================local credentials===================
$user = "root";
$password = "root";
$dbname = "gym";
	}else{
		// =================server credentials==============
$user = "mytecsys_shreyas"; 
$password = "607[Uz=pyr7x";
$dbname = "mytecsys_s2";
	}

$con = mysqli_connect($host, $user, $password, $dbname);
if (!$con) {
	die("connection failed:--- " . mysqli_connect_error());

	# code...
}
 ?>