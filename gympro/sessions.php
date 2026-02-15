<?php
session_start();

$logged_in = false;

if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    $logged_in = true;
}

function login() {
    $_SESSION['logged_in'] = true;
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['role'] = $_POST['role'];
    $_SESSION['country'] = $_POST['country'];
}

function logout() {
    $_SESSION = array();
    session_destroy();
}
?>