<?php 
$server = "localhost";
$user = "root";
$pass = "";
$db = "lict";

//create connection
$conn = new mysqli($server, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//query to create table
$qry = "CREATE TABLE students(
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    phone VARCHAR(15) NOT NULL,
    email VARCHAR(50) NOT NULL,
    address VARCHAR(100) NOT NULL
)";

//execute query
$result = $conn->query($qry);

if($result === TRUE){
    echo "Table created successfully";
}else{
    echo "Error creating table: " . $conn->error;
}

//close connection
$conn->close();

?>