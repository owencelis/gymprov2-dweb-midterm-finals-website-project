<?php
$conn = new mysqli("localhost", "root", "", "gympro");

if ($conn->connect_error) {
    die("Database connection failed.");
}
?>
