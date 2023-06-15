<?php
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$age = $_POST["age"];
$gen = $_POST["gen"];
$tel = $_POST["tel"];

//Database connection

$conn = new mysqli('localhost','root','','fc_games');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into referees(F_Name,L_Name,Age,Sex,Tel)
    values(?, ?, ?, ?, ?)");
    $stmt->bind_param("ssisi",$fname,$lname,$age,$gen,$tel);
    $stmt->execute();
    echo "Successfully registred to KEIN FC.";
    header("location:home.html");
    $stmt->close();
    $conn->close();
}
?>