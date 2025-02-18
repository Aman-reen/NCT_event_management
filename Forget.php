<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Forgot Password - NCT Club Portal</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background-color: #f4f4f4;
      background-image: url(Images/background_3pages.jpg);
      background-repeat: no-repeat;
      background-size: cover;
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

    .container {
      background: white;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      text-align: center;
      width: 350px;
      padding: 40px;
    }

    input {
      width: 100%;
      padding: 10px;
      margin: 10px 0;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    button {
      width: 100%;
      padding: 10px;
      background: #003366;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      margin-top: 10px;
    }

    button:hover {
      background: #002244;
    }

    a {
      display: block;
      margin-top: 10px;
      text-decoration: none;
      color: #003366;
    }

    .message {
      color: red;
      margin-top: 10px;
    }
  </style>
  <script>
    function validateEmail() {
      const emailInput = document.getElementById("email");
      const messageDiv = document.getElementById("message");
      const email = emailInput.value.trim();

      if (!email) {
        messageDiv.textContent = "Please enter your email address.";
        return false;
      }
      if (!email.endsWith("@nctorontostudents.ca")) {
        messageDiv.textContent = "Please enter a valid NCT student email.";
        return false;
      }
      messageDiv.style.color = "green";
      messageDiv.textContent =
        "A password reset link has been sent to your email.";
      return false;
    }
  </script>
</head>

<body>
  <div class="logo">
    <img src="Images/Niagara College Toronto Logo.png" alt="NCT Club Logo" />
  </div>

  <div class="container">
    <h2>Forgot Password</h2>
    <p>
      Enter your email address below, and we'll send you a link to reset your
      password.
    </p>
    <form onsubmit="return validateEmail()">
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" placeholder="Enter your email" required />
      <button type="submit">Send Reset Link</button>
    </form>
    <p id="message" class="message"></p>
    <a href="Login.php">Back to Login</a>
    <p>
      Need help? Contact
      <a href="mailto:studentservices@niagaracollegetoronto.ca">Support</a>
    </p>
  </div>
</body>

</html>