<?php
include("db.php");
$result = mysqli_query($conn, "SELECT * FROM users");
echo "<h2>Users List</h2><table border='1'><tr><th>ID</th><th>Name</th><th>Email</th></tr>";
while($row = mysqli_fetch_assoc($result)){
    echo "<tr><td>".$row['id']."</td><td>".$row['name']."</td><td>".$row['email']."</td></tr>";
}
echo "</table>";
?>
