
<?php
//session_start();
if (isset($_SESSION['success_message'])) {
    echo "<div class='alert alert-success'>" . $_SESSION['success_message'] . "</div>";
    unset($_SESSION['success_message']);
}
if (isset($_SESSION['error_message'])) {
    echo "<div class='alert alert-danger'>" . $_SESSION['error_message'] . "</div>";
    unset($_SESSION['error_message']);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Appointment Status | Visitors Management System</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<style>
		.jumbotron {
			background-color: #fff;
			padding: 80px 25px;
			margin-bottom: 0;
			text-align: center;
			color: #5c5c5c;
			font-family: Arial, sans-serif;
		}	h1.display--1 {
		font-size: 3rem;
		font-weight: bold;
		margin-bottom: 0;
		line-height: 1.2;
		text-transform: uppercase;
	}

	p.display-3 {
		font-size: 2rem;
		font-weight: bold;
		margin-bottom: 0;
		line-height: 1.2;
		color: #007bff;
	}

	hr.my-4 {
		border-color: #007bff;
		width: 10%;
		margin: 30px auto;
	}

	p {
		font-size: 1.25rem;
		margin-bottom: 1rem;
		font-weight: 300;
		line-height: 1.2;
	}
	table {
  width: 100%;
  margin: 20px 0;
  border-collapse: collapse;
  border: 1px solid #ddd;
  font-size: 16px;
}

table th, table td {
  text-align: left;
  padding: 12px;
}

table th {
  background-color: #363232;
  color: #fff;
}

table tr:nth-child(even) {
  background-color: #f2f2f2;
}

table tr:hover {
  background-color: #ddd;
}

</style>
</head>
<body>
	<?php include('includenew/header.php'); ?>
	<div class="jumbotron jumbotron-fluid">
		<div class="container">
			<h1 class="display-4">Appointment Status</h1>
			<hr class="my-4">
			<div class="row">
				<div class="col-md-12">
						<tbody>
<?php
// Get the visitor's email from the URL parameter
$email = $_SESSION['visitor_Email'];

// Connect to the database
$conn = mysqli_connect("localhost","root", "", "aadil");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Query to fetch appointment details
$sql = "SELECT a.*, u.dept_users as DeptUserName FROM appointments_form_data a 
        JOIN dept_users u ON a.DeptUser = u.ID
        WHERE a.Email = '$email'";

// Execute the query
$result = mysqli_query($conn, $sql);

// Check if any results were found
if (mysqli_num_rows($result) > 0) {
    // Output the appointment details in a table
echo "<div class='container'>";
echo "<table class='table table-bordered'>";
echo "<thead><tr><th>Appointment ID</th><th>Full Name</th><th>Email</th><th>Date of Visit</th><th>Department</th><th>Time Slot</th><th>Whom to Meet</th><th>Reason to Meet</th><th>Status</th><th>Action</th></tr></thead>";
echo "<tbody>";
while($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row["AppointmentFormID"] . "</td>";
    echo "<td>" . $row["FullName"] . "</td>";
    echo "<td>" . $row["Email"] . "</td>";
    echo "<td>" . $row["DateOfVisit"] . "</td>";
    echo "<td>" . $row["Department"] . "</td>";
    echo "<td>" . $row["TimeSlot"] . "</td>";
    echo "<td>" . $row["DeptUserName"] . "</td>";
    echo "<td>" . $row["ReasonToMeet"] . "</td>";
    echo "<td>" . $row["Status"] . "</td>";
    echo "<td>";
        echo "<form method='POST' action='deleteAppointment.php'>";
    echo "<input type='hidden' name='appointmentId' value='" . $row["AppointmentFormID"] . "'>";
    echo "<button type='button' class='btn btn-danger' onclick='confirmDelete(this)'>Delete</button>";
    echo "</form>";echo "</td>";
    echo "</tr>";
}
echo "</tbody></table></div>";
} else {
    // No appointment found for the provided email
    echo "<div class='container'><p>No appointment found for the provided email.</p></div>";
}

// Close the database connection
mysqli_close($conn);
?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<?php include('includenew/footer.php'); ?>
	<!-- Bootstrap JS -->
<script>
function confirmDelete(button) {
    if (confirm("Are you sure you want to cancel this appointment?")) {
        button.closest('form').submit();
    }
}
</script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>