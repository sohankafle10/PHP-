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

//query to select data
$qry = "SELECT name,phone,email,address FROM students";

//execute query
$result = $conn->query($qry);

if($result->num_rows > 0){
    //output data of each row
    while($row = $result->fetch_assoc()){
        // echo "ID: " . $row['id']."<br>";
        echo "Name: " . $row['name']."<br>";
        echo "Phone: " . $row['phone']."<br>";
        echo "Email: " . $row['email']."<br>";
        echo "Address: " . $row['address']."<br><br>";
    }
}else{
    echo "0 results";
}

$conn->close();
?>