<?php
$email = $_POST['email'];
$password=md5($_POST['password']);
$address = $_POST['address'];
$address2 = $_POST['address2'];
$city = $_POST['city'];
$state = $_POST['state'];

$sql= "INSERT INTO form(email,password,address,address2,state,city) VALUES('$email','$password','$address','$address2','$state','$city');";
$check = "SELECT city FROM form where email = prabinkandelking@gmail.com";

$conn = new mysqli('localhost','root','','form','3307');

$receive =mysqli_query($conn,$check);

$send = mysqli_query($conn,$sql);

if($conn->connect_error){
    die("Connection Failed");
}
else{
    if($send){
        echo "\nSignup sucessful";
    }else{
        echo "Signup Failed";
    }
}
mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>back</title>
    <style>
        body{
            font-size: 48px;
            text-align: center;
        }
        button{
            padding: 10px;
            font-size: 24px;
            border-radius: 10px;
            color: white;
            margin:40px;
            background-color: blue;
            cursor: pointer;
        }
        button:hover{
            color:blue;
            background-color: white;
        }
    </style>
</head>
<body>
    <br>
    <button id="back" onclick="back();">Back</button>
    <script>
        function back(){
            location.replace("index.html");
        }
    </script>
</body>
</html>