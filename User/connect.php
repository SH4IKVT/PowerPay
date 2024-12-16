<?php

$host="localhost";
$user="root";
$pass="";
$db="ebill_database";
$conn=new mysqli($host,$user,$pass,'ebill_database');
if($conn->connect_error){
    echo "Failed to connect DB".$conn->connect_error;
}
?>