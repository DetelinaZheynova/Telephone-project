<?php
// Връзка с базата данни
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phone_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
