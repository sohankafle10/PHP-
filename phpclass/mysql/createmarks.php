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

//query to create marks table
$qry = "CREATE TABLE marks (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    student_id INT(11) UNSIGNED NOT NULL,
    subject_id INT(11) UNSIGNED NOT NULL,
    obtainedmarks VARCHAR(30) NOT NULL
    )";

if($conn->query($qry) === TRUE){
    echo "Table marks created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
