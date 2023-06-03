<?php
$host= "localhost";
$username ="pussmeong21";
$password="1111";
$database="project_workshop";
//create connection
$conn = new mysqli($host, $username, $password, $database);
//check connection
if ($conn->connect_error){
    die("connection failed:".$conn->connect_error);
}else{
    //echo"success connected";
}

//read data table
$sql

$conn->close();
?>