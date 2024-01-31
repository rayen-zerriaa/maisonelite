<?php
$conn = mysqli_connect("localhost", "root", "", "website");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$email = $_POST["email"];
$objet = $_POST["subject"];
$nom = $_POST["name"];
$message = $_POST["message"];

$sql = "INSERT INTO client VALUES ('$nom', '$email', '$objet', '$message')";
if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Insertion avec succee');</script>";
    echo "<script>window.location.href = 'index.html';</script>";
} else {
    echo "<script>alert('Error: " . $conn->error . "');</script>";
    echo "<script>window.location.href = 'index.html';</script>";
}

mysqli_close($conn);
?>
