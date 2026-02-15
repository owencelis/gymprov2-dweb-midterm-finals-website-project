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
  <title>GYMPRO - Calculator </title>
  <link rel="stylesheet" href="assets/css/styles.css">
  <link href="https://fonts.googleapis.com/css2?family=Anton&family=Source+Sans+Pro&display=swap" rel="stylesheet">
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
        <li><a href="index.php">Home</a></li>
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
        <li><a href="calculator.php" class="active">Calculators</a></li>
      </ul>
    </nav>
  </header>

  <main class="calculator-page">
    <!-- Title -->
    <section class="calc-header">
      <h1>BMI Calculator</h1>
      <p>Calculate your Body Mass Index and track your fitness journey</p>
    </section>

    <!-- BMI Form Card -->
    <section class="calc-card">
      <div class="card-icon">📊</div>
      <h2>Enter Your Details</h2>
      <form id="bmiForm">
        <div class="form-group">
          <label for="height">Height</label>
          <input type="number" id="height" placeholder="170" required>
          <span class="unit">cm</span>
        </div>
        <div class="form-group">
          <label for="weight">Weight</label>
          <input type="number" id="weight" placeholder="70" required>
          <span class="unit">kg</span>
        </div>
        <button type="submit" class="btn">Calculate BMI</button>
      </form>
      <p id="bmiResult"></p>
    </section>

    <section class="calc-header">
      <h1>1 Rep Max Calculator</h1>
      <p>Estimate your maximum strength based on the weight you lift and the number of reps.</p>
    </section>

    <!-- 1RM Percentage Calculator -->
    <section class="calc-card">
    <div class="card-icon">🏋️</div>
    <h2>1RM Percentage Table</h2>
    <form id="oneRMForm">
        <div class="form-group">
        <label for="lift">Your Lift (PR)</label>
        <input type="number" id="lift" placeholder="Enter PR" required>
        </div>
        <div class="form-group">
        <label for="metric">Metric</label>
        <select id="metric" required>
            <option value="kg">Kg</option>
            <option value="lbs">Lbs</option>
        </select>
        </div>
        <button type="submit" class="btn">Generate Table</button>
    </form>
    <div id="oneRMResult"></div>
    </section>

    <!-- Daily Motivation -->
    <section class="motivation-card">
      <div class="card-icon green">🔥</div>
      <h2>Daily Motivation</h2>
      <p>"Stay consistent! Aim for 3–4 workouts per week and remember that progress takes time. Every step counts towards your fitness goals."</p>
      <div class="tags">
        <span class="tag strength">Strength Training</span>
        <span class="tag cardio">Cardio Health</span>
        <span class="tag nutrition">Nutrition</span>
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
