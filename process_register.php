<?php
// Start the session
session_start();

// Connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'aadil');

// Check if the connection was successful
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Get the data from the form submission
$name = $_POST['name'];
$email = $_POST['email'];
$phoneNumber = $_POST['phoneNumber'];
$password = $_POST['password'];

// Prepare the SQL query to check if the Email is already registered
$sql = "SELECT * FROM visitors WHERE Email = '$email'";

// Execute the query and get the result set
$result = mysqli_query($conn, $sql);

// Check if a record was found
if (mysqli_num_rows($result) > 0) {
  // Record found, redirect back to register page with error message
  $_SESSION['error_message'] = "This Email is already registered";
  header("Location: register.php");
} else {
  // Record not found, insert the new user data into the database
  $sql = "INSERT INTO visitors (Name, Email, PhoneNumber, Password) VALUES ('$name', '$email', '$phoneNumber', '$password')";
  if (mysqli_query($conn, $sql)) {
    // User registered successfully, set session variables and redirect to home page
    $_SESSION['user_id'] = mysqli_insert_id($conn);
    $_SESSION['user_name'] = $name;
    header("Location: login.php");
  } else {
    // Error inserting user data into database, redirect back to register page with error message
    $_SESSION['error_message'] = "Error registering user";
    header("Location: register.php");
  }
}

// Close the database connection
mysqli_close($conn);
?>
