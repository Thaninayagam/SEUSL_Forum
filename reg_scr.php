
<?php
      
        
$servername = "localhost:3306";
$username = "thani";
$password = "123";
$dbname = "seusldb";

 $nme=$_POST["name"];
		$addr=$_POST["address"];
		$nicno=$_POST["nicNo"];
		$urn=$_POST["regNo"];
		$unme=$_POST["UName"];
        $pswd=$_POST["psw"]; 
        
        

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else{
    echo "success";
}

        

$sql = "INSERT INTO usertable (`Name`, `Address`, `NIC_No`, `Reg_No`, `usernm`, `psswrd`) VALUES ('$nme','$addr','$nicno','$urn','$unme','$pswd')";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn); 
?>
