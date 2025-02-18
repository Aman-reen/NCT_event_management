<?php
session_start();
include 'db_connect.php';

if (!isset($_SESSION['email'])) {
    echo "Please log in to apply for events.";
    exit();
}

$user_email = $_SESSION['email'];
$event_id = $_POST['event_id'];

$sql = "INSERT INTO event_applications (user_email, event_id) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("si", $user_email, $event_id);

if ($stmt->execute()) {
    echo "✅ Successfully applied for the event!";
} else {
    echo "❌ Error applying for the event!";
}

$stmt->close();
$conn->close();
?>