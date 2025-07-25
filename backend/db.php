<?php
// Database configuration
// IMPORTANT: Use environment variables in production
// The following are development defaults only
/* Database credentials - DO NOT USE IN PRODUCTION
$host = 'localhost';
$db = 'airline_reservation';
$user = 'root';
$pass = '';
*/
// Use environment variables instead
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
