<?php 
$server = "localhost";
$user = "root";
$pass = "";
$db = "lict";

//create connection 
$conn = new mysqli($server, $user, $pass, $db);

//check connection 
if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

//query to insert data
$qry = "INSERT INTO students(name, phone, email, address) VALUES ('John Doe', '1234567890', 'info@gmail.com','Chitwan')";

//execute query
$result = $conn->query($qry);

if($result === TRUE){
    echo "Data inserted successfully";
}else{
    echo "Error inserting table: " . $conn->error;
}

//close connection
$conn->close();

?>