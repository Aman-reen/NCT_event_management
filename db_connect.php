<?php
$servername = "localhost"; // XAMPP default
$username = "root"; // Default MySQL user in XAMPP
$password = ""; // Default is empty in XAMPP
$database = "NCT"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "";
}
?>