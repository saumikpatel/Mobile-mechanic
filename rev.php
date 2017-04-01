<?php
header('Access-Control-Allow-Origin: *');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wheelcare";
$shopid= $_POST['data'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT avg(average) as avrg ,avg(knowledge) as know ,avg(technicality) as tech, avg(problem_solving) as prob, avg(cust_response) as cust, avg(services) as serv FROM review where id='$shopid'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
 while($row = $result->fetch_assoc()) {
	 
	 echo "<div class=\"test col s12 m2 #4db6ac teal lighten-2\" ><div class=\"section\"><p class=\"z-depth-1\"><h5><center>AVERAGE RATING:  ".round($row['avrg'])."</center></h5></p></div></div>"	 ;
    
	
	echo "<h5>TECHNICALITY</h5></div><div id='pnRate' class='AvRt s".round($row['tech'])."star'><i class='fa fa-star' aria-hidden='true'></i><i class='fa fa-star' aria-hidden='true'></i>
        <i class='fa fa-star' aria-hidden='true'></i><i class='fa fa-star' aria-hidden='true'></i>
        <i class='fa fa-star' aria-hidden='true'></i>
    </div>" ;

echo "<h5>KNOWLEDGE OF WORK</h5></div><div id='pnRate' class='AvRt s".round($row['know'])."star'><i class='fa fa-star' aria-hidden='true'></i><i class='fa fa-star' aria-hidden='true'></i>
        <i class='fa fa-star' aria-hidden='true'></i><i class='fa fa-star' aria-hidden='true'></i>
        <i class='fa fa-star' aria-hidden='true'></i>
    </div>" ;
	
	echo "<h5>PROBLEM SOLVING</h5></div><div id='pnRate' class='AvRt s".round($row['prob'])."star'><i class='fa fa-star' aria-hidden='true'></i><i class='fa fa-star' aria-hidden='true'></i>
        <i class='fa fa-star' aria-hidden='true'></i><i class='fa fa-star' aria-hidden='true'></i>
        <i class='fa fa-star' aria-hidden='true'></i>
    </div>" ;
	
	echo "<h5>CUSTOMER RESPONSIVENESS</h5></div><div id='pnRate' class='AvRt s".round($row['cust'])."star'><i class='fa fa-star' aria-hidden='true'></i><i class='fa fa-star' aria-hidden='true'></i>
        <i class='fa fa-star' aria-hidden='true'></i><i class='fa fa-star' aria-hidden='true'></i>
        <i class='fa fa-star' aria-hidden='true'></i>
    </div>" ;
	
	echo "<h5>SERVICES</h5></div><div id='pnRate' class='AvRt s".round($row['serv'])."star'><i class='fa fa-star' aria-hidden='true'></i><i class='fa fa-star' aria-hidden='true'></i>
        <i class='fa fa-star' aria-hidden='true'></i><i class='fa fa-star' aria-hidden='true'></i>
        <i class='fa fa-star' aria-hidden='true'></i>
    </div>" ;


 }
}

$conn->close();
?>

</body>
</html>