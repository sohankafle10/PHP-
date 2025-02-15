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

//query to delete data
$qry = "DELETE FROM students WHERE id=1";

//execute query
$result = $conn->query($qry);

if($result === TRUE){
    echo "Record deleted successfully";
}
else{
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>