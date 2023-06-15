<?php
$date = $_POST["date"];
$grnd = $_POST["grnd"];
$ref = $_POST["ref"];
$ad = $_POST["ad"];
$user = $_POST["user"];

//Database connection

$conn = new mysqli('localhost','root','','fc_games');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into matches(Date,Play_Ground,Ref_id,Ad_id,user_id)
    values(?, ?, ?, ?, ?)");
    $stmt->bind_param("isiii",$date,$grnd,$ref,$ad,$user);
    $stmt->execute();
    echo "Successfully registred to KEIN FC.";
    header("location:home.html");
    $stmt->close();
    $conn->close();
}
?>