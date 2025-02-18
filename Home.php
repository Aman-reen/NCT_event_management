
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

  <title>NCT Club Home</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
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
      justify-content: space-between;
      align-items: center;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      z-index: 1000;
    }

    .navbar-left {
      display: flex;
      align-items: center;
      gap: 20px;
      position: relative;
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

    .hero-section {
      flex-grow: 1;
      padding: 80px 20px;
      margin-left: 0;
      transition: margin-left 0.3s ease;
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
    }

    .hero-section p {
      font-size: 30px;
      color: black;
      font-weight: bold;

      font-size: 25px;
    }

    .hero-section h2 {
      margin-top: 90px;
      font-weight: bold;
      font-size: 50px;
    }

    .grid-container {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 20px;
      padding: 20px;
      margin-top: 300px;
      max-width: 1200px;
      width: 100%;
    }

    .card {
      background-color: white;

      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      padding: 20px;
      text-align: center;
      transition: transform 0.3s ease;
    }

    .card:hover {
      transform: translateY(-5px);
    }

    .card h3 {
      font-size: 20px;
      color: #004080;
      margin-bottom: 10px;
    }

    .card p {
      font-size: 14px;
      color: #666;
    }

    .card a {
      display: inline-block;
      margin-top: 10px;
      padding: 8px 12px;
      background-color: #004080;
      color: white;
      text-decoration: none;
      border-radius: 5px;
      font-weight: bold;
      transition: background-color 0.3s ease;
    }

    .card a:hover {
      background-color: #003366;
    }

    .show-sidebar {
      left: 0;
    }

    @media (max-width: 768px) {
      .nav-icons {
        display: none;
      }

      .navbar-left {
        flex-direction: column;
        gap: 10px;
      }

      .hero-section {
        padding: 60px 10px;
      }

      .grid-container {
        grid-template-columns: 1fr;
      }
    }

    @media (max-width: 480px) {
      .navbar-left {
        font-size: 14px;
        gap: 5px;
      }

      .hero-section h2 {
        font-size: 24px;
      }

      .hero-section p {
        font-size: 14px;
      }
    }

    .hero-section {
      flex-grow: 1;
      padding: 80px 20px;
      margin-left: 0;
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
      height: 100vh;
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      animation: changeBackground 20s infinite ease-in-out;
    }

    @keyframes changeBackground {

      0%,
      25% {
        background-image: url("Images/home_back1.jpeg");
      }

      31%,
      50% {
        background-image: url("images/home_back2.jpg");
      }

      56%,
      75% {
        background-image: url("images/home_back4.jpeg");
      }

      81%,
      100% {
        background-image: url("images/home_back3.jpg");
      }
    }

    .close-btn2 {
      margin-top: 50px;
    }

    .section-two {
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 50px 10%;
      background-color: #fff;
    }

    .content-container {
      display: flex;
      max-width: 1200px;
      width: 100%;
      align-items: center;
      justify-content: space-between;
      gap: 40px;
    }

    .text {
      flex: 1;
      max-width: 600px;
    }

    .text h2 {
      font-size: 28px;
      color: #000;
      margin-bottom: 15px;
    }

    .text p {
      font-size: 16px;
      color: #333;
      line-height: 1.6;
    }

    .section-two {
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 50px 10%;
      background-color: #fff;
    }

    .content-container {
      display: flex;
      max-width: 1200px;
      width: 100%;
      align-items: center;
      justify-content: space-between;
      gap: 40px;
    }

    .text {
      flex: 1;
      max-width: 600px;
    }

    .text h2 {
      font-size: 28px;
      color: #000;
      margin-bottom: 15px;
    }

    .text p {
      font-size: 16px;
      color: #333;
      line-height: 1.6;
    }

    .learn-more {
      padding: 10px 20px;
      font-size: 16px;
      background-color: #004080;
      color: rgb(236, 228, 228);
      border: none;
      cursor: pointer;
      border-radius: 5px;
      margin-top: 10px;
    }

    .learn-more:hover {
      background-color: #003366;
    }

    .video-container {
      flex: 1;
      max-width: 600px;
      margin-left: 50px;
    }

    .video-container iframe {
      width: 100%;
      height: 380px;
      border-radius: 10px;
      border: 2px solid #004080;
    }

    .instagram-section {
      text-align: center;
      background-color: #f0f0f0;
      padding: 40px 20px;
      position: relative;
    }

    /* Top Right Instagram Icon */
    .top-right-instagram {
      position: absolute;
      top: 20px;
      right: 20px;
    }

    .top-right-instagram img {
      width: 50px;
      cursor: pointer;
    }

    /* Instagram Grid Layout */
    .instagram-grid {
      display: flex;
      justify-content: center;
      gap: 20px;
      flex-wrap: wrap;
    }

    .instagram-item {
      position: relative;
      width: 250px;
      height: 250px;
      cursor: pointer;
    }

    .instagram-item img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      border-radius: 10px;
      transition: transform 0.3s ease;
    }

    .instagram-item:hover img {
      transform: scale(1.1);
    }

    /* Small Instagram Icon in Bottom Right */
    .insta-icon {
      position: absolute;
      bottom: 10px;
      right: 10px;
    }

    .insta-icon img {
      width: 25px;
      height: 25px;
      cursor: pointer;
    }

    .contenteses {
      width: 100%;
      height: 100%;
      top: 0;
      left: 0;
      position: absolute;
      background: rgba(0, 0, 0, 0.47);
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      opacity: 0;
      transition: 0.6s;

    }

    .contenteses:hover {
      opacity: 1;
    }

    .contenteses h1 {
      font-size: 45px;
      color: #ffe100;
      margin-bottom: 15px;

    }

    .contenteses p {
      font-size: 19px;
      color: #fff;
    }

    contenteses>* {
      transform: translateY(25px);
      transition: transform 0.6s;
    }

    contenteses :hover>* {
      transform: translateY(0px);

    }

    .contentes {
      width: 100%;
      height: 100%;
      top: 0;
      left: 0;
      position: absolute;
      background: rgba(0, 0, 0, 0.47);
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      opacity: 0;
      transition: 0.6s;

    }

    .contentes:hover {
      opacity: 1;
    }

    .contentes h1 {
      font-size: 45px;
      color: #ffe100;
      margin-bottom: 15px;

    }

    .contentes p {
      font-size: 19px;
      color: #fff;
    }

    contentes>* {
      transform: translateY(25px);
      transition: transform 0.6s;
    }

    contentes :hover>* {
      transform: translateY(0px);

    }

    /* Popup Message */
    .popup {
      display: none;
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background: white;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
      text-align: center;
      z-index: 1000;
    }

    .popup button {
      margin-top: 10px;
      padding: 8px 12px;
      background-color: #004080;
      color: white;
      border: none;
      cursor: pointer;
      border-radius: 5px;
    }

    /* Top Right Instagram Icon */
    .top-right-instagram {
      position: absolute;
      top: 20px;
      right: 20px;
      font-size: 40px;
      /* Adjust size */
      color: #004080;
      /* Instagram icon color */
    }

    .top-right-instagram i {
      transition: color 0.3s ease;
    }

    .top-right-instagram i:hover {
      color: #ff007f;
      /* Instagram's pink color on hover */
    }

    /* Small Instagram Icon on Each Image */
    .insta-icon {
      position: absolute;
      bottom: 10px;
      right: 10px;
      font-size: 20px;
      color: #ffffff;
      background: rgba(0, 0, 0, 0.5);
      padding: 5px;
      border-radius: 50%;
      transition: background 0.3s ease;
    }

    .insta-icon:hover {
      background: rgba(255, 255, 255, 0.7);
      color: #ff007f;
    }

    /* Background styling */
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

    /* Main Info Section */
    /* Main Info Section */
    /* Main Container */
    .info-section {
      text-align: center;
      margin: 40px auto;
      position: relative;
    }

    /* Box Container */
    .info-container {
      display: flex;
      justify-content: center;
      gap: 20px;
    }

    /* Individual Boxes */
    .info-box {
      position: relative;
      width: 22%;
      overflow: hidden;
      border-radius: 10px;
      cursor: pointer;
      transition: transform 0.3s ease;
    }

    .info-box img {
      width: 100%;
      display: block;
    }

    /* Blue Text Box */
    .info-text {
      position: absolute;
      bottom: 0px;

      color: white;
      background-color: #004080;
      width: 100%;
      height: 100%;
      padding: 10px;
      text-align: left;
      transition: bottom 0.3s ease;
      text-align: center;
      padding-top: 100px;
      font-weight: bold;
      font-size: 18px;
    }

    /* Raised Effect when Clicked */
    .info-box.raised .info-text {
      visibility: hidden;
    }

    /* Dot Indicator */
    .dot-indicator {
      margin: 10px auto;
      width: 8px;
      height: 8px;
      background-color: #004080;
      border-radius: 50%;
    }


    /* Student Section */
    .students-section {
      text-align: center;
      margin-top: 50px;
    }

    .student-container {
      display: flex;
      justify-content: center;
      gap: 30px;
      flex-wrap: wrap;
    }

    .student-box {
      position: relative;
      text-align: center;
      cursor: pointer;
      width: 150px;
    }

    .student-box img {
      width: 150px;
      height: 150px;
      border-radius: 50%;
    }

    .play-icon {
      position: absolute;
      bottom: 10px;
      right: 10px;
      background-color: #0073e6;
      color: white;
      width: 30px;
      height: 30px;
      display: flex;
      align-items: center;
      justify-content: center;
      border-radius: 50%;
      font-size: 16px;
    }

    /* View More Button */
    .view-more {
      margin-top: 20px;
      padding: 10px 20px;
      background: #0073e6;
      color: white;
      border: none;
      cursor: pointer;
      border-radius: 5px;
    }

    .view-more:hover {
      background: #005bb5;
    }

    /* Video Popup */
    .video-popup {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.7);
      align-items: center;
      justify-content: center;
    }

    .popup-content {
      background: white;
      padding: 20px;
      border-radius: 10px;
      text-align: center;
      position: relative;
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

    .parallax-section {
      background: url('Images/toronto.webp') no-repeat center center fixed;
      background-size: contain;
      /* Ensures the entire image fits within the container */
      background-attachment: fixed;
      height: 30vh;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      color: white;
      font-size: 24px;
      font-weight: bold;
      padding: 20px;
    }

    .content {
      background: rgba(0, 0, 0, 0.5);
      /* Dark overlay */
      padding: 40px;
      border-radius: 10px;
    }

    .cta-button {
      display: inline-block;
      margin-top: 50px;
      padding: 12px 24px;
      background-color: #007bff;
      color: white;
      font-size: 18px;
      border-radius: 5px;
      text-decoration: none;
      transition: 0.3s ease;
    }

    .cta-button:hover {
      background-color: #0056b3;
    }

    /* Dummy content for scrolling */
    .spacer {
      height: 20vh;
      background-color: #f1f1f1;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 24px;
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

    /* Settings Sidebar */
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
  </style>
  <script>
    function toggleSidebar() {
      const sidebar = document.querySelector(".sidebar");
      sidebar.classList.toggle("show-sidebar");
    }

    function closeSidebar() {
      const sidebar = document.querySelector(".sidebar");
      sidebar.classList.remove("show-sidebar");

      function toggleSidebar() {
        const sidebar = document.querySelector(".sidebar");
        sidebar.classList.toggle("show-sidebar");
      }
    }


    function playVideo(videoUrl) {
      document.getElementById("videoFrame").src = videoUrl;
      document.getElementById("videoPopup").style.display = "flex";
    }

    function closeVideo(event) {
      if (!event || event.target.id === "videoPopup") {
        document.getElementById("videoPopup").style.display = "none";
        document.getElementById("videoFrame").src = ""; // Stop video when closed
      }
    }


    document.querySelector(".view-more").style.display = "none"; // Hide button after adding students

    function toggleRaise(element) {
      element.classList.toggle("raised");
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
      window.location.href = "profile.php"; // Change this to actual profile settings page
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
      <a href="home.php">Home</a>
      <a href="event.php">Events</a>
      <a href="profile.php">Profile</a>
      <div class="about-link">
        <a href="">About</a>
        <div class="dropdown-menu">
          <a href="Teams.php">Our Team</a>
          <a href="#">Student Testimonials</a>
          <a href="About.php">Policies</a>
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

  <section class="hero-section">
    <h2>Welcome to the NCT Club Portal</h2>
    <p>
      Navigate through your portal to explore events, update your profile, and
      manage your account.
    </p>

    <section class="grid-container">
      <div class="card">
        <h3>View Upcoming Events</h3>
        <p>Check out all the events organized by the NCT Club.</p>
        <a href="event.html">View Events</a>
      </div>

      <div class="card">
        <h3>Update Your Profile</h3>
        <p>Keep your profile information up to date.</p>
        <a href="profile.html">Edit Profile</a>
      </div>

      <div class="card">
        <h3>Contact Support</h3>
        <p>Need help? Contact the NCT Club support team.</p>
        <a href="mailto:studentservices@niagaracollegetoronto.ca">Email Support</a>
      </div>
    </section>

  </section>
  <section class="section-two">
    <div class="content-container">
      <div class="text">
        <h2>Welcome to Niagara College – Toronto</h2>
        <p>
          Niagara College and the Toronto School of Management have partnered
          to offer Niagara College's most sought-after programs in the City of
          Toronto, Ontario. You can now study at one of the most innovative
          institutions in Canada while getting access to the significant
          employment and entertainment opportunities offered by one of
          Canada’s largest and most multicultural cities.
        </p>
        <a href="https://www.niagaracollegetoronto.ca/about">
          <button class="learn-more">Learn More</button>
        </a>
      </div>
      <div class="video-container">
        <iframe src="https://www.youtube.com/embed/yj6ZeXHCveA" title="Niagara College – Toronto Mirvish Campus Tour"
          frameborder="0" allowfullscreen>
        </iframe>
      </div>
    </div>
  </section>
  <!-- Instagram -->
  <section class="instagram-section">
    <h2>Follow us on Instagram</h2>

    <div class="top-right-instagram">
      <a href="https://www.instagram.com/niagaracollegecanada/" target="_blank">
        <i class="fa-brands fa-instagram"></i>
      </a>
    </div>


    <div class="instagram-grid">
      <div class="instagram-item">
        <img src="images/home_back2.jpg" alt="Image cannot be found" />
        <div class="contenteses">
          <h1>2025</h1>
          <p>Happy New Year
          <p>
        </div>
        <a href="https://www.instagram.com/niagaracollegecanada/" target="_blank" class="insta-icon">
          <i class="fa-brands fa-instagram"></i>
        </a>
      </div>

      <div class="instagram-item">
        <img src="images/newyear1.jpeg" alt="Happy New Year" />
        <div class="contenteses">
          <h1>2025</h1>
          <p>Happy New Year
          <p>
        </div>
        <a href="https://www.instagram.com/niagaracollegecanada/" target="_blank" class="insta-icon">
          <i class="fa-brands fa-instagram"></i>
        </a>
      </div>

      <div class="instagram-item" onclick="showPopup('Happy Boxing Day! 🎁')">
        <img src="Images/home_back3.jpg" alt="Happy Boxing Day" />
        <div class="contenteses">
          <h1>2025</h1>
          <p>Happy Boxing Day!
          <p>
        </div>
        <a href="https://www.instagram.com/niagaracollegecanada/" target="_blank" class="insta-icon">
          <i class="fa-brands fa-instagram"></i>
        </a>
      </div>

      <div class="instagram-item" onclick="showPopup('Happy Boxing Day! 🎁')">
        <img src="images/box2.png" alt="Happy Boxing Day" />
        <div class="contenteses">
          <h1>2025</h1>
          <p>Happy Boxing Day!
          <p>
        </div>
        <a href="https://www.instagram.com/niagaracollegecanada/" target="_blank" class="insta-icon">
          <i class="fa-brands fa-instagram"></i>
        </a>
      </div>
    </div>
    <div id="popup" class="popup">
      <p id="popup-message"></p>
      <button onclick="closePopup()">Close</button>
    </div>
  </section>
  </section>

  <section class="info-section">
    <div class="info-container">
      <div class="info-box" onclick="toggleRaise(this)">
        <img src="Images/jetha.jpg" alt="Admissions">
        <div class="info-text">
          <h3>Admissions</h3>
          <p>View program and admission requirements for international students.</p>
        </div>
      </div>

      <div class="info-box" onclick="toggleRaise(this)">
        <img src="images/babita.avif" alt="Career Services">
        <div class="info-text">
          <h3>Career Services</h3>
          <p>Explore how our Career Services can assist you in your professional and personal development.</p>
        </div>
      </div>

      <div class="info-box" onclick="toggleRaise(this)">
        <img src="images/jethafather.jpg" alt="Scholarships">
        <div class="info-text">
          <h3>Scholarships</h3>
          <p>To make tuition more accessible, various scholarships are available for international students.</p>
        </div>
      </div>
    </div>

    <div class="dot-indicator"></div>




    <!-- Parallax Section -->
    <div class="parallax-section">
      <div class="content">
        <p>Undergraduate Diplomas and Graduate Certificate in areas related to</p>
        <p>Business, Hospitality, Human Resources, and Computer Programming.</p>
        <a href="#" class="cta-button">View Niagara College - Toronto Programs</a>
      </div>
    </div>





    <!-- Student Video Section -->
    <section class="students-section">
      <h2>Hear from our students</h2>
      <div class="student-container" id="studentContainer">
        <div class="student-box" onclick="playVideo('https://www.youtube.com/embed/VIDEO_ID1')">
          <img src="images/aman.jpg" alt="Barbara Obianju">
          <div class="play-icon">&#9654;</div>
          <p><strong>Meet Amanpreet Singh</strong></p>
          <p>Human Resources Management Student</p>
        </div>

        <div class="student-box" onclick="playVideo('https://www.youtube.com/embed/VIDEO_ID2')">
          <img src="images/love.jpg" alt="Shaira Jona Librea">
          <div class="play-icon">&#9654;</div>
          <p><strong>Meet Lovepreet Singh Khosa</strong></p>
          <p>Hospitality & Tourism Management Student</p>
        </div>

        <div class="student-box" onclick="playVideo('https://www.youtube.com/embed/VIDEO_ID3')">
          <img src="images/jyoti.jpg" alt="Faria Afrin">
          <div class="play-icon">&#9654;</div>
          <p><strong>Meet Jyoti Bakshi</strong></p>
          <p>Business Student</p>
        </div>
        <div class="student-box" onclick="playVideo('https://www.youtube.com/embed/VIDEO_ID1')">
          <img src="images/navpreet.jpg" alt="Barbara Obianju">
          <div class="play-icon">&#9654;</div>
          <p><strong>Meet Navpreet Kaur</strong></p>
          <p>Human Resources Management Student</p>
        </div>

        <div class="student-box" onclick="playVideo('https://www.youtube.com/embed/VIDEO_ID2')">
          <img src="images/sidh.jpg" alt="Shaira Jona Librea">
          <div class="play-icon">&#9654;</div>
          <p><strong>Meet sidharatha</strong></p>
          <p>Hospitality & Tourism Management Student</p>
        </div>

        <div class="student-box" onclick="playVideo('https://www.youtube.com/embed/VIDEO_ID3')">
          <img src="images/dinal.jpg" alt="Faria Afrin">
          <div class="play-icon">&#9654;</div>
          <p><strong>Meet Dinal</strong></p>
          <p>Business Student</p>
        </div>
      </div>

      <button class="view-more" onclick="loadMoreStudents()">View more</button>
    </section>

    <!-- Video Popup -->
    <div id="videoPopup" class="video-popup" onclick="closeVideo(event)">
      <div class="popup-content">
        <span class="close-btn" onclick="closeVideo()">&times;</span>
        <iframe id="videoFrame" width="560" height="315" frameborder="0" allowfullscreen></iframe>
      </div>
    </div>



    <!-- Video Popup -->
    <div id="videoPopup" class="video-popup">
      <div class="popup-content">
        <span class="close-btn" onclick="closeVideo()">&times;</span>
        <iframe id="videoFrame" width="560" height="315" frameborder="0" allowfullscreen></iframe>
      </div>
    </div>

    <section class="contact-section">
      <div class="contact-container">
        <!-- Left: Contact Form -->
        <div class="contact-form">
          <h2>Get In Touch</h2>
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
          <h2>Directions to our campus</h2>
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