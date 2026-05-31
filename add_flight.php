<?php
include("db.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $flight_number = $_POST['flight_number'];
    $origin = $_POST['origin'];
    $destination = $_POST['destination'];
    $departure = $_POST['departure_time'];
    $arrival = $_POST['arrival_time'];

    $sql = "INSERT INTO flights (flight_number, origin, destination, departure_time, arrival_time)
            VALUES ('$flight_number', '$origin', '$destination', '$departure', '$arrival')";
    if(mysqli_query($conn, $sql)){
        echo "Flight added successfully!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
