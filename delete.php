<?php
$conn = mysqli_connect("localhost", "root", "", "website");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $reservationName = $_POST["reservationName"];

    // Perform the deletion
    $sql = "DELETE FROM reservation WHERE name = '$reservationName'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        // Redirect back to the index page after successful deletion
        header("Location: user.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

// Close connection
mysqli_close($conn);
?>
