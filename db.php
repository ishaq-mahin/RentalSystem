<?php
// Look in your InfinityFree Control Panel (under MySQL Databases) for the exact Hostname
$host = "sqlxxx.infinityfree.com"; 

// This is the username from your error message earlier!
$user = "if0_41696255"; 

// This is the hidden vPanel/Hosting password you used earlier
$pass = "your_hidden_vpanel_password"; 

// This is the exact database name you clicked on in phpMyAdmin
$dbname = "if0_41696255_rental"; 

$conn = mysqli_connect($host, $user, $pass, $dbname);

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>