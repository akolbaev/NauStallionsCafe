<?php
$servername = "server.dev";
$username = "root";
$password = "root";
$dbname = "member";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>
