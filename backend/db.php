<?php
// Database configuration
$host = getenv('DB_HOST') ?: 'localhost';
$db = getenv('DB_NAME') ?: 'airline_reservation';
$user = getenv('DB_USER') ?: 'root';
$pass = getenv('DB_PASS') ?: '';

// Create connection
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
