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

//query to insert data
$qry = "INSERT INTO subjects (name, fullmarks, passmarks)
        VALUES ('Nepali', '100', '40'),
               ('English', '100', '40'),
               ('Math', '100', '40'),
               ('Science', '100', '40'),
               ('Social', '100', '40')";

if($conn->query($qry) === TRUE){
    echo "Data inserted successfully";
} else {
    echo "Error inserting data: " . $conn->error;
}

$conn->close();
?>