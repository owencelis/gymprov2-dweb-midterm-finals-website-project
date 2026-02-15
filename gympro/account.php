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

// Define the country-to-timezone mapping
$timezones = [
    "Philippines" => "Asia/Manila",
    "USA (New York)" => "America/New_York",
    "Japan" => "Asia/Tokyo",
    "Canada (Toronto)" => "America/Toronto",
    "Australia (Sydney)" => "Australia/Sydney",
    "South Korea" => "Asia/Seoul",
    "Singapore" => "Asia/Singapore"
];

// Set timezone and get current time
date_default_timezone_set($timezones[$selected_country]);
$current_time = date('l, F j, Y | h:i:s A');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GYM PRO Account</title>
    <style>
        body {
            font-family: Poppins, sans-serif;
            background: #808080;
            padding: 2rem;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .container {
            width: 100%;
            max-width: 400px;
            margin: auto;
            background: #FFA500;
            padding: 2rem;
            border-radius: 8px;
            box-sizing: border-box;
        }
        .success {
            color: green;
            margin-bottom: 10px;
        }
        button {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            box-sizing: border-box;
            background: #333;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background: #555;
        }
        .footer-block {
            width: 100%;
            max-width: 400px;
            background: #FFA500;
            margin-top: 1rem;
            padding: 1rem;
            border-radius: 8px;
            text-align: center;
            box-sizing: border-box;
            font-weight: bold;
        }
        h2 {
            margin-top: 0;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>GYMPRO Account Page</h2>
    
    <div class="success">
        <p>Login Successful!</p>
        <p>
            Welcome, <strong><?= htmlspecialchars($username) ?></strong><br>
            Role: <?= htmlspecialchars($role) ?>
        </p>
    </div>
    
    <p>You are successfully logged in to your account.</p>
    
    <form action="logout.php" method="POST">
        <button type="submit">Logout</button>
    </form>
</div>

<div class="footer-block">
    <p>Country: <?= htmlspecialchars($selected_country) ?></p>
    <p>Date & Time: <?= $current_time ?></p>
</div>

</body>
</html>