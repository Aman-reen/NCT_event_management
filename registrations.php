<?php
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'db_connect.php'; // Ensure the database connection is correct

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Capture form data
  $student_id = isset($_POST['student-id']) ? trim($_POST['student-id']) : '';
  $email = isset($_POST['email']) ? trim($_POST['email']) : '';
  $phone_number = isset($_POST['phone_number']) ? trim($_POST['phone_number']) : '';
  $password = isset($_POST['password']) ? $_POST['password'] : '';
  $confirm_password = isset($_POST['confirm-password']) ? $_POST['confirm-password'] : '';

  // Validate required fields
  if (empty($student_id) || empty($email) || empty($phone_number) || empty($password)) {
    echo "<script>alert(' Missing required fields. Please fill out all fields.'); window.location.href='registrations.php';</script>";
    exit();
  }

  // Validate email
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "<script>alert(' Invalid email format.'); window.location.href='registrations.php';</script>";
    exit();
  }

  // Ensure passwords match
  if ($password !== $confirm_password) {
    echo "<script>alert(' Passwords do not match.'); window.location.href='registrations.php';</script>";
    exit();
  }

  // Check if email already exists
  $check_sql = "SELECT email FROM users WHERE email = ?";
  $check_stmt = $conn->prepare($check_sql);
  $check_stmt->bind_param("s", $email);
  $check_stmt->execute();
  $check_stmt->store_result();

  if ($check_stmt->num_rows > 0) {
    echo "<script>alert('❌ Error: Email already exists! Please use a different email.'); window.location.href='registrations.php';</script>";
    exit();
  }

  $check_stmt->close();

  // Hash the password for security
  $hashed_password = password_hash($password, PASSWORD_DEFAULT);

  // Insert into database
  $sql = "INSERT INTO users (student_id, email, phone_number, password) VALUES (?, ?, ?, ?)";

  $stmt = $conn->prepare($sql);
  if (!$stmt) {
    echo "<script>alert('❌ Error preparing SQL: {$conn->error}'); window.location.href='registrations.php';</script>";
    exit();
  }

  $stmt->bind_param("ssss", $student_id, $email, $phone_number, $hashed_password);

  if ($stmt->execute()) {
    echo "<script>alert('✅ Registration successful!'); window.location.href='registrations.php';</script>";
  } else {
    echo "<script>alert('❌ Error executing SQL: {$stmt->error}'); window.location.href='registrations.php';</script>";
  }

  $stmt->close();
  $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>NCT Club Registration</title>
  <style>
    body {
      font-family: "Arial", sans-serif;
      background-image: url(Images/background_3pages.jpg);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
      background-size: cover;
      background-repeat: no-repeat;
    }

    .logo {
      margin-bottom: 900px;
      position: absolute;
      top: 0px;
      left: 1px;
    }

    .logo img {
      width: 250px;
      height: 250px;
    }

    .registration-container {
      background-color: #ffffff;
      border-radius: 10px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
      width: 450px;
      padding: 30px;
      color: black;
    }

    .registration-header {
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 20px;
      text-align: center;
    }

    label {
      display: block;
      margin-bottom: 8px;
      font-weight: bold;
    }

    input {
      width: 100%;
      padding: 10px;
      margin-bottom: 20px;
      border: 1px solid #b3d9ff;
      border-radius: 5px;
      font-size: 14px;
      box-sizing: border-box;
    }

    input:focus {
      border-color: #004080;
      outline: none;
    }

    .register-btn {
      background-color: #004080;
      color: white;
      border: none;
      padding: 10px;
      width: 100%;
      border-radius: 5px;
      font-size: 16px;
      cursor: pointer;
      font-weight: bold;
      transition: background-color 0.3s ease;
    }

    .register-btn:hover {
      background-color: #003366;
    }

    .login-link {
      text-align: center;
      margin-top: 20px;
    }

    .login-link a {
      color: #004080;
      font-weight: bold;
      text-decoration: none;
      transition: color 0.3s ease;
    }

    .login-link a:hover {
      color: #00264d;
    }
  </style>
</head>

<body>
  <div class="logo">
    <img src="Images/Niagara College Toronto Logo.png" alt="NCT Club Logo" />
  </div>

  <div class="registration-container">
    <div class="registration-header">Register for NCT Club</div>

    <form action="registrations.php" method="POST">
      <label for="student-id">Student ID:</label>
      <input type="text" id="student-id" name="student-id" placeholder="Enter your student ID" required />

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" placeholder="Enter your email" required />

      <label for="phone">Phone Number:</label>
      <input type="text" id="phone" name="phone_number" placeholder="Enter your phone number" required />

      <label for="password">Create Password:</label>
      <input type="password" id="password" name="password" placeholder="Create your password" required />

      <label for="confirm-password">Confirm Password:</label>
      <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirm your password"
        required />

      <button type="submit" class="register-btn">Register</button>
    </form>

    <div class="login-link">
      Already have an account? <a href="Login.php">Log In</a>
    </div>
  </div>
</body>

</html>