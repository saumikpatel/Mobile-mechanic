<?php
header('Access-Control-Allow-Origin: *');  
include_once 'dbconnect.php';

$fname=@trim(stripslashes($_REQUEST['fname']));
$lname=@trim(stripslashes($_REQUEST['lname']));
$email=@trim(stripslashes($_REQUEST['email']));
$contact=@trim(stripslashes($_REQUEST['contact']));
$acontact=@trim(stripslashes($_REQUEST['acontact']));
$cpassword=@md5(trim(stripslashes($_REQUEST['cpassword'])));


$sql = "INSERT INTO usignup (fname, lname, email,contact, acontact, cpassword) VALUES('$fname','$lname','$email','$contact','$acontact', '$cpassword')";
		mysqli_query($con,$sql)or die(mysqli_connect_error($con));
		echo "true";
		
?>