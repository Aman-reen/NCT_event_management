<?php
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start(); // Start session before using it
include 'db_connect.php'; // Ensure database connection is correct

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = trim($_POST['email']);
  $password = $_POST['password'];

  if (empty($email) || empty($password)) {
    echo "<script>alert('❌ Please fill in all fields.'); window.location.href='Login.php';</script>";
    exit();
  }

  // Check if user exists
  $sql = "SELECT id, email, password FROM users WHERE email = ?";
  $stmt = $conn->prepare($sql);
  if (!$stmt) {
    die("❌ Error preparing SQL: " . $conn->error);
  }

  $stmt->bind_param("s", $email);
  $stmt->execute();
  $stmt->store_result();

  if ($stmt->num_rows == 1) {
    $stmt->bind_result($id, $email, $hashed_password);
    $stmt->fetch();

    // Verify password
    if (password_verify($password, $hashed_password)) {
      $_SESSION['user_id'] = $id;
      $_SESSION['email'] = $email;

      // ✅ Corrected Redirect
      header("Location: Home.php");
      exit();
    } else {
      echo "<script>alert('❌ Incorrect password! Please try again.'); window.location.href='Login.php';</script>";
      exit();
    }
  } else {
    echo "<script>alert('❌ Email not found! Please register first.'); window.location.href='registrations.php';</script>";
    exit();
  }

  if ($stmt) {
    $stmt->close();
  }

  $conn->close();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>NCT Club Login</title>

<body>
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

    .login-container {
      background-color: #ffffff;
      border-radius: 10px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
      width: 400px;
      padding: 30px;
      text-align: left;
      color: black;
    }

    .login-header {
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

    input[type="email"],
    input[type="password"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 20px;
      border: 1px solid #b3d9ff;
      border-radius: 5px;
      font-size: 14px;
      box-sizing: border-box;
    }

    input[type="email"]:focus,
    input[type="password"]:focus {
      border-color: #004080;
      outline: none;
    }

    .login-btn {
      background-color: #004080;
      color: white;
      border: none;
      padding: 10px;
      width: 100%;
      border-radius: 5px;
      font-size: 16px;
      cursor: pointer;
      font-weight: bold;
      text-align: center;
      transition: background-color 0.3s ease;
    }

    .login-btn:hover {
      background-color: #003366;
    }

    .forgot-password {
      margin-top: 10px;
      color: #004080;
      text-align: center;
      font-weight: bold;
      display: block;
    }

    .forgot-password:hover {
      color: #00264d;
    }

    .register-link {
      margin-top: 20px;
      text-align: center;
    }

    .register-link a {
      color: #004080;
      font-weight: bold;
      text-decoration: none;
      transition: color 0.3s ease;
    }

    .register-link a:hover {
      color: #00264d;
    }

    .admin {
      margin-top: 20px;
      text-align: center;
      text-decoration: none;
    }

    .admin a {
      color: #004080;
      font-weight: bold;
      text-decoration: none;
      transition: color 0.3s ease;
    }

    .admin a:hover {
      color: #00264d;
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
  </style>
  <script>const [isAdminLogin, setIsAdminLogin] = useState(false);

    const handleLogin = async () => {
      const response = await fetch('/login', {
        method: 'POST',
        body: JSON.stringify({ email, password, isAdmin: isAdminLogin }),
        headers: { 'Content-Type': 'application/json' }
      });

      const data = await response.json();

      if (data.role === 'admin' && data.passwordReset) {
        navigate('/reset-password'); // Force admin to change password
      } else if (data.role === 'admin') {
        navigate('/admin-dashboard');
      } else {
        navigate('/user-dashboard');
      }
    };

    return (
      <div>
        <h2>{isAdminLogin ? "Admin Login" : "User Login"}</h2>
        <input type="email" placeholder="Email" onChange={e => setEmail(e.target.value)} />
        <input type="password" placeholder="Password" onChange={e => setPassword(e.target.value)} />
        <button onClick={handleLogin}>Sign In</button>
        <button onClick={() => setIsAdminLogin(!isAdminLogin)}>Sign in as Admin</button>
      </div>
    );
  </script>
  </head>




  <div class="logo">
    <img src="Images/Niagara College Toronto Logo.png" alt="NCT Club Logo" />
  </div>

  <div class="login-container">
    <div class="login-header">Log into NCT Club Portal</div>

    <form action="Login.php" method="POST">
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" placeholder="Enter your email" required autocomplete="off" value="" />



      <label for="password">Password:</label>
      <input type="password" id="password" name="password" placeholder="Enter your password" required autocomplete="off"
        value="" />
      <button type="submit" class="login-btn">Log In</button>
    </form>

    <a href="Forget.php" class="forgot-password">Forgot Password?</a>

    <div class="register-link">
      Don't have an account? <a href="registrations.php">Register Now</a>
    </div>
    <div class="admin">
      Sign-In as a <a href="Admin_login.php">Admin</a>
    </div>
  </div>
</body>


</html>