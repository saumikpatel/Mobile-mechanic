<?php
error_reporting( E_ALL & ~E_DEPRECATED & ~E_NOTICE );
$con=mysqli_connect("localhost","root","");
if(!$con)
{
	die('oops connection problem ! --> '.mysql_error());
}
if(!mysqli_select_db($con, "wheelcare"))
{
	die('oops database selection problem ! --> '.mysql_error());
}

?>