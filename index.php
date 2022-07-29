<?php

$name = $_POST['name'];
$password=$_POST['password'];


$sql= "INSERT INTO form(name,password) VALUES('$name','$password');";

$conn = new mysqli('localhost','root','','form','3307');

$result = mysqli_query($conn,$sql);

if($conn->connect_error){
    die("Connection Failed");
}
else{
    echo "Connection Sucessful\n";
    if($result){
        echo "\nSignUp sucessful";
    }else{
        echo "SignUp Failed";
    }
}
?>