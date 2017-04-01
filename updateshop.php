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
$shopid=$_REQUEST['shopid'];

if($tcontact=="")
{
	$badge1=0;
}
else
{
	$badge1=3;
}
$sql="UPDATE mechsignup SET fname = '$fname', lname = '$lname', contact = '$contact', sname='$sname', address ='$address', servicetype ='$servicetype', vehicletype = '$vehicletype', latitude = '$latitude', longitude='$longitude', tcontact='$tcontact', opentime='$opentime', closetime='$closetime', badge1='$badge1'  WHERE id='$shopid'"; 


/*$sql = "INSERT INTO mechsignup (fname, lname, contact, sname, address, servicetype, vehicletype, latitude, longitude ) VALUES('$fname','$lname','$contact','$sname', '$address', '$servicetype', '$vehicletype', '$latitude',$longitude)";*/
		mysqli_query($con,$sql)or die(mysqli_connect_error($con));
	echo "true";	
?>