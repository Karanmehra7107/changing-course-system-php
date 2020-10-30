<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crud";

// Create connection
$conn = new mysqli("localhost", "root", "", "crud",);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>