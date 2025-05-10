<?php
$servername = $_ENV["SERVERNAME"];
$port = $_ENV["PORT"];
$username = $_ENV["USERNAME"];
$password = $_ENV["PASSWORD"];
$database = $_ENV["DATABASE"];

// Create connection
$conn = new mysqli($servername, $username, $password, $database, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Enforce charset to avoid bugs in encoding
$conn->set_charset("utf8");

?>
