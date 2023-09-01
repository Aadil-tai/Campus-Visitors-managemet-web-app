<?php
// Establish a database connection
$host = 'localhost';
$dbname = 'aadil';
$username = 'root';
$password = '';

$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

// Insert the form data into the Visitorsfeedback table
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$sql = "INSERT INTO Visitorsfeedback (name, email, subject, message) VALUES (:name, :email, :subject, :message)";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':name', $name);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':subject', $subject);
$stmt->bindParam(':message', $message);
$stmt->execute();

// Redirect the user to a thank you page
header('Location: thank_you.php');
exit;
?>
