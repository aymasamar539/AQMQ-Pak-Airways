<?php
session_start();
include("db.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM admins WHERE username='$username'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    if($row && password_verify($password, $row['password'])){
        $_SESSION['admin'] = $row['username'];
        header("Location: dashboard.php");
    } else {
        echo "Invalid login!";
    }
}
?>
