<?php
require 'db.php';

$flight_id = $_POST['flight_id'];
$passenger_name = $_POST['passenger_name'];
$seat_number = $_POST['seat_number'];

// Use prepared statement to prevent SQL injection
$stmt = $conn->prepare("INSERT INTO bookings (flight_id, passenger_name, seat_number, payment_status) VALUES (?, ?, ?, 'Pending')");
$stmt->bind_param("iss", $flight_id, $passenger_name, $seat_number);

if ($stmt->execute()) {
    $booking_id = $conn->insert_id;
    header("Location: ../payment.php?booking_id=" . $booking_id);
    exit;
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
