<?php 
$localhost = "localhost";
$username = "root";
$password = "";
$dbname = "lict";   

// Create connection
$conn = new mysqli($localhost, $username, $password, $dbname);

// Check connection
if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

//query to create subjects table
$qry = "CREATE TABLE subjects (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    name VARCHAR(30) NOT NULL,
    fullmarks VARCHAR(30) NOT NULL,
    passmarks VARCHAR(30) NOT NULL
    )";

if($conn->query($qry) === TRUE){
    echo "Table subjects created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
