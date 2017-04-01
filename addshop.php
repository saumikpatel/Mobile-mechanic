<?php
header('Access-Control-Allow-Origin: *');
include_once 'dbconnect.php';

 $fname=@trim(stripslashes($_REQUEST['fname']));
$lname=@trim(stripslashes($_REQUEST['lname']));
$contact=@trim(stripslashes($_REQUEST['contact']));
$address=@trim(stripslashes($_REQUEST['address']));
$servicetype=@trim(stripslashes($_REQUEST['servicetype']));
$vehicletype=@trim(stripslashes($_REQUEST['vehicletype']));
$sname=@trim(stripslashes($_REQUEST['sname']));
$latitude=@trim(stripslashes($_REQUEST['latitude']));
$longitude=@trim(stripslashes($_REQUEST['longitude']));
$tcontact=@trim(stripslashes($_REQUEST['tcontact']));
$opentime=@trim(stripslashes($_REQUEST['opentime']));
$closetime=@trim(stripslashes($_REQUEST['closetime']));
 $email=@trim(stripslashes($_REQUEST['mechsessionemail']));


if($tcontact=="")
{
	$badge1=0;
}
else
{
	$badge1=3;
}
$sql = "INSERT INTO mechsignup (fname, lname, contact, sname, address, servicetype, vehicletype,email, latitude, longitude, tcontact, opentime, closetime, badge1 ) VALUES('$fname','$lname','$contact','$sname', '$address', '$servicetype', '$vehicletype','$email', '$latitude','$longitude', '$tcontact','$opentime', '$closetime', '$badge1')";
		mysqli_query($con,$sql)or die(mysqli_connect_error($con));
if(mysqli_query)
{
	echo"true";
}	
else{
	echo"false";
}
?>