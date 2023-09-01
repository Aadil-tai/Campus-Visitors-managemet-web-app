<?php

// Connect to database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aadil";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get department and working hours from query parameters
$department = $_GET["department"];
$working_hours = $_GET["working_hours"];

// Construct query to fetch department users
$sql = "SELECT * FROM dept_users WHERE department = '$department' AND working_hours_id = '$working_hours'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // Build JSON array of department users
    $department_users = array();
    while($row = mysqli_fetch_assoc($result)) {
        $user = array(
            'id' => $row['id'],
            'dept_users' => $row['dept_users']
        );
        array_push($department_users, $user);
    }
    echo json_encode($department_users);
} else {
    echo "No department users found";
}

mysqli_close($conn);

?>
