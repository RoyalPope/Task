<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="choice.html"><button type="submit" name="btn">Back to Register</button></a>
    <table>
        <tr>
            <th>Id</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Age</th>
            <th>Sex</th>
            <th>Tel</th>
        </tr>
        <?php
        $conn = mysqli_connect('localhost','root','','fc_games');
        if($conn->connect_error){
            die('Connection Failed : '.$conn->connect_error);
        }

        $sql = "SELECT 	Ref_id,F_Name,L_Name,Age,Sex,Tel from referees";
        $result = $conn-> query($sql);

        if ($result-> num_rows > 0){
            while ($row = $result-> fetch_assoc()) {
                echo "<tr><td>". $row["Ref_id"]. "</td><td>". $row["F_Name"].
                 "</td><td>".$row["L_Name"].
                 "</td><td>".$row["Age"].
                 "</td><td>".$row["Sex"].
                 "</td><td>". $row["Tel"]. "</td></tr>";
            }
            echo "</table>";
        }
        else {
            echo "0 result";
        }
        $conn->close();
        ?>
    </table>
</body>
</html>