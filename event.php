<?php
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
include 'db_connect.php'; // Include your database connection file


// Fetch All Events
$result = $conn->query("SELECT * FROM events ORDER BY id DESC");
$events_json = [];
$today = date('Y-m-d');

while ($row = $result->fetch_assoc()) {
  $isPast = ($row['end_date'] < $today) ? true : false; // Check if event is past
  $events_json[] = [
    'title' => $row['event_name'],
    'start' => $row['start_date'] . 'T' . $row['start_time'],
    'end' => $row['end_date'] . 'T' . $row['end_time'],
    'description' => $row['description'],
    'location' => $row['location'],
    'status' => $isPast ? 'past' : 'upcoming' // Assign event status
  ];
}


if (!isset($_SESSION['email'])) {
  header("Location: login.html");
  exit();
}
$user_email = $_SESSION['email'];
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Event Management</title>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">


  <style>
    body {
      font-family: Arial, sans-serif;


      background-color: #f4f4f4;
      font-family: Arial, sans-serif;

      margin: 0;
      padding: 0;
      display: flex;
      flex-direction: column;
      height: 100vh;
      overflow-x: hidden;
      box-sizing: border-box;
      height: 100%;

    }

    .seperate {
      display: flex;
      margin: 20px;
      padding: 50px;
      padding-top: 100px;
      justify-self: flex-end;

      gap: 20px;
    }

    *,
    *::before,
    *::after {
      box-sizing: inherit;
    }

    .sidebar {
      width: 250px;
      background-color: #004080;
      color: white;
      position: fixed;
      height: 100%;
      left: -250px;
      transition: left 0.3s ease;
      box-shadow: 2px 0 5px rgba(0, 0, 0, 0.2);
      padding-top: 20px;
      z-index: 1000;
    }

    .sidebar a {
      display: block;
      padding: 15px 20px;
      color: white;
      text-decoration: none;
      font-weight: bold;
      transition: background-color 0.3s ease;
    }

    .sidebar a:hover {
      background-color: #003366;
    }

    .navbar {
      background-color: #004080;
      color: white;
      width: 100%;
      padding: 15px 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      position: fixed;
      top: 0;
      left: 0;
      z-index: 999;
    }

    .navbar-left {
      display: flex;
      align-items: center;
      gap: 20px;
    }

    .navbar-left a {
      color: white;
      text-decoration: none;
      font-weight: bold;
      transition: color 0.3s ease;
    }

    .navbar-left a:hover {
      color: #ffcc00;
    }

    .nav-icons {
      display: flex;
      gap: 20px;
      align-items: center;
    }

    .nav-icons i {
      font-size: 20px;
      cursor: pointer;
      transition: color 0.3s ease;
    }

    .nav-icons i:hover {
      color: #ffcc00;
    }

    .dropdown-menu {
      display: none;
      position: fixed;
      top: 40px;
      left: 260px;
      background-color: #333;
      padding: 10px 20px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      z-index: 999;
      border-radius: 8px;
      width: 15%;
    }

    .dropdown-menu a {
      display: block;
      color: white;
      padding: 8px 10px;
      text-decoration: none;
      font-size: 14px;
    }

    .dropdown-menu a:hover {
      background-color: #004080;
    }

    .about-link:hover .dropdown-menu {
      display: block;
    }

    .menu-btn {
      font-size: 20px;
      color: white;
      background: none;
      border: none;
      cursor: pointer;
      display: flex;
      align-items: center;
    }


    .containers {
      width: 50%;
      background: white;
      padding: 40px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      height: 100%;
      background-color: rgba(234, 228, 228, 0.87);


    }

    .event-form input,
    .event-form textarea,
    .event-form select {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
      border-radius: 5px;
      border: 1px solid #ddd;
    }

    .event-form button {
      background-color: #004080;
      color: white;
      border: none;
      padding: 10px;
      cursor: pointer;
      border-radius: 5px;
    }

    .event-list {
      width: 50%;
      background: white;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      background-color: rgba(234, 228, 228, 0.72);
    }

    #calendar {
      width: 100%;
      margin-top: 20px;
      border-radius: 10px;
      background: white;
      padding: 20px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .fc-event {
      padding: 5px;
      font-size: 14px;
      font-weight: bold;
      border-radius: 5px;
    }

    .fc-event.past {
      text-decoration: line-through;
      background-color: lightgray !important;
    }

    .fc-event.upcoming {
      background-color: #007bff !important;
      color: white !important;
    }

    .modal {
      display: none;
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background: white;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
      z-index: 1000;
    }

    .modal h3 {
      margin-bottom: 10px;
    }

    .modal button {
      background: red;
      color: white;
      padding: 8px;
      border: none;
      cursor: pointer;
      border-radius: 5px;
    }

    .modal-close {
      position: absolute;
      top: 10px;
      right: 15px;
      font-size: 20px;
      cursor: pointer;
    }

    .settings-sidebar {
      position: fixed;
      right: -300px;
      top: 0;
      width: 300px;
      height: 100%;
      background: #fff;
      box-shadow: -4px 0 10px rgba(0, 0, 0, 0.2);
      transition: right 0.3s ease;
      padding: 20px;
      z-index: 1000;
      color: #000;
      padding-top: 70px;
    }

    .settings-sidebar.open {
      right: 0;
    }

    .settings-sidebar h2 {
      text-align: center;
      font-size: 20px;
      margin-bottom: 15px;
      color: gray;
    }


    .settings-option {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin: 10px 0;
      font-size: 16px;

    }

    .settings-option .kk {
      padding-right: 13px;

    }

    .toggle-switch {
      position: relative;
      width: 40px;
      height: 20px;
      background: #ddd;
      border-radius: 10px;
      cursor: pointer;
    }

    .toggle-switch:before {
      content: "";
      position: absolute;
      width: 18px;
      height: 18px;
      background: white;
      border-radius: 50%;
      top: 1px;
      left: 2px;
      transition: 0.3s;
    }

    .toggle-switch.active {
      background: #004080;
    }

    .toggle-switch.active:before {
      left: 20px;
    }

    select,
    button {
      width: 100%;
      padding: 10px;
      margin-top: 10px;
      font-size: 14px;
      cursor: pointer;
    }

    /* Close Button */
    .close-btn {
      position: absolute;
      right: 9px;
      font-size: 50px;
      cursor: pointer;
      color: gray;


    }

    .close-btn:hover {
      color: red;
    }

    /* Dark Mode Adjustments */
    .dark-mode .settings-sidebar {
      background: #333;
      color: white;
    }

    .dark-mode select,
    .dark-mode button {
      background: #555;
      color: white;
      border: none;
    }

    .fc-event {
      padding: 5px;
      font-size: 14px;
      font-weight: bold;
      border-radius: 5px;
    }

    /* Past Events - Show Red with Strike-through */
    .fc-event.past {
      background-color: red !important;
      color: white !important;
      text-decoration: line-through;
    }

    /* Upcoming Events - Show Blue */
    .fc-event.upcoming {
      background-color: #007bff !important;
      color: white !important;
    }

    /* Dark Mode Improvements */
    .dark-mode {
      background-color: #181818;
      color: gray;
    }

    .dark-mode .containers,
    .dark-mode .event-list {
      background-color: #242424;
      color: gray;
    }

    .dark-mode .event-form input,
    .dark-mode .event-form textarea,
    .dark-mode .event-form select {
      background-color: #333;
      color: white;
      border: 1px solid #666;
    }

    /* Past Events in Dark Mode */
    .dark-mode .fc-event.past {
      background-color: darkred !important;
    }

    /* Upcoming Events in Dark Mode */
    .dark-mode .fc-event.upcoming {
      background-color: #0056b3 !important;
    }


    .nav-icons {
      display: flex;
      gap: 20px;
      align-items: center;
      position: relative;
    }

    .nav-icons i {
      font-size: 20px;
      cursor: pointer;
      transition: color 0.3s ease;
    }

    .nav-icons i:hover {
      color: #ffcc00;
    }

    .dropdown {
      position: relative;
      display: inline-block;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      right: 0;
      background-color: white;
      min-width: 200px;
      box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
      z-index: 999;
      border-radius: 5px;
      text-align: center;
    }

    .dropdown-content p {
      padding: 10px;
      margin: 0;
      font-weight: bold;
      color: #333;
      border-bottom: 1px solid #ddd;
    }

    .dropdown-content a {
      color: black;
      padding: 12px 16px;
      display: block;
      text-decoration: none;
      border-bottom: 1px solid #ddd;
    }

    .dropdown-content a:last-child {
      border-bottom: none;
    }

    .dropdown-content a:hover {
      background-color: #f1f1f1;
    }

    .dropdown:hover .dropdown-content {
      display: block;
    }
  </style>
  <script>

    function showSuccessMessage(message) {
      $(".success-message").text(message).fadeIn().delay(5000).fadeOut();
    }

    $(document).ready(function () {
      var calendarEl = document.getElementById('calendar');
      var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        events: <?php echo json_encode($events_json); ?>,
        eventClick: function (info) {
          let event = info.event.extendedProps;
          $("#eventModal").fadeIn();
          $("#modalTitle").text(info.event.title);
          $("#modalDescription").text(event.description);
          $("#modalLocation").text("📍 " + event.location);
          $("#modalTime").text("⏰ " + info.event.start.toLocaleString() + " - " + info.event.end.toLocaleString());
        }
      });
      calendar.render();

      $(".modal-close").click(function () {
        $(".modal").fadeOut();
      });
    });
    document.querySelector(".view-more").style.display = "none"; // Hide button after adding students

    function toggleRaise(element) {
      element.classList.toggle("raised");
    }
    function toggleSettings() {
      document.getElementById("settingsSidebar").classList.toggle("open");
    }

    $(document).ready(function () {
      var calendarEl = document.getElementById('calendar');
      var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        events: <?php echo json_encode($events_json); ?>,
        eventDidMount: function (info) {
          if (info.event.extendedProps.status === 'past') {
            info.el.classList.add('past'); // Past event styling
          } else {
            info.el.classList.add('upcoming'); // Upcoming event styling
          }
        }
      });
      calendar.render();
    });

    // Dark Mode Toggle Function
    function toggleDarkMode() {
      let body = document.body;
      body.classList.toggle("dark-mode");

      // Store dark mode state in local storage
      localStorage.setItem("darkMode", body.classList.contains("dark-mode") ? "enabled" : "disabled");
    }

    // Load Preferences (Retain Dark Mode State)
    function loadPreferences() {
      let darkModeStatus = localStorage.getItem("darkMode");
      if (darkModeStatus === "enabled") {
        document.body.classList.add("dark-mode");
      }
    }

    document.addEventListener("DOMContentLoaded", loadPreferences);


    function changePassword() {
      let newPassword = prompt("Enter your new password:");
      if (newPassword) {
        alert("✅ Password changed successfully! ");
      }
    }

    function editProfile() {
      alert("📝 Redirecting to profile settings page...");
      window.location.href = "profile.php"; // Change this to actual profile settings page
    }

    function reportProblem() {
      let issue = prompt("Describe your issue:");
      if (issue) {
        alert("📩 Your issue has been reported. We will get back to you soon.");
      }
    }




  </script>
