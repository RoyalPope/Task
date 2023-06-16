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
            <th>Date</th>
            <th>Play_Ground</th>
            <th>Ref_id</th>
            <th>Ad_id</th>
            <th>user_id</th>
        </tr>
        <?php
        $conn = mysqli_connect('localhost','root','','fc_games');
        if($conn->connect_error){
            die('Connection Failed : '.$conn->connect_error);
        }

        $sql = "SELECT 	Mt_id, Date, Play_Ground, Ref_id, Ad_id, user_id from matches";
        $result = $conn-> query($sql);

        if ($result-> num_rows > 0){
            while ($row = $result-> fetch_assoc()) {
                echo "<tr><td>". $row["Mt_id"]. "</td><td>". $row["Date"].
                 "</td><td>".$row["Play_Ground"].
                 "</td><td>".$row["Ref_id"].
                 "</td><td>".$row["Ad_id"].
                 "</td><td>". $row["user_id"]. "</td></tr>";
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