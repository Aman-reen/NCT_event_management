<?php
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
include 'db_connect.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $event_name = trim($_POST['event_name']);
    $start_date = $_POST['start_date'];
    $start_time = $_POST['start_time'];
    $end_date = $_POST['end_date'];
    $end_time = $_POST['end_time'];
    $location = trim($_POST['location']);

    // Check if meeting_location is set, otherwise assign NULL
    $meeting_location = isset($_POST['meeting_location']) ? trim($_POST['meeting_location']) : NULL;

    $fee_option = $_POST['fee_option'];
    $fee_amount = ($fee_option === 'Paid' && isset($_POST['fee_amount']) && !empty($_POST['fee_amount'])) ? $_POST['fee_amount'] : NULL;
    $description = trim($_POST['description']);

    // Image Upload Handling
    $event_image = NULL;
    if (!empty($_FILES["event_image"]["name"])) {
        $target_dir = "uploads/";
        $event_image = $target_dir . basename($_FILES["event_image"]["name"]);
        move_uploaded_file($_FILES["event_image"]["tmp_name"], $event_image);
    }

    // Insert into database
    $sql = "INSERT INTO events (event_name, start_date, start_time, end_date, end_time, location, meeting_location, fee_option, fee_amount, description, event_image) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    if ($stmt = $conn->prepare($sql)) {

        $stmt->bind_param(
            "ssssssssdss",
            $event_name,
            $start_date,
            $start_time,
            $end_date,
            $end_time,
            $location,
            $meeting_location,
            $fee_option,
            $fee_amount,
            $description,
            $event_image
        );

        if ($stmt->execute()) {
            echo "<script>
                setTimeout(() => { alert('✅ Event Created Successfully!'); window.location.href='event_management.php'; }, 1000);
                </script>";
        } else {
            echo "<script>alert('❌ Error: " . $stmt->error . "');</script>";
        }
        $stmt->close();
    } else {
        echo "<script>alert('❌ SQL Error: " . $conn->error . "');</script>";
    }

    $conn->close();
}
?>