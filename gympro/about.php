<?php
require 'sessions.php';

// If not logged in, redirect to login
if(!$logged_in) {
    header('Location: login.php');
    exit();
}

// Get user data from session
$username = isset($_SESSION['username']) ? $_SESSION['username'] : 'Unknown';
$role = isset($_SESSION['role']) ? $_SESSION['role'] : 'Unknown';
$selected_country = isset($_SESSION['country']) ? $_SESSION['country'] : 'Philippines';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GYMPRO - About</title>
  <link rel="stylesheet" href="assets/css/styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Anton&family=Poppins&family=Source+Sans+Pro&display=swap" rel="stylesheet">
</head>
<body>
 <!-- Header / Navbar -->
  <header>
    <nav class="navbar">
      <div class="nav-logo">
        <img src="assets/img/logo.png" alt="GYMPRO Logo" height="80">
      </div>

      <!-- Burger Menu -->
      <div class="burger" id="burger">☰</div>

      <ul class="nav-links" id="nav-links">
        <li><a href="index.php" >Home</a></li>
        <li><a href="about.php" class="active">About</a></li>
        <li class="dropdown">
          <a href="formCheck.php">Form Check ▾</a>
          <ul class="dropdown-content">
            <li><a href="formCheck.php#chest">Chest</a></li>
            <li><a href="formCheck.php#back">Back</a></li>
            <li><a href="formCheck.php#arms">Arms</a></li>
            <li><a href="formCheck.php#legs">Legs</a></li>
          </ul>
        </li>
        <li><a href="calculator.php">Calculators</a></li>
      </ul>
    </nav>
  </header>



  <!-- Mission Section -->
  <section class="mission">
    <div class="mission-container">
      <div class="mission-img">
        <img src="assets/img/gym-about.jpg" alt="People training in the gym">
      </div>
      <div class="mission-text">
        <h2>Our Purpose & Mission</h2>
        <p>
          At GYMPRO, we believe that proper exercise form is the foundation of every successful
          fitness journey. Our mission is to provide you with the tools, knowledge, and guidance
          needed to perform exercises correctly and safely.
        </p>
        <p>
          Whether you’re a beginner taking your first steps into fitness or an experienced athlete 
          looking to refine your technique, our form-checking tools and accurate calculators are 
          designed to help you achieve better results while minimizing the risk of injury.
        </p>
        <a href="formCheck.php" class="btn">Start Your Journey</a>
      </div>
    </div>
  </section>

  <!-- Why Choose Us Section -->
  <section class="why-choose">
    <h2>Why Choose GYMPRO?</h2>
    <p>Three pillars that make us your trusted fitness companion</p>

    <div class="features">
      <div class="feature-card">
        <i class="fa-solid fa-heart"></i>
        <h3>Correct Form</h3>
        <p>Advanced form analysis ensures you perform exercises with proper technique, reducing injury risk and maximizing effectiveness.</p>
      </div>
      <div class="feature-card">
        <i class="fa-solid fa-chart-line"></i>
        <h3>Accurate Tools</h3>
        <p>Precision-built calculators for BMI, calorie needs, and workout planning give you data-driven insights for your goals.</p>
      </div>
      <div class="feature-card">
        <i class="fa-solid fa-trophy"></i>
        <h3>Better Results</h3>
        <p>Achieve your goals faster with our comprehensive approach to form correction and progress tracking.</p>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <div class="footer-container">
      <div class="footer-logo">
        <img src="assets/img/logo2.png" alt="GYMPRO Logo">
        <p>Your ultimate fitness companion for achieving perfect form and maximum results.</p>
      </div>
      <div class="footer-info">
        <h4>Contact Info</h4>
        <p>📍 123 Fitness Street, Gym City, GC 12345</p>
        <p>📞 1 (555) 123-4567</p>
        <p>📧 info@gympro.com</p>
      </div>
      <div class="footer-socials">
        <h4>Follow Us</h4>
        <a href="#">📸 Instagram</a><br>
        <a href="#">▶️ YouTube</a><br>
        <a href="#">🎵 TikTok</a><br>
        <a href="#">📘 Facebook</a>
      </div>
    </div>
    <p class="footer-bottom">© 2025 GYM PRO. All rights reserved.</p>
  </footer>

  <!-- JS for Burger Menu -->
  <script src="assets/js/main.js"></script>
</body>
</html>
