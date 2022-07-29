<?php
echo "connection success";
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
    echo "Connection Sucessful\n";
    if($result){
        echo "\nSignUp sucessful";
    }else{
        echo "SignUp Failed";
    }
}
?>