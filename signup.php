<?php
$uname = $_POST["uname"];
$password = $_POST["password"];

//Database connection

$conn = new mysqli('localhost','root','','fc_games');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into users(u_Name, u_Password)
    values(?, ?)");
    $stmt->bind_param("ss",$uname,$password);
    $stmt->execute();
    echo "Successfully registred to KEIN FC.";
    header("location:home.html");
    $stmt->close();
    $conn->close();
}
?>