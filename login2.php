<?php
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'fc_games';

$conn = mysqli_connect('localhost', 'root', '', 'fc_games');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Process submitted login form
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form input values
    $u_Name = $_POST['u_Name'];
    $u_Password = $_POST['u_Password'];

    // Fetch user from database
    $sql = "SELECT * FROM users WHERE u_Name = '$u_Name' AND u_Password = '$u_Password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // User exists, proceed with login
        session_start();
        $_SESSION['u_Name'] = $u_Name;

        // Redirect to dashboard or home page
        header('Location: home.html');
        exit();
    } else {
        // User does not exist, display error message
        $error_msg = 'Invalid username or password!';
        echo '<script>alert("Not registered")</script>';
    }
}
?>