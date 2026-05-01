<?php
$host = getenv("HOST");
$username = getenv("USERNAME");
$password = getenv("PASSWORD");
$database = getenv("DATABASE");
error_log($database);
// print_r($_ENV);

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$conn->set_charset("utf8");
