<?php
$email=$_GET['email'];
$password=$_GET['Password'];

$conn=new mysqli('localhost','root','','information');
if($conn->connect_error){
    die('connection Failed: '.$conn->connect_error);
}
else{
    $stmt=$conn->prepare("insert into Login(email,Password)values(?, ?)");
    $stmt->bind_param("ss", $email,$password);
    $stmt->execute();
    echo "LogIn Succesfull...";
    $stmt->close();
    $conn->close();
}
?>