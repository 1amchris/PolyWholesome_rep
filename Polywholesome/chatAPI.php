<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = $_POST["sql"];
$result = $conn->query($sql);

header('Content-Type: application/json');
echo(json_encode($result));
?>
