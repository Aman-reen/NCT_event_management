<?php
session_start();
include 'db_connect.php';

if (!isset($_SESSION['admin_id'])) {
    header("Location: Admin_login.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $new_password = $_POST["new_password"];
    $admin_id = $_SESSION['admin_id'];

    // Hash the new password before saving
    $hashed_password = hash("sha256", $new_password);

    $sql = "UPDATE admins SET password = ?, password_reset = 0 WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $hashed_password, $admin_id);

    if ($stmt->execute()) {
        echo "<script>alert('✅ Password updated successfully! Please log in again.'); window.location.href='Admin_login.php';</script>";
        exit();
    } else {
        echo "<script>alert('❌ Error updating password! Try again.'); window.location.href='Admin_reset_password.php';</script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Reset Password</title>
</head>
<style>
    body {
        font-family: "Arial", sans-serif;
        background-image: url(Images/background_3pages.jpg);
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        color: black;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .reset {
        background-color: #f0f0f0;
        height: 400px;
        width: 500px;
        justify-items: center;
        padding-top: 50px;

        border-radius: 10px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);

    }

    .reset h2 {
        font-weight: bold;
        font-size: 30px;
        padding-bottom: 40px;
        text-align: center;
    }

    .reset form {

        display: grid;
        gap: 30px;

    }


    .reset form input {
        font-size: 25px;
        padding: 10px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);

    }

    .reset form button {
        font-size: 25px;
        background-color: #004080;
        color: #f0f0f0;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);

        padding: 10px;

    }
</style>

<body>
    <div class="reset">
        <h2>Wellcome to NCT-Admin Please create Your New Password</h2>

        <form method="POST">

            <input type="password" name="new_password" placeholder="New Password" required>
            <button type="submit">Update Password</button>
        </form>
    </div>
</body>

</html>