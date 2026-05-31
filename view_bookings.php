<?php
include("db.php");
$result = mysqli_query($conn, "SELECT * FROM bookings");
echo "<h2>Bookings List</h2><table border='1'><tr><th>ID</th><th>User ID</th><th>Flight ID</th><th>Status</th></tr>";
while($row = mysqli_fetch_assoc($result)){
    echo "<tr><td>".$row['id']."</td><td>".$row['user_id']."</td><td>".$row['flight_id']."</td><td>".$row['status']."</td></tr>";
}
echo "</table>";
?>
