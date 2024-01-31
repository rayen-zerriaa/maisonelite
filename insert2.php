<?php
$conn = mysqli_connect("localhost", "root", "", "website");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$id = $_POST["id"];
$nom = $_POST["name"];
$prenom = $_POST["prenom"];
$d1 = $_POST["d1"];
$d2 = $_POST["d2"];
$gmail = $_POST["email"];
$telephone = $_POST["telephone"];
$masion = $_POST["maison"];

$sql = "INSERT INTO reservation VALUES ('$id','$nom', '$prenom', '$d1', '$d2','$gmail','$telephone','$masion')";
if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Insertion avec succee');</script>";
    echo "<script>window.location.href = 'contact.html';</script>";
} else {
    echo "<script>alert('Error: " . $conn->error . "');</script>";
    echo "<script>window.location.href = 'contact.html';</script>";
}

mysqli_close($conn);
?>
