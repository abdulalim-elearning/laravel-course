<?php
// Database Connectivity (using MySQLi):
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "mydb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Name: " . $row["name"] . "<br>";
    }
} else {
    echo "No results found.";
}

$conn->close();


?>