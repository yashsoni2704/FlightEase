<?php
$booking_id = $_GET['booking_id'] ?? '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Success - FlightEase</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Payment Successful!</h4>
            <p>Your booking (ID: <?php echo htmlspecialchars($booking_id); ?>) has been confirmed.</p>
            <hr>
            <p class="mb-0">You will receive a confirmation email shortly.</p>
        </div>
        <a href="index.html" class="btn btn-primary">Return to Home</a>
    </div>
</body>
</html>
