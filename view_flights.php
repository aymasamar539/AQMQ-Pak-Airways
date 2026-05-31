<?php
include("db.php");
$result = mysqli_query($conn, "SELECT * FROM flights");
echo "<h2>Flights List</h2><table border='1'><tr><th>ID</th><th>Flight Number</th><th>Origin</th><th>Destination</th></tr>";
while($row = mysqli_fetch_assoc($result)){
    echo "<tr><td>".$row['id']."</td><td>".$row['flight_number']."</td><td>".$row['origin']."</td><td>".$row['destination']."</td></tr>";
}
echo "</table>";
?>
