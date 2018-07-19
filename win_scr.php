<?php



$servername = "localhost:3306";
$username = "thani";
$password = "123";
$dbname = "seusldb";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
/*if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} */

$sql = "SELECT * FROM usertable";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($rows = $result->fetch_assoc()) {
        
		
        if(($row['usernm']==$rows["usernm"])){
			
			$ttr=$rows['Name'];
            $pro_pic=$rows['pro_path'];
            
            
            
        }
           
            
        
    }

}

?> 