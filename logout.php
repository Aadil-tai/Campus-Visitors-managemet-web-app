<?php
session_start();

// Check if the user is logged in to the admin panel
if (isset($_SESSION['visitors']) && $_SESSION['visitors'] === true) {
  // Unset the admin session variable
  unset($_SESSION['visitors']);
}

// Redirect to login page
header("location: login.php");
exit;
?>
