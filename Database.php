<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "car_rental";
$conn =  mysqli_connect($servername, $username, $password, $dbname); 
if(!$conn){
    echo"Connection Failed";
}
else{
    echo"Connected Successfully!";
}
?>