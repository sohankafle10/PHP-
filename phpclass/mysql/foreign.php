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

//query to create foreign key
$qry = "ALTER TABLE marks
        ADD FOREIGN KEY (student_id) REFERENCES students(id),
        ADD FOREIGN KEY (subject_id) REFERENCES subjects(id)";

if($conn->query($qry) === TRUE){
    echo "Foreign key created successfully";
} else {
    echo "Error creating foreign key: " . $conn->error;
}

$conn->close();
?>