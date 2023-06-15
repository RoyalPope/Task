<?php
$name = $_POST["name"];

//Database connection

$conn = new mysqli('localhost','root','','fc_games');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into adversaries(Name)
    values(?)");
    $stmt->bind_param("s",$name);
    $stmt->execute();
    echo "Successfully registred to KEIN FC.";
    header("location:home.html");
    $stmt->close();
    $conn->close();
}
?>