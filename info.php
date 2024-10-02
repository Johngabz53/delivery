<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $sender_name = $_POST['sender_name'];
    $sender_address = $_POST['sender_address'];
    $receiver_name = $_POST['receiver_name'];
    $receiver_address = $_POST['receiver_address'];
    $package_details = $_POST['package_details'];
    $delivery_date = $_POST['delivery-date'];
    $delivery_time = $_POST['delivery-time'];

    // Process the data (e.g., save it to a database or send an email)
    // Example: Database connection or email code goes here

    // After processing, redirect the user to another page (e.g., a confirmation page)
    header("Location: http://localhost/p2ppay.xyz/payment.html");
    exit(); // Important: exit after header to ensure the redirect works
}
?>
