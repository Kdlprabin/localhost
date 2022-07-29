<?php

$conn = new mysqli('localhost','root','','form','3307');

if($conn->connect_error){
    die("Connection Failed");
}
else{
    echo "Connection Sucessful";
}
?>