</head>

<body>
  <aside class="sidebar">
    <button class="close-btn" onclick="closeSidebar()">&times;</button>
    <a href="#">Profile</a>
    <a href="#">Notification</a>
    <a href="#">Upcoming Events</a>
    <a href="#">Past Events</a>
    <a href="#">Event History</a>
    <a href="#">Explore NCT</a>
    <a href="#">Settings</a>
    <a href="#">Contact Us</a>
    <a href="About.php">About Us</a>
    <a href="#">Logout</a>
  </aside>

  <header class="navbar">
    <div class="navbar-left">
      <button class="menu-btn" onclick="toggleSidebar()">&#9776;</button>
      <a href="Home.php">Home</a>
      <a href="event.php">Events</a>
      <a href="profile.php">Profile</a>
      <div class="about-link">
        <a href="">About</a>
        <div class="dropdown-menu">
          <a href="Teams.php">Our Team</a>
          <a href="#">Student Testimonials</a>
          <a href="privacy.php">Policies</a>
          <a href="#">Accessibility Services</a>
        </div>
      </div>
    </div>
    <div class="nav-icons">
      <!-- Profile Dropdown -->
      <div class="dropdown">
        <i class="fas fa-user"></i>
        <div class="dropdown-content">
          <p><?php echo htmlspecialchars($user_email); ?></p>
        </div>
      </div>

      <!-- Logout Dropdown -->
      <div class="dropdown">
        <i class="fas fa-sign-out-alt"></i>
        <div class="dropdown-content">
          <p><?php echo htmlspecialchars($user_email); ?></p>
          <a href="Login.php">Switch Account</a>
          <a href="logout.php">Logout</a>
        </div>
      </div>

      <!-- Settings Icon -->
      <i class="fas fa-cog" title="Settings" onclick="toggleSettings()"></i>
    </div>

    <!-- Settings Sidebar -->
    <div class="settings-sidebar" id="settingsSidebar">
      <span class="close-btn" onclick="toggleSettings()">&times;</span>
      <h2>Settings</h2>

      <!-- Dark Mode -->
      <div class="settings-option">
        <span>Dark Mode</span>
        <div class="toggle-switch" id="darkModeToggle" onclick="toggleDarkMode()"></div>
      </div>

      <!-- Language Selection -->
      <div class="settings-option">
        <span class="kk"> Language </span>

        <select id="languageSelect">
          <option value="en">English</option>
          <option value="fr">French</option>
        </select>
      </div>

      <!-- Change Password -->
      <button onclick="changePassword()">Change Password</button>

      <!-- Profile Settings -->
      <button onclick="editProfile()">Edit Profile</button>

      <!-- Report a Problem -->
      <button onclick="reportProblem()">Report a Problem</button>
    </div>

  </header>
  <section class="seperate">
    <div class="containers">
      <h2>Create Event</h2>
      <div class="success-message"></div>
      <form class="event-form" action="event_management.php" method="POST" enctype="multipart/form-data">
        <input type="text" name="event_name" placeholder="Event Name" required>
        <input type="date" name="start_date" required>
        <input type="time" name="start_time" required>
        <input type="date" name="end_date" required>
        <input type="time" name="end_time" required>
        <input type="text" name="location" placeholder="Location" required>
        <select name="fee_option" id="fee_option" onchange="toggleFeeInput()">
          <option value="Free">Free</option>
          <option value="Paid">Paid</option>
        </select>
        <input type="number" id="fee_amount" name="fee_amount" placeholder="Amount (if paid)" style="display: none;">
        <textarea name="description" placeholder="Description" required></textarea>
        <input type="file" name="event_image">
        <button type="submit" name="create_event">Create Event</button>
      </form>
    </div>

    <div class="event-list">
      <h2>Upcoming Events</h2>
      <div id="calendar"></div>
    </div>

    <div id="eventModal" class="modal">
      <span class="modal-close">&times;</span>
      <h3 id="modalTitle"></h3>
      <p id="modalLocation"></p>
      <p id="modalTime"></p>
      <p id="modalDescription"></p>
    </div>
  </section>
  <script>
    function toggleFeeInput() {
      let feeOption = document.getElementById("fee_option").value;
      document.getElementById("fee_amount").style.display = (feeOption === "Paid") ? "block" : "none";
    }</script>
</body>

</html>