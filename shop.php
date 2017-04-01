<?php
header('Access-Control-Allow-Origin: *');
//Catch the id with POST
$shopid=$_REQUEST['data'];
$con = mysqli_connect('localhost', 'root', '', 'wheelcare');
if($con->connect_error){
    die("Connection error: ".$con->connect_error);
}
$query = "SELECT * FROM mechsignup WHERE id = '$shopid'";
$result = mysqli_query($con, $query);

$row=mysqli_fetch_array($result);
echo json_encode($row);

?>