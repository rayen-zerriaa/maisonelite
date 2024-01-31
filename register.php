<?php 

// Connect to the database 
$mysqli = mysqli_connect("localhost", "root", "", "website");

if ($mysqli->connect_error) { die("Connection failed: " . $mysqli->connect_error); }  
$stmt = $mysqli->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)"); $stmt->bind_param("sss", $username, $email, $password); 
$username = $_POST['username']; $email = $_POST['email']; $password = $_POST['password']; 
$password = password_hash($password, PASSWORD_DEFAULT); 
if ($stmt->execute()) { echo "New account created successfully!"; } else { echo "Error: " . $stmt->error; } 
$stmt->close(); $mysqli->close(); 
?>
