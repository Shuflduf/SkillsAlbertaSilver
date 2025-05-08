<?php
$servername = "192.168.101.58";
$username = "skills";
$password = "Vending1163";
$database = "skills_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Enforce charset to avoid bugs in encoding
$conn->set_charset("utf8");

?>