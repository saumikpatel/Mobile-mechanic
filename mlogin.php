<?php

header('Access-Control-Allow-Origin: *');  
include_once 'dbconnect.php';

$email=@trim(stripslashes($_REQUEST['email']));
$password=md5(@trim(stripslashes($_REQUEST['password'])));

$res=mysqli_query($con,"SELECT email,password FROM mechanics WHERE email='$email'");
  $row=mysqli_fetch_array($res);
  
  $count = mysqli_num_rows($res);
   
  if($count ==1&&$row['password']==$password)
  {
    echo "true";
  }
  ?>