<?php
require 'sessions.php';
require 'config.php'; //added for database


// If already logged in, go straight to index
if($logged_in) {
    header('Location: index.php');
    exit();
}

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

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';
$role = $_POST['role'] ?? '';
$selected_country = $_POST['country'] ?? 'Philippines';

$errors = [];



// Check if form is submitted
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    // Required fields
    if (empty($username)) {
        $errors[] = "Username is required.";
    }
    
    if (empty($password)) {
        $errors[] = "Password is required.";
    }
    
    if (empty($role)) {
        $errors[] = "Please select a role.";
    }
    
    // Length check
    if (!empty($password) && mb_strlen($password) < 6) {
        $errors[] = "Password must be at least 6 characters long.";
    }
    
    // Format check (username: letters & numbers only)
    if (!empty($username) && !preg_match("/^[a-zA-Z0-9_]+$/", $username)) {
        $errors[] = "Username must contain only letters, numbers, and underscores.";
    }
    
    // Check credentials if no validation errors
    $stmt = $conn->prepare("SELECT id, username, password, role FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {

        $user = $result->fetch_assoc();

        if ($password === $user['password']) {  // use this to remove the verify (testing the account)

        //if (password_verify($password, $user['password'])) { //this one has hash so that the password is encrypted or hidden

            if ($role === $user['role']) {

                login(); // your existing session function
                header('Location: index.php');
                exit();

            } else {
                $errors[] = "Selected role does not match your account role.";
            }

        } else {
            $errors[] = "Invalid username or password.";
        }

    } else {
        $errors[] = "Invalid username or password.";
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GYM PRO Login</title>
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
        input, select, button {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            box-sizing: border-box;
        }
        .error {
            color: red;
            margin-bottom: 10px;
        }
        h2 {
            margin-top: 0;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>GYMPRO Member Login</h2>
    
    <?php if (!empty($errors)): ?>
        <div class="error">
            <ul>
                <?php foreach ($errors as $error): ?>
                    <li><?= htmlspecialchars($error) ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>
    
    <form method="POST" action="">
        <label>Username</label>
        <input type="text" name="username" value="<?= htmlspecialchars($username) ?>">
        
        <label>Password</label>
        <input type="password" name="password" value="<?= htmlspecialchars($password) ?>">
        
        <label>Login As</label>
        <select name="role">
            <option value="">-- Select Role --</option>
            <option value="Administrator" <?= $role === "Administrator" ? "selected" : "" ?>>Administrator</option>
            <option value="Standard User" <?= $role === "Standard User" ? "selected" : "" ?>>Standard User</option>
            <option value="Premium User" <?= $role === "Premium User" ? "selected" : "" ?>>Premium User</option>
        </select>
        
        <label style="display:block; margin-top:10px;">Select Country Time</label>
        <select name="country">
            <?php foreach ($timezones as $name => $tz): ?>
                <option value="<?= $name ?>" <?= $selected_country === $name ? "selected" : "" ?>>
                    <?= $name ?>
                </option>
            <?php endforeach; ?>
        </select>
        
        <button type="submit">Login</button>
        <div id="timezoneDisplay"></div> 

    </form>
</div>

</body>
<script>
  const timezones = <?= json_encode($timezones); ?>;
</script>
<script src="js/main.js"></script>
</html>