<?php
$servername = "mysql-main-shuflduf.k.aivencloud.com";
$port = 12102;
$username = "avnadmin";
$password = "AVNS_zjwLxP-AS9O5chX3093";
$database = "defaultdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $database, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Enforce charset to avoid bugs in encoding
$conn->set_charset("utf8");

?>
