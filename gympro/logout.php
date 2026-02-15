<?php
session_start();
session_unset();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GYM PRO Logout</title>
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
        a {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 10px;
            background: #333;
            color: white;
            text-decoration: none;
            border-radius: 4px;
        }
        a:hover {
            background: #555;
        }
        h2 {
            margin-top: 0;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Logged Out</h2>
    
    <div class="success">
        <p>You have been successfully logged out.</p>
    </div>
    
    <p>Thank you for using GYMPRO!</p>
    
    <a href="login.php">Login Again</a>
</div>

</body>
</html>