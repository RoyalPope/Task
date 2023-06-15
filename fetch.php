<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="index.html"><button type="submit" name="btn">Back to home</button></a>
    <table>
        <tr>
            <th>Id</th>
            <th>Username</th>
            <th>Password</th>
        </tr>
        <?php
        $conn = mysqli_connect('localhost','root','','fc_games');
        if($conn->connect_error){
            die('Connection Failed : '.$conn->connect_error);
        }

        $sql = "SELECT user_id, u_Name, u_Password from users";
        $result = $conn-> query($sql);

        if ($result-> num_rows > 0){
            while ($row = $result-> fetch_assoc()) {
                echo "<tr><td>". $row["user_id"]. "</td><td>". $row["u_Name"].
                 "</td><td>". $row["u_Password"]. "</td></tr>";
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