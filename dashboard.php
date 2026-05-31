<?php
session_start();
include("db.php");

if(!isset($_SESSION['admin'])){
    header("Location: admin_login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin Dashboard</title>
</head>
<body>
  <h1>Welcome, <?php echo $_SESSION['admin']; ?>!</h1>
  <nav>
    <a href="add_flight.php">Add Flight</a> |
    <a href="view_flights.php">View Flights</a> |
    <a href="view_users.php">View Users</a> |
    <a href="view_bookings.php">View Bookings</a> |
    <a href="logout.php">Logout</a>
  </nav>
</body>
</html>
