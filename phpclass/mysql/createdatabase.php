<?php

$server = 'localhost';
$user = 'root';
$pass= "";

//create connection
$conn = new mysqli($server, $user, $pass,);

//check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    //create database
    $sql = "CREATE DATABASE lict";

    //execute query
    $result = $conn->query($sql);

    if($result === TRUE){
        echo "Database created successfully";
    }
    else{
        echo "Error creating database: " . $conn->error;
    }

    //close conection
    $conn->close();