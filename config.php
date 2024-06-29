<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my_mco";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . htmlspecialchars($conn->connect_error));
}
?>