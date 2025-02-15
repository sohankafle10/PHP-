<?php 
$server = "localhost";
$user = "root";
$pass = "";
$db = "lict";

//connect to database
$conn = new mysqli($server, $user, $pass, $db);

//check connection
if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

//query to update data
$qry = "UPDATE students SET address='Kathmandu' WHERE address='Chitwan'";

//execute query
$result = $conn->query($qry);

if($result === TRUE){
    echo "Record updated successfully";
}
else{
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>