<?php
header('Access-Control-Allow-Origin: *'); 
include_once 'dbconnect.php';


$password=md5(@trim(stripslashes($_REQUEST['cpassword'])));
$email= $_REQUEST['email'];

//$otp=@$_REQUEST['otp'];
/*echo $fname;
echo $lname;
echo $email;
echo $password;
echo $year;
echo $division;
echo $stream;
*/
$sql = "INSERT INTO mechanics (email,password ) VALUES('$email','$password')";
		mysqli_query($con,$sql)or die(mysqli_connect_error($con));
			
?>