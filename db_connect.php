<?php
$host = 'localhost';
$username = 'root';
$password = ''; // Leave empty if no MySQL password; update if set
$database = 'mosque_db';
$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>