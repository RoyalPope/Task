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
            <th>Name</th>
        </tr>
        <?php
        $conn = mysqli_connect('localhost','root','','fc_games');
        if($conn->connect_error){
            die('Connection Failed : '.$conn->connect_error);
        }

        $sql = "SELECT Ad_id,Name from adversaries";
        $result = $conn-> query($sql);

        if ($result-> num_rows > 0){
            while ($row = $result-> fetch_assoc()) {
                echo "<tr><td>". $row["Ad_id"]. "</td><td>". $row["Name"]. "</td></tr>";
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