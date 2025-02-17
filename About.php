<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Us - NCT Club</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />
    <style>
      body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
        display: flex;
        flex-direction: column;
        height: 100vh;
        overflow-x: hidden;
        box-sizing: border-box;
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

      .menu-btn {
        font-size: 20px;
        color: white;
        background: none;
        border: none;
        cursor: pointer;
        display: flex;
        align-items: center;
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
        color: #666;
        line-height: 1.6;
      }

      .show-sidebar {
        left: 0;
      }
    </style>
    <script>
      function toggleSidebar() {
        const sidebar = document.querySelector(".sidebar");
        sidebar.classList.toggle("show-sidebar");
      }

      function closeSidebar() {
        const sidebar = document.querySelector(".sidebar");
        sidebar.classList.remove("show-sidebar");
      }
    </script>
  </head>
  <body>
    <aside class="sidebar">
      <button class="close-btn" onclick="closeSidebar()">&times;</button>
      <a href="profile.html">Profile</a>
      <a href="#">Notification</a>
      <a href="Event">Upcoming Events</a>
      <a href="past-events.html">Past Events</a>
      <a href="event-history.html">Event History</a>
      <a href="#">Explore NCT</a>
      <a href="#">Settings</a>
      <a href="contact.html">Contact Us</a>
      <a href="About_us.html">About Us</a>
      <a href="logout.html">Logout</a>
    </aside>

    <header class="navbar">
      <div class="navbar-left">
        <button class="menu-btn" onclick="toggleSidebar()">&#9776;</button>
        <a href="home.html">Home</a>
        <a href="events.html">Events</a>
        <a href="profile.html">Profile</a>
        <a href="About_us.html">About Us</a>
      </div>
      <div class="nav-icons">
        <i class="fas fa-user" title="Profile"></i>
        <i class="fas fa-bell" title="Notifications"></i>
        <i class="fas fa-cog" title="Settings"></i>
        <i class="fas fa-sign-out-alt" title="Logout"></i>
      </div>
    </header>

    <section class="content-section">
      <h2>About NCT Club</h2>
      <div class="content-container">
        <p>
          The NCT Club is a dynamic student community focused on providing
          opportunities for engagement, growth, and networking. Our club
          organizes a variety of events, including workshops, cultural
          celebrations, and recreational activities to enrich the student
          experience.
        </p>
        <p>
          We adhere to core policies that promote inclusivity, safety, and
          respect. All members are encouraged to participate actively while
          upholding the values of integrity, collaboration, and continuous
          learning.
        </p>
        <p>
          Our mission is to foster a supportive environment where students can
          develop both personally and professionally through meaningful
          interactions and experiences.
        </p>
      </div>
    </section>
  </body>
</html>
