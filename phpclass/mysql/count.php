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

//query to count data
$qry = "SELECT COUNT(id) as total FROM students";

//execute query
$result = $conn->query($qry);

$row = $result->fetch_assoc();
echo "Total number of students: " . $row['total'];
$conn->close();
?>