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

<!-- OPTION 5: Navbar with Logout -->
<nav style="background: #FFA500; padding: 1rem; display: flex; justify-content: space-between; align-items: center;">
    <div>
        <span>Welcome, <?= htmlspecialchars($username) ?> (<?= htmlspecialchars($role) ?>)</span>
    </div>
    <div>
        <a href="logout.php" style="background: #333; color: white; padding: 8px 16px; border-radius: 4px; text-decoration: none;">Logout</a>
    </div>
</nav>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GYMPRO - Home</title>
  <link rel="stylesheet" href="assets/css/styles.css">
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
        <li><a href="index.php" class="active">Home</a></li>
        <li><a href="about.php">About</a></li>
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

  <!-- Main Content -->
  <main class="home">
    <!-- Hero Section -->
    <section class="hero">
      <div class="hero-overlay">
        <h1>Transform Your <span class="highlight-orange">Body</span>, <br> Transform Your <span class="highlight-yellow">Life</span></h1>
        <p>Join thousands who’ve achieved their fitness goals with our expert guidance, proven techniques, and cutting-edge form analysis.</p>
        <a href="formCheck.php" class="btn">Get Started Today</a>
      </div>
    </section>

    <!-- Form Check Cards -->
    <section class="form-cards">
      <h2>Perfect Your Form</h2>
      <p>Choose your muscle group and get expert form analysis</p>
      <div class="card-grid">
        <div class="card">
          <div class="icon"></div>
          <h3>Chest</h3>
          <p>Perfect your bench press, push-ups, and chest flies with our detailed guides.</p>
          <a href="formCheck.php#chest">Learn More →</a>
        </div>
        <div class="card">
          <div class="icon"></div>
          <h3>Back</h3>
          <p>Master deadlifts, rows, and pull-ups with proper techniques and safety tips.</p>
          <a href="formCheck.php#back">Learn More →</a>
        </div>
        <div class="card">
          <div class="icon"></div>
          <h3>Arms</h3>
          <p>Build impressive biceps and triceps with our comprehensive workout guides.</p>
          <a href="formCheck.php#arms">Learn More →</a>
        </div>
        <div class="card">
          <div class="icon"></div>
          <h3>Legs</h3>
          <p>Strengthen your foundation with squats, lunges, and leg press techniques.</p>
          <a href="formCheck.php#legs">Learn More →</a>
        </div>
      </div>
    </section>
  </main>

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
