<?php
// Connect to the database
$conn = mysqli_connect("localhost:3307", "php@2023", "php", "camp-vis");

// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['email'])) {
    $email = $_POST['email'];

    // Prepare a SQL statement to check if the email exists
    $stmt = $conn->prepare("SELECT Email FROM visitors WHERE Email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo 'exists';
    } else {
        echo 'not_exists';
    }

    $stmt->close();
}

// Close the database connection
mysqli_close($conn);
?>
