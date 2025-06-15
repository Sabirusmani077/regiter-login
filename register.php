<?php
$conn = new mysqli("localhost", "root", "", "login_db");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$username = $_POST['username'];
$password = $_POST['password'];
$sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
if ($conn->query($sql) === TRUE) {
    echo "Registration successful. <a href='index.html'>Login</a>";
} else {
    echo "Error: " . $conn->error;
}
?>