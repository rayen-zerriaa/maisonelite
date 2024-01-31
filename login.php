<?php  

// Connect to the database 
$mysqli = $mysqli = mysqli_connect("localhost", "root", "", "website");; 
if ($mysqli->connect_error) { die("Connection failed: " . $mysqli->connect_error); } 
$stmt = $mysqli->prepare("SELECT id, password FROM users WHERE username = ?"); $stmt->bind_param("s", $username); 
$username = $_POST['username']; $password = $_POST['password']; 
$stmt->execute(); $stmt->store_result(); 

// Check if the user exists 
if ($stmt->num_rows > 0) { 

// Bind the result to variables 
$stmt->bind_result($id, $hashed_password); 

// Fetch the result 
$stmt->fetch(); 
if (password_verify($password, $hashed_password)) { 

// Set the session variables 
$_SESSION['loggedin'] = true; $_SESSION['id'] = $id; $_SESSION['username'] = $username; 

// Redirect to the user's dashboard 
header("Location: user.php"); exit; } else { echo "Incorrect password!"; } } else { echo "User not found!"; } 

// Close the connection 
$stmt->close(); $mysqli->close();
?>