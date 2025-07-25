<?php
require 'backend/db.php';

// Get flights data
$query = "SELECT * FROM flights WHERE available_seats > 0";
$result = $conn->query($query);

$flights = [];
while($row = $result->fetch_assoc()) {
    $flights[] = $row;
}

// Return as JSON
header('Content-Type: application/json');
echo json_encode($flights);
?>
