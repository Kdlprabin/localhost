<?php

$email = $_POST['email'];
$password=md5($_POST['password']);
$address = $_POST['address'];
$address2 = $_POST['address2'];
$city = $_POST['city'];
$state = $_POST['state'];

$conn = new mysqli('localhost','root','','form','3307');

$sql= "INSERT INTO form(email,password,address,address2,state,city) VALUES('$email','$password','$address','$address2','$state','$city');";

$result = mysqli_query($conn,$sql);

if($conn->connect_error){
    die("Connection Failed");
}
else{
    if($result){
        echo "\nSignup sucessful";
    }else{
        echo "Signup Failed";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>back</title>
</head>
<body>
    <button id="back" style="background-color:blue;"><a href="index.html" style="color: white;text-decoration:none;">Back</a></button>
</body>
</html>