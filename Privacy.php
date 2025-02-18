<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Policies - Niagara College Toronto</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

  <style>
    body {


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

    .header {
      background: url(Images/img2.jpg) no-repeat;
      background-size: cover;
      background-position: center top;
      color: white;
      height: 35vh;
      margin-top: 60px;
      text-align: center;
      font-size: 24px;
      font-weight: bold;
    }


    *,
    *::before,
    *::after {
      box-sizing: inherit;
    }

    .sidebar {
      width: 250px;
      background-color: #05070aa3;
      color: white;
      position: fixed;
      height: 100%;
      left: -250px;
      transition: left 0.3s ease;
      box-shadow: 2px 0 5px rgba(0, 0, 0, 0.575);
      padding-top: 50px;
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
      background-color: #a5bccfa7;
    }

    .navbar {
      background-color: #004080;
      color: white;
      width: 100%;
      padding: 15px 20px;

      justify-content: space-between;
      align-items: center;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      position: fixed;
      top: 0;
      left: 0;
      z-index: 999;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      background-color: #004080;
      color: white;
      padding: 15px 20px;
      display: flex;

      align-items: center;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      z-index: 1000;
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

    .close-btn2 {
      position: absolute;
      top: 30px;
      right: 15px;
      cursor: pointer;
      height: 30px;
      width: 30px;
      color: gray;
      background-color: transparent;
    }

    .close-btn:hover {
      color: red;
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



    .content-section {
      flex-grow: 1;
      padding: 80px 20px;
      margin-left: 0;
      transition: margin-left 0.3s ease;
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
    }

    .content-container {
      max-width: 800px;
      background-color: white;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      padding: 20px;
      text-align: left;
    }

    h2 {
      color: #004080;
      margin-bottom: 20px;
    }

    p {
      font-size: 16px;
      color: white;
      line-height: 1.6;
    }

    .show-sidebar {
      left: 0;
    }

    .container {
      width: 60%;
      margin: auto;
      padding: 20px;
    }

    .container p2 {
      color: #004080;
      font-weight: bold;
      font-size: 20px;

    }

    .search-bar {
      display: flex;
      justify-content: space-between;
      margin-bottom: 20px;
      padding: 10px;
      background-color: #004080;
      gap: 5px;
      border-radius: 5px;
      margin-top: 10px;
    }

    .search-bar input,
    .search-bar select,
    .search-bar button {
      padding: 10px;
      border: 1px solid #ddd;
      border-radius: 5px;
    }

    .policy-table {
      width: 100%;
      border-collapse: collapse;
    }

    .policy-table th,
    .policy-table td {
      border: 1px solid #ddd;
      padding: 10px;
    }

    .policy-table th {
      background-color: #004080;
      color: white;
      text-align: left;
    }

    .policy-title a {
      color: #004080;
      font-weight: bold;
      text-decoration: none;
    }

    .policy-title a:hover {
      text-decoration: underline;
    }

    .bookmark-btn {
      background-color: #004080;
      color: white;
      border: none;
      padding: 10px;
      cursor: pointer;
      border-radius: 5px;
    }

    .pagination {
      text-align: center;
      margin-top: 20px;
      display: flex;
      height: 5vh;
      width: 10vh;
      padding-left: 45%;
      margin: 5px;
    }

    .pagination button {
      padding: 15px;
      margin: 5px;
      border: 1px solid #004080;
      background-color: white;
      color: #004080;
      cursor: pointer;
      border-radius: 5px;
    }

    .pagination button.active {
      background-color: #004080;
      color: white;
    }

    .contact-section {
      background-color: #333;
      color: white;
      padding: 50px 5%;
      display: flex;
      justify-content: center;
    }

    /* Flexbox container for form & map */
    .contact-container {
      display: flex;
      gap: 50px;
      width: 80%;
      max-width: 1200px;
    }

    /* Form styling */
    .contact-form {
      flex: 1;
      background: #444;
      padding: 20px;
      border-radius: 10px;
    }

    .contact-form h2 {
      font-size: 22px;
      margin-bottom: 10px;
    }

    .contact-form input,
    .contact-form select,
    .contact-form textarea {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      border: none;
      border-radius: 5px;
      background: #555;
      color: white;
    }

    .contact-form textarea {
      height: 80px;
    }

    .contact-form button {
      width: 100%;
      padding: 10px;
      background: #0073e6;
      color: white;
      border: none;
      cursor: pointer;
      margin-top: 15px;
      border-radius: 5px;
      font-weight: bold;
    }

    .contact-form button:hover {
      background: #005bb5;
    }

    /* Google Map section */
    .contact-map {
      flex: 1;
      background: #444;
      padding: 20px;
      border-radius: 10px;
      text-align: left;
    }

    .contact-map h2 {
      font-size: 22px;
      margin-bottom: 10px;
    }

    .contact-map iframe {
      width: 100%;
      height: 250px;
      border-radius: 10px;
    }

    /* Background styling */
    .contact-section {
      background-color: #3c3c3c;
      color: white;
      padding: 50px 5%;
      display: flex;
      justify-content: center;
    }

    /* Flexbox container for form & map */
    .contact-container {
      display: flex;
      gap: 50px;
      width: 80%;
      max-width: 1200px;
    }

    /* Form styling */
    .contact-form {
      flex: 1;
      background: #4a4a4a;
      padding: 20px;
      border-radius: 10px;
    }

    .contact-form h2 {
      font-size: 22px;
      margin-bottom: 10px;
    }

    .contact-form label {
      display: block;
      font-size: 14px;
      font-weight: bold;
      margin-top: 10px;
    }

    .contact-form input,
    .contact-form select,
    .contact-form textarea {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      border: none;
      border-radius: 5px;
      background: white;
      color: black;
    }

    .contact-form textarea {
      height: 80px;
      resize: vertical;
    }

    /* Checkboxes styling */
    .checkbox-group {
      display: flex;
      align-items: flex-start;
      gap: 10px;
      margin-top: 10px;
    }

    .checkbox-group input {
      width: 20px;
      height: 20px;
      margin-top: 2px;
    }

    /* Submit button */
    .contact-form button {
      width: 100%;
      padding: 10px;
      background: #0073e6;
      color: white;
      border: none;
      cursor: pointer;
      margin-top: 15px;
      border-radius: 5px;
      font-weight: bold;
    }

    .contact-form button:hover {
      background: #005bb5;
    }


    .contact-map {
      flex: 1;
      background: #3c3c3c;
      padding: 20px;
      border-radius: 10px;
      text-align: left;
    }

    .contact-map h2 {
      font-size: 22px;
      margin-bottom: 10px;
    }

    .contact-map iframe {
      width: 100%;
      height: 500px;
      /* Adjust for better visibility */
      border-radius: 10px;
    }

    /* Footer Background */
    .footer-section {
      background-color: #333;
      color: white;
      padding: 40px 5%;
    }

    /* Flexbox Layout */
    .footer-container {
      display: flex;
      justify-content: space-between;
      align-items: flex-start;
      max-width: 1200px;
      margin: auto;
      padding-bottom: 20px;
      border-bottom: 1px solid gray;
    }

    /* Left Section: Logo & Address */
    .footer-left img {
      width: 150px;
      margin-bottom: 10px;
    }

    /* Center Section: Social Media Icons */
    .footer-center {
      text-align: center;
    }

    .social-icons {
      display: flex;
      gap: 15px;
      justify-content: center;
      margin-top: 10px;
    }

    .social-icons a {
      color: white;
      font-size: 20px;
      transition: color 0.3s ease;
    }

    .social-icons a:hover {
      color: #0073e6;
    }

    /* Right Section: Useful Links */
    .footer-right {
      text-align: right;
    }

    .footer-links {
      display: flex;
      flex-direction: column;
      gap: 5px;
    }

    .footer-links a {
      color: white;
      text-decoration: none;
      transition: color 0.3s ease;
    }

    .footer-links a:hover {
      color: #0073e6;
    }

    /* Bottom Section */
    .footer-bottom {
      text-align: center;
      padding-top: 15px;
      font-size: 14px;
    }

    .footer-bottom p {
      margin: 5px 0;
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
    function toggleExpand(section) {
      section.classList.toggle("active");

      // Get the next sibling element (the expandable-content)
      let content = section.nextElementSibling;

      // Toggle display of the expandable-content
      if (content.style.display === "block") {
        content.style.display = "none";
        section.querySelector("i").classList.replace("fa-minus", "fa-plus");
      } else {
        content.style.display = "block";
        section.querySelector("i").classList.replace("fa-plus", "fa-minus");
      }
    }

    function toggleSettings() {
      document.getElementById("settingsSidebar").classList.toggle("open");
    }

    function toggleDarkMode() {
      let body = document.body;
      let darkModeToggle = document.getElementById("darkModeToggle");

      body.classList.toggle("dark-mode");
      darkModeToggle.classList.toggle("active");

      localStorage.setItem("darkMode", body.classList.contains("dark-mode") ? "enabled" : "disabled");
    }

    function changePassword() {
      let newPassword = prompt("Enter your new password:");
      if (newPassword) {
        alert("✅ Password changed successfully! ");
      }
    }

    function editProfile() {
      alert("📝 Redirecting to profile settings page...");
      window.location.href = "profile.php"; // Change this to the actual profile settings page
    }

    function reportProblem() {
      let issue = prompt("Describe your issue:");
      if (issue) {
        alert("📩 Your issue has been reported. We will get back to you soon.");
      }
    }

    function loadPreferences() {
      let darkModeStatus = localStorage.getItem("darkMode");
      if (darkModeStatus === "enabled") {
        document.body.classList.add("dark-mode");
        document.getElementById("darkModeToggle").classList.add("active");
      }
    }

    document.addEventListener("DOMContentLoaded", loadPreferences);
  </script>


</head>

<body>
  <aside class="sidebar">
    <button class="close-btn2" onclick="closeSidebar()">&times;</button>
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
  <div class="header">
    POLICIES
  </div>
  <div class="container">
    <p2>
      Niagara College - Toronto has implemented College Policies and Procedures to ensure consistency in the rules and
      regulations governing both academic and college life.
      <br>
    </p2>

    <div class="search-bar">
      <input type="text" id="searchInput" placeholder="Search for a policy, procedure, form or document..."
        onkeyup="searchPolicy()">
      <select id="categoryFilter" onchange="filterCategory()">
        <option value="all">All Policy Categories</option>
        <option value="student-records">Student Records, Rights and Responsibilities</option>
        <option value="health-safety-security">Health, Safety and Security</option>
        <option value="general-operations">General Operations</option>
        <option value="academic-standards-quality">Academic Standards and Quality</option>
        <option value="advertising-marketing">Advertising/Marketing and Promotion/Commercial Activities</option>
      </select>
      <button onclick="clearFilters()">Clear</button>
    </div>
    <table class="policy-table">
      <thead>
        <tr>
          <th>POLICY TITLE</th>
          <th>PROCEDURES</th>
          <th>Bookmark</th>
        </tr>
      </thead>
      <tbody id="policyTable">
        <tr data-category="student-records">
          <td class="policy-title"><a href="#">Academic Honesty Policy</a><br>
            Category: Student Records, Rights and Responsibilities<br>
            Last Reviewed/Revised: March 3, 2023
          </td>
          <td class="policy-title"><a href="#">Academic Misconduct PROC</a><br>
            Last Reviewed/Revised: March 3, 2023<br>
            Related Documents: <a href="#">Academic Misconduct FORM</a>
          </td>
          <td><button class="bookmark-btn">Bookmark this Policy</button></td>
        </tr>
        <tr data-category="student-records">
          <td class="policy-title"><a href="#">Appeal of Academic Decisions Policy</a><br>
            Category: Student Records, Rights and Responsibilities<br>
            Last Reviewed/Revised: March 3, 2023
          </td>
          <td class="policy-title"><a href="#">Appeal Of Academic Decisions procedure</a><br>
            Last Reviewed/Revised: March 3, 2023<br>
            Related Documents: <a href="#">Academic Misconduct FORM</a>
          </td>
          <td><button class="bookmark-btn">Bookmark this Policy</button></td>
        </tr>
        <tr data-category="student-records">
          <td class="policy-title"><a href="#">Academic Rights & Responsibilities Policy</a><br>
            Category: Student Records, Rights and Responsibilities<br>
            Last Reviewed/Revised: March 3, 2023
          </td>
          <td></td>
          <td><button class="bookmark-btn">Bookmark this Policy</button></td>
        </tr>
        <tr data-category="student-records">
          <td class="policy-title">
            <a href="#">Class Cancellations Policy</a><br>
            Category: Student Records, Rights and Responsibilities<br>
            Last Reviewed/Revised: March 3, 2023
          </td>
          <td class="policy-title">
            <a href="#">Class Cancellations PROC</a><br>
            Last Reviewed/Revised: March 3, 2023
          </td>
          <td><button class="bookmark-btn">Bookmark this Policy</button></td>
        </tr>
        <tr data-category="general-operations">
          <td class="policy-title">
            <a href="#">Copyright Compliance Policy</a><br>
            Category: General Operations<br>
            Last Reviewed/Revised: November 29, 2023
          </td>
          <td></td>
          <td><button class="bookmark-btn">Bookmark this Policy</button></td>
        </tr>
        <tr data-category="student-records">
          <td class="policy-title">
            <a href="#">Experiential Learning Policy</a><br>
            Category: Student Records, Rights and Responsibilities<br>
            Last Reviewed/Revised: March 3, 2023
          </td>
          <td></td>
          <td><button class="bookmark-btn">Bookmark this Policy</button></td>
        </tr>
        <tr data-category="health-safety-security">
          <td class="policy-title">
            <a href="#">First Aid Response Policy</a><br>
            Category: Health, Safety and Security<br>
            Last Reviewed/Revised: November 29, 2023
          </td>
          <td></td>
          <td><button class="bookmark-btn">Bookmark this Policy</button></td>
        </tr>
        <tr data-category="health-safety-security">
          <td class="policy-title">
            <a href="#">Imminent Threat Policy</a><br>
            Category: Health, Safety and Security<br>
            Last Reviewed/Revised: November 29, 2023
          </td>
          <td class="policy-title">
            <a href="#">Evacuation & Imminent Threat PROC</a><br>
            Last Reviewed/Revised: November 24, 2023<br>
            <a href="#">Shelter In Place Hold & Secure PROC</a><br>
            Last Reviewed/Revised: November 24, 2023<br>
            <a href="#">Active Threat PROC</a><br>
            Last Reviewed/Revised: December 20, 2023
          </td>
          <td><button class="bookmark-btn">Bookmark this Policy</button></td>
        </tr>
        <tr data-category="health-safety-security">
          <td class="policy-title">
            <a href="#">Lost & Found Policy</a><br>
            Category: Health, Safety and Security<br>
            Last Reviewed/Revised: November 29, 2023
          </td>
          <td></td>
          <td><button class="bookmark-btn">Bookmark this Policy</button></td>
        </tr>
        <tr data-category="student-records">
          <td class="policy-title">
            <a href="#">Missed Evaluations Policy</a><br>
            Category: Student Records, Rights and Responsibilities<br>
            Last Reviewed/Revised: March 3, 2023
          </td>
          <td class="policy-title">
            Related Documents: <a href="#">Academic Consideration Request FORM</a>
          </td>
          <td><button class="bookmark-btn">Bookmark this Policy</button></td>
        </tr>
        <tr data-category="academic-standards-quality">
          <td class="policy-title">
            <a href="#">Scheduling Policy</a><br>
            Category: Academic Standards and Quality<br>
            Last Reviewed/Revised: March 3, 2023
          </td>
          <td class="policy-title">
            <a href="#">Scheduling PROC</a><br>
            Last Reviewed/Revised: March 3, 2023
          </td>
          <td><button class="bookmark-btn">Bookmark this Policy</button></td>
        </tr>
        <tr data-category="health-safety-security">
          <td class="policy-title">
            <a href="#">Severe Weather Closures Policy</a><br>
            Category: Health, Safety and Security<br>
            Last Reviewed/Revised: November 29, 2023
          </td>
          <td></td>
          <td><button class="bookmark-btn">Bookmark this Policy</button></td>
        </tr>
        <tr data-category="health-safety-security">
          <td class="policy-title">
            <a href="#">Sexual & Gender Based Violence Policy</a><br>
            Category: Health, Safety and Security<br>
            Related Documents: <a href="#">2023 Annual Report on Sexual Violence</a><br>
            Last Reviewed/Revised: June 14, 2024
          </td>
          <td class="policy-title">
            <a href="#">Sexual & Gender Based Violence PROC</a><br>
            Last Reviewed/Revised: June 14, 2024<br>
            Related Documents: <a href="#">Sexual Violence Myths & Misconceptions</a>
          </td>
          <td><button class="bookmark-btn">Bookmark this Policy</button></td>
        </tr>
        <tr data-category="advertising-marketing">
          <td class="policy-title">
            <a href="#">Social Media Policy</a><br>
            Category: Advertising/Marketing and Promotion/Commercial Activities<br>
            Last Approval/Reviewing/Change(s): September 5, 2024
          </td>
          <td class="policy-title">
            <a href="#">Social Media Procedure</a><br>
            Last Reviewed/Revised: September 5, 2024
          </td>
          <td><button class="bookmark-btn">Bookmark this Policy</button></td>
        </tr>
        <tr data-category="student-records">
          <td class="policy-title">
            <a href="#">Student Accommodations Policy</a><br>
            Category: Student Records, Rights and Responsibilities<br>
            Last Reviewed/Revised: March 3, 2023
          </td>
          <td class="policy-title">
            <a href="#">Student Accommodations PROC</a><br>
            Last Reviewed/Revised: March 3, 2023<br>
            Related Documents: <a href="#">Functional Limitation Assessment FORM</a>
          </td>
          <td><button class="bookmark-btn">Bookmark this Policy</button></td>
        </tr>
        <tr data-category="student-records">
          <td class="policy-title">
            <a href="#">Student Code of Conduct Policy</a><br>
            Category: Student Records, Rights and Responsibilities<br>
            Last Reviewed/Revised: July 11, 2024
          </td>
          <td class="policy-title">
            <a href="#">Student Code Of Conduct PROC</a><br>
            Last Reviewed/Revised: July 11, 2024<br>
            Related Documents: <a href="#">Student Code Of Conduct Appeals PROC</a>
          </td>
          <td><button class="bookmark-btn">Bookmark this Policy</button></td>
        </tr>
        <tr data-category="student-records">
          <td class="policy-title">
            <a href="#">Student Evaluation Policy</a><br>
            Category: Student Records, Rights and Responsibilities<br>
            Related Documents: <a href="#">Academic Consideration Request FORM</a><br>
            Last Reviewed/Revised: March 3, 2023
          </td>
          <td></td>
          <td><button class="bookmark-btn">Bookmark this Policy</button></td>
        </tr>
        <tr data-category="general-operations">
          <td class="policy-title">
            <a href="#">Sustainability Policy</a><br>
            Category: General Operations<br>
            Last Reviewed/Revised: November 29, 2023
          </td>
          <td></td>
          <td><button class="bookmark-btn">Bookmark this Policy</button></td>
        </tr>
        <tr data-category="health-safety-security">
          <td class="policy-title">
            <a href="#">Tobacco, Cannabis and Smoking Policy</a><br>
            Category: Health, Safety and Security<br>
            Last Reviewed/Revised: June 14, 2024
          </td>
          <td></td>
          <td><button class="bookmark-btn">Bookmark this Policy</button></td>
        </tr>
        <tr data-category="health-safety-security">
          <td class="policy-title">
            <a href="#">Video Surveillance & Recording Policy</a><br>
            Category: Health, Safety and Security<br>
            Last Reviewed/Revised: June 14, 2024
          </td>
          <td></td>
          <td><button class="bookmark-btn">Bookmark this Policy</button></td>
        </tr>
        <tr data-category="health-safety-security">
          <td class="policy-title">
            <a href="#">Weapons on Campus Policy</a><br>
            Category: Health, Safety and Security<br>
            Last Reviewed/Revised: June 14, 2024
          </td>
          <td></td>
          <td><button class="bookmark-btn">Bookmark this Policy</button></td>
        </tr>
        <tr data-category="health-safety-security">
          <td class="policy-title">
            <a href="#">Sexual & Gender Based Violence Policy</a><br>
            Category: Health, Safety and Security<br>
            Related Documents: <a href="#">2023 Annual Report on Sexual Violence</a><br>
            Last Reviewed/Revised: June 14, 2024
          </td>
          <td class="policy-title">
            <a href="#">Sexual & Gender Based Violence PROC</a><br>
            Last Reviewed/Revised: June 14, 2024<br>
            Related Documents: <a href="#">Sexual Violence Myths & Misconceptions</a>
          </td>
          <td><button class="bookmark-btn">Bookmark this Policy</button></td>
        </tr>

        <tr data-category="advertising-marketing">
          <td class="policy-title">
            <a href="#">Social Media Policy</a><br>
            Category: Advertising/Marketing and Promotion/Commercial Activities<br>
            Last Approval/Reviewing/Change(s): September 5, 2024
          </td>
          <td class="policy-title">
            <a href="#">Social Media Procedure</a><br>
            Last Reviewed/Revised: September 5, 2024
          </td>
          <td><button class="bookmark-btn">Bookmark this Policy</button></td>
        </tr>

        <tr data-category="student-records">
          <td class="policy-title">
            <a href="#">Student Accommodations Policy</a><br>
            Category: Student Records, Rights and Responsibilities<br>
            Last Reviewed/Revised: March 3, 2023
          </td>
          <td class="policy-title">
            <a href="#">Student Accommodations PROC</a><br>
            Last Reviewed/Revised: March 3, 2023<br>
            Related Documents: <a href="#">Functional Limitation Assessment FORM</a>
          </td>
          <td><button class="bookmark-btn">Bookmark this Policy</button></td>
        </tr>

        <tr data-category="student-records">
          <td class="policy-title">
            <a href="#">Student Code of Conduct Policy</a><br>
            Category: Student Records, Rights and Responsibilities<br>
            Last Reviewed/Revised: July 11, 2024
          </td>
          <td class="policy-title">
            <a href="#">Student Code Of Conduct PROC</a><br>
            Last Reviewed/Revised: July 11, 2024<br>
            Related Documents: <a href="#">Student Code Of Conduct Appeals PROC</a>
          </td>
          <td><button class="bookmark-btn">Bookmark this Policy</button></td>
        </tr>

        <tr data-category="student-records">
          <td class="policy-title">
            <a href="#">Student Evaluation Policy</a><br>
            Category: Student Records, Rights and Responsibilities<br>
            Related Documents: <a href="#">Academic Consideration Request FORM</a><br>
            Last Reviewed/Revised: March 3, 2023
          </td>
          <td></td>
          <td><button class="bookmark-btn">Bookmark this Policy</button></td>
        </tr>

        <tr data-category="general-operations">
          <td class="policy-title">
            <a href="#">Sustainability Policy</a><br>
            Category: General Operations<br>
            Last Reviewed/Revised: November 29, 2023
          </td>
          <td></td>
          <td><button class="bookmark-btn">Bookmark this Policy</button></td>
        </tr>

        <tr data-category="health-safety-security">
          <td class="policy-title">
            <a href="#">Tobacco, Cannabis and Smoking Policy</a><br>
            Category: Health, Safety and Security<br>
            Last Reviewed/Revised: June 14, 2024
          </td>
          <td></td>
          <td><button class="bookmark-btn">Bookmark this Policy</button></td>
        </tr>

        <tr data-category="health-safety-security">
          <td class="policy-title">
            <a href="#">Video Surveillance & Recording Policy</a><br>
            Category: Health, Safety and Security<br>
            Last Reviewed/Revised: June 14, 2024
          </td>
          <td></td>
          <td><button class="bookmark-btn">Bookmark this Policy</button></td>
        </tr>

        <tr data-category="health-safety-security">
          <td class="policy-title">
            <a href="#">Weapons on Campus Policy</a><br>
            Category: Health, Safety and Security<br>
            Last Reviewed/Revised: June 14, 2024
          </td>
          <td></td>
          <td><button class="bookmark-btn">Bookmark this Policy</button></td>
        </tr>
        <tr data-category="General Operations">
          <td class="policy-title">
            <a href="#"><br>
              Last Reviewed/Revised: November 29, 2023
          </td>
          <td></td>
          <td><button class="bookmark-btn">Bookmark this Policy</button></td>
        </tr>



      </tbody>
    </table>
    <div class="pagination" id="pagination"></div>
  </div>

  <script>
    let allPolicies = Array.from(document.querySelectorAll("#policyTable tr"));
    let filteredPolicies = [...allPolicies];
    let currentPage = 1;
    let rowsPerPage = 10;

    function displayPolicies() {
      let table = document.getElementById("policyTable");
      table.innerHTML = "";
      let start = (currentPage - 1) * rowsPerPage;
      let end = start + rowsPerPage;
      let paginatedItems = filteredPolicies.slice(start, end);
      paginatedItems.forEach(row => table.appendChild(row));
      updatePagination();
    }

    function updatePagination() {
      let pagination = document.getElementById("pagination");
      pagination.innerHTML = "";
      let pageCount = Math.ceil(filteredPolicies.length / rowsPerPage);
      for (let i = 1; i <= pageCount; i++) {
        let btn = document.createElement("button");
        btn.textContent = i;
        btn.classList.toggle("active", i === currentPage);
        btn.onclick = () => {
          currentPage = i;
          displayPolicies();
        };
        pagination.appendChild(btn);
      }
    }

    function filterCategory() {
      let selectedCategory = document.getElementById("categoryFilter").value;
      filteredPolicies = selectedCategory === "all" ? [...allPolicies] : allPolicies.filter(row => row.getAttribute("data-category") === selectedCategory);
      currentPage = 1;
      displayPolicies();
    }

    function searchPolicy() {
      let input = document.getElementById("searchInput").value.toLowerCase();
      filteredPolicies = allPolicies.filter(row => row.textContent.toLowerCase().includes(input));
      currentPage = 1;
      displayPolicies();
    }

    function clearFilters() {
      document.getElementById("searchInput").value = "";
      document.getElementById("categoryFilter").value = "all";
      filteredPolicies = [...allPolicies];
      currentPage = 1;
      displayPolicies();
    }

    document.addEventListener("DOMContentLoaded", () => {
      allPolicies = Array.from(document.querySelectorAll("#policyTable tr"));
      filteredPolicies = [...allPolicies];
      displayPolicies();
    });
    function toggleSidebar() {
      const sidebar = document.querySelector(".sidebar");
      sidebar.classList.toggle("show-sidebar");
    }

    function closeSidebar() {
      const sidebar = document.querySelector(".sidebar");
      sidebar.classList.remove("show-sidebar");
    }
  </script>
  <section class="contact-section">
    <div class="contact-container">
      <!-- Left: Contact Form -->
      <div class="contact-form">
        <h4>Get IN Touch</h4>
        <p>An asterisk (*) indicates a required field.</p>

        <form action="#" method="POST">
          <label for="first-name">FIRST NAME*</label>
          <input type="text" id="first-name" name="first-name" placeholder="First Name" required>

          <label for="last-name">LAST NAME*</label>
          <input type="text" id="last-name" name="last-name" placeholder="Last Name" required>

          <label for="email">EMAIL*</label>
          <input type="email" id="email" name="email" placeholder="Email" required>

          <label for="phone">TELEPHONE*</label>
          <input type="tel" id="phone" name="phone" placeholder="Telephone (use only numeric characters)" required>

          <label for="nationality">NATIONALITY*</label>
          <select id="nationality" name="nationality" required>
            <option value="">Nationality</option>
            <option value="Canada">Canada</option>
            <option value="USA">USA</option>
          </select>

          <label for="country">COUNTRY OF RESIDENCE*</label>
          <select id="country" name="country" required>
            <option value="Canada">Canada</option>
            <option value="USA">USA</option>
          </select>

          <label for="city">CITY*</label>
          <input type="text" id="city" name="city" placeholder="City" required>

          <label for="program">PROGRAM*</label>
          <select id="program" name="program" required>
            <option value="">Program</option>
            <option value="Business">Business</option>
            <option value="IT">IT</option>
          </select>

          <label for="education">LEVEL OF ENGLISH*</label>
          <select id="education" name="education" required>
            <option value="">Select</option>
            <option value="Basic">Basic</option>
            <option value="Fluent">Fluent</option>
          </select>

          <label for="funding">FUNDING*</label>
          <select id="funding" name="funding" required>
            <option value="">Select</option>
            <option value="Scholarship">Scholarship</option>
            <option value="Self-funded">Self-funded</option>
          </select>

          <label for="comments">COMMENTS</label>
          <textarea id="comments" name="comments" placeholder="Write your comments..."></textarea>

          <!-- Checkboxes -->
          <div class="checkbox-group">
            <input type="checkbox" id="subscribe" name="subscribe">
            <label for="subscribe">I consent to receiving news, special offers, and other marketing emails from TSoM
              about Niagara College – Toronto.</label>
          </div>

          <div class="checkbox-group">
            <input type="checkbox" id="updates" name="updates">
            <label for="updates">I would like to receive WhatsApp updates specific to my program of interest,
              application status, and approaching deadlines from Niagara College – Toronto.</label>
          </div>

          <button type="submit">SUBMIT</button>
        </form>
      </div>

      <!-- Right: Google Map & Address -->
      <div class="contact-map">
        <h4>Direction to our Campus </h4>
        <p>Niagara College – Toronto is located in the much-loved, recently revamped community of Mirvish Village. Our
          spacious new campus accommodates our growing student population in three new buildings, with over 65,450
          square feet of brand-new facilities.</p>

        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2886.317013838267!2d-79.39960978450772!3d43.65959847912132!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b34b88e81b7b9%3A0x55f1721dc4a19e6f!2sNiagara%20College%20Toronto!5e0!3m2!1sen!2sca!4v1613592541239!5m2!1sen!2sca"
          width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy">
        </iframe>
      </div>

    </div>
    </div>
  </section>
  <footer class="footer-section">
    <div class="footer-container">
      <!-- Left: Logo & Address -->
      <div class="footer-left">
        <img src="images/Niagara College Toronto Logo.png" alt="Niagara College Logo">
        <p><strong>Niagara College – Toronto Campuses</strong></p>
        <p>Mirvish Campus</p>
        <p>740 Bathurst Street, Toronto, ON M5S 2R6, Canada</p>
        <p>Designated Learning Institute Number: 0146982877972</p>

      </div>

      <!-- Middle: Social Media Icons -->
      <div class="footer-center">
        <p><strong>Stay Connected on</strong></p>
        <div class="social-icons">
          <a href="#"><i class="fa-brands fa-facebook"></i></a>
          <a href="#"><i class="fa-brands fa-instagram"></i></a>
          <a href="#"><i class="fa-brands fa-youtube"></i></a>
          <a href="#"><i class="fa-brands fa-linkedin"></i></a>
          <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
          <a href="#"><i class="fa-brands fa-tiktok"></i></a>
        </div>
      </div>

      <!-- Right: Useful Links -->
      <div class="footer-right">
        <p><strong>Useful Links</strong></p>
        <div class="footer-links">
          <a href="Home.html">Home</a>
          <a href="#">Privacy Statement</a>
          <a href="#">Accessibility Statement</a>
          <a href="#">Terms and Conditions</a>
          <a href="#">Contact Us</a>
          <a href="#">Sitemap</a>
        </div>
      </div>
    </div>

    <!-- Bottom: Copyright & Land Acknowledgement -->
    <div class="footer-bottom">
      <p>© 2023 Niagara College – Toronto. All Rights Reserved.</p>
      <p><strong>Land Acknowledgement</strong></p>
      <p>We acknowledge the land we are meeting on is the traditional territory of many nations including
        the Mississaugas of the Credit, the Anishnabeg, the Chippewa, the Haudenosaunee, and the Wendat peoples
        and is now home to many diverse First Nations, Inuit and Métis peoples. We also acknowledge that Toronto
        is covered by Treaty 13 with the Mississaugas of the Credit.</p>
    </div>
  </footer>
</body>

</html>