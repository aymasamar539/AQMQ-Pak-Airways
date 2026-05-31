<?php
session_start();
include("db.php");

if(isset($_SESSION['user'])){
    $user_id = $_SESSION['user'];
    $flight_id = $_POST['flight_id'];

    $sql = "INSERT INTO bookings (user_id, flight_id, status) VALUES ('$user_id', '$flight_id', 'pending')";
    if(mysqli_query($conn, $sql)){
        echo "Booking request submitted!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} else {
    echo "Please login first!";
}
?>
