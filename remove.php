
<?php
header('Access-Control-Allow-Origin: *');
include_once 'dbconnect.php';
echo $shopid = $_REQUEST['data'];
$query = "delete from mechsignup WHERE id = '$shopid'";
$result= mysqli_query($con,$query);
if (mysqli_affected_rows($con)>0)
			
			{
				echo "true";
			}
			else{
				echo"something went wrong,please try again ";
			}
			?>