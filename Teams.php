
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js"></script>

  <title>About Us - NCT Club</title>
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
      display: flex;
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



    /* Past Events in Dark Mode */
    .dark-mode .fc-event.past {
      background-color: darkred !important;
    }

    /* Upcoming Events in Dark Mode */
    .dark-mode .fc-event.upcoming {
      background-color: #0056b3 !important;
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

    .content {
      margin-left: 30px;
      padding: 80px 40px;
      flex-grow: 1;
      overflow-y: auto;
    }

    .section p2 {
      font-size: 16px;
      color: rgba(44, 44, 255, 0.821);
    }

    .section {
      background-color: white;
      padding: 20px;
      margin-bottom: 20px;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .section h2 {
      font-size: 24px;
      color: rgb(7, 9, 11);
      margin-bottom: 10px;
    }

    .section p {
      font-size: 16px;
      color: #555;
      line-height: 1.6;
    }

    .expandable {
      background-color: #004080;
      color: white;
      padding: 10px 15px;
      margin: 10px 0;
      border-radius: 4px;
      cursor: pointer;
      font-weight: bold;
    }

    .expandable:hover {
      background-color: #003366;
    }

    .expandable-content {
      display: none;
      padding: 15px;
      background-color: #e8f0fe;
      border-radius: 4px;
      margin-top: 10px;
    }

    .expandable i {
      float: right;
      padding-right: 10px;
    }

    .active+.expandable-content {
      display: block;
    }

    .aman {
      background-color: #f0f0f0;
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

    .both {
      display: flex;


    }

    .content2 {
      height 200px;
      width: 900px;
      padding-top: 120px;
      display: inline;
      padding-left: 250px;


    }

    .content2 a {
      text-decoration: none;
      color: #0073e6;
    }

    .contact-section h4 {
      font-size: 26px;
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
  <section class="both">
    <div class="content2">
      <div class="section">
        <h3>About</h3>
        <hr>
        <div class="subsection">
          <a href="#">
            <u>Our Team</u>
          </a>
        </div>
        <hr>
        <div class="subsection">
          <a href="">Student Testimonials</a>
        </div>
        <hr>
        <div class="subsection">
          <a href="">Brochures</a>
        </div>
        <hr>
        <div class="subsection">
          <a href="Privacy.php">Policies</a>
        </div>
        <hr>
        <div class="subsection">
          <a href="">Campus Safety</a>
        </div>
        <hr>
        <div class="subsection">
          <a href="">Accessibility Services</a>
          <hr>
        </div>
        <div class="subsection">
          <a href="">Key Performance Indicators (KPIs)</a>
        </div>
      </div>
    </div>
    </div>
    <div class="content">
      <div id="team" class="section">
        <h2>Our Team</h2>
        <p>
          Meet the Niagara College – Toronto (NCT) team! From our faculty to our
          staff, NCT is led by a dedicated team of higher education
          professionals whose top priority is to provide an enriching student
          experience. Our team strives to deliver the best education and situate
          our students in modern urban facilities with connections to the right
          employment opportunities. Our goal is to set you up for a rewarding
          career in the future.
        </p>
        <div class="expandable" onclick="toggleExpand(this)">
          <i class="fas fa-plus"></i>
          Leadership
        </div>
        <div class="expandable-content">
          <p>
            The Student Support team is students’ first point of contact. They
            are located at the Welcome Centre of our campus and greet students
            and visitors upon arrival. The team responds to general enquiries at
            the front desk and can help direct queries to and book appointments
            with the appropriate support teams as needed. The Student Support
            team provides assistance to students in person and via phone, email,
            and by live chat feature available on this website.
            <br />
            The <b>Student Support </b> team can be reached at
            <p2><b>info@niagaracollegetoronto.ca.</b> </p2>Main Campus Line:
            <p2><b>+1 647-799-4830 </b></p2> <br />
            <b>Student Support Manager</b>
            <b> Cherry Chan cherry.</b>
            <p2><b>chan@niagaracollegetoronto.ca.</b></p2>
          </p>
        </div>

        <div class="expandable" onclick="toggleExpand(this)">
          <i class="fas fa-plus"></i>
          Student Support Team
        </div>
        <div class="expandable-content">
          <p>
            The Student Support team is students’ first point of contact. They
            are located at the Welcome Centre of our campus and greet students
            and visitors upon arrival. The team responds to general enquiries at
            the front desk and can help direct queries to and book appointments
            with the appropriate support teams as needed. The Student Support
            team provides assistance to students in person and via phone, email,
            and by live chat feature available on this website.
            <br />
            The <b>Student Support </b> team can be reached at
            <p2><b>info@niagaracollegetoronto.ca.</b> </p2>Main Campus Line:
            <p2><b>+1 647-799-4830 </b></p2> <br />
            <b>Student Support Manager</b>
            <b> Cherry Chan cherry.</b>
            <p2><b>chan@niagaracollegetoronto.ca.</b></p2>
          </p>
        </div>
        <div class="expandable" onclick="toggleExpand(this)">
          <i class="fas fa-plus"></i>
          Student Services
        </div>
        <div class="expandable-content">
          <p>
            The Student Services team offers a wide range of services to help students succeed academically, personally,
            and professionally. In addition to providing students' support with administrative tasks, such as uploading
            documents and creating a Student Identification (ID) card, the Student Services team organizes non-academic
            workshops and events on matters such as travel, housing, mental health support, accessing government
            services,
            social engagement, employment, and more.
          </p>
          <br>
          <hr>
          <h2>Student Services </h2>
          <p>
            The Student Services team can be reached at <a
              href="mailto:studentservices@niagaracollegetoronto.ca">studentservices@niagaracollegetoronto.ca</a>.
          </p>
          <hr>
          <h2>Career Services</h2>
          <p>
            For career-related inquiries, contact the Career Services team at <a
              href="mailto:careerservices@niagaracollegetoronto.ca">careerservices@niagaracollegetoronto.ca</a>.
          </p>

          <p>
            For field placement information, email <a
              href="mailto:fieldplacement@niagaracollegetoronto.ca">fieldplacement@niagaracollegetoronto.ca</a>.
          </p>
          <hr>
          <h2>Health, Wellness and Community Services</h2>
          <p>
            Health, Wellness, and Community Services can be reached at <a
              href="mailto:hwcs@niagaracollegetoronto.ca">hwcs@niagaracollegetoronto.ca</a>.
          </p>
          <hr>
          <h2>Housing Services</h2>
          <p>
            Housing Services are available at <a
              href="mailto:housing@niagaracollegetoronto.ca">housing@niagaracollegetoronto.ca</a>.
          </p>
          <hr>
          <h2> Travel & Support Services</h2>
          <p>
            Travel Support Services can be contacted at <a
              href="mailto:torontotravelsupport@niagaracollegetoronto.ca">torontotravelsupport@niagaracollegetoronto.ca</a>.
          </p>
          <hr>
          <h2>Student Engagement</h2>
          <p>
            For student engagement, email <a
              href="mailto:studentengagement@niagaracollegetoronto.ca">studentengagement@niagaracollegetoronto.ca</a>.
          </p>

        </div>
        <div class="expandable" onclick="toggleExpand(this)">
          <i class="fas fa-plus"></i>
          Brochures
        </div>
        <div class="expandable-content">
          <p>
            Meet the leadership team at NCT Club. Our experienced professionals
            are dedicated to providing a supportive and enriching experience for
            all students.
          </p>
        </div>
        <div class="expandable" onclick="toggleExpand(this)"><i class="fas fa-plus"></i>
          Policies</div>
        <div class="expandable-content">
          <p>
            Meet the leadership team at NCT Club. Our experienced professionals
            are dedicated to providing a supportive and enriching experience for
            all students.
          </p>
        </div>
        <div class="expandable" onclick="toggleExpand(this)"><i class="fas fa-plus"></i>
          Safety</div>
        <div class="expandable-content">
          <p>
            Meet the leadership team at NCT Club. Our experienced professionals
            are dedicated to providing a supportive and enriching experience for
            all students.
          </p>
        </div>
        <div class="expandable" onclick="toggleExpand(this)"><i class="fas fa-plus"></i>
          Accessibility</div>
        <div class="expandable-content">
          <p>
            Meet the leadership team at NCT Club. Our experienced professionals
            are dedicated to providing a supportive and enriching experience for
            all students.
          </p>
        </div>
      </div>
    </div>
  </section>
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