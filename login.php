<?php
session_start();
include("db.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    if($row && password_verify($password, $row['password'])){
        $_SESSION['user'] = $row['id'];
        header("Location: dashboard.php");
    } else {
        echo "Invalid login!";
    }
}
?>
