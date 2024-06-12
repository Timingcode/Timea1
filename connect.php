<?php
$servername = "localhost";
$username = "North";
$password = "wind";
$dbname = "northwindmysql";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>