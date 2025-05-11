<?php
$conn = new mysqli("localhost", "root", "", "ridesharing");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>