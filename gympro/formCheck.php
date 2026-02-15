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
  <title>GYMPRO - Form Check</title>
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
        <li><a href="index.php" >Home</a></li>
        <li><a href="about.php">About</a></li>
        <li class="dropdown">
          <a href="formCheck.php" class="active">Form Check ▾</a>
          <ul class="dropdown-content">
            <li><a href="#chest">Chest</a></li>
            <li><a href="#back">Back</a></li>
            <li><a href="#arms">Arms</a></li>
            <li><a href="#legs">Legs</a></li>
          </ul>
        </li>
        <li><a href="calculator.php">Calculators</a></li>
      </ul>
    </nav>
  </header>


<main class="form-check">
  <h1>Form Check</h1>

  <!-- Chest -->
  <section id="chest">
    <h2>Chest Exercises</h2>
    <div class="exercise">
      <img src="assets/img/gif/chest.gif" alt="Bench Press">
      <p class="exercise-info">Bench Press – Keep your back flat, lower the bar to mid-chest, and press up explosively.</p>
    </div>
    <div class="exercise">
      <img src="assets/img/gif/pushup.gif" alt="Push Up">
      <p class="exercise-info">Push Up – Maintain a straight line from head to heels, lower chest to the floor, then push back up.</p>
    </div>
    <div class="exercise">
      <img src="assets/img/gif/pecfly.gif" alt="Pec Fly">
      <p class="exercise-info">Pec Fly – Keep a slight bend in your elbows, open arms wide, then squeeze chest as you bring them together.</p>
    </div>
  </section>

  <!-- Back -->
  <section id="back">
    <h2>Back Exercises</h2>
    <div class="exercise">
      <img src="assets/img/gif/deadlift.webp" alt="Deadlift">
      <p class="exercise-info">Deadlift – Keep your back straight, hinge at hips, lift bar close to body, and stand tall without leaning back.</p>
    </div>
    <div class="exercise">
      <img src="assets/img/gif/rows.gif" alt="Row">
      <p class="exercise-info">Rows – Pull the weight toward your torso, squeeze shoulder blades, and keep back straight.</p>
    </div>
    <div class="exercise">
      <img src="assets/img/gif/pullup.gif" alt="Pull Up">
      <p class="exercise-info">Pull Up – Grip the bar slightly wider than shoulders, pull chin above the bar, then lower slowly.</p>
    </div>
  </section>

  <!-- Arms -->
  <section id="arms">
    <h2>Arm Exercises</h2>
    <div class="exercise">
      <img src="assets/img/gif/bicep.gif" alt="Biceps Curl">
      <p class="exercise-info">Biceps Curl – Keep elbows tucked, curl weight up smoothly, and lower with control.</p>
    </div>
    <div class="exercise">
      <img src="assets/img/gif/tricep.gif" alt="Tricep Overhead">
      <p class="exercise-info">Tricep One Arm Overhead – Keep upper arm stable, extend fully overhead, and control the descent.</p>
    </div>
    <div class="exercise">
      <img src="assets/img/gif/shoulderpress.gif" alt="Shoulder Press">
      <p class="exercise-info">Shoulder Press – Keep core tight, press weights straight overhead, and avoid arching your back.</p>
    </div>
  </section>

  <!-- Legs -->
  <section id="legs">
    <h2>Leg Exercises</h2>
    <div class="exercise">
      <img src="assets/img/gif/squat.gif" alt="Squat">
      <p class="exercise-info">Squat – Keep chest up, knees tracking over toes, and squat until thighs are parallel to the ground.</p>
    </div>
    <div class="exercise">
      <img src="assets/img/gif/lunge.gif" alt="Lunge">
      <p class="exercise-info">Lunge – Step forward, lower back knee close to the floor, and keep front knee above ankle.</p>
    </div>
    <div class="exercise">
      <img src="assets/img/gif/legpress.gif" alt="Leg Press">
      <p class="exercise-info">Leg Press – Place feet shoulder-width apart, lower platform under control, and press without locking knees.</p>
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
