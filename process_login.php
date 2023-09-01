<?php
// Start the session
session_start();

// Connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'aadil');

// Check if the connection was successful
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Get the email and password from the form submission
$email = $_POST['email'];
$password = $_POST['password'];

// Prepare the SQL query to retrieve the visitor record with the provided email and password
$sql = "SELECT * FROM visitors WHERE Email = '$email' AND Password = '$password'";

// Execute the query and get the result set
$result = mysqli_query($conn, $sql);

// Check if a record was found
if (mysqli_num_rows($result) > 0) {
  // Record found, set session variables and redirect to home page
  $row = mysqli_fetch_assoc($result);
  $_SESSION['visitors']= true;
  $_SESSION['visitor_id'] = $row['VisitorID'];
    $_SESSION['visitor_Email'] = $row['Email'];

  $_SESSION['visitor_name'] = $row['Name'];
  header("Location: indexnew.php");
} else {
  // Record not found, redirect back to login page with error message
  $_SESSION['error_message'] = "Invalid email or password";
  header("Location: login.php");
}

// Close the database connection
mysqli_close($conn);
?>
