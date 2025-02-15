<?php
$server ="localhost";
$user ="root";
$pass="";
$db="Lict";

//connection in procedural way
$conn= mysqli_connect($server, $user, $pass, $db);

//check connection
if(!$conn){
    die("connection failed:".mysqli_connect_error());
}

//connection in object oriented way
$con= new mysqli($server, $user, $pass,$db);

//check connection

if($conn->connect_error){
    die("connection failed:".$conn->connect_error);

}

//connection in PDO way
try{
    $conn =new PDO("mysql:host=$server;dbname=$db", $user, $pass);

    //set the PDO ERROR 
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "connected successfully";

}catch(PDOException $e){
    echo "connection failed:".$e->getMessage();
}