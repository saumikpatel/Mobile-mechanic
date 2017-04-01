<?php
header('Access-Control-Allow-Origin: *'); 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wheelcare";
$mechsessionemail=$_POST['mechsessionemail'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM mechsignup where email='$mechsessionemail'";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
	
 while($row = $result->fetch_assoc()) {
	echo " <div class='card-panel #e0f2f1 teal lighten-5 valign-wrapper'>";
echo"	 <div class=' mech middle 4db6ac-text teal-text text-lighten-2' id =".$row['id'].">";
	

echo   $row['sname']  ;


echo "</div>" ;
echo"</div>";

 }
}

$conn->close();
?>

</body>
</html